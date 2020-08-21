<?php

/**
 *
 */
class filtersController extends BackendController
{

  // default action index
  public function index()
  {
    $filterModel = $this->__get('Filters');

    $filters = $filterModel->getFilterList();

    $this->View()->setAssign('filters', $filters);
  }

  // detail action
  public function detail()
  {
    // get request
    $request = $this->getRequest()->request;
    $filterModel = $this->__get('Filters');
    $filter = $filterModel->getFilter($request['l']);
    $this->View()->setAssign('filter', $filter);
  }

  // save action
  public function save()
  {
    // get request
    $request = $this->getRequest()->request;
    // create filter array
    $filter = array();
    // set filter parapms
    $filter['name'] = $request['name'];
    $filter['short_code'] = $request['short_code'];
    $filter['is_default'] = $request['is_default'];

    // set operation status and message
    $success = true;
    $message = 'success';
    // get filter model
    $filterModel = $this->__get('Filters');
    if (empty($request['id'])) {
      $success = $filterModel->setFilter($filter);
      $filter['id'] = Connection()->getLastInserted();
      if (!$success) {
        $message = Connection()->getError();
      }
    }else{
      $filter['id'] = $request['id'];
      $success = $filterModel->updateFilter($filter);
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

    Router::redirect('backend/filters/detail?l='.$filter['id']);
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
    $filterModel = $this->__get('Filters');
    $success = $filterModel->deleteFilter($request['l']);
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
    Router::redirect('backend/filters');
  }
}


 ?>
