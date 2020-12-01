<?
namespace Controllers\Frontend;

/**
 * checkout Controller
 */
class checkoutController extends \Controller
{

  public function index()
  {
    $orderItems = $this->view->getAssign('basketProducts');
    if (empty($orderItems)) {
      $this->View()->setMessage('warning', 'emptybasket');

      Router::redirect('basket');
    }
    if (!Container()->getSession('user')) {
      Container()->setSession('redirect', 'checkout');

      $this->View()->setAssign('checkout', true);
      $this->route = 'frontend/account/login';
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
    $deliveryPrice = $this->__get('Core')->getItem('deliveryPrice')['content'];

    // get session bonus
    $bonus = Container()->getSession('bonus');

    // get bonus discount
    if (!empty($bonus) && $bonus == 1) {
      $bonusDiscount = $this->__get('Core')->getItem('bonus')['content'];
      // calculating bonus
      $bonusDiscountedPrice = intval($totalPrice) * intval($bonusDiscount)/100;
      // check if bonus can be did
      $result = $this->checkIfBonusCanBe($bonusDiscountedPrice);

      if ($result) {
        Container()->setSession('bonus', $bonusDiscountedPrice);
        $this->View()->setMessage('success', 'bonus');
        $this->View()->setAssign('bonusPrice', $bonusDiscountedPrice);
      }else{
        $this->View()->setMessage('error', 'emptybonus');
      }
    }

    $this->View()->setAssign('Articles.orderItems', $products);
    $this->View()->setAssign('totalPrice', $totalPrice);
    $this->View()->setAssign('deliveryPrice', $deliveryPrice);
    $this->View()->setAssign('title', $this->View()->translating('checkout'));

  }


  /**
  *@param integer $bonusDiscountedPrice
  *@return bool
  */
  private function checkIfBonusCanBe($bonusDiscountedPrice = 0)
  {
    (float) $bonusDiscountedPrice;
    // get current user bonus from session or cookie
    $user = Container()->getCurrentUser();
    $bonus = (float) $user['attributes']['bonus'];

    // check possibility give bonus
    if ($bonus - $bonusDiscountedPrice >= 0) {
      $user['attributes']['bonus'] = $bonus - $bonusDiscountedPrice;
      // update user
      $query = $this->__get('Users')->updateUser($user);
      if ($query) {
        Container()->updateSessionUser();
        return true;
      }
    }

    return false;
  }

  /**
  * bonus action called in requesting Checkout bonus
  */
  public function bonus()
  {
    // getting request
    // get user spec_id
    $request = $this->getRequest()->post;
    $spec_id = $request['specific_id'];

    // get current user
    $user = Container()->getCurrentUser();
    // checking if valid user
    if ($spec_id === $user['specific_id']) {
      Container()->setSession('bonus', 1);
    }else{
      $this->View()->setMessage('error', 'bonusUser');
    }

    Router::redirect('checkout');
  }

  /**
  * cenceling given bonus if order get an error
  * @param float $bonusPrice
  * @return bool
  */
  private function cencelBonus($bonusPrice)
  {
    if (empty($bonusPrice)) {
      return false;
    }
    // get session user
    $sessionUser = Container()->getCurrentUser();
    // returning given bonus
    $sessionUser['attributes']['bonus'] += $bonusPrice;
    $result = $this->__get('Users')->updateUser($sessionUser);
    Container()->updateSessionUser();

    return $result;
  }

  /**
  * confirm action called in confirming Checkout
  */
  public function confirm()
  {
    $request = $this->getRequest()->post;
    if (!$request) {
      Router::redirect('index');
    }
    if($request['terms'] !== 'on'){
      $this->View()->setMessage('error', 'terms');
      Router::redirect('checkout');
    }
    $user = $this->view->getAssign('user');

    if ($user['guest'] == 1) {
      $user = $this->updateGuestUser($user);
    }
    $orderItems = $this->view->getAssign('basketProducts');

    if (empty($orderItems)) {
      $this->View()->setMessage('warning', 'emptybasket');

      Router::redirect('basket');
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
    $address['city'] = $request['city']?$request['region']:1;
    $address['region'] = $request['region']?$request['region']:1;
    $address['postal_code'] = $request['postal_code'];
    $address['phone'] = $request['phoneCode'].' '.$request['phone'];
    $address['notes'] = $request['notes'];



    $addressModel = $this->__get('Users')->Address();

    if (!empty($address['id'])) {
      $result = $addressModel->updateAddress($address);
    }else{
      $result = $addressModel->setAddress($address);
      $address['id'] = Connection()->getInsertedId();
    }
    // get session bonus
    $bonus = Container()->getSession('bonus');

    $order['count_product'] = count($products);
    $order['product_total'] = $totalPrice;
    $order['delivery_price'] = isset($request['shipping'])?$request['shipping']:$this->__get('Core')->getItem('deliveryPrice')['content'];
    $order['total_price'] = floatval($order['product_total'])+floatval($order['delivery_price']);
    $order['bonus_price'] = isset($bonus)?intval($bonus):0;
    $order['total_price'] = $order['total_price'] - $order['bonus_price'];
    $order['payment_method'] = !empty($request['payment_method'])?$request['payment_method']:1;
    $order['user_id'] = $user['id'];
    $order['address_id'] = $address['id'];
    $order['order_status'] = 1;
    $order['delivery_status'] = 1;
    $orderModel = $this->__get('Orders');
    $isset = $orderModel->setOrder($order);
    $order_id = Connection()->getInsertedId();
    $this->View()->setSession('order_id', $order_id);
    $setFirstOrderDiscount = false;

    $result = $this->setOrderDetails($products, $order_id, $setFirstOrderDiscount);

    if($order['payment_method'] == '2'){
      Router::redirect('idram/payOrder');
    }
    if($order['payment_method'] == '3'){
      Router::redirect('ameria');
    }
    if ($order['payment_method'] == '1') {
      if ($result) {
        Router::redirect('checkout/success');
        return;
      }else{
        Router::redirect('checkout/error', 'not valid payment method', 'error');
      }
    }
    Router::redirect('checkout/error');
    return;

  }

  public function success()
  {
    $order_id = $this->View()->getSession('order_id');
    if (empty($order_id)) {
      Router::redirect('');
    }
    $order = $this->__get('Orders')->getOrder($order_id);
    if (!empty($order)) {
      $this->sendInvoiceMail($order);
    }
    $this->View()->setSession('order_id', '');
    $this->View()->setSession('bonus', '');

    $basketmodel = $this->__get('Basket');
    $basketmodel->deleteItemsBySession();
    $this->View()->setAssign('order', $order);
  }

  public function error()
  {
    $order_id = $this->View()->getSession('order_id');
    $order = $this->__get('Orders')->getOrder($order_id);
    $bonus = $this->View()->getSession('bonus');
    if (!empty($bonus)) {
      $this->cencelBonus($order['bonus_price']);
    }
    $this->View()->setSession('bonus', '');
  }

  private function setOrderDetails($products, $order_id, $firstOrder = 0)
  {
    if (empty($products)) {
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

  private function sendInvoiceMail($order)
  {
    $user = Container()->getCookie('user');
    $currentLang = $this->View()->getAssign('currentLang');
    $view = $this->View();

    $mailer = new Mailer($view, $currentLang);
    $mailer->createMailTemplate('invoice');

    $data = [];
    $data['invoice'] = $this->createInvoice($order);
    $data['useremail'] = $user['email'];

    $mailer->setMailParams($data);

    $mailer->send($user);

  }

  private function createInvoice($order)
  {
    if (empty($order)) {
      return;
    }
    $currentCur = $this->View()->getAssign('currentCur');
    $invoice = '';

    foreach ($order['details'] as $detail) {
      $invoice .= '<tr>';
        $invoice .= '<td>';
          $invoice .= $detail['article_id'];
        $invoice .= '</td>';
        $invoice .= '<td>';
          $invoice .= $detail['name'];
        $invoice .= '</td>';
        $invoice .= '<td>';
          $invoice .= $detail['price'].' '.$currentCur['symbol'];
        $invoice .= '</td>';
        $invoice .= '<td>';
          $invoice .= $detail['quantity'];
        $invoice .= '</td>';
        $invoice .= '<td>';
          $invoice .= $detail['total'].' '.$currentCur['symbol'];
        $invoice .= '</td>';
      $invoice .= '</tr>';
    }
    $invoice .= '<tr>';
      $invoice .= '<td>';
      $invoice .= '</td>';
      $invoice .= '<td>';
        $invoice .= 'Products';
      $invoice .= '</td>';
      $invoice .= '<td>';
      $invoice .= '</td>';
      $invoice .= '<td>';
      $invoice .= '</td>';
      $invoice .= '<td>';
        $invoice .= $order['product_total'].' '.$currentCur['symbol'];
      $invoice .= '</td>';
    $invoice .= '</tr>';
    $invoice .= '<tr>';
      $invoice .= '<td>';
      $invoice .= '</td>';
      $invoice .= '<td>';
        $invoice .= 'Delivery';
      $invoice .= '</td>';
      $invoice .= '<td>';
      $invoice .= '</td>';
      $invoice .= '<td>';
      $invoice .= '</td>';
      $invoice .= '<td>';
        $invoice .= $order['delivery_price'].' '.$currentCur['symbol'];
      $invoice .= '</td>';
    $invoice .= '</tr>';
    $invoice .= '<tr>';
      $invoice .= '<td>';
      $invoice .= '</td>';
      $invoice .= '<td>';
        $invoice .= 'Total';
      $invoice .= '</td>';
      $invoice .= '<td>';
      $invoice .= '</td>';
      $invoice .= '<td>';
      $invoice .= '</td>';
      $invoice .= '<td>';
        $invoice .= $order['total_price'].' '.$currentCur['symbol'];
      $invoice .= '</td>';
    $invoice .= '</tr>';

    return $invoice;
  }
}

?>
