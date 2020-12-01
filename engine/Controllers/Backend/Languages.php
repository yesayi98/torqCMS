<?php
namespace Controllers\Backend;

/**
 * languages Controller extends from backendController abstract class
 */
class languagesController extends \BackendController
{
  // index action
  // index is a default action
  public function index()
  {
    $languages['data'] = $this->__get('Translator')->getLanguageList();
    // var_dump($languages);exit;
    $this->View()->setAssign('languages', $languages);
  }

  // detail action
  public function detail()
  {
    // get request
    $request = $this->getRequest()->request;
    $languageModel = $this->__get('Translator');
    $language = $languageModel->getLanguage($request['l']);
    $this->View()->setAssign('language', $language);
  }

  // save action
  public function save()
  {
    // get request
    $request = $this->getRequest()->request;
    // create language array
    $language = array();
    // set language parapms
    $language['name'] = $request['name'];
    $language['short_code'] = $request['short_code'];
    $language['is_default'] = $request['is_default'];

    // set operation status and message
    $success = true;
    $message = 'success';
    // get language model
    $languageModel = $this->__get('Translator');
    if (empty($request['id'])) {
      $success = $languageModel->setLanguage($language);
      $language['id'] = Connection()->getLastInserted();
      if (!$success) {
        $message = Connection()->getError();
      }
    }else{
      $language['id'] = $request['id'];
      $success = $languageModel->updateLanguage($language);
      if (!$success) {
        $message = Connection()->getError();
      }
    }

    if ($request['XHR']) {
      die(json_encode([
        'success' => $success,
        'message' => $message,
      ]));
    }

    Router::redirect('backend/languages/detail?l='.$language['id']);
  }

  // delete action
  public function delete()
  {
    // get request
    $request = $this->getRequest()->request;
    if (empty($request['l'])) {
      $request['l'] = $request['id'];
    }
    if (empty($request['l'])) {
      return;
    }
    $languageModel = $this->__get('Translator');
    $success = $languageModel->deleteLanguage($request['l']);
    if ($success) {
      $message = "success";
    }else{
      $message = Connection()->getError();
    }
    if ($request['XHR']) {
      die(json_encode([
        'success' => $success,
        'message' => $message,
      ]));
    }

    if ($success) {
      $this->View()->setMessage('success', $message);
    }else{
      $this->View()->setMessage('error', $message);
    }
    Router::redirect('backend/languages');
  }
}


 ?>
