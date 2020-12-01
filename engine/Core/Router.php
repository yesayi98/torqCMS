<?php
use Core\Compiller\JsCompiller;
use Core\Compiller\ScssCompiller;
  /**
   * Router for Torq CMS
   */
  final class Router
  {
    private const modules = [
      'backend',
      'frontend',
      'widgets',
    ];
    private $controllerFile;

    public static $_VIEW;

    public static $route;

    public static function start(){
      $request = Request::createFromGlobals();

      //create route
      if ($request->getParam('route')) {
        $url = Container()->CoreUrls()->getUrlByChanged($request->getParam('route'))['params'];
      }else{
        $url = null;
      }

      if (!empty($url)) {
        $params = [];
        parse_str($url, $params);
        $request->setQuery(array_merge($request->getQuery(), $params));
      }

      $route = self::setRouterParams($request->getParam('route'));
      self::$route = $route;
      $routefile = implode(SEPARATOR, $route);
      $controller = self::getController($route);
      $action = $route['action'];


      $controllerClassName = '\\Controllers\\'.ucfirst($route['module']).'\\'.$controller['name'];
      // check ignoreCSRF statemant
      if (isset($controllerClassName::$ignoreCSRF)) {
        $ignoreStatemants = $controllerClassName::$ignoreCSRF;
      }else{
        $ignoreStatemants = [];
      }
      $request->setIgnoreStatemant($ignoreStatemants);
      $request->validateCSRF();
      if ($request->isXHR()) {
        $request->setParam('XHR', true);
      }
      //create View object
      self::$_VIEW = new View($request->getLanguage(), $request->getCurrency(), Connection());

      //create Assign for all
      if ($route['module'] === 'frontend') {
        $assign = new Assign(self::$_VIEW, $request, $routefile);
        $assign->view();
      }elseif ($route['module'] === 'backend') {
        $assign = new BackendAssign(self::$_VIEW, $request, $routefile);
        $assign->view();
      }

      $controller = new $controllerClassName(self::$_VIEW, $request, $routefile);
      // calling pre dispatch actions
      $controller->preDispatch();

      // check if action exist and call that
      if (method_exists($controller, $action)) {
        $controller->{$action}();
      }else{
        trigger_error('Error: Could not call ' . $route['controller'] . '/' . $action . '!');exit;
      }


      $templateDir = DOCUMENT_ROOT.SEPARATOR.'public'.SEPARATOR;
      $smarty = new Smarty;
      $smarty->setTemplateDir($templateDir)
             ->setCompileDir(DOCUMENT_ROOT.'/cache/template_c')
             ->setCacheDir(DOCUMENT_ROOT.'/cache/template')
             ->registerPlugin("function", 'url', 'smarty_function_url')
             ->registerPlugin("function", 'action', 'smarty_function_action')
             ->registerPlugin("function", 'translator', 'smarty_function_translator')
             ->registerPlugin("function", 'split_array ', 'smarty_function_split_array');
      foreach (self::$_VIEW->getAssign() as $key => $value) {
        $smarty->assign($key, $value);
      }
      $smarty->assign('route', $route);
      $smarty->assign('css', self::getCompilledCssFile());
      $smarty->assign('js', self::getCompilledJsFile());
      $route = str_replace('/', SEPARATOR, $controller->route);
      $template = self::getFile($controller->route, $templateDir);
      if (!empty($template)) {
        $smarty->display($template);
      }else{
        self::redirect('error');
      }

      // calling post dispatch actions
      $controller->postDispatch();
    }

    private static function getCompilledCssFile()
    {
      $css = BASE_URL.'/cache/css/'.basename(glob(DOCUMENT_ROOT."/cache/css/*.css")[0]);
      if (empty($css)) {
        ScssCompiller::compileAllFiles(self::$_VIEW->theme);
        return self::getCompilledCssFile();
      }
      return $css;
    }

    private static function getCompilledJsFile()
    {
      $js = BASE_URL.'/cache/js/'.basename(glob(DOCUMENT_ROOT."/cache/js/*.js")[0]);
      if (empty($js)) {
        JsCompiller::compileAllFiles(self::$_VIEW->theme);
        return self::getCompilledJsFile();
      }
      return $js;
    }

    private static function setRouterParams($route){
      if (!empty($url)) {
        $route = $url;
      }

      $routerParams = array_filter(explode('/', $route));
      $response = array(
        'module' => 'frontend',
        'controller' => 'index',
        'action' => 'index',
      );

      if (in_array($routerParams[0], self::modules)) {
        $response['module'] = $routerParams[0];
        array_shift($routerParams);
      }

      if (!empty($routerParams[0])) {
        $response['controller'] = $routerParams[0];
      }

      if (!empty($routerParams[1])) {
        $response['action'] = $routerParams[1];
      }

      if ( $response['module'] === 'frontend' && ($response['controller'] == 'login' || $response['controller'] == 'register')) {
        $action = $response['controller'];
        $response['controller'] = 'account';
      }
      return $response;
    }

    public static function getController($route)
    {
      $controllerBasePath = DOCUMENT_ROOT.'/engine/Controllers/'.ucfirst($route['module']).'/';
      $controllerFileName = ucfirst($route['controller']);
      $controllerClassName = $route['controller'].'Controller';

      $controller['file'] = realpath(self::getFile($controllerFileName, $controllerBasePath));
      $controller['name'] = $controllerClassName;
      if (!$controller['file']) {
        self::redirect('error');
      }

      return $controller;
    }

    public static function getFile($routFile, $basePath = DOCUMENT_ROOT)
    {
      if (is_file($basePath.$routFile.'.php')) {
        $includeFile = $basePath.$routFile.'.php';
      }
      elseif (is_file($basePath.$routFile.'.tpl')) {
        $includeFile = $routFile.'.tpl';
      }
      else{
        $includeFile = false;
      }

      return $includeFile;
    }

    public static function redirect($url, $message = [], $type = "success")
    {
      if (strpos($url, 'http') === false) {
        $url = BASE_URL.'/'.$url;
      }
      if(count($message) != 0){
        $_SESSION['message'][$type] = $message;
      }
      if (!headers_sent()) {
        header('Location: '.$url);
      }else{
        echo "<script>window.location.href='".$url."'</script>";
      }
      die;
    }

    public static function url($routing="")
    {
      return BASE_URL.'/'.$routing;
    }

    public static function getRoute()
    {
      return self::$route;
    }

  }


 ?>
