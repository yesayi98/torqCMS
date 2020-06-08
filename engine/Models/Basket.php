<?php

/**
 *
 */
class Basket extends Orders
{

  function __construct($container)
  {
    if (isset($_SESSION['user'])) {
      $this->user_id = $_SESSION['user']['id'];
    }else{
      $this->user_id = 0;
    }
    $this->container = $container;
    $this->session_id = $this->container->getSessionId();
  }

  public function setProduct($item)
  {
    $session_id = $this->session_id;
    $user_id = $this->user_id;
    $article_name = $item['article_name'];
    $article_id = $item['article_id'];
    $quantity = $item['quantity'];
    $price = $item['price'];
    $discount = $item['discount'];

    $sql = "INSERT INTO `basket`(
              `session_id`,
              `user_id`,
              `article_name`,
              `article_id`,
              `quantity`,
              `price`,
              `discount`
            ) VALUES (
              '$session_id',
              '$user_id',
              '$article_name',
              '$article_id',
              '$quantity',
              '$price',
              '$discount'
            )";
    $query = Connection()->set($sql);

    return $query;
  }

  public function updateBySession()
  {
    $session_id = $this->session_id;
    $user_id = $this->user_id;

    $sql = "UPDATE `basket` SET
                `user_id` = $user_id
            WHERE `session_id` = '$session_id'";
    $query = Connection()->set($sql);
    
    return $query;
  }

  public function updateProduct($item)
  {
    $session_id = $this->session_id;
    $user_id = $this->user_id;
    $article_name = $item['article_name'];
    $article_id = $item['article_id'];
    $quantity = $item['quantity'];
    $price = $item['price'];
    $discount = $item['discount'];

    $sql = "UPDATE `basket` SET
                `article_name` = '$article_name',
                `quantity` = '$quantity',
                `price` = '$price',
                `discount` = '$discount',
                `datum`= CURRENT_DATE
            WHERE `session_id` = '$session_id' AND `article_id` = $article_id";
    $query = Connection()->set($sql);

    return $query;
  }

  public function getProduct($article_id)
  {
    $session_id = $this->session_id;
    $user_id = $this->user_id;
    $artcile_id = intval($artcile_id);
    $sql = "SELECT * FROM `basket`
            WHERE `session_id` = '$session_id'
            AND `article_id` = '$article_id'";
    $product = Connection()->fetchOne($sql);

    return $product;
  }
  public function getProductsByUser()
  {
    $user_id = $this->user_id;
    $session_id = $this->session_id;

    if (!$user_id) {
      return;
    }

    $sql = "SELECT * FROM `basket`
            WHERE `user_id` = $user_id AND session_id = '$session_id'";
    $products = Connection()->fetchAll($sql);

    return $products;
  }
  public function getProductsBySession()
  {
    $session_id = $this->session_id;

    $sql = "SELECT * FROM `basket`
            WHERE `session_id` = '$session_id'";
    $products = Connection()->fetchAll($sql);
    return $products;
  }
  public function deleteItemsBySession()
  {
    $session_id = $this->session_id;

    $sql="DELETE FROM basket WHERE session_id = '$session_id'";

    $query = Connection()->set($sql);
  }

  /* returns @boolean; */
  public function deleteProduct($article_id)
  {
    $session_id = $this->session_id;

    $sql=  "DELETE FROM basket WHERE session_id = '$session_id' AND `article_id` = '$article_id'";
    $query = Connection()->set($sql);
    return $query;
  }
}


 ?>
