<?php
use Models\CategoryTranslation\CategoryTranslation;

/**
 *
 */
class Categories extends Model
{
  private $table = "categories";


  public function CategoryTranslation()
  {
    return new CategoryTranslation($this->container);
  }


  public function getCategoriesByCondition($by, $condition)
  {
    $result = $this->get($this->table, $condition, $by);

    return $result;
  }


  // returns all categories
  public function getCategories($parent = 0)
  {

    $categories = $this->getCategoriesByParentId($parent);

    foreach ($categories as &$category) {
      if (!empty($category['has_subcategory'])) {
        $category['subcategories'] = $this->getCategories($category['id']);
      }
    }


    return $categories;
  }

  public function getCategoryList($limit = "all")
  {
    $categories = $this->getList($this->table, $limit);

    return $categories;
  }

  public function getCategoriesByParentId($parent_id)
  {
    $parent_id = intval($parent_id);
    if (!is_int($parent_id)) {
      return;
    }




    $sql = "SELECT * FROM categories WHERE parent_id = $parent_id ORDER BY sort_id";
    $categories = Connection()->fetchAll($sql);

    foreach ($categories as &$category) {
      $category["image"] = $this->getCategoryImage($category['image_id']);
    }

    return $categories;
  }


  public function getCategoryById($categoryId)
  {
    $categoryId = intval($categoryId);
    if(!$categoryId ){
      return;
    }

    $sql = "SELECT *
            FROM categories
            WHERE id = $categoryId" ;
    $category = Connection()->fetchOne($sql);

    $category['image'] = $this->getCategoryImage(intval($category['image_id']));

    return $category;
  }



  protected function getCategoryImage($mediaId)
  {
    if(!$mediaId){
      return;
    }

    $image = $this->container->Media()->getMedia($mediaId);
    return $image;
  }

  public function setCategory(array $category){

    $parent_id = $category['parent_id'];
    $query = $this->insert('categories', $category);
    var_dump($this->getInsertedId());exit;
    $path = implode('|', array_reverse($this->getParentsOfCurrentCategory($this->getLastInsertedId())));
    if($path){
      $sql = "UPDATE categories SET
                path = '$path'
              WHERE id = '$id';";
              $query = Connection()->set($sql);
    }
    if($parent_id > 0){
      $sql = "UPDATE categories SET
                has_subcategory = 1
              WHERE id = '$parent_id';";
              $query = Connection()->set($sql);

    }
    $this->slugMaker($data['path']);

    return $query;
  }

  public function deleteCategory($category_id)
  {
    if(!$category_id){
      return;
    }
    $category_id = intval($category_id);


    $sql = "DELETE FROM categories WHERE id = $category_id";
    $query = $this->delete('categories', $category_id, 'id');

    if ($query) {
      $this->delete('categories', $category_id, 'parent_id');
    }
    return $query;
  }

  public function updateCategory(array $data)
  {

    $mediaId = $data['media_id'];

    if ($mediaId) {
      $imageId = $mediaId;
    }else{
      $imageId = 0;
    }

    $parent_id = $data['parent_id'];
    $data['path'] = implode('|', array_reverse($this->getParentsOfCurrentCategory($data['id'])));
    if($parent_id > 0){
      $sql = "UPDATE categories SET
                has_subcategory = 1
              WHERE id = '$parent_id';";
              $query = Connection()->set($sql);

    }

    $query = $this->update('categories', $data);
    $this->slugMaker($data['path']);
    return $query;
  }

  /**
  * @param int $currentCategory_id
  * @param array $currentCategoryList
  * @return array $currentCategoryList
  */
  private function getParentsOfCurrentCategory($currentCategory_id, $currentCategoryList = [])
  {
    $currentCategoryList[] = $currentCategory_id;
    $currentCategory = $this->getCategoryById($currentCategory_id);
    if ($currentCategory['parent_id'] != 0) {
      $currentCategoryList = $this->getParentsOfCurrentCategory(intval($currentCategory['parent_id']), $currentCategoryList);
    }
    return $currentCategoryList;
  }

  private function slugMaker($path = '')
  {
    if (empty($path)) {
       return;
    }

    $paths = array_filter(explode('|', $path));
    $slug = '';
    foreach ($paths as $key => $value) {
      $categoryName = $this->getCategoryById($value)['name'];
      $slug .= SlugConverter::slug($categoryName).'/';
    }

    $params = 'route=category&c='.end($paths);
    $originalUrl = 'category?c='.end($paths);

    $coreUrlsModel = $this->container->CoreUrls();

    $data = $coreUrlsModel->getUrlByOriginal($originalUrl);
    if (empty($data['id'])) {
      $data['params'] = $params;
      $data['original_url'] = $originalUrl;
      $data['changed_url'] = $slug;
      $coreUrlsModel->setUrl($data);
    }else{
      $data['params'] = $params;
      $data['original_url'] = $originalUrl;
      $data['changed_url'] = $slug;
      $coreUrlsModel->updateUrl($data);
    }
  }

}



 ?>
