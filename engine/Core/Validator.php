<?php

/**
 *
 */
final class Validator
{
  private $request;
  private $validateRequest;
  private const POST = 'post';
  private const GET = 'get';

  function __construct($request, $type = null, $ignoreStatemant)
  {

    $this->request = $request;
    $redirect = false;
    if ($type == self::POST && !empty($request)) {
      if (isset($request['csrf']) && $request['csrf'] != Container()->getSession('csrf')) {
        $redirect = true;
      }elseif (!isset($request['csrf'])){
        $redirect = true;
      }
    }

    if (!empty($ignoreStatemant)) {
      $route = Router::getRoute();
      if (in_array($route['action'], $ignoreStatemant)) {
        $redirect = false;
      }
    }

    if (isset($request['getCsrf'])) {
      $redirect = false;
    }

    $this->validateRequest = $this->validate();
    if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest') {
      $this->validateRequest['XHR'] = true;
    }


    if ($redirect === true) {
      if ( $this->validateRequest['XHR'] == true) {
        throw new \Exception("Invalid CSRF token", 1);
      }

      Router::redirect('error/invalidCsrf');exit;
    }
  }

  private function validate($request = null)
  {
    $validRequest;


    if(!$request){
      $request = $this->request;
    }

    foreach ($request as $key => &$value) {
      if (is_array($value)) {
        $value = $this->validate($value);
        $validRequest[$key] = $value;
        continue;
      }
      $validRequest[$key] = $value;
      $validRequest[$key] = trim($validRequest[$key]);
      $validRequest[$key] = htmlspecialchars($validRequest[$key], ENT_QUOTES);
    }

    return $validRequest;
  }

  public function getRequest()
  {
    return $this->validateRequest;
  }
}


 ?>
