<?php

/**
 *
 */
class AdvertisingsBundle extends StoreFrontBundle
{

  /**
   * required method setInstance
   * set to instances from know which Models is used
   */
  public function setInstance()
  {
    return $this->instance = $this->container->Advertisings();
  }

  /**
   * required method storeFrontHandler
   * storeFrontHandler calls after getting data
   */
  public function storeFrontHandler(array $advertisings)
  {
    if ($this->lang['id'] != 1) {
      $value = $this->translateAdvertisings($advertisings);
    }else{
      return $advertisings;
    }
  }

  // translate Advertising array

  public function translateAdvertising(array $advertisings, $lang)
  {
    if (!$advertisings) {
      return;
    }
    if ($advertisings["data"]) {
      $advertisingsWithPagination = $advertisings;
      $advertisings = $advertisingsWithPagination["data"];
    }elseif (!$advertisings[0]) {
      $data = $advertisings;
      unset($advertisings);
      $categories[0] = $data;
    }
    foreach ($advertisings as &$advertising) {
      $advertisingTranslation = $this->Advertisings()->getAdvertisingTranslation($category['id'], $lang);
      $advertising['name'] = $advertisingTranslation['name'];
      $advertising['description'] = $advertisingTranslation['description'];
    }
    if (isset($advertisingsWithPagination)) {
      $advertisingsWithPagination['data'] = $advertisings;
      return $advertisingsWithPagination;
    }
    if (isset($data)) {
      return $advertisings[0];
    }else{
      return $advertisings;
    }
  }

}



 ?>
