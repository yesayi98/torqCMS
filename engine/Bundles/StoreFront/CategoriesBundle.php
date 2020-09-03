<?php

/**
 *
 */
class CategoriesBundle extends StoreFrontBundle
{

  /**
   * required method setInstance
   * set to instances from know which Models is used
   */
  public function setInstance()
  {
    return $this->instance = $this->container->Categories();
  }

  /**
   * required method storeFrontHandler
   * storeFrontHandler calls after getting data
   */
  public function storeFrontHandler(array $categories)
  {
    if ($this->lang['id'] != 1) {
      $value = $this->translateCategories($categories);
    }else{
      return $categories;
    }
  }


  // translate Categories array
  public function translateCategories(array $categories)
  {
    $lang = $this->lang['id'];

    if (!$categories) {
      return;
    }

    if ($articles["data"]) {
      $categoriesWithPagination = $categories;
      $categories = $categoriesWithPagination["data"];
    }elseif (!$categories[0]) {
      $data = $categories;
      unset($categories);
      $categories[0] = $data;
    }
    foreach ($categories as &$category) {
      $categoryTranslation = $this->Categories()->CategoryTranslation()->getCategoryTranslation($category['id'], $lang);
      $category['name'] = $categoryTranslation['name'];
      $category['description'] = $categoryTranslation['description'];
    }
    if (isset($categoriesWithPagination)) {
      $categoriesWithPagination['data'] = $categories;
      return $categoriesWithPagination;
    }
    if (isset($data)) {
      return $categories[0];
    }else{
      return $categories;
    }
  }

}



 ?>
