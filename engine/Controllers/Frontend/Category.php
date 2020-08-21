<?
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

      $filterGroups = $this->__get('Filters')->getFilters();
      $filters;
      foreach ($filterGroups as $filterGroup) {
        $filters[] = $this->getFiltersByGroupName($filterGroup);
        $properties[] = $this->getFiltersByPropertyName($filterGroup);
      }

      $this->View()->setAssign('productCount', $productCount);
      // $this->View()->setAssign('filters', $filters);
      $this->View()->setAssign('properties', $properties);
      $this->View()->setAssign('Categories.category', $category);
      $this->View()->setAssign('suppliers', $suppliers);
      $this->View()->setAssign('sort', $sortType);
      $this->View()->setAssign('Categories.categoryList', $categoryList);
      $this->View()->setAssign('Articles.products', $products);

      if ($this->getRequest()->get['XHR']) {
        $this->route = 'frontend/category/listing';
      }
  }

    /**
    * @param int $filterGroup
    * @param bool $addUnsortedFilternames
    * @return array $filter
    */
  private function getFiltersByGroupName($filterGroup, $addUnsortedFilternames = true)
  {
    $articleModel = $this->__get('Articles');
    if (!$filterGroup) {
      return;
    }
    if ($addUnsortedFilternames) {
      $unsortedFilterName = $this->View()->translating('unsorted');
    }else{
      $unsortedFilterName = null;
    }

    $filterValueList = $articleModel->getArticleAttributeValueTypes($filterGroup);
    // $filterValueList = $articleModel->getArticleOptionTypes($filterGroup);
    $filter;
    $filter['filter_name'] = $filterGroup['name'];

    foreach ($filterValueList as $key => $value) {
      $filter['filter_values'][$key]['value'] = (!empty($value[$filterName]))?$value[$filterName]:$unsortedFilterName;
    }

    return $filter;
  }

    /**
    * @param int $filterGroup
    * @param bool $addUnsortedFilternames
    * @return array $filter
    */
  private function getFiltersByPropertyName($filterGroup, $addUnsortedFilternames = true)
  {
    $articleModel = $this->__get('Articles');
    if (!$filterGroup) {
      return;
    }
    if ($addUnsortedFilternames) {
      $unsortedFilterName = $this->View()->translating('unsorted');
    }else{
      $unsortedFilterName = null;
    }

    // $filterValueList = $articleModel->getArticleAttributeValueTypes($filterGroup);
    $filterValueList = $articleModel->getArticleOptionTypes($filterGroup);
    $filter;
    $filter['filter_name'] = $filterGroup['name'];

    foreach ($filterValueList as $key => $value) {
      $filter['filter_values'][$key]['value'] = $value['value'];
    }
    $filter['filter_values'][$key+1]['value'] = $unsortedFilterName;

    return $filter;
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
  * @param array $currentCategoryList
  * @return array $currentCategoryList
  */
  private function getParentsOfCurrentCategory($currentCategory_id, $currentCategoryList = [])
  {
    $currentCategoryList[] = $currentCategory_id;
    $currentCategory = $this->__get('Categories')->getCategoryById($currentCategory_id);
    if ($currentCategory['parent_id'] != 0) {
      $currentCategoryList = $this->getParentsOfCurrentCategory(intval($currentCategory['parent_id']), $currentCategoryList);
    }

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
    $category = $request['c'];
    if ($this->getRequest()->get['sort']) {
      $sortType = $this->getRequest()->get['sort'];
    }else{
      $sortType = null;
    }
    $search = $request['search'];
    $pricing;
    $context;
    // $suppliers = $this->getSuppliersByRequest($request['supplier']);
    if (!empty($request['group'])) {
      $groups = $this->getGroupsByRequest($request['group']);
    }
    if (!empty($request['properties'])) {
      $properties = $this->getPropertiesByRequest($request['properties']);
    }
    $pricing = $request['price'];
    // $context['suppliers'] = $suppliers;
    $context['groups'] = $groups;
    $context['properties'] = $properties;
    $context['pricing'] = $pricing;
    $context['category'] = $category;
    $context['search'] = mb_strtolower($search);
    $context['sortType'] = $sortType;

    //getting Articles
    $articleModel = $this->__get('Articles');
    $articleModel->createQueryByContext($context);
    $products = $articleModel->getArticlesByQuery();

    $productCount = $products['total'];

    $title = $this->View()->translating('searchby').' '.$search;
    $categoryList = $this->getCategoryList(1);
    $category = $this->__get('Categories')->getCategoryById($category);
    $filterGroups = $this->__get('Filters')->getFilters();
    $filters;
    foreach ($filterGroups as $filterGroup) {
      $filters[] = $this->getFiltersByGroupName($filterGroup);
      $properties[] = $this->getFiltersByPropertyName($filterGroup);
    }

    $this->View()->setAssign('productCount', $productCount);
    // $this->View()->setAssign('filters', $filters);
    $this->View()->setAssign('properties', $properties);
    $this->View()->setAssign('Categories.category', $category);
    // $this->View()->setAssign('suppliers', $suppliers);
    $this->View()->setAssign('Categories.categoryList', $categoryList);
    $this->View()->setAssign('Articles.products', $products);
    $this->View()->setAssign('title', $title);
    $this->View()->setAssign('sort', $sortType);

    $this->View()->setAssign('search', $search);
    if ($request['XHR']) {
      $this->route = 'frontend/category/listing';
      return;
    }

    $this->route = 'frontend/category/index';
  }

  /**
  * @param array $groupContexts
  * @return array $groups
  */
  private function getGroupsByRequest($groupContexts)
  {
    $filterGroups = $this->__get('Filters')->getFilters();
    $filters;
    foreach ($filterGroups as $filterGroup) {
      $filters[] = $this->getFiltersByGroupName($filterGroup, false);
      $properties[] = $this->getFiltersByPropertyName($filterGroup, false);
    }
    foreach ($groupContexts as $key => $groupContext) {
      if (!is_int($key)) {
        continue;
      }
      $groupContext = explode('_', $groupContext);

      $groups[$key]['name'] = $filters[$groupContext[0]]['filter_name'];
      $groups[$key]['value'] = $filters[$groupContext[0]]['filter_values'][$groupContext[1]]['value'];

    }
    return $groups;
  }
  /**
  * @param array $groupContexts
  * @return array $groups
  */
  private function getPropertiesByRequest($propertyContexts)
  {
    $filterGroups = $this->__get('Filters')->getFilters();
    $filters;
    foreach ($filterGroups as $filterGroup) {
      $filters[] = $this->getFiltersByPropertyName($filterGroup, false);
    }
    foreach ($propertyContexts as $key => $propertyContext) {
      if (!is_int($key)) {
        continue;
      }
      $propertyContext = explode('_', $propertyContext);

      $properties[$key]['name'] = $filters[$propertyContext[0]]['filter_name'];
      $properties[$key]['value'] = $filters[$propertyContext[0]]['filter_values'][$propertyContext[1]]['value'];

    }
    return $properties;
  }


  /**
  * @param array $supplierIds
  * @return array $suppliers
  */
  private function getSuppliersByRequest($supplierIds)
  {
    $suppliers = [];
    $supplierModel = $this->__get('Supplier');
    foreach ($supplierIds as $key => $supplierId) {
      if (!is_int($key)) {
        continue;
      }
      $supplier = $supplierModel->getSupplier($supplierId);
      $suppliers[$key]['name'] = 'name';
      $suppliers[$key]['value'] = $supplier['name'];
    }

    return $suppliers;
  }
}

?>
