<?php


/**
 * Orders Controller extends BackendController
 */
class ordersController extends BackendController
{

  public function index()
  {
    $ordersModel = $this->__get('Orders');

    $orders = $ordersModel->getOrderList();

    $this->View()->setAssign('orders', $orders);

    if ($this->getRequest()->request['XHR']) {
      $this->route = "backend/orders/table";
    }
  }

  public function detail()
  {
    $order_id = $this->getRequest()->request['o'];
    $orderModel = $this->__get('Orders');
    $view = $this->View();

    if (!empty($order_id)) {
      $order = $orderModel->getOrder($order_id);
      $view->setAssign('order', $order);
    }

    $orderStatuses = $orderModel->getOrderStatusList();
    $deliveryStatuses = $this->__get('Delivery')->getDeliveryList();
    $paymentMethods = $this->__get('Payments')->getPaymentList();

    $view->setAssign('orderStatuses', $orderStatuses);
    $view->setAssign('deliveryStatuses', $deliveryStatuses);
    $view->setAssign('paymentMethods', $paymentMethods);
  }

  public function delete()
  {
    $order_id = $this->getRequest()->request['o'];
    $orderModel = $this->__get('Orders');
    $order = $this->__get('Orders')->getOrder($order_id);
    if ($order['delivery_status'] == 1) {
      $query = false;
      $message = "not Delivered";
    }else{
      $query = $orderModel->deleteOrder($order_id);
      if (!$query) {
        $message = 'success';
      }else{
        $message = Connection()->getError();
      }
    }

    die(
      json_encode([
        'success' => $query,
        'message' => $message,
      ])
    );
  }

  public function save()
  {
    $request = $this->getRequest()->request;
    $orderModel = $this->__get('Orders');

    $order = [];

    $order['delivery_date'] = $request['delivery_date'];
    $order['order_status'] = $request['order_status'];
    $order['delivery_status'] = $request['delivery_status'];

    $success = true;
    $message = 'success';
    if ($request['id']) {
      $order['id'] = $request['id'];
      $success = $orderModel->updateOrder($order);
      if ($success == false) {
        $message = Connection()->getError();
      }
    }else{
      $order['name'] = $request['name'];
      $order['product_price'] = $request['product_price'];
      $order['delivery_price'] = $request['delivery_price'];
      $order['payment_method'] = $request['payment_method'];
      $order['total_price'] = $request['total_price'];
      $order['buy_date'] = $request['buy_date'];
      $order['id'] = $orderModel->setOrder($order);
      if (!$order['id']) {
        $success = false;
        $message = Connection()->getError();
      }
    }



    if ($request['XHR']) {
      die(
        json_encode(
            array(
              'success' => $success,
              'message' => $message
            )
          )
        );
    }else{
      Router::redirect('backend/orders/detail?o='.$order['id']);
    }
  }


  public function deleteDetail()
  {
    $request = $this->getRequest()->request;
    $detail_id = $request['a'];
    $orderModel = $this->__get('Orders');
    $success = $orderModel->deleteOrderDetail($detail_id);

    if ($request['XHR']) {
      die(
        json_encode(
            array(
              'success' => $success,
            )
          )
        );
    }else{
      Router::redirect('backend/orders/detail?o='.$order['id']);
    }
  }
}


 ?>
