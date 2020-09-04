<?php

/**
 *
 */
final class Validator
{
  private $request;
  private $validRequest;
  private const POST = 'post';
  private const GET = 'get';

  public function setRequest(Request $request)
  {
    $this->request = $request;
  }

  public function csrf()
  {
    $request = $this->request;
    $redirect = false;
    $post = $request->getPost();
    if (!empty($post)) {

      if (isset($post['csrf']) && $post['csrf'] != Container()->getSession('csrf')) {
        $redirect = true;
      }elseif (!isset($post['csrf'])){
        $redirect = true;
      }
    }

    $ignoreStatemant = $request->getIgnoreStatemant();
    if (!empty($ignoreStatemant)) {
      $route = Router::getRoute();
      if (in_array($route['action'], $ignoreStatemant)) {
        $redirect = false;
      }
    }

    if ($redirect === true) {
      var_dump($post);exit;
      if ( $request->getParam('XHR') == true) {
        throw new \Exception("Invalid CSRF token", 1);
      }

      Router::redirect('error/invalidCsrf');exit;
    }
  }

  public function validate($request = null)
  {
    $validRequest;

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

    $this->validRequest = $validRequest;
  }

  public function getRequest()
  {
    return $this->validRequest;
  }
}


 ?>
