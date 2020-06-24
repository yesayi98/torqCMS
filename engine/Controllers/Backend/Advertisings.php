<?php


/**
* advertisings Controller hanling an article requests
*/
class advertisingsController extends BackendController
{
  /**
  * default action for advertisings
  */
  public function index()
  {
    $advertisingsModel = $this->__get('Advertisings');
    $advertisings = $advertisingsModel->getAdvertisingList();

    if (!empty($this->getRequest()->request['XHR'])) {
      $this->route = "backend/advertisings/table";
    }

    $this->View()->setAssign('advertisings', $advertisings);
  }

  /**
  * detail action for advertisings
  */
  public function detail()
  {
    // get request params
    $params = $this->getRequest()->request;
    $advertisingID = $params['advertising'];
    // get advertising model
    $advertisingModel = $this->__get('Advertisings');
    // get advertising
    $advertising = $advertisingModel->getAdvertising($advertisingID);

    $this->View()->setAssign('advertising', $advertising);
  }

  /**
  * detail action for advertisings
  */
  public function save()
  {
    // get request params
    $params = $this->getRequest()->request;
    $advertising['name'] = $params['name'];
    $advertising['url'] = $params['url'];
    $advertising['description'] = $params['description'];
    $advertising['media_id'] = $params['media_id'];
    // get advertising model
    $advertisingModel = $this->__get('Advertisings');
    // save advertising
    if (!empty($params['id'])) {
      $advertising['id'] = $params['id'];
      $success = $this->updateAdvertising($advertising);
      $params['translation']['advertising_id'] = $advertising['id'];
    }else{
      $advertising['id'] = $this->insertAdvertising($advertising);
      $params['translation']['advertising_id'] = $advertising['id'];
    }
    // save translations
    $this->saveTranslation($params['translation']);
    $message = "success";
    if (!$success) {
      $message = Connection()->getError();
    }
    if ($params['XHR']) {
      die(
        json_encode(
            array(
              'success' => $success,
              'message' => $message
            )
          )
        );
    }else{
      Router::redirect('backend/advertisings/detail?advertising='.$advertising['id']);
    }
  }

  /**
  * @param array $advertising
  * @return int $insertedId
  */
  private function insertAdvertising($advertising)
  {
    $this->__get('Advertisings')->setAdvertising($advertising);

    return Connection()->getInsertedId();
  }

  /**
  * @param array $advertising
  * @return int
  */
  private function updateAdvertising($advertising)
  {
    $inserted = $this->__get('Advertisings')->updateAdvertising($advertising);

    return $inserted;
  }

  /**
  * saveing an advertising translations
  * @param array $translations
  */
  private function saveTranslation($translations)
  {
    $advertising_id = $translations['advertising_id'];
    unset( $translations['advertising_id'] );
    $advertisingTranslationModel = $this->__get('Advertisings');
    foreach ($translations as $language => $translation) {

      $translation['advertising_id'] = $advertising_id;
      $translation['lang_id'] = $language;
      $existTranslation = $advertisingTranslationModel->getAdvertisingTranslation($advertising_id, $language);

      if (empty($existTranslation)) {
        $query = $advertisingTranslationModel->saveTranslation($translation);
      }else{
        $query = $advertisingTranslationModel->updateTranslation($translation);
      }
      if (!$query) {
        die(json_encode(
            array(
              'success' => false,
              'message' => Connection()->getError(),
            )
          ));
      }
    }
  }
}



 ?>
