<?php


/**
 *
 */
class csrfValidatorController extends Controller
{
  public static $ignoreCSRF = array(
    "index"
  );

  // default action Index
  // calls for getting csrf token
  public function index()
  {
    $session = Container()->getSessionId();

    $hash = md5($session);
    Container()->setSession('csrf', $hash);
    $this->View()->setAssign('csrf', $hash);
  }

}



 ?>
