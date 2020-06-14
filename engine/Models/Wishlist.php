<?php

/**
 *
 */
class Wishlist extends Model
{


  public function setProduct($article_id)
  {
    $article['session_id'] = $this->session_id;
    $article['user_id ']= $this->user_id;
    $article['article_id'] = intval($article_id);

    $query = $this->insert('article_wishlist', $article);

    return $query;
  }

  public function updateProduct($article_id)
  {
    $session_id = $this->session_id;
    $user_id = $this->user_id;
    $article_id = intval($article_id);


    $sql = "UPDATE `article_wishlist` SET
                `user_id` = $user_id,
                `datum`= CURRENT_DATE
            WHERE `session_id` = '$session_id' AND `article_id` = '$article_id'";
    $query = Connection()->set($sql);

    return $query;
  }

  public function getProduct($article_id)
  {
    $session_id = $this->session_id;
    $user_id = $this->user_id;
    $article_id = intval($article_id);
    $sql = "SELECT * FROM `article_wishlist`
            WHERE `session_id` = '$session_id'
            AND `article_id` = '$article_id'";
    $product = Connection()->fetchOne($sql);

    return $product;
  }


  public function updateBySession($user_id)
  {
    $session_id = $this->session_id;
    if (empty($user_id)) {
      $user_id = $this->user_id;
    }

    $sql = "UPDATE `article_wishlist` SET
                `user_id` = $user_id
            WHERE `session_id` = '$session_id'";
    $query = Connection()->set($sql);

    return $query;
  }

  public function getProductsByUser()
  {
    $user_id = $this->user_id;

    if (!$user_id) {
      return;
    }

    $sql = "SELECT * FROM `article_wishlist`
            WHERE `user_id` = $user_id";
    $product = Connection()->fetchAll($sql);
    return $product;
  }
  public function getProductsBySession()
  {
    $session_id = $this->session_id;

    $sql = "SELECT * FROM `article_wishlist`
            WHERE `session_id` = '$session_id'";
    $products = Connection()->fetchAll($sql);
    return $products;
  }
  public function deleteItemsBySession()
  {
    $session_id = $this->session_id;

    $sql="DELETE FROM `article_wishlist` WHERE session_id = '$session_id'";

    $query = Connection()->set($sql);
  }

  public function deleteProduct($artcile_id)
  {
    $session_id = $this->session_id;

    $sql="DELETE FROM `article_wishlist` WHERE session_id = '$session_id' AND article_id = $artcile_id";

    $query = Connection()->set($sql);
  }
}


 ?>
