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

  function __construct($request, $type = null)
  {

    $this->request = $request;
    if ($type == self::POST && !empty($request)) {
      if (!isset($request['getCsrf']) && !isset($request['csrf'])) {
        $redirect = true;
      }elseif (isset($request['csrf']) && $request['csrf'] != Container()->getSession('csrf')) {
        $redirect = true;
      }
    }

    $this->validateRequest = $this->validate();
    if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest') {
      $this->validateRequest['XHR'] = true;
    }


    if (isset($redirect) && $redirect == true) {
      if ( $this->validateRequest['XHR'] == true) {
        throw new \Exception("Invalid CSRF token", 1);
      }else{
        Router::redirect('error/invalidCsrf');exit;
      }
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
      $validRequest[$key] = htmlspecialchars($value, ENT_QUOTES);
      $validRequest[$key] = trim($value);
    }

    return $validRequest;
  }

  public function getRequest()
  {
    return $this->validateRequest;
  }
}


 ?>
