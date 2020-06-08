<?php
namespace Models\ArticleImages;
/**
 *
 */
class ArticleImages extends \Media
{

  // returns article images with certain id
  public function getArticleImages($articleId = NULL)
  {
    if(!$articleId){
      return;
    }
    $sql = "SELECT media_id FROM article_images ai
            WHERE ai.article_id = $articleId";

    $imageIds = Connection()->fetchAll($sql);
    $images = [];
    foreach ($imageIds as $key => $id) {
      $images[] = $this->getMedia($id['media_id']);
    }

    return $images;
  }

  public function setArticleImage($file)
  {
    $mediaId = parent::setMedia($file);

    return $mediaId;
  }

  public function setArticleImageId($articleId, $imageId)
  {

    if(!$articleId || !$imageId){
      return false;
    }
    $sql = "INSERT INTO article_images (article_id, media_id) VALUES ($articleId, $imageId)";
    $query = Connection()->set($sql);
    if($query){
      return true;
    }
    else {
      return false;
    }
  }
  public function deleteArticleImage($mediaId, $articleId)
  {

    if(!$mediaId || !$articleId){
      return false;
    }
    $mediaId = intval($mediaId);
    $articleId = intval($articleId);
    $sql = "DELETE FROM article_images WHERE media_id = $mediaId AND article_id = $articleId LIMIT 1";

    $query = Connection()->set($sql);

    return $query;
  }
}


 ?>
