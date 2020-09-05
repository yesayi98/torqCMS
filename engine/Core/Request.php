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

    private $lang;
    private $currency;

    private $ignoreStatemant = array();

    private $validator;

    function __construct($post, $get, $files, $request, $cookie, $server)
    {
      $this->validator = new Validator();

      $this->post = $this->validator($post);
      $this->get = $this->validator($get);
      $this->request = $this->validator($request);
      $this->files = $this->validator($files);
      $this->cookie = $cookie;
      $this->server = $server;

      $this->validator->setRequest($this);

      $this->setShopParams();
    }

    public function setShopParams()
    {
      // get language and currency
      $this->lang = Container()->Translator()->getLanguage((int) $this->getParam('lang', 1));
      $this->setSession('lang', $this->language);

      $this->currency = Container()->Currencies()->getCurrency((int) $this->getParam('cur', 1));
      $this->setSession('currency', $this->currency);
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
     * same as $_REQUEST[$param]
     */
    public function setParam($param, $value)
    {
      $this->request[$param] = $value;
      $this->post[$param] = $value;
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
      $this->request = array_merge($this->request, $this->get);
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

    public function getHeaders()
    {
      return $this->server;
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

    public function isXHR()
    {
      return isset($this->getHeaders()['HTTP_X_REQUESTED_WITH']) && $this->getHeaders()['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest';
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

    public function validator($request)
    {
      if (!empty($request)) {
        $this->validator->validate($request);
      }

      return $this->validator->getRequest();
    }

    public function setIgnoreStatemant($statemants)
    {
      $this->ignoreStatemant = $statemants;
    }

    public function getIgnoreStatemant()
    {
      return $this->ignoreStatemant;
    }

    public function validateCSRF()
    {
      if (!empty($this->post)) {
        $this->validator->csrf();
      }
    }
}


 ?>
