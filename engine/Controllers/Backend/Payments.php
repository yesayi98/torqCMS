<?php
namespace Controllers\Backend;

/**
 * payments Controller extends from backendController abstract class
 */
class paymentsController extends \BackendController
{
  // index action
  // index is a default action
  public function index()
  {
    $payments = $this->__get('Payments')->getPaymentList();

    $this->View()->setAssign('payments', $payments);
  }

  // detail action
  public function detail()
  {
    // get request
    $request = $this->getRequest()->request;
    $paymentModel = $this->__get('Payments');
    $payment = $paymentModel->getPayment($request['l']);

    $this->View()->setAssign('payment', $payment);
  }

  // save action
  public function save()
  {
    // get request
    $request = $this->getRequest()->request;
    // create payment array
    $payment = array();
    // set payment parapms
    $payment['name'] = $request['name'];
    $payment['description'] = $request['description'];
    $payment['client_id'] = $request['client_id'];
    $payment['client_secret_key'] = $request['client_secret_key'];
    $payment['client_password'] = $request['client_password'];

    // set operation status and message
    $success = true;
    $message = 'success';
    // get payment model
    $paymentModel = $this->__get('Payments');
    if (empty($request['id'])) {
      $success = $paymentModel->setPayment($payment);
      $payment['id'] = Connection()->getLastInserted();
      if (!$success) {
        $message = Connection()->getError();
      }
    }else{
      $payment['id'] = $request['id'];
      $success = $paymentModel->updatePayment($payment);
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

    Router::redirect('backend/payments/detail?l='.$payment['id']);
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
    $paymentModel = $this->__get('Payments');
    $success = $paymentModel->deletePayment($request['l']);

    if ($request['XHR']) {
      die(json_encode([
        'success' => $success,
        'message' => $message,
      ]));
    }

    Router::redirect('backend/payments');
  }
}


 ?>
