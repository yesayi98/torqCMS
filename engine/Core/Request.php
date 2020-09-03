<?php

/**
 * Request handler
 */
class Request
{
    private $post = array();
    private $get = array();
    private $files = array();
    private $request = array();
    private $cookie = array();
    private $server = array();

    private $ignoreStatemant = array();


    function __construct($post, $get, $files, $request, $cookie, $server)
    {

      $this->post = $post;
      $this->get = $get;
      $this->request = $request;
      $this->files = $files;
      $this->cookie = $cookie;
      $this->server = $server;

    }

    /**
     * same as new Request(...)
     */
    public static function createFromGlobals()
    {
      return new self($_POST, $_GET, $_FILES, $_REQUEST, $_COOKIE, $_SERVER);
    }


    /**
     * same as $_REQUEST
     */
    public function getParams()
    {
      return $this->request;
    }

    /**
     * same as $_REQUEST[$param]
     */
    public function getParam($param, $alternate = null)
    {
      if (!empty($this->request[$param])) {
        return $this->request[$param];
      }else{
        return $alternate;
      }
    }

    /**
     * same as $_GET[]
     */
    public function getQuery()
    {
      return $this->get;
    }


    public function setQuery($_get)
    {
      $this->get = $_get;
    }

    /**
     * same as $_POST[]
     */
    public function getPost()
    {
      return $this->post;
    }

    public function setPost($_post)
    {
      $this->post = $_post;
    }


    public function setCookie($key,  $value, $expires = 24*3600, $path = '/')
    {
      if (is_array($value)) {
        $value = serialize($value);
      }

      setcookie($key, $value, time() + $expires, $path);
    }

    public function getCookie($key)
    {
      if (!$key) {
        return $_COOKIE;
      }
      $cookie = $_COOKIE[$key];
      if (@unserialize($cookie) === false) {
        return $cookie;
      }else{
        return unserialize($cookie);
      }
    }

    public function destroyCookie($key)
    {
      unset($_COOKIE[$key]);
      setcookie($key, null, -1, '/');
    }

    public function setSession($key, $value)
    {
      if (!$key) {
        return;
      }
      $_SESSION[$key] = $value;
    }


    public function getSession($key, $value = NULL)
    {
      if (!empty($value)) {
        return $_SESSION[$key][$value];
      }
      if (isset($_SESSION[$key])) {
        return $_SESSION[$key];
      }
      return false;
    }

    public function getSessionId()
    {
      $request = Router::request();

      if (isset($request['session_id'])) {
        return $request['session_id'];
      }
      return session_id();
    }

    // destroy session
    public function destroySession()
    {
      $this->Basket()->deleteItemsBySession();
      $this->Wishlist()->deleteItemsBySession();
      session_regenerate_id(true);
      return session_destroy();
    }

    public function getLanguage()
    {
      return $this->lang;
    }

    public function getCurrency()
    {
      return $this->lang;
    }

    public function getFiles()
    {
      return $this->files;
    }

    // get current session user if it exist
    public function getCurrentUser()
    {
      $user = $this->getSession('user');
      if (empty($user)) {
        $user = $this->getCookie('user');
      }

      return $user;
    }

    // update current session user if it exist
    public function updateSessionUser()
    {
      $user = $this->getCurrentUser();
      if (empty($user['id'])) {
        return;
      }

      $userDB = $this->Users->getUser($user['id']);
      unset($userDB['password']);

      $this->setSession('user', $userDB);
      $this->setCookie('user', $userDB);
    }

    static function validator($request, $type = null)
    {
      if (isset($request)) {
        $validator = new Validator($request, $type, $this->ignoreStatemant);
      }
      return $validator->getRequest();
    }

    public function setIgnoreStatemant($statemants)
    {
      $this->ignoreStatemant = $statemants;
    }

    public function getIgnoreStatemant($statemants)
    {
      return $this->ignoreStatemant;
    }
}


 ?>
