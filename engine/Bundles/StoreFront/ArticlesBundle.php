<?php

/**
 *
 */
class ArticlesBundle extends StoreFrontBundle
{

  /**
   * required method setInstance
   * set to instances from know which Models is used
   */
  public function setInstance()
  {
    return $this->instance = $this->container->Articles();
  }

  /**
   * required method storeFrontHandler
   * storeFrontHandler calls after getting data
   */
  public function storeFrontHandler(array $articles)
  {
    if ($this->lang != 1) {
      $value = $this->translateArticles($articles);
    }
    if ($this->currency['default'] != 1) {
      $value = $this->setPrices($articles);
    }
  }

  //set prices by currency
  public function setPrices(array $articles)
  {
    if (!$articles) {
      return;
    }
    if ($articles["data"]) {
      $articlesWithPagination = $articles;
      $articles = $articlesWithPagination["data"];
    }elseif(!$articles[0]){
      $data = $articles;
      unset($articles);
      $articles[0] = $data;
    }
    $currencyCourse = $this->currency['course'];

    foreach ($articles as &$article) {

      $article['price'] = round($article['price']/$currencyCourse, 2);

    }
    if (isset($articlesWithPagination)) {
      $articlesWithPagination['data'] = $articles;
      return $articlesWithPagination;
    }
    if (isset($data)) {
      return $articles[0];
    }else{
      return $articles;
    }

  }

  // translate Article array
  public function translateArticles(array $articles)
  {
    if (!$articles) {
      return;
    }
    $lang = $this->lang;

    if ($articles["data"]) {
      $articlesWithPagination = $articles;
      $articles = $articlesWithPagination["data"];
    }elseif(!$articles[0]){
      $data = $articles;
      unset($articles);
      $articles[0] = $data;
    }
    foreach ($articles as &$article) {
      $articleTranslation = $this->Articles()->ArticleTranslation()->getArticleTranslation($article['id'], $lang['id']);
      $article['name'] = $articleTranslation['name'];
      $article['description'] = $articleTranslation['description'];
      $article['author'] = $articleTranslation['author'];
      $article['categoryName'] = $this->Categories()->CategoryTranslation()->getCategoryTranslation($artcile['category_id'], $lang['id'])['name'];
    }
    if (isset($articlesWithPagination)) {
      $articlesWithPagination['data'] = $articles;
      return $articlesWithPagination;
    }
    if (isset($data)) {
      return $articles[0];
    }else{
      return $articles;
    }

  }
}



 ?>
