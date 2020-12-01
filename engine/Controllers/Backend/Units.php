<?php
namespace Controllers\Backend;

/**
 * units Controller extends from backendController abstract class
 */
class unitsController extends \BackendController
{
  // index action
  // index is a default action
  public function index()
  {
    $units = $this->__get('Units')->getUnitList();

    $this->View()->setAssign('units', $units);
  }

  // detail action
  public function detail()
  {
    // get request
    $request = $this->getRequest()->request;
    $unitModel = $this->__get('Units');
    $unit = $unitModel->getUnit($request['l']);

    $this->View()->setAssign('unit', $unit);
  }

  // save action
  public function save()
  {
    // get request
    $request = $this->getRequest()->request;
    // create unit array
    $unit = array();
    // set unit parapms
    $unit['name'] = $request['name'];
    $unit['code'] = $request['code'];

    // set operation status and message
    $success = true;
    $message = 'success';
    // get unit model
    $unitModel = $this->__get('Units');
    if (empty($request['id'])) {
      $success = $unitModel->setUnit($unit);
      $unit['id'] = Connection()->getLastInserted();
      if (!$success) {
        $message = Connection()->getError();
      }
    }else{
      $unit['id'] = $request['id'];
      $success = $unitModel->updateUnit($unit);
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

    Router::redirect('backend/units/detail?l='.$unit['id']);
  }

  // delete action
  public function delete()
  {
    // get request
    $request = $this->getRequest()->request;
    if (empty($request['l']) && $request['id']) {
      return;
    }
    if (empty($request['l'])) {
      $request['l'] = $request['id'];
    }
    $unitModel = $this->__get('Units');
    $success = $unitModel->deleteUnit($request['l']);
    if ($request['XHR']) {
      die(json_encode([
        'success' => $success,
        'message' => $message,
      ]));
    }

    Router::redirect('backend/units');
  }
}


 ?>
