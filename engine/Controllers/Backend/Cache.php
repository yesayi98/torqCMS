<?php
use Core\Compiller\ScssCompiller;
use Core\Compiller\JsCompiller;

/**
 *
 */
class cacheController extends BackendController
{

  public function index()
  {

  }

  public function clear()
  {
    $success = true;
    $message = 'done';

    $theme = $this->View()->theme;
    $cssCompilled = ScssCompiller::compileAllFiles($theme);
    $jsCompilled = JsCompiller::compileAllFiles($theme);
    // write something what will clear the cache;
    Container()->setSession('clearCache', true);
    if (!$cssCompilled) {
      $success = false;
      $message = 'css file not created or not compilled';
    }
    if (!$jsCompilled) {
      $success = false;
      $message = 'js file not created or not compilled';
    }
    // tell some message on finish the proccess
    die(json_encode(array(
      'success' => $success,
      "message" => $message
    )));
  }
}


 ?>
