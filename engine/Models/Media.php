<?php

  use Bundles\Files\MediaBundle;
  /**
   * @abstract class Model
   */
  class Media extends \Model {
    // returns mediaID or error message

    public function setMedia($file)
    {
      $mediaBundle = new MediaBundle($file);

      try {
        $mediaBundle->createFile();
        $media = $mediaBundle->getCreatedFile();
      } catch (\Exception $e) {
        Connection()->setError($e);
        return false;
      }

      $query = $this->insert('media', $media);
      $media['id'] = Connection()->getLastInserted();
      return $query;
    }

    public function getMedia($mediaId){

      if(!$mediaId){
        return;
      }

      $sql = "SELECT * FROM media WHERE id = $mediaId";

      $media = Connection()->fetchOne($sql);
      if (empty($media['path'])) {
        $media['name'] = 'no-image';
        $media['path'] = $this->imagePath.'noimagefound.jpg';
      }
      $media['path'] = Router::url($media['path']);
      $media['thumbnails'] = $this->getMediaThumbnails($media['id']);
      return $media;
    }


    public function getAllMedia($all = false){

      $sql = "SELECT * FROM media ORDER BY id DESC";
      if (!$all) {
        $allMedia = Connection()->query($sql);
        foreach ($allMedia['data'] as &$image) {
          $image['path'] = Router::url($image['path']);
        }
      }else{
        $allMedia = Connection()->fetchAll($sql);
        foreach ($allMedia as &$image) {
          $image['path'] = Router::url($image['path']);
        }
      }


      return $allMedia;
    }

    public function getAlbumList()
    {
      $albums = $this->getList('media_albums', 'all');

      return $albums;
    }

    public function getAlbum($id)
    {
      $sql = "SELECT * FROM media_albums WHERE id = $id";
      $album = Connection()->fetchOne($sql);

      return $album;
    }

    public function getMediaByAlbum($album)
    {
      $sql = "SELECT * FROM media WHERE album = $album";
      $media = Connection()->query($sql);
      foreach ($media['data'] as &$image) {
        $image['path'] = Router::url($image['path']);
      }
      return $media;
    }

    public function deleteMedia($id){
      $id = intval($id);

      $sql = "SELECT * FROM media WHERE id = $id";

      $media = Connection()->fetchOne($sql);
      $deleted = unlink($this->mediaPath.$media['name'].'.'.$media['extension']);
      $this->deleteMediaThumbnailByMedia($id);
      $deleted = true;
      if ($deleted) {
        $sql = "DELETE FROM media WHERE id = $id";
        $query = Connection()->set($sql);
        return Connection()->set("DELETE FROM article_images WHERE media_id = $id");
      }else{
        return false;
      }

    }


    //handling thumbnails

    /**
    * @param array $thumbnail
    * @return bool $query
    */
    public function setMediaThumbnail($thumbnail)
    {
      if (!$thumbnail) {
        return;
      }
      $media_id = $thumbnail['media_id'];
      $thumb_name = $thumbnail['thumb_name'];
      $thumb_path = $thumbnail['thumb_path'];
      $thumb_extension = $thumbnail['thumb_extension'];
      $size = $thumbnail['size'];
      $sql = "INSERT INTO media_thumbnails (
                media_id,
                thumb_name,
                thumb_path,
                thumb_extension,
                size
              ) VALUES (
                '$media_id',
                '$thumb_name',
                '$thumb_path',
                '$thumb_extension',
                '$size'
              )";

      $query = Connection()->set($sql);
      return $query;

    }

    /**
    * @param array $thumbnail
    * @return bool $query
    */
    public function updateMediaThumbnail($thumbnail)
    {
      if (!$thumbnail) {
        return;
      }
      $id = $thumbnail['id'];
      $media_id = $thumbnail['media_id'];
      $thumb_name = $thumbnail['thumb_name'];
      $thumb_path = $thumbnail['thumb_path'];
      $thumb_extension = $thumbnail['thumb_extension'];
      $size = $thumbnail['size'];
      $sql = "UPDATE media_thumbnails SET
                     media_id = '$media_id',
                     thumb_name = '$thumb_name',
                     thumb_path = '$thumb_path',
                     thumb_extension = '$thumb_extension',
                     size = '$size'
              WHERE id = $id";

      $query = Connection()->set($sql);
      return $query;
    }

    /**
    * @param integer $thumbnail_id
    * @return bool $query
    */
    public function deleteMediaThumbnail($thumbnail_id)
    {
      if (!$thumbnail_id) {
        return;
      }

      $sql = "DELETE FROM media_thumbnails WHERE id = '$thumbnail_id'";

      $query = Connection()->set($sql);
      return $query;
    }
    /**
    * @param integer $media_id
    * @return bool $query
    */
    public function deleteMediaThumbnailByMedia($media_id)
    {
      if (!$media_id) {
        return;
      }

      $sql = "DELETE FROM media_thumbnails WHERE media_id = '$media_id'";

      $query = Connection()->set($sql);
      return $query;
    }

    /**
    * @param integer $media_id
    * @return array $thumbnails
    */
    public function getMediaThumbnails($media_id)
    {
      if (!$media_id) {
        return;
      }
      $sql = "SELECT * FROM media_thumbnails WHERE media_id = '$media_id'";

      $thumbnails = Connection()->fetchAll($sql);
      foreach ($thumbnails as &$thumbnail) {
        $thumbnail['thumb_path'] = Router::url($thumbnail['thumb_path']);
      }
      return $thumbnails;
    }

    /**
    * @param integer $thumbnail_id
    * @return array $thumbnail
    */
    public function getMediaThumbnail($thumbnail_id)
    {
      if (!$thumbnail_id) {
        return;
      }
      $sql = "SELECT * FROM media_thumbnails WHERE id = '$thumbnail_id'";

      $thumbnails = Connection()->fetchOne($sql);

      return $thumbnails;
    }




  }




 ?>
