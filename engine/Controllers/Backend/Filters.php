<?php
namespace Controllers\Backend;

/**
 *
 */
class filtersController extends \BackendController
{

  // default action index
  public function index()
  {
    $filterModel = $this->__get('Filters');
    $options = $this->__get('Articles')->ArticleOptions()->getOptionList();

    $this->View()->setAssign('options', $options);

    $filters = $filterModel->getFilterList();
    $this->View()->setAssign('filters', $filters);
  }

  // action sortingtypes
  public function sortingtypes()
  {
    $filterModel = $this->__get('Filters');

    $sortings = $filterModel->getSortingTypes();

    $this->route = "backend/filters/sortings/index";

    $this->View()->setAssign('sortings', $sortings);
  }

  // action filtertables
  public function filtertables()
  {
    $filterModel = $this->__get('Filters');

    $tables = $filterModel->getFilterTables();

    $this->route = "backend/filters/tables/index";

    $this->View()->setAssign('tables', $tables);
  }

  // detail action
  public function detail()
  {
    // get request
    $request = $this->getRequest()->request;
    $filterModel = $this->__get('Filters');
    $options = $this->__get('Articles')->ArticleOptions()->getOptionList();
    $filter = $filterModel->getFilter($request['l']);
    $this->View()->setAssign('options', $options);
    $this->View()->setAssign('filter', $filter);
  }

  // detail action
  public function typedetail()
  {
    // get request
    $request = $this->getRequest()->request;
    $filterModel = $this->__get('Filters');
    $filter = $filterModel->getFilterTable($request['l']);
    $this->View()->setAssign('filter', $filter);

    $this->route = "backend/filters/tables/detail";

  }

  // detail action
  public function sortdetail()
  {
    // get request
    $request = $this->getRequest()->request;
    $filterModel = $this->__get('Filters');
    $filter = $filterModel->getSortingType($request['l']);
    $this->View()->setAssign('filter', $filter);

    $this->route = "backend/filters/sortings/detail";

  }

  // save action
  public function save()
  {
    // get request
    $request = $this->getRequest()->request;
    // create filter array
    $filter = array();
    // set filter parapms
    $filter['option_id'] = $request['option_id'];
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

    Router::redirect('backend/filters');
  }

  // save action
  public function filtersave()
  {
    // get request
    $request = $this->getRequest()->request;
    // create filter array
    $filter = array();
    // set filter parapms
    $filter['selector'] = $request['selector'];
    $filter['filter_table'] = $request['filter_table'];
    $filter['filter_column'] = $request['filter_column'];

    // set operation status and message
    $success = true;
    $message = 'success';
    // get filter model
    $filterModel = $this->__get('Filters');
    if (empty($request['id'])) {
      $success = $filterModel->setFilterTable($filter);
      $filter['id'] = Connection()->getLastInserted();
      if (!$success) {
        $message = Connection()->getError();
      }
    }else{
      $filter['id'] = $request['id'];
      $success = $filterModel->updateFilterTable($filter);
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

  // save action
  public function sortingsave()
  {
    // get request
    $request = $this->getRequest()->request;
    // create filter array
    $filter = array();
    // set filter parapms
    $filter['selector'] = $request['selector'];
    $filter['sorting_table'] = $request['sorting_table'];
    $filter['sorting_column'] = $request['sorting_column'];
    $filter['type'] = $request['type'];

    // set operation status and message
    $success = true;
    $message = 'success';
    // get filter model
    $filterModel = $this->__get('Filters');
    if (empty($request['id'])) {
      $success = $filterModel->setSortingType($filter);
      $filter['id'] = Connection()->getLastInserted();
      if (!$success) {
        $message = Connection()->getError();
      }
    }else{
      $filter['id'] = $request['id'];
      $success = $filterModel->updateSortingType($filter);
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

    Router::redirect('backend/filters/sortdetail?l='.$filter['id']);
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

  // delete action
  public function deletetype()
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
    $success = $filterModel->deleteFilterTable($request['l']);
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
    Router::redirect('backend/filters/filtertables');
  }

  // delete action
  public function deletesorting()
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
    $success = $filterModel->deleteSortingType($request['l']);
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
    Router::redirect('backend/filters/sortingtypes');
  }
}


 ?>
