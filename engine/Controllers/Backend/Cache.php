<?php
use Core\ScssCompiller\ScssCompiller;

/**
 *
 */
class cacheController extends BackendController
{

  public function index()
  {
    $success = true;
    $message = 'done';

    $theme = $this->View()->theme;
    $cssCompilled = ScssCompiller::compileAllFiles($theme);
    // write something what will clear the cache;
    Container()->setSession('clearCache', true);
    if (!$cssCompilled) {
      $success = false;
      $message = 'file not created or not closed';
    }
    // tell some message on finish the proccess
    die(json_encode(array(
      'success' => $success,
      "message" => $message
    )));
  }
}


 ?>
