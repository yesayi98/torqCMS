<?php

namespace Models\CategoryTranslation;
/**
 *
 */
class CategoryTranslation extends \Model
{

  public function getCategoryTranslation($categoryId, $langId){

    if (!$categoryId) {
      return;
    }

    $sql = "SELECT * FROM category_translation WHERE category_id = $categoryId";

    if($langId){
      $sql .= " AND lang_id = $langId";
    }

    $translation = Connection()->fetchOne($sql);

    return $translation;
  }
  public function saveTranslation(array $category)
  {

    if(empty($category)){
      return;
    }

    $query = $this->insert('category_translation', $category);

    return $query;
  }

  public function updateTranslation(array $category)
  {

    if(!$category){
      return;
    }
    $name = $category['name'];
    $id = $category['translation_id'];
    $description = $category['description'];
    $langId = $category['lang_id'];

    $sql = "UPDATE category_translation SET
                            name = '$name',
                            description = '$description'
                  WHERE id = $id";
    $query = Connection()->set($sql);

    return $query;
  }
}
 ?>
