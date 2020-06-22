<?php
  /**
   * @abstract class Model
   */
  class Media extends \Model {
    public $imagePath;
    private $mediaPath;

    function __construct($container)
    {
      $this->imagePath = "media/img/";
      $this->imagethumbpath = "media/thumbnails/";
      $this->mediaPath = DOCUMENT_ROOT."/media/img/";
      $this->mediathumbpath = DOCUMENT_ROOT."/media/thumbnails/";
      $this->container = $container;

    }
    // returns mediaID or error message

    public function setMedia($file)
    {
      $mediaPath = $this->mediaPath;
      $imagePath = $this->imagePath;
      if(!$file){
        return 0;
      }
      // responced data
      $name = $file['name'];
  		$tmp = $file['tmp_name'];
  		$size = $file['size'];
      $album_id = $file['album_id'];
      $size = round($size/1024);
      $test = explode('.',$name);
      $extension = end($test);
      $newName = rand(0,1000). rand(0,1000);
      $path = $mediaPath.$newName.'.'.$extension;
      $imagePath = $imagePath.$newName.'.'.$extension;


      if($extension == 'jpg' ||$extension == 'jpeg' || $extension == 'gif' || $extension == 'png' || $extension == 'webp'){
  			move_uploaded_file($tmp,$path);

        $sql = "INSERT INTO media ( `name`,
                                    `extension`,
                                    `path`,
                                    `size`,
                                    `album`
                                  ) VALUES (
                                    '$newName',
                                    '$extension',
                                    '$imagePath',
                                    '$size',
                                    '$album_id'
                                  );
                ";
        $query = Connection()->set($sql);
        if($query){
          $mediaId = Connection()->getInsertedId();
        }else{
          $errorMessage = "wrong query";
          $mediaId = 0;
        }
      }elseif (strtolower($extension) == 'mp4' || strtolower($extension) == 'avi' || strtolower($extension) == 'mov' || strtolower($extension) == 'flv' || strtolower($extension) == 'wmv') {
        $album_id = 6;
        $sql = "INSERT INTO media ( `name`,
                                    `extension`,
                                    `path`,
                                    `size`,
                                    `album`
                                  ) VALUES (
                                    '$newName',
                                    '$extension',
                                    '$imagePath',
                                    $size,
                                    $album_id
                                  );
                ";
                $query = Connection()->set($sql);

                if($query){
                  $mediaId = Connection()->getInsertedId();
                  move_uploaded_file($tmp,$path);

                }else{
                  $errorMessage = "wrong query";
                  $mediaId = 0;
                }

      }else{
        $errorMessage = "no media";
      }
      if($errorMessage){
        $media['error'] = $errorMessage;
      }
      $media['id'] = $mediaId;
      $media['name'] = $newName;
      $media['path'] = $imagePath;
      $media['size'] = $size;
      $media['extension'] = $extension;

      $setThumbnail = $this->generateMediaThumbnail($media);
      if ($album_id == 5) {
        $setThumbnail = $this->generateMediaThumbnail($media, 300);
        $this->makeWaterMark($media);
      }

      return $media;
    }

    protected function makeWaterMark($media, $marge_right = 10, $marge_bottom = 10)
  	{
  		// Load the stamp and the photo to apply the watermark to
      $waterMedia = $this->container->Core()->get('waterImage')['image'];

  			// Load the mian image
        switch ($media['extension']) {
            case 'jpeg':
                $source = imagecreatefromjpeg($this->mediaPath.$media['name'].'.'.$media['extension']);
                break;
            case 'png':
                $source = imagecreatefrompng($this->mediaPath.$media['name'].'.'.$media['extension']);
                break;
            case 'jpg':
                $source = imagecreatefromjpeg($this->mediaPath.$media['name'].'.'.$media['extension']);
                break;
            case 'gif':
                $source = imagecreatefromgif($this->mediaPath.$media['name'].'.'.$media['extension']);
                break;
            case 'webp':
                $source = imagecreatefromwebp($this->mediaPath.$media['name'].'.'.$media['extension']);
                break;
            default:
                $source = imagecreatefromjpeg($this->mediaPath.$media['name'].'.'.$media['extension']);
                break;
        }

  			// load the image you want to you want to be watermarked
  			$watermark = imagecreatefrompng($this->mediaPath.$waterMedia['name'].'.'.$waterMedia['extension']);

  			// get the width and height of the watermark image
  			$water_width = imagesx($watermark);
  			$water_height = imagesy($watermark);

  			// get the width and height of the main image image
  			$main_width = imagesx($source);
  			$main_height = imagesy($source);
  			// Set the dimension of the area you want to place your watermark we use 0
  			// from x-axis and 0 from y-axis
  			$dime_x = $main_width - $water_width - $marge_right;
  			$dime_y = $main_height - $water_height - $marge_bottom;
  			// copy both the images
  			imagecopy($source, $watermark, $dime_x, $dime_y, 0, 0, $water_width, $water_height);

  			// Final processing Creating The Image
        imagejpeg($source, $this->mediaPath.$media['name'].'.'.$media['extension'], 100);
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
        return $query = Connection()->set($sql);
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

    /**
    * @param array $media
    * @param float $thumbwidth // how matches small $thumbwidth
    * @param float $thumbheight// how matches small $thumbheight
    * @return bool $query
    */
    public function generateMediaThumbnail($media, $thumbwidth = 100, $thumbheight = null, $transparency=true)
    {
      if (!$media) {
        return;
      }
      if (!$thumbheight) {
        $thumbheight = $thumbwidth;
      }
      $thumbExtension = $media['extension'];
      $original_info = getimagesize($media['path']);
      $original_w = $original_info[0];
      $original_h = $original_info[1];
      // $original_img = imagecreatefromjpeg($media['path']);
      // Load the mian image
      switch ($media['extension']) {
          case 'jpeg':
              $original_img = imagecreatefromjpeg($this->mediaPath.$media['name'].'.'.$media['extension']);
              break;
          case 'png':
              $original_img = imagecreatefrompng($this->mediaPath.$media['name'].'.'.$media['extension']);
              break;
          case 'jpg':
              $original_img = imagecreatefromjpeg($this->mediaPath.$media['name'].'.'.$media['extension']);
              break;
          case 'gif':
              $original_img = imagecreatefromgif($this->mediaPath.$media['name'].'.'.$media['extension']);
              break;
          case 'webp':
              $original_img = imagecreatefromwebp($this->mediaPath.$media['name'].'.'.$media['extension']);
              $original_w = imagesx($original_img);
              $original_h = imagesy($original_img);
              break;
          default:
              $original_img = imagecreatefromjpeg($this->mediaPath.$media['name'].'.'.$media['extension']);
              break;
      }
      if ($original_w > $original_h) {
        $thumb_w = $thumbwidth;
        $thumb_h = round((intval($original_h) / intval($original_w)) * $thumbheight);
      }else{
        $thumb_w = round((intval($original_w) / intval($original_h)) * $thumbwidth);
        $thumb_h = $thumbheight;
      }

      $thumbsize = $thumb_w."x".$thumb_h;
      $thumb_img = imagecreatetruecolor($thumb_w, $thumb_h);

      if($transparency) {
          if($thumbExtension=="png") {
              imagealphablending($thumb_img, false);
              $colorTransparent = imagecolorallocatealpha($thumb_img, 0, 0, 0, 127);
              imagefill($thumb_img, 0, 0, $colorTransparent);
              imagesavealpha($thumb_img, true);
          } elseif($thumbExtension=="gif") {
            $trnprt_indx = imagecolortransparent($img);
            if ($trnprt_indx >= 0) {
                //its transparent
                $trnprt_color = imagecolorsforindex($original_img, $trnprt_indx);
                $trnprt_indx = imagecolorallocate($thumb_img, $trnprt_color['red'], $trnprt_color['green'], $trnprt_color['blue']);
                imagefill($thumb_img, 0, 0, $trnprt_indx);
                imagecolortransparent($thumb_img, $trnprt_indx);
            }
          }
    } else {
        Imagefill($new_img, 0, 0, imagecolorallocate($new_img, 255, 255, 255));
    }

      imagecopyresampled($thumb_img, $original_img,
                         0, 0,
                         0, 0,
                         $thumb_w, $thumb_h,
                         $original_w, $original_h);

      $thumbnail['media_id'] = $media['id'];
      $thumbnail['thumb_name'] = $media['name']."_thumb_".$thumbsize;
      $thumbnail['thumb_path'] = $this->imagethumbpath.$thumbnail['thumb_name'].'.'.$thumbExtension;
      $thumbnail['thumb_extension'] = $thumbExtension;
      $thumbnail['size'] = $thumbsize;


      switch ($media['extension']) {
          case 'jpeg':
              imagejpeg($thumb_img, $this->mediathumbpath.$thumbnail['thumb_name'].'.'.$thumbExtension);
              break;
          case 'png':
              imagepng($thumb_img, $this->mediathumbpath.$thumbnail['thumb_name'].'.'.$thumbExtension);
              break;
          case 'jpg':
              imagejpeg($thumb_img, $this->mediathumbpath.$thumbnail['thumb_name'].'.'.$thumbExtension);
              break;
          case 'gif':
              imagegif($thumb_img, $this->mediathumbpath.$thumbnail['thumb_name'].'.'.$thumbExtension);
              break;
          case 'webp':
              imagewebp($thumb_img, $this->mediathumbpath.$thumbnail['thumb_name'].'.'.$thumbExtension);
              break;
          default:
              imagejpeg($thumb_img, $this->mediathumbpath.$thumbnail['thumb_name'].'.'.$thumbExtension);
              break;
      }
      return $this->setMediaThumbnail($thumbnail);
    }

    public function reGenerateThumbnails($sizes = [], $truncate = false)
    {
      if ($truncate) {
        $sql = "TRUNCATE TABLE media_thumbnails;";
        $query = Connection()->exec($sql);
        if (!$query) {
          throw new Exception('not truncated');
        }
      }


      $medias = $this->getAllMedia(true);

      foreach ($medias as $media) {
        if (!empty($sizes)) {
          foreach ($sizes as $key => $size) {
            $this->generateMediaThumbnail($media, $size);
          }
        }else{
          $this->generateMediaThumbnail($media);
        }
      }

    }
  }




 ?>
