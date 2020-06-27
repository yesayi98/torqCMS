<?php

namespace Models\ArticleTranslation;
/**
 *
 */
class ArticleTranslation extends \Model
{

  public function getArticleTranslation($articleId, $langId = null){

    if (!$articleId) {
      return;
    }

    $sql = "SELECT * FROM article_translations WHERE article_id = $articleId";

    if($langId){
      $sql .= " AND lang_id = $langId";
    }

    $translation = Connection()->fetchAll($sql);

    if (count($translation) == 1) {
      return $translation[0];
    }

    return $translation;
  }

  public function saveTranslation(array $article)
  {
    if(empty($article)){
      return;
    }

    $query = $this->insert('article_translations', $article);

    return $query;
  }

  public function updateTranslation(array $article)
  {

    if(!$article){
      return;
    }
    $name = $article['name'];
    $id = $article['translation_id'];
    $description = $article['description'];
    $author = $article['author'];
    $langId = $article['lang_id'];
    $article_id = $article['article_id'];

    $sql = "UPDATE article_translations SET
                            name = '$name',
                            description = '$description',
                            author = '$author'
                  WHERE lang_id = $langId AND article_id = $article_id";
    $query = Connection()->set($sql);

    return $query;
  }
}
 ?>
