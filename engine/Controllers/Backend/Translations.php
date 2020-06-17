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
    //get request params
    $request = $this->getRequest()->post;
    $model = $this->__get('Translator');
    $languages = $model->getLanguageList();
    $selector = $request['selector'];
    $translations = $request['translate'];
    $success = true;
    // set translation by language
    foreach ($translations as $lang => $translation) {
      $key = array_search($lang, array_column($languages, 'short_code'));
      if ($languages[$key]["short_code"] == $lang) {
        $langID = (int) $languages[$key]["id"];
      }else{
        $langID = 1;
      }
      if (empty($translation)) {
        $translation = '';
      }
      $result = $model->saveTranslation($translation, $selector, $langID);
      if (!$result) {
        $success = false;
        break;
      }
    }
    if (isset($request['XHR'])) {
      die(json_encode([
        'success' => $success,
      ]));
    }else{
        Router::redirect('backend/translations');
    }
  }

  public function delete()
  {
    // code...
  }

}




 ?>
