<?php

/**
 * index Controller
 */
class indexController extends Controller
{

  public function index()
  {
    // echo "<h1>Կայքը ժամանակավորապես անհասանելի է</h1>"; exit;

    $title = $this->View()->translating('home');

    $this->View()->setAssign('title', $title);

    $emotionModel = $this->__get('Emotions');
    $emotions = $emotionModel->getActiveEmotions();

    if (!empty($emotions)) {
      $this->View()->setAssign('has_emotions', true);
    }else{
      $this->View()->setAssign('has_emotions', false);
    }

  }


}
 ?>
