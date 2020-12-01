<?
namespace Controllers\Frontend;

/**
 * product Controller
 */
class detailController extends \Controller
{

  public function index()
  {
    $requestCategoryId = $this->View()->getSession('category');
    $requestCategory = Container()->Categories()->getCategoryById($requestCategoryId);
    $productId = intval($this->getRequest()->get['a']);
    $product = Container()->Articles()->getArticleById($productId);
    $category = Container()->Categories()->getCategoryById($product['category_id'][0]['category_id']);
    $similarProducts = Container()->Articles()->getArticlesByCategory($product['category_id'][0]['category_id'], 12);
    $metaKeys = $this->View()->getAssign('metaKeys');
    $metaKeys .= $product['keywords'];

    $breadcrumps = $this->makeBreadCrumps($category['path']);

    $this->View()->setAssign('breadcrumps', $breadcrumps);
    $this->View()->setAssign('metaKeys', $metaKeys);

    $title = ucfirst($product['name']);

    $metaDesc = $this->View()->getAssign('metaDesc');
    $metaDesc .= strip_tags($product['description']);

    // set a last seen product
    $lastSeenProducts = $this->View()->getSession('last_seen')?$this->View()->getSession('last_seen'):array();
    if (!empty($lastSeenProducts)) {
      $this->View()->setAssign('last_seen', true);
    }

    if (!in_array($productId, $lastSeenProducts)) {
      if (count($lastSeenProducts) == 15) {
        array_shift($lastSeenProducts);
      }
      array_unshift($lastSeenProducts, $productId);
    }
    // set products to session
    $this->View()->setSession('last_seen', $lastSeenProducts);

    $this->View()->setAssign('metaDesc', $metaDesc);
    $this->View()->setAssign('title', $title);

    $this->View()->setAssign('Categories.requestCategory', $requestCategory);
    $this->View()->setAssign('Categories.category', $category);
    $this->View()->setAssign('Articles.product', $product);
    $this->View()->setAssign('Articles.similarProducts', $similarProducts);
  }

  private function makeBreadCrumps($path)
  {
    if (empty($path)) {
      return;
    }

    $paths = array_filter(explode('|', $path));
    $categoryModel = $this->__get('Categories');

    foreach ($paths as $key => $id) {
      $breadcrupms[] = $categoryModel->getCategoryById($id);
    }

    return $breadcrupms;
  }

  public function quickView()
  {
      $this->route = "frontend/detail/content";

    $requestCategoryId = $this->View()->getSession('category');

    $requestCategory = Container()->Categories()->getCategoryById($requestCategoryId);
    $productId = intval($this->getRequest()->get['a']);
    $product = Container()->Articles()->getArticleById($productId);
    $category = Container()->Categories()->getCategoryById($product['category_id'][0]['category_id']);
    $popularProducts = Container()->Articles()->getPopularArticles()['data'];

    $metaKeys = $this->View()->getAssign('metaKeys');
    $metaKeys .= $product['keywords'];

    $this->View()->setAssign('metaKeys', $metaKeys);

    $title = ucfirst($product['name']);

    $metaDesc = $this->View()->getAssign('metaDesc');
    $metaDesc .= strip_tags($product['description']);

    $currentCurId = $this->View()->getSession('currency');
    $currentCur = $this->__get('Currencies')->getCurrency($currentCurId);

    // set a last seen product
    $lastSeenProducts = $this->View()->getSession('last_seen')?$this->View()->getSession('last_seen'):array();

    if (!in_array($productId, $lastSeenProducts)) {
      if (count($lastSeenProducts) == 15) {
        array_shift($lastSeenProducts);
      }
      array_unshift($lastSeenProducts, $productId);
    }
    // set products to session
    $this->View()->setSession('last_seen', $lastSeenProducts);

    $this->View()->setAssign('metaDesc', $metaDesc);
    $this->View()->setAssign('currentCur', $currentCur);

    $this->View()->setAssign('Categories.requestCategory', $requestCategory);
    $this->View()->setAssign('Categories.category', $category);
    $this->View()->setAssign('Articles.product', $product);
    $this->View()->setAssign('Articles.popularProducts', $popularProducts);
  }

  // action for last seen products
  public function lastseen()
  {
    // get last seen product ids from session
    $lastSeenProductIDs = $this->View()->getSession('last_seen');
    $articleModel = $this->__get('Articles');
    // get products
    $products = array();
    foreach ($lastSeenProductIDs as $id) {
      $products[] = $articleModel->getArticleById($id);
    }
    $component['title'] = $this->View()->translating('lastSeenProducts');
    $this->View()->setAssign('Articles.items', $products);
    $this->View()->setAssign('component', $component);
    $this->route = "frontend/emotions/components/article_slider";
  }

  public function rate()
  {
    $request = $this->getRequest()->request;

    $rating['rating_count'] = ($request['rating'] <= 5)?$request['rating']:5;
    $rating['comment'] = $request['comment'];
    $rating['article_id'] = $request['article_id'];
    $rating['user_id'] = Container()->getCurrentUser()['id'];
    $rating['active'] = 0;

    // same as $this->__get('Articles');
    $articleModel = $this->Articles;
    $success = $articleModel->setArticleReview($rating);
    if ($success) {
      $messageSelector = 'success_review';
    }else{
      $messageSelector = 'error_review';
    }
    $message = $this->View()->translating($messageSelector);

    if ($request['XHR']) {
      die(json_encode([
        'success' => $success,
        'message' => $message
      ]));
    }

    Router::redirect('detail?a='.$request['article_id']);
  }
}

?>
