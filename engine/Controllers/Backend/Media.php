<?php

/**
 * Media class handle requests about media
 */
class mediaController extends BackendController
{

  public function index()
  {
    $mediaModel = $this->__get('Media');
    $request = $this->getRequest()->request;
    $fromArticles = isset($request['image']);
    if ($fromArticles) {
      $this->View()->setAssign('fromArticles', $fromArticles);
      $_GET['limit'] = 21;
    }else{
      $_GET['limit'] = 48;
    }

    if ($request['album']) {
      $media = $mediaModel->getMediaByAlbum($request['album']);
    }else{
      $media = $mediaModel->getAllMedia();
    }
    $mediaAlbums = $mediaModel->getAlbumList();

    $this->View()->setAssign('media', $media);
    $this->View()->setAssign('albums', $mediaAlbums);

    if (!empty($request['XHR'])) {
      $this->route = "backend/media/medialist";
    }
  }

  public function detail()
  {
    $image_id = $this->getRequest()->post['image'];
    $image = $this->__get('Media')->getMedia($image_id);
    $this->View()->setAssign('image', $image);
    $this->route = "backend/media/media-box/detail";
  }

  /*action to delete gallery item images*/
  public function delete()
  {
    // get request id...
    $media_id = $this->getRequest()->request['media_id'];
    $success = $this->__get('Media')->deleteMedia($media_id);
    $message = Connection()->getError();
    if ($this->getRequest()->request['XHR'] == true) {
      die(json_encode(array(
        'success'=>$success,
        'message'=>$message
      )));
    }

    Router::redirect('backend/media');
  }
  /* action to regenerete media thumbnails*/
  public function regenerate()
  {
    $this->__get('Media')->reGenerateThumbnails([100, 300], true);
    die(json_encode(array(
      'success'=>true,
      'message'=>'done'
    )));
  }

  public function save()
  {
    $request = $this->getRequest()->request;
    $files = $_FILES;
    $mediaModel = $this->__get('Media');
    foreach ($files as $file) {
      $file['album_id'] = $request['album'];
      $success = $mediaModel->setMedia($file);
    }
    if ($request['XHR']) {
      die(json_encode([
        'success' => $success,
      ]));
    }


    Router::redirect('backend/media');
  }
}


 ?>
