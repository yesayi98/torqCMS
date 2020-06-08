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

    $this->View()->setAssign('userCount', $userCount);
    $this->View()->setAssign('orderCount', $orderCount);
    $this->View()->setAssign('articleCount', $articleCount);
  }

}



 ?>
