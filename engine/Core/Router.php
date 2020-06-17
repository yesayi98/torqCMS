<?php

  /**
   * Router for Torq CMS
   */
  final class Router
  {
    private const modules = [
      'admin',
      'backend',
      'frontend',
      'widgets',
    ];
    private $controllerFile;

    public static $_VIEW;

    public static $route;

    public static function start($request){

      if (isset(self::get()['lang']) || isset(self::post()['lang'])) {
        $_SESSION['lang'] = (self::get()['lang'])?(self::get()['lang']):(self::post()['lang']);
      }else{
        if (!$_SESSION['lang']) {
          $_SESSION['lang'] = 1;
        }
      }

      $lang = $_SESSION['lang'];

      if (isset(self::get()['cur'])) {
        $_SESSION['currency'] = self::get()['cur'];
      }else{
        if (!$_SESSION['currency']) {
          $_SESSION['currency'] = 1;
        }
      }

      $cur = $_SESSION['currency'];
      //create route
      $url = Container()->CoreUrls()->getUrlByChanged($request['route'])['params'];
      if (!empty($url)) {
        $request = [];
        parse_str($url, $request);
        $_GET = array_merge($request, $_GET);
      }
      $route = self::setRouterParams($request['route']);
      self::$route = $route;
      $routefile = implode(SEPARATOR, $route);
      $controller = self::getController($route);
      $action = $route['action'];
      //get globals
      $lang = $GLOBALS['lang'];
      $cur = $GLOBALS['cur'];

      //create View object
      self::$_VIEW = new View($lang, $cur, Connection());

      //create Assign for all
      if ($route['module'] === 'frontend') {
        $assign = new Assign(self::$_VIEW, self::post(), self::get(), self::request(), $routefile);
        $assign->view();
      }elseif ($route['module'] === 'backend') {
        $assign = new BackendAssign(self::$_VIEW, self::post(), self::get(), self::request(), $routefile);
        $assign->view();
      }

      include $controller['file'];

      $controllerClassName = $controller['name'];
      $controller = new $controllerClassName(self::$_VIEW, self::post(), self::get(), self::request(), $routefile);
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

      $controller['file'] = self::getFile($controllerFileName, $controllerBasePath);
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


    static function validator($request)
    {
      if (isset($request)) {
        $validator = new Validator($request);
      }
      return $validator->getRequest();
    }

    static function post()
    {
      $request = $_POST;
      if ($request) {
        return self::validator($request, 'post');
      }
    }

    static function get()
    {
      $request = $_GET;
      if ($request) {
        return self::validator($request);
      }
    }

    static function request()
    {
      $request = $_REQUEST;
      if ($request) {
        return self::validator($request);
      }
    }
  }


 ?>
