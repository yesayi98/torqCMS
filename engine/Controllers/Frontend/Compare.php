<?php

/**
 * compare controller class extends abstract class Controller
 */
class compareController extends Controller
{
  // default action index
  public function index()
  {
    // get compare product ids from session
    $productIDs = $this->View()->getSession('compare');

    // get compare products
    $products = [];
    $options = [];
    $peoductModel = $this->__get('Articles');
    foreach ($productIDs as $key => $productID) {
      $product = $peoductModel->getArticleById($productID);
      $products[] = $product;
      $options = array_merge(array_column($product['options'], 'name'), $options);
    }
    $options = array_unique($options);
    // set products to view
    $this->View()->setAssign('Articles.products', $products);
    $this->View()->setAssign('options', $options);
  }

  // add action
  // add product to compare session
  public function add()
  {
    // get request
    $request = $this->getRequest()->request;
    // get product ID from request
    $product_id = $request['a'];
    // get product ids from session
    $compareProducts = $this->View()->getSession('compare')?$this->View()->getSession('compare'):array();

    if (!in_array($product_id, $compareProducts)) {
      $compareProducts[] = $product_id;
    }
    // set products to session
    $this->View()->setSession('compare', $compareProducts);

    // for ajax request
    if ($request['XHR']) {
      die(json_encode([
          'success' => true,
          'message' => $this->View()->translating('compare_item_set'),
          'count' => count($compareProducts),
        ]));
    }

    Router::redirect('compare');
  }

  // delete action
  // delete products from compare session
  public function delete()
  {
    // get request
    $request = $this->getRequest()->request;
    // get product ID from request
    $product_id = $request['a'];
    // get product ids from session
    $compareProducts = $this->View()->getSession('compare', $compareProducts)?$this->View()->getSession('compare', $compareProducts):array();

    if (in_array($product_id, $compareProducts)) {
      // unseting product from compare session
      $key = array_search($product_id, $compareProducts);
      unset($compareProducts[$key]);
    }

    $this->View()->setSession('compare', $compareProducts);

    if ($request['XHR']) {
      die(json_encode([
          'success' => true,
          'message' => $this->View()->translating('compare_item_deleted'),
          'count' => count($compareProducts),
        ]));
    }

    Router::redirect('compare');
  }
}


 ?>
