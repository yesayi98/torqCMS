<?php

/**
 * error Controller
 */
class errorController extends Controller
{

  public function index()
  {
    $message = 'The page you requested not found';
    $this->View()->setAssign('code', '404');
    $this->View()->setAssign('message', $message);
  }

  public function invalidCsrf()
  {
    $this->route = 'frontend/error/index';

    $message = 'invalid CSRF token';
    $this->View()->setAssign('code', 'CSRF');
    $this->View()->setAssign('message', $message);
  }

}


 ?>
