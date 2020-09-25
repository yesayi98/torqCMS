<?
use Bundles\Search\ArticleSearchBundle;

/**
 * category Controller
 */
class categoryController extends Controller
{
  private $limit = 12;

  public function index()
  {
      if (isset($this->getRequest()->get['c'])) {
        $this->View()->setSession('category', intval($this->getRequest()->get['c']));
      }
      if ($this->getRequest()->get['sort']) {
        $sortType = $this->getRequest()->get['sort'];
      }else{
        $sortType = null;
      }

      $category_id = $this->View()->getSession('category');
      $category = $this->__get('Categories')->getCategoryById($category_id);

      $title = ucfirst($category['name']);
      $this->View()->setAssign('title', $title);
      if ($category['content'] == 1) {
        $this->View()->setAssign('Categories.custom', $category);
        $this->route = 'frontend/customs/index';
        return;
      }

      if ($category['external_url'] == 'blog') {
        $blogs = $this->__get('Blog')->getBlogsByCategory($category['id']);

        $this->View()->setAssign('Categories.category', $category);
        $this->View()->setAssign('Blog.blogs', $blogs);

        $this->route = 'frontend/blog/listing';
        return;
      }

      $products = $this->__get('Articles')->getArticlesByCategoryWithPagination($category_id, $sortType);
      $title = ucfirst($category['name']);

      $metaDesc = $this->View()->getAssign('metaDesc');
      $metaDesc .= strip_tags(htmlspecialchars_decode($product['description']));

      $this->View()->setAssign('metaDesc', $metaDesc);

      $categoryList = $this->getCategoryList(1);
      $productCount = $products['total'];

      // filter attributes
      $suppliers = $this->__get('Supplier')->getSuppliersByCategory($category_id);

      $sortings = $this->__get('Filters')->getSortingTypes();
      $filters = $this->unsetUnAvaliableFilters($this->__get('Filters')->getFilters());

      $this->View()->setAssign('productCount', $productCount);
      $this->View()->setAssign('filters', $filters);
      $this->View()->setAssign('properties', $properties);
      $this->View()->setAssign('Categories.category', $category);
      $this->View()->setAssign('suppliers', $suppliers);
      $this->View()->setAssign('sort', $sortType);
      $this->View()->setAssign('Categories.categoryList', $categoryList);
      $this->View()->setAssign('Articles.products', $products);
      $this->View()->setAssign('sortings', $sortings);

      if ($this->getRequest()->get['XHR']) {
        $this->route = 'frontend/category/listing';
      }
  }

  public function unsetUnAvaliableFilters($filters)
  {
    $category_id = $this->View()->getSession('category');

    $builder = $this->Articles->getQueryBuilder();
    $query = $builder->select()->setTable('article_options_relations');
                     $query->leftJoin(
                         'articles', //join table
                         'article_id', //origin table field used to join
                         'id', //join column
                      )->where()
                      ->equals('active', 1);
                      $query->leftJoin(
                          'article_category', //join table
                          'article_id', //origin table field used to join
                          'article_id', //join column
                       )
                      ->where()
                      ->equals('category_id', $category_id);
    $query = $query->groupBy(['value_id']);
    $builder->execute($query);
    $valueIds = array_column($builder->fetchAll(), 'value_id');
    foreach ($filters as $fil_key => $filter) {
      foreach ($filter['option']['values'] as $key => $value) {
        if (!in_array($value['id'], $valueIds)) {
          unset($filters[$fil_key]['option']['values'][$key]);
        }
      }
      if (empty($filters[$fil_key]['option']['values'])) {
        unset($filters[$fil_key]);
      }
    }

    return $filters;
  }
  /**
  * @param int $category_id
  * @return array $categories (Categories)
  */
  private function getChildrenCategories($parent_id)
  {
    $categories = $this->__get('Categories')->getCategoriesByParentId($parent_id);
    if (empty($categories)) {
      $categories = $this->__get('Categories')->getCategoriesByParentId(0);
    }
    foreach ($categories as &$category) {
      $category['productCount'] = count($this->__get('Articles')->getArticlesByCategory($category['id'], false));
    }

    return $categories;
  }


  /**
  * @param int $parent_id
  * @return array $categories (Categories)
  */
  private function getCategoryList($parent_id)
  {
    $categories = $this->__get('Categories')->getCategoriesByParentId($parent_id);
    $currentCategory_id = $this->View()->getSession('category');
    $currentCategoryIdList = $this->getParentsOfCurrentCategory($currentCategory_id);

    foreach ($categories as &$category) {
      $category['productCount'] = count($this->__get('Articles')->getArticlesByCategory($category['id'], false));
      if (in_array(intval($category['id']), $currentCategoryIdList)) {
        $category['active'] = true;
      }
      if ($category['has_subcategory']) {
        $category['subCategories'] = $this->getCategoryList($category['id']);
      }
    }

    return $categories;
  }


  /**
  * @param int $currentCategory_id
  * @return array $currentCategoryList
  */
  private function getParentsOfCurrentCategory($currentCategory_id)
  {
    $currentCategory = $this->__get('Categories')->getCategoryById($currentCategory_id);
    $currentCategoryList = array_filter(explode('|', $currentCategory['path']));

    return $currentCategoryList;
  }

  public function shop()
  {
    $this->route = 'frontend/category/index';
    $products = Container()->Articles()->getArticles();

    $this->View()->setAssign('Articles.products', $products);
    $this->View()->setAssign('title', $this->view->translating('shop'));
  }

  public function search()
  {
    $request = $this->getRequest()->request;
    $category_id = $request['c']?$request['c']:1;
    if ($this->getRequest()->get['sort']) {
      $sortType = $this->getRequest()->get['sort'];
    }else{
      $sortType = 'default';
    }

    $context['category'] = $request['c'];
    $context['options'] = $request['options'];
    $context['suppliers'] = $request['suppliers'];
    $context['price'] = $request['price'];
    $context['search'] = strtolower($request['search']);
    $context['sortType'] = $sortType;
    // create query with Articles search bundle
    $queryBundle = new ArticleSearchBundle($context);
    $query = $queryBundle->getQueryByContext();
    // get articles by query
    $articleModel = $this->Articles;
    $products = $articleModel->getArticlesByQuery($query);

    $productCount = $products['total'];

    $title = $this->View()->translating('searchby').' '.$search;
    $categoryList = $this->getCategoryList(1);
    $category = $this->__get('Categories')->getCategoryById($category_id);

    $suppliers = $this->__get('Supplier')->getSuppliersByCategory($category_id);
    $filters = $this->unsetUnAvaliableFilters($this->__get('Filters')->getFilters());
    $sortings = $this->__get('Filters')->getSortingTypes();

    $this->View()->setAssign('productCount', $productCount);
    $this->View()->setAssign('filters', $filters);
    $this->View()->setAssign('Categories.category', $category);
    $this->View()->setAssign('suppliers', $suppliers);
    $this->View()->setAssign('Categories.categoryList', $categoryList);
    $this->View()->setAssign('Articles.products', $products);
    $this->View()->setAssign('title', $title);
    $this->View()->setAssign('sort', $sortType);
    $this->View()->setAssign('sortings', $sortings);
    $this->View()->setAssign('context', $context);

    $this->View()->setAssign('search', $search);
    if ($request['XHR']) {
      $this->route = 'frontend/category/listing';
      return;
    }

    $this->route = 'frontend/category/index';
  }
}

?>
