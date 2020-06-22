<?php

/**
 * notification controller handler for admin panel notifications
 */
class notificationsController extends BackendController
{

  public function orders()
  {
    $orderModel = $this->__get('Orders');

    $queryBuilder = $orderModel->getQueryBuilder();
    // create query
    $query = $queryBuilder->select()->setTable('orders');
    $query->setColumns(['id']);
    $query->where()->equals('delivery_status', 1);
    // get categories
    $queryBuilder->execute($query);
    $orders = $queryBuilder->fetchAll();
    if (!empty($orders)) {
      $count = count($orders);
    }else{
      $count = 0;
    }

    die(json_encode(array(
      "count" => $count,
    )));
  }
}


 ?>
