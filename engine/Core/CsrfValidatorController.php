<?php


/**
 *
 */
class csrfValidatorController extends Controller
{

  public function index()
  {
    $session = Container()->getSessionId();

    $hash = md5($session);
    Container()->setSession('csrf', $hash);
    $this->View()->setAssign('csrf', $hash);
  }

}



 ?>
