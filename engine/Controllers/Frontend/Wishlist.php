<?php

/**
 * wishlist Controller
 */
class wishlistController extends Controller
{

  public function index()
  {
    $wishlist = $this->__get('Wishlist');
    $wishlistItems = $wishlist->getProductsBySession();
    $products;
    $totalPrice = 0;
    foreach ($wishlistItems as $key => $product) {
      $products[$key] = $this->getArticle($product['article_id']);
      $products[$key]['quantity'] = $product['quantity'];
      if ($product['discount']) {
        $products[$key]['price'] = $product['price'] - $product['price']*$product['discount']/100;
      }
      $product['price'] = $products[$key]['price'];
      $products[$key]['total'] = floatval($product['quantity'])*floatval($product['price']);
    }
    $this->View()->setAssign('Articles.wishlistProducts', $products);
    $this->View()->setAssign('title', $this->View()->translating('wishlist'));
  }

  public function add()
  {
    $product_id = $this->getRequest()->get['a'];

    // $quantity = (isset($this->getRequest()->get['q'])) ? $this->getRequest()->get['q'] : 1;

    $wishlistItem = $this->getWishlistArticle($product_id);
    if (!empty($wishlistItem)) {

      if ($this->getRequest()->get['XHR']) {
        echo $this->__get('Wishlist')->getProductsBySession()?count($this->__get('Wishlist')->getProductsBySession()):0; exit;
      }
      Router::redirect('wishlist');
      return;
    }

      $product = $this->getArticle($product_id);
      $wishlistItem['article_name'] = $product['name'];
      $wishlistItem['article_id'] = $product['id'];
      $wishlistItem['price'] = $product['price'];


      $this->setProduct($wishlistItem);
      if ($this->getRequest()->get['XHR'] == true) {
        echo $this->__get('Wishlist')->getProductsBySession()?count($this->__get('Wishlist')->getProductsBySession()):0; exit;
      }

      Router::redirect('wishlist');
  }

  public function delete()
  {
    $product_id = $this->getRequest()->get['a'];
    $basket = $this->__get('Wishlist');

    $basket->deleteProduct($product_id);
    if ( $this->getRequest()->get['XHR'] ) {
      echo $this->__get('Wishlist')->getProductsBySession()?count($this->__get('Wishlist')->getProductsBySession()):0; exit;
    }
    Router::redirect('wishlist');
  }

  private function getWishlistArticle($product_id)
  {
    return $this->__get('Wishlist')->getProduct($product_id);
  }

  private function updateProduct($wishlistItem)
  {
    $this->__get('Wishlist')->updateProduct($wishlistItem);
  }

  private function setProduct($wishlistItem)
  {

    $this->__get('Wishlist')->setProduct($wishlistItem['article_id']);
  }

  private function getArticle($product_id)
  {
    $product = $this->__get('Articles')->getArticleById($product_id);


    return $product;
  }
}


 ?>
