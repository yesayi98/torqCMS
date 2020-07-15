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
    $emotions = $this->getList('emotions', 'all');

    return $emotions;
  }

  /**
  * @param array $emotion
  * @return bool $query
  */
  public function setEmotion($emotion)
  {
    if (empty($emotion)) {
      return false;
    }

    $query = $this->insert('emotions', $emotion);

    return $query;
  }


  /**
  * @param array $emotion
  * @return bool $query
  */
  public function updateEmotion($emotion)
  {
    if (empty($emotion)) {
      return false;
    }

    $query = $this->update('emotions', $emotion);

    return $query;
  }

  /**
  * @param array $component
  * @return bool $query
  */
  public function updateEmotionComponent($component)
  {
    if (empty($component)) {
      return false;
    }

    $query = $this->update('emotion_components', $component);

    return $query;
  }

  /**
  * @param array $component
  * @return bool $query
  */
  public function setEmotionComponent($component)
  {
    if (empty($component)) {
      return false;
    }

    $query = $this->insert('emotion_components', $component);

    return $query;
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
    $emotionTypes = $this->getList('emotion_types', 'all');
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

  /**
  *@param $typeID
  *@return bool $result
  */
  public function deleteEmotionType($typeID)
  {
    $result = $this->delete('emotion_types', $typeID);
    return $result;
  }

  /**
  *@param $emotionID
  *@return bool $result
  */
  public function deleteEmotion($emotionID)
  {
    $result = $this->delete('emotions', $emotionID);
    return $result;
  }

  /**
  *@param $componentID
  *@return bool $result
  */
  public function deleteEmotionComponent($componentID)
  {
    $result = $this->delete('emotion_components', $componentID);
    return $result;
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

  // get emotion component by id from emotion_components table
  /**
  * @param integer $component_id
  * @return array $component
  */
  public function getEmotionComponent($component_id)
  {
    $component = $this->get('emotion_components', $component_id, 'id');
    $component['emotion_type'] = $this->getEmotionType($component['type']);

    return $component;
  }
}


 ?>
