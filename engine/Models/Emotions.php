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

  public function getEmotionType($id)
  {
    $emotion = $this->get('emotion_types', $id);

    return $emotion;
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
