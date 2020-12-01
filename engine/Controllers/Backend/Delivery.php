<?php
namespace Controllers\Backend;

/**
 * currencies Controller extends from backendController abstract class
 */
class deliveryController extends \BackendController
{
  // index action
  // index is a default action
  public function index()
  {
    $deliveryStatuses = $this->__get('Delivery')->getDeliveryList();

    $this->View()->setAssign('deliveryStatuses', $deliveryStatuses);
  }

  // detail action
  public function detail()
  {
    // get request
    $request = $this->getRequest()->reqeust;
    $deliveryModel = $this->__get('Delivery');
    $delivery = $deliveryModel->getDelivery($request['l']);

    $this->View()->setAssign('delivery', $delivery);
  }

  // save action
  public function save()
  {
    // get request
    $request = $this->getRequest()->reqeust;
    // create delivery array
    $deliveryStatus = array();
    // set delivery parapms
    $deliveryStatus['name'] = $request['name'];
    $deliveryStatus['code'] = $request['code'];

    // set operation status and message
    $success = true;
    $message = 'success';
    // get delivery model
    $deliveryModel = $this->__get('Currencies');
    if (empty($request['id'])) {
      $success = $deliveryModel->setDelivery($delivery);
      $delivery['id'] = Connection()->getLastInserted();
      if (!$success) {
        $message = Connection()->getError();
      }
    }else{
      $delivery['id'] = $request['id'];
      $success = $deliveryModel->updateDelivery($delivery);
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

    Router::redirect('backend/currencies/detail?l='.$delivery['id']);
  }

  // delete action
  public function delete()
  {
    // get request
    $request = $this->getRequest()->reqeust;
    if (empty($request['l'])) {
      return;
    }
    $deliveryModel = $this->__get('Currencies');
    $success = $deliveryModel->deleteDelivery($request['l']);
    
    if ($request['XHR']) {
      die(json_encode([
        'success' => $success,
        'message' => $message,
      ]));
    }

    Router::redirect('backend/currencies');
  }

  public function cities()
  {
    // code...
  }
}


 ?>
