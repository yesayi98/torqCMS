<?php
use Bundles\Compiller\ScssCompiller;
use Bundles\Compiller\JsCompiller;

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

  public function updateUrls()
  {
    $categories = $this->__get('Categories')->getCategoryList();
    foreach ($categories as $category) {
      $this->__get('Categories')->runSlugMaker($category['path']);
      $message = Connection()->getError();
    }
    $articles = $this->__get('Articles')->getArticleList('all');
    foreach ($articles as $article) {
      $this->__get('Articles')->runSlugMaker($article['id']);
      $message = Connection()->getError();
    }
    if ($message) {
      $success = false;
    }else{
      $success = true;
      $message = 'done';
    }
    // tell some message on finish the proccess
    die(json_encode(array(
      'success' => $success,
      "message" => $message
    )));
  }
}


 ?>
