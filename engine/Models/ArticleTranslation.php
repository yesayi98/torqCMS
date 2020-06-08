<?php

namespace Models\ArticleTranslation;
/**
 *
 */
class ArticleTranslation extends \Model
{

  function __construct()
  {
  }

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

    $name = $article['name'];
    $description = $article['description'];
    $author = $article['author'];
    $langId = $article['lang_id'];
    $articleId = $article['article_id'];

    $sql = "INSERT INTO article_translations (
                            name,
                            description,
                            author,
                            lang_id,
                            article_id
                        ) VALUES (
                            '$name',
                            '$description',
                            '$author',
                            '$langId',
                            '$articleId'
                        )";
    $query = Connection()->set($sql);

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
