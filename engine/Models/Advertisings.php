<?php

/**
 *
 */
class Advertisings extends Model
{

  public function getAdvertising($id)
  {
    if(!$id){
      return;
    }
    $id = intval($id);
    $sql = "SELECT * FROM advertisings WHERE id = $id";

    $advertising = Connection()->fetchOne($sql);
    $advertising['image']= $this->getAdvertisingImage($advertising['media_id']);
    $advertising['background'] = $this->getAdvertisingImage($advertising['background_id']);
    $advertising['attributes'] = $this->getAdvertisingAttributes($advertising['id']);
    return $advertising;
  }

  /**
  * get Advertising attributes from advertising_attributes
  * @association ONE_TO_ONE advertisings / advertising_attributes
  * @param integer$advertisingId
  * @return array $advertising_attributes
  */
  public function getAdvertisingAttributes($advertisingId)
  {
    if(!$advertisingId){
      return;
    }

    $sql = "SELECT * FROM advertising_attributes WHERE advertising_id = $advertisingId";

    $advertising_attributes = Connection()->fetchOne($sql);
    return $advertising_attributes;
  }

  /**
  * insert Advertising attributes from advertising_attributes
  * @association ONE_TO_ONE advertisings / advertising_attributes
  * @param array $advertisingtAttibutes
  * @return bool $query
  */
  public function setAdvertisingAttributes($advertisingtAttibutes)
  {
    if(empty($advertisingtAttibutes)){
      return false;
    }
    $query = $this->insert('advertising_attributes', $advertisingtAttibutes);
    return $query;
  }

  /**
  * delete Advertising attributes from advertising_attributes
  * @association ONE_TO_ONE advertisings / advertising_attributes
  * @param array $advertisingID
  * @return bool $query
  */
  public function deleteAdvertisingAttributes($advertisingID)
  {
    if(empty($advertisingID)){
      return false;
    }
    $query = $this->delete('advertising_attributes', $advertisingID, 'advertising_id');
    return $query;
  }

  /**
  * delete Advertising attributes from advertising_attributes
  * @association ONE_TO_ONE advertisings / advertising_attributes
  * @param array $advertisingID
  * @return bool $query
  */
  public function updateAdvertisingAttributes($advertisingtAttibutes)
  {
    if(empty($advertisingID)){
      return false;
    }
    $query = $this->update('advertising_attributes', $advertisingtAttibutes, 'advertising_id');
    return $query;
  }


  public function deleteAdvertising($id)
  {
    if(!$id){
      return;
    }

    $id = intval($id);
    $sql = "DELETE FROM advertisings WHERE id = $id";

    $query = Connection()->set($sql);
    return $query;
  }

  public function updateAdvertising(array $advertising)
  {
    $query = $this->update('advertisings', $advertising);
    if($query){
      return true;
    }else {
      return false;
    }
  }

  private function getAdvertisingImage($mediaId)
  {
    if(!$mediaId){
      return;
    }

    $image = $this->container->Media()->getMedia($mediaId);

    return $image;
  }

  public function getAdvertisingList()
  {
    $advertisings = $this->getList('advertisings');

    return $advertisings;
  }


  public function setAdvertising($advertising)
  {
    if(empty($advertising)){
      return;
    }

    $query = $this->insert('advertisings', $advertising);

    $attributes['typeing'] = $advertising['media_id'];
    $attributes['additional_text'] = $advertising['additional_text'];
    $attributes['advertising_id'] = $this->getLastInsertedId();
    $this->setAdvertisingAttributes($attributes);
    return $query;
  }


  public function getAdvertisingTranslation($advertisingId, $langId){

    if (!$advertisingId) {
      return;
    }

    $sql = "SELECT * FROM advertising_translations WHERE advertising_id = $advertisingId";

    if($langId){
      $sql .= " AND lang_id = $langId";
    }

    $translation = Connection()->fetchOne($sql);

    return $translation;
  }

  public function saveTranslation(array $advertising)
  {

    if(!$advertising){
      return;
    }

    $query = $this->insert('advertisings', $sql);

    return $query;
  }

  public function updateTranslation(array $advertising)
  {

    if(!$advertising){
      return;
    }
    $name = $advertising['name'];
    $id = $advertising['translation_id'];
    $description = $advertising['description'];
    $langId = $advertising['lang_id'];

    $sql = "UPDATE advertising_translations SET
                            name = '$name',
                            description = '$description'
                  WHERE id = $id";
    $query = Connection()->set($sql);

    return $query;
  }
}


 ?>
