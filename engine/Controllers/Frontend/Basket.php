<?php

/**
 * basket Controller
 */
class basketController extends Controller
{

  public function index()
  {
    if ($this->getRequest()->post['widget']) {
      $basketItems = $this->getRequest()->post['params']['basketProducts'];
    }else{
      $basketItems = $this->view->getAssign('basketProducts');
    }
    $products;
    $totalPrice = 0;
    foreach ($basketItems as $key => $product) {
      $products[$key] = $this->getArticle($product['article_id']);
      $products[$key]['quantity'] = $product['quantity'];
      if ($product['discount']) {
        $products[$key]['price'] = $product['price'] - $product['price']*$product['discount']/100;
      }
      $product['price'] = $products[$key]['price'];
      $products[$key]['total'] = floatval($product['quantity'])*floatval($product['price']);
      $totalPrice += $products[$key]['total'];
    }
    $basketCount = $basketItems?count($basketItems):0;
    $deliveryPrice = $this->__get('Core')->getItem('deliveryPrice')['content'];

    $this->View()->setAssign('basketCount', $basketCount);
    $this->View()->setAssign('Articles.basketProducts', $products);
    $this->View()->setAssign('totalPrice', $totalPrice);
    $this->View()->setAssign('deliveryPrice', $deliveryPrice);

    if ($this->getRequest()->request['XHR']) {
      $this->route = 'frontend/basket/minicart';
    }
  }

  public function add()
  {
    $product_id = $this->getRequest()->get['a'];
    $quantity = (isset($this->getRequest()->get['q']) && $this->getRequest()->get['q'] > 0) ? $this->getRequest()->get['q'] : 1;
    $basketItem = $this->getBasketArticle($product_id);
    $updateQuantity = $this->getRequest()->get['updateQuantity'];

    if ($updateQuantity) {
      $basketItem['quantity'] = $quantity;
      $this->updateProduct($basketItem);
     // $basketItems = $this->view->getAssign('basketProducts');
      $basketItems = Container()->Basket()->getProductsBySession();
      $products;
      $totalPrice = 0;
      foreach ($basketItems as $key => $product) {
        $products[$key] = $this->getArticle($product['article_id']);
        $products[$key]['quantity'] = $product['quantity'];
        if ($product['discount']) {
          $products[$key]['price'] = $product['price'] - $product['price']*$product['discount']/100;
        }
        $product['price'] = $products[$key]['price'];
        $products[$key]['total'] = floatval($product['quantity'])*floatval($product['price']);
        $totalPrice += $products[$key]['total'];
      }

      $quantity = $basketItem['quantity'];
      $price = $basketItem['price'];
      $discount = $basketItem['discount'];
      $total = ($discount)?(($price-($price*$discount/100))*$quantity) : ($price*$quantity);
      $deliveryPrice = $this->__get('Core')->getItem('deliveryPrice')['content'];

      $amount;
      $amount['total'] = intval($total);
      $amount['totalPrice'] = intval($totalPrice);
      $amount['deliveryPrice'] = intval($deliveryPrice);

      exit(json_encode($amount));
    }

    if ($basketItem) {
      $basketItem['quantity'] += $quantity;

      $this->updateProduct($basketItem);
    }else{
      $product = $this->getArticle($product_id);
      $basketItem['article_name'] = $product['name'];
      $basketItem['article_id'] = $product['id'];
      $basketItem['price'] = $product['price'];
      $basketItem['discount'] = $product['discount'];
      $basketItem['quantity'] = $quantity;

      $this->setProduct($basketItem);
    }

    if ($this->getRequest()->get['XHR']) {
      $basketItems = Container()->Basket()->getProductsBySession();
      echo ($basketItems?count($basketItems):0); exit;
    }
    Router::redirect('basket/index');
  }

  public function delete()
  {
    $product_id = $this->getRequest()->get['a'];
    $basket = $this->__get('Basket');

    $basket->deleteProduct($product_id);

    if ($this->getRequest()->request['XHR']) {
      $basketItems = Container()->Basket()->getProductsBySession();
      echo($basketItems?count($basketItems):0); exit;
    }

    Router::redirect('basket/index');
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
}


 ?>
