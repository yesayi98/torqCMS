<?php
namespace Bundles\Files;

/**
 * Media Bundle for handling media files like images and videoes
 */
class MediaBundle extends FilesBundle
{

  public $imagePath = "media/img/";
  public $imageThumbPath = "media/thumbnails/";
  public $mediaPath = DOCUMENT_ROOT."/media/img/";
  public $mediaThumbPath = DOCUMENT_ROOT."/media/thumbnails/";

  private $createdFile;
  private $filePath;
  private $tmp;

  const validImageExtenstions = array(
    'jpg',
    'jpeg',
    'gif',
    'png',
    'webp'
  );

  const validVideoExtenstions = array(
    'mp4',
    'avi',
    'mov',
    'flv',
    'wmv'
  );

  /**
   * create the file to add to DB
   */
  public function createFile()
  {
    $mediaPath = $this->mediaPath;
    $imagePath = $this->imagePath;

    $file = $this->file;

    if(!$file){
      return 0;
    }

    // responced data
    $name = $file['name'];
    $tmp = $file['tmp_name'];
    $size = $file['size'];
    $album_id = $file['album_id'];
    $fileNameArray = explode('.',$name);

    $createdFile = [];
    $createdFile['album_id'] = $album_id;
    $createdFile['size'] = round($size/1024);
    $createdFile['extension'] = end($fileNameArray);
    $createdFile['name'] = rand(0,1000). rand(0,1000);
    $createdFile['path'] = $imagePath.$createdFile['name'].'.'.$createdFile['extension'];

    $this->createdFile = $createdFile;
    $this->checkExtension($createdFile['extension']);

    $this->tmp = $tmp;
    $this->filePath = $mediaPath.$createdFile['name'].'.'.$createdFile['extension'];

    $this->setToDirectory();
  }

  /**
   * get the file to add to DB
   * @return array $this->createdFile
   */
  public function getCreatedFile()
  {
    return $this->createdFile;
  }

  /**
   * check file Extension
   * @return bool $valid
   * Throw UnexpectedValueException
   */
  public function checkExtension($extension)
  {
    if (in_array($extension, self::validImageExtenstions)) {
      // handle image
      // return the specific param
      return true;
    }elseif(in_array($extension, self::validVideoExtenstions)){
      // handle video
      // return the specific param
      $this->createdFile['album_id'] = 6;
      return true;
    }else{
      $this->createdFile = [];
      throw new \Exception("Invalid Media extension", 1);
    }
  }

  public function setToDirectory()
  {
    move_uploaded_file($this->tmp, $this->filePath);
  }

  /**
    * @param array $media
    * @param float $thumbwidth // how matches small $thumbwidth
    * @param float $thumbheight // how matches small $thumbheight
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
    $original_w = ($original_w == 0)?imagesx($original_img):$original_w;
    $original_h = ($original_h == 0)?imagesy($original_img):$original_h;

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
    return $this->container->Media->setMediaThumbnail($thumbnail);
  }

  /**
    * @param array $media
    * @param float $marge_right // how matches small $thumbwidth
    * @param float $marge_bottom // how matches small $thumbheight
    * @return bool $query
    */
  public function makeWaterMark($media, $marge_right = 10, $marge_bottom = 10)
	{
		// Load the stamp and the photo to apply the watermark to
    $waterMedia = $this->container->Core()->getItem('waterImage')['image'];

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

  /**
    * @param array $sizes
    * @param bool $truncate
    */
  public function reGenerateThumbnails($sizes = [], $truncate = false)
  {
    if ($truncate) {
      $sql = "TRUNCATE TABLE media_thumbnails;";
      $query = Connection()->exec($sql);
      if (!$query) {
        throw new Exception('not truncated');
      }
    }


    $medias = $this->container->Media->getAllMedia(true);

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
