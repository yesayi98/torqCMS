<?php

/**
 *
 */
class translationsController extends BackendController
{

  public function index()
  {
    $this->route = 'backend/basics/translations';
    // get translator
    $model = $this->__get('Translator');
    // get languages and translations
    $languages = $model->getLanguageList();
    $translations = $model->getTranslations();

    // get view object
    $view = $this->View();

    // set view variables
    $view->setAssign('languages', $languages);
    $view->setAssign('translations', $translations);
  }

  public function save()
  {
    // code...
  }

  public function delete()
  {
    // code...
  }

}




 ?>
