<?
/**
 * product Controller
 */
class detailController extends Controller
{

  public function index()
  {
    $requestCategoryId = $_SESSION['category'];
    $requestCategory = Container()->Categories()->getCategoryById($requestCategoryId);
    $productId = intval($this->getRequest()->get['a']);
    $product = Container()->Articles()->getArticleById($productId);
    $category = Container()->Categories()->getCategoryById($product['category_id'][0]['category_id']);
    $similarProducts = Container()->Articles()->getArticlesByCategory($product['category_id'][0]['category_id'], 12);
    $metaKeys = $this->View()->getAssign('metaKeys');
    $metaKeys .= $product['keywords'];

    $this->View()->setAssign('metaKeys', $metaKeys);

    $title = ucfirst($product['name']);

    $metaDesc = $this->View()->getAssign('metaDesc');
    $metaDesc .= strip_tags($product['description']);

    $this->View()->setAssign('metaDesc', $metaDesc);
    $this->View()->setAssign('title', $title);

    $this->View()->setAssign('Categories.requestCategory', $requestCategory);
    $this->View()->setAssign('Categories.category', $category);
    $this->View()->setAssign('Articles.product', $product);
    $this->View()->setAssign('Articles.similarProducts', $similarProducts);
  }

  public function quickView()
  {
      $this->route = "frontend/detail/content";

    $requestCategoryId = $_SESSION['category'];
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


    $this->View()->setAssign('metaDesc', $metaDesc);
    $this->View()->setAssign('currentCur', $currentCur);

    $this->View()->setAssign('Categories.requestCategory', $requestCategory);
    $this->View()->setAssign('Categories.category', $category);
    $this->View()->setAssign('Articles.product', $product);
    $this->View()->setAssign('Articles.popularProducts', $popularProducts);
  }

}

?>
