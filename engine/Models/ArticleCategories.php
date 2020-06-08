<?php
namespace Models\ArticleCategories;

/**
 *
 */
class ArticleCategories extends \Model
{

  // returns article category with certain id
  public function getArticleCategories($articleId = NULL)
  {

    if(!$articleId){
      return;
    }
    $sql = "SELECT * FROM article_category ac
            LEFT JOIN categories c ON ac.category_id = c.id
            WHERE ac.article_id = $articleId";
    $categories = Connection()->fetchAll($sql);

    return $categories;
  }


  public function setArticleCategoryId($articleId, $categoryId)
  {
    if(!$articleId || !$categoryId){
      return false;
    }
    $sql = "SELECT * FROM article_category
            WHERE article_id = $articleId AND category_id = $categoryId";
    $category = Connection()->fetchOne($sql);
    if ($category) {
      return true;
    }

      $sql = "INSERT INTO article_category (article_id, category_id) VALUES ($articleId, $categoryId)";
      $query = Connection()->set($sql);

      if ($query) {
        $parentSql = "SELECT parent_id FROM categories WHERE id = $categoryId";
        $parentCategoryId = Connection()->fetchOne($parentSql)['parent_id'];
        if (intval($parentCategoryId) > 0) {
          $this->setArticleCategoryId($articleId, $parentCategoryId);
        }
      }

    return $query;
  }
  public function deleteArticleCategory($categoryId, $articleId)
  {
    if(!$categoryId || !$articleId){
      return false;
    }
    $categoryId = intval($categoryId);
    $articleId = intval($articleId);
    $sql = "DELETE FROM article_category WHERE category_id = $categoryId AND article_id = $articleId LIMIT 1";

    $query = Connection()->set($sql);

    return $query;


  }
}


 ?>
