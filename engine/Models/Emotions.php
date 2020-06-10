<?php

/**
 *
 */
class Emotions extends \Model
{

  public function getActiveEmotions()
  {
    $allEmotions = $this->get('emotions', 1, 'active', 'sort_id');
    if (empty($allEmotions[0])) {
      $emotions[0] = $allEmotions;
    }else{
      $emotions = $allEmotions;
    }

    foreach ($emotions as &$emotion) {
      $emotion['components'] = $this->getEmotionComponentsByEmotionId($emotion['id']);
    }

    return $emotions;
  }

  public function getEmotionList()
  {
    $emotions = $this->getList('emotions');

    return $emotions;
  }

  public function setEmotion()
  {
    // code...
  }

  public function updateEmotion()
  {
    // code...
  }

  public function setEmotionType()
  {
    // code...
  }

  // get all types of emotions
  /**
  * @return array $emotionTypes
  */
  public function getEmotionTypeList()
  {
    $emotionTypes = $this->getList('emotion_types');
    return $emotionTypes;
  }

  // get emotion type by ID
  /**
  * @param int $id
  * @return array $emotionType
  */
  public function getEmotionType($id)
  {
    $emotionType = $this->get('emotion_types', $id);

    return $emotionType;
  }

  public function updateEmotionType()
  {
    // code...
  }

  public function deleteEmotionType()
  {
    // code...
  }

  public function deleteEmotion()
  {
    // code...
  }

  // get emotion by id from emotions table
  /**
  * @param integer $emotion_id
  * @return array $emotion
  */
  public function getEmotion($emotion_id)
  {
    $emotion = $this->get('emotions', $emotion_id);

    $emotion['components'] = $this->getEmotionComponentsByEmotionId($emotion_id);

    return $emotion;
  }

  // get emotion components by emotion_id from emotion_components table
  /**
  * @param integer $emotion_id
  * @return array $emotions
  */
  public function getEmotionComponentsByEmotionId($emotion_id)
  {
    $components = $this->get('emotion_components', $emotion_id, 'emotion_id');

    if (empty($components[0])) {
      $emotions[0] = $components;
    }else{
      $emotions = $components;
    }

    foreach ($emotions as &$emotion) {
      $emotion['emotion_type'] = $this->getEmotionType($emotion['type']);
    }

    return $emotions;
  }

}


 ?>
