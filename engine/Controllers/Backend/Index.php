<?php

/**
 *
 */
class indexController extends BackendController
{

  public function index()
  {
    $userCount = $this->__get('Users')->getUserList()['total'];
    $orderCount = $this->__get('Orders')->getOrderList()['total'];
    $articleCount = $this->__get('Articles')->getArticleList()['total'];
    $rewiewCount = $this->__get('Articles')->getArticleReviews()['total'];
    // get confirmed orders from yesterday
    $lastOrders = $this->getConfirmedOrdersByDate(date('Y-m-d', time()-24*3600));
    $lastDayTotal = 0;
    foreach ($lastOrders as $order) {
      $lastDayTotal += (float) $order['total_price'];
    }
    // get confirmed orders from today
    $orders = $this->getConfirmedOrdersByDate(date('Y-m-d'));
    $toDayTotal = 0;
    foreach ($orders as $order) {
      $toDayTotal += (float) $order['total_price'];
    }
    $difference = $lastDayTotal - $toDayTotal;
    $percent = ($difference*100)/$lastDayTotal;
    $up = ($percent <= 0)?true:false;
    $percent = ($percent >= 0)?"-".round(abs($percent), 2).'%':"+".round(abs($percent), 2).'%';
    $ordersTotal = array(
      "up" => $up,
      "percent" => $percent,
      "price" => $toDayTotal,
    );
    $this->View()->setAssign('userCount', $userCount);
    $this->View()->setAssign('orderCount', $orderCount);
    $this->View()->setAssign('articleCount', $articleCount);
    $this->View()->setAssign('ordersTotal', $ordersTotal);
  }

  /**
  * method gets confirmed orders by date
  * @param string $date
  * @return array $orders
  */
  private function getConfirmedOrdersByDate($date='')
  {
    if(empty($date)){
      return;
    }

    $builder = $this->__get('Orders')->getQueryBuilder();
    $today = date("Y-m-d");
    $today = date("Y-m-d");
    $query = $builder->select()->setTable('orders');
    $query->where()->equals('order_status', 2)->like('buy_date', "'$date%'");
    $builder->execute($query);
    $orders = $builder->fetchAll();

    return $orders;
  }

  public function clearCache()
  {
    // write something what will clear the cache;
    Container()->setSession('clearCache', true);

    // tell some message on finish the proccess
    die(json_encode(array(
      'success' => true,
      "message" =>'done'
    )));
  }

}



 ?>
