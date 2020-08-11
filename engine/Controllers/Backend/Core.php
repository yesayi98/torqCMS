<?php

/**
 * Core class extends abstract class Controller
 */
class coreController extends BackendController
{
  // default action index
  // if not set action in the url the system loads this action
  public function index()
  {
    // get the View object
    $view = $this->View();
    // set template
    $this->route = 'backend/basics/core';
    // get core data model
    $coreModel = $this->__get('Core');
    // get core data
    $coreData = $coreModel->getItemList();
    foreach ($coreData['data'] as &$item) {
      if ($item['content_type'] == 'image') {
        $item['image'] = $this->__get('Media')->getMedia($item['content']);
      }
    }
    // set data to ftont
    $view->setAssign('items', $coreData);
  }

  // action save
  // called in submit form
  public function save()
  {
    /**
    * @var array $request
    */
    // get reqeust
    $request = $this->getRequest()->post;
    // get Core model
    $coreModel = $this->__get('Core');
    $message = "success";
    // let's handle data
    $coreItem = array(
      'name' => $request['name'],
      'description' => $request['description'],
      'content' => $request['content'],
      'content_type' => $request['content_type'],
      'id' => $request['id']
    );
    // save data
    if (!empty($request['id'])) {
      $success = $coreModel->updateItem($coreItem);
      $message = Container()->getError();
    }else{
      $success = false;
      $message = 'you have not permision to add core item';
    }
    if ($request['XHR']) {
      die(json_encode(array(
        'success' => $success,
        'message' => $message
      )));
    }

    Router::redirect('backend/core');
  }
}


 ?>
