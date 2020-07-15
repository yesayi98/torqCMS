<?php


/**
 * Orders Controller extends BackendController
 */
class ordersController extends BackendController
{
  private $update = false;

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

  // open article detail action
  public function articleDetail()
  {
    // get reqeust
    $request = $this->getRequest()->request;
    // get order id from request
    $orderID = $request['o'];

    // get article list for choosing
    $articles = $this->__get('Articles')->getArticleList(true);
    // check if article alredy exist in order
    $order_detail = [];
    if (!empty($request['od'])) {
      $order_detail = $this->__get('Orders')->getOrderDetail((int) $request['od']);
    }

    // set to view
    $this->View()->setAssign('order_detail', $order_detail);
    $this->View()->setAssign('products', $articles);
    $this->View()->setAssign('order_id', $orderID);
  }

  // save detail action
  public function saveDetail()
  {
    // get reqeust
    $request = $this->getRequest()->request;
    $order_detail = [];
    $order_detail['order_id'] = $request['order_id'];
    $order_detail['quantity'] = $request['quantity'];
    $order_detail['article_id'] = $request['article_id'];
    $article = $this->__get('Articles')->getArticleById($order_detail['article_id']);
    $order_detail['price'] = $article['price'];
    $order_detail['total'] = (floatval($article['price']) - floatval($article['price'])*floatval($article['discount'])/100) * floatval($order_detail['quantity']);
    $order_detail['name'] = $article['name'];
    $order_detail['unit'] = $article['unit_id'];

    // get order model
    $orderModel = $this->__get('Orders');

    if (!empty($request['order_detail'])) {
      $order_detail['id'] = $request['order_detail'];
      $orderModel->updateOrderDetail($order_detail);
    }else{
      $orderModel->setOrderDetails([$order_detail]);
    }
    $orderTotal = 0;
    $orderDetails = $orderModel->getOrderDetails($order_detail['order_id']);

    foreach ($orderDetails as $key => $orderDetail) {
      $orderTotal += (int) $orderDetail['total'];
    }
    $order = $orderModel->getOrder($order_detail['order_id']);
    $order['product_total'] = $orderTotal;
    $order['total_price'] = $order['product_total'] + $order['delivery_price'] - $order['bonus_price'];

    $orderModel->updateOrder($order);

    if (empty(Connection()->getError())) {
      Router::redirect('backend/orders/detail?o='.$order_detail['order_id']);
    }
  }

  /**
  * @param float $quantity
  * @param int $orderID
  * @param int $articleID
  * @return float $quantity
  */
  private function checkArticleAndAddQuantity($quantity, $orderID, $articleID)
  {
    $builder = $this->__get('Orders')->getQueryBuilder();
    $query = $builder->select()->setTable('order_details')->where()->equals('order_id', $orderID)->equals('article_id', $articleID)->end();
    $builder->execute($query);
    $order_detail = $builder->fetchAll()[0];
    var_dump($order_detail);exit;
    if (!empty($order_detail)) {
      $this->update = true;
      return (float) $quantity + (float) $order_detail['quantity'];
    }else{
      return (float) $quantity;
    }
  }
}


 ?>
