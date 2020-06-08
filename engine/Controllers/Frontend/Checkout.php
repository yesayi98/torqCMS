<?
/**
 * checkout Controller
 */
class checkoutController extends Controller
{

  public function index()
  {
    $orderItems = $this->view->getAssign('basketProducts');
    if (empty($orderItems)) {
      $this->View()->setMessage('warning', 'emptybasket');

      redirect(url('basket'));

    }
    if (!Container()->getSession('user')) {
      Container()->setSession('redirect', 'checkout');

      $this->View()->setAssign('checkout', true);
      $this->route = 'register';
    }

    $products;
    $totalPrice = 0;
    foreach ($orderItems as $key => $product) {
      $products[$key] = $this->getArticle($product['article_id']);
      $products[$key]['quantity'] = $product['quantity'];
      if ($product['discount']) {
        $products[$key]['price'] = $product['price'] - $product['price']*$product['discount']/100;
      }
      $product['price'] = $products[$key]['price'];
      $products[$key]['total'] = floatval($product['quantity'])*floatval($product['price']);
      $totalPrice += $products[$key]['total'];
    }

    $this->View()->setAssign('Articles.orderItems', $products);
    $this->View()->setAssign('totalPrice', $totalPrice);

  }


  public function confirm()
  {
    $request = $this->getRequest()->post;
    if (!$request) {
      redirect(url('index'));
    }
    if($request['terms'] !== 'on'){
      $this->View()->setMessage('error', 'terms');
      redirect(url('checkout'));
    }
    $user = $this->view->getAssign('user');

    if ($user['guest'] == 1) {
      $user = $this->updateGuestUser($user);
    }
    $orderItems = $this->view->getAssign('basketProducts');

    if (empty($orderItems)) {
      $this->View()->setMessage('warning', 'emptybasket');

      redirect(url('basket'));
    }



    $products;
    $totalPrice = 0;
    foreach ($orderItems as $key => $product) {
      $products[$key] = $this->getArticle($product['article_id']);
      $products[$key]['quantity'] = $product['quantity'];
      if ($product['discount']) {
        $products[$key]['price'] = $products[$key]['price'] - $products[$key]['price']*$product['discount']/100;
      }
      $product['price'] = $products[$key]['price'];
      $products[$key]['total'] = floatval($product['quantity'])*floatval($products[$key]['price']);
      $totalPrice += $products[$key]['total'];
    }

    // $address['id'] = $user['address'][0]['id'];
    $address['user_id'] = $user['id'];
    $address['address'] = $request['address'];
    $address['city'] = $request['city'];
    $address['region'] = $request['region'];
    $address['postal_code'] = $request['postal_code'];
    $address['phone'] = $request['phoneNumber'];
    $address['notes'] = $request['notes'];



    $addressModel = $this->__get('Users')->Address();

    if (!empty($address['id'])) {
      $result = $addressModel->updateAddress($address);
    }else{
      $result = $addressModel->setAddress($address);
      $address['id'] = Connection()->getInsertedId();
    }

    $order['count_product'] = count($products);
    $order['product_total'] = $totalPrice;
    $order['delivery_price'] = $request['shipping'];
    $order['total_price'] = !empty($request['checkoutTotal'])?$request['checkoutTotal']:floatval($totalPrice)+floatval($request['shipping']);
    $order['payment_method'] = !empty($request['paymentmethod'])?$request['paymentmethod']:1;
    $order['user_id'] = $user['id'];
    $order['address_id'] = $address['id'];
    $order['order_status'] = 1;
    $order['delivery_status'] = 1;
    $orderModel = $this->__get('Orders');
    $isset = $orderModel->setOrder($order);
    $order_id = Connection()->getInsertedId();
    // var_dump($order_id);
    // var_dump($request);exit;

    $this->View()->setSession('order_id', $order_id);
    $setFirstOrderDiscount = false;
    // if ($user['attributes']['first_order'] == 0) {
    //   $user['attributes']['first_order'] = 1;
    //   if (!empty($user['password']) || $user['password'] == "") {
    //     unset($user['password']);
    //   }
    //   $this->__get('Users')->updateUser($user);
    //   $setFirstOrderDiscount = true;
    // }


    $result = $this->setOrderDetails($products, $order_id, $setFirstOrderDiscount);

    if ($request['XHR']) {
      if($order['payment_method'] == '1'){
        echo url('credit/init');exit;
      }
      if($order['payment_method'] == '2'){
        echo url('idram/payOrder');exit;
      }
      if($order['payment_method'] == '3'){
        echo url('ameria'); exit;
      }
      if($result) {
        $this->View()->setSession('order_id', '');

        echo url('checkout/success'); exit;
      }else{
        echo url('checkout/error'); exit;
      }
    }

    if($order['payment_method'] == '2'){
      redirect(url('idram/payOrder'));
    }
    if($order['payment_method'] == '3'){
      redirect(url('ameria'));
    }

    if ($result) {
      $this->View()->setSession('order_id', '');

      redirect(url('checkout/success'));
      return;
    }

    redirect(url('checkout/error'));
    return;

  }

  public function success()
  {
    $basketmodel = $this->__get('Basket');
    $basketmodel->deleteItemsBySession();

    if ($this->getRequest()->request['EDP_BILL_NO']) {
      $order_id = $this->getRequest()->request['EDP_BILL_NO'];

      $sql = "UPDATE orders SET order_status = 2 WHERE id ='$order_id'";
      Connection()->set($sql);
    }

    $this->route = 'paysuccess';
  }

  public function error()
  {
    $this->route = 'payerror';
  }

  private function setOrderDetails($products, $order_id, $firstOrder = 0)
  {
    if (!$products) {
      return;
    }
    if (!$order_id) {
      return;
    }
    if ($firstOrder) {
      $additionalDiscount = $this->__get('Core')->get('additionalDiscount')['content'];
    }
    $orderModel = $this->__get('Orders');
    $orderItems;
    $totalPrice = 0;
    foreach ($products as $key => $product) {

      $orderItems[$key]['order_id'] = $order_id;
      $orderItems[$key]['article_id'] = $product['id'];
      $orderItems[$key]['quantity'] = $product['quantity'];
      $orderItems[$key]['price'] = $this->setOrderItemPrice($product, $additionalDiscount);
      $orderItems[$key]['total_price'] = $product['total'];
      $orderItems[$key]['name'] = $product['name'];
      $orderItems[$key]['unit_id'] = $product['unit_id'];
      $totalPrice = $totalPrice + $orderItems[$key]['quantity']*$orderItems[$key]['price'];

    }
    if (!empty($firstOrder)) {
      $order = $orderModel->getOrder($order_id);
      $order['total_price'] = (floatval($order['total_price']) - floatval($order['product_total'])) + $totalPrice;
      $order['product_total'] = $totalPrice;
      $order['order_id'] = $order_id;
      $updated = $orderModel->updateOrder($order);
    }

    $result = $orderModel->setOrderDetails($orderItems);
    return $result;
  }

  private function setOrderItemPrice($product, $additionalDiscount = 0)
  {
    $additionalDiscount = intval($additionalDiscount);
    if ($product['attributes']['not_discounted'] == 1) {
      $additionalDiscount = 0;
    }
    $price = $product['price'] - $product['price']*$additionalDiscount/100;
    return $price;
  }

  private function getBasketArticle($product_id)
  {
    return  $this->__get('Basket')->getProduct($product_id);
  }

  private function updateProduct($basketItem)
  {
    $this->__get('Basket')->updateProduct($basketItem);
  }

  private function setProduct($basketItem)
  {
    $this->__get('Basket')->setProduct($basketItem);
  }

  private function getArticle($product_id)
  {
    $product = $this->__get('Articles')->getArticleById($product_id);

    return $product;
  }

  private function updateGuestUser($user)
  {
    $request = $this->getRequest()->post;

    $user = $request + $user;
    unset($user['checkoutTotal']);
    unset($user['paymentmethod']);
    unset($user['orderTotal']);
    unset($user['terms']);
    unset($user['XHR']);

    $this->__get('Users')->updateUser($user);
    return $user;
  }
}

?>