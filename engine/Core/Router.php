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

      //create route
      $url = Container()->CoreUrls()->getUrlByChanged($request['route'])['params'];
      if (!empty($url)) {
        $request = [];
        parse_str($url, $request);
        $_GET = array_merge($request, $_GET);
      }
      $route = self::setRouterParams($request['route']);
      self::$route = $route;
      $routefile = implode(DIRECTORY_SEPARATOR, $route);
      $controller = self::getController($route);
      $action = $route['action'];
      //get globals
      $lang = $GLOBALS['lang'];
      $cur = $GLOBALS['cur'];

      //create View object
      self::$_VIEW = new View($lang, $cur, Connection());

      //create Assign for all
      if ($route['module'] === 'frontend') {
        $assign = new Assign(self::$_VIEW, post(), get(), request(), $routefile);
        $assign->view();
      }elseif ($route['module'] === 'backend') {
        $assign = new BackendAssign(self::$_VIEW, post(), get(), request(), $routefile);
        $assign->view();
      }

      include $controller['file'];

      $controllerClassName = $controller['name'];
      $controller = new $controllerClassName(self::$_VIEW, post(), get(), request(), $routefile);

      if (method_exists($controller, $action)) {
        $controller->{$action}();
      }else{
        trigger_error('Error: Could not call ' . $routFile . '/' . $action . '!');exit;
      }

      $templateDir = DOCUMENT_ROOT.DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR;
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
      $route = str_replace('/', DIRECTORY_SEPARATOR, $controller->route);
      $template = self::getFile($controller->route, $templateDir);
      if (!empty($template)) {
        $smarty->display($template);
      }else{
        self::redirect(url('error'));
      }

      return $route;
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
        self::redirect(url('error'));
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


    function validator($request)
    {
      if (isset($request)) {
        $validator = new Validator($request);
      }
      return $validator->getRequest();
    }
  }


 ?>
