<?php


/**
 *
 */
class csrfValidatorController extends Controller
{
  public static $ignoreCSRF = array(
    "index"
  );

  public function index()
  {
    $session = Container()->getSessionId();

    $hash = md5($session);
    Container()->setSession('csrf', $hash);
    $this->View()->setAssign('csrf', $hash);
  }

}



 ?>
