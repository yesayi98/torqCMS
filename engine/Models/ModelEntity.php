<?php


/**
 *
 */
class ModelEntity extends \Model
{

  public function getElementById($id, $table)
  {
    $result = $this->get($table, $id);

    if (isset($result['media_id'])) {
      $result['media'] = Container()->Media()->getMedia($result['media_id']);
    }

    return $result;
  }
  public function getElementList($table='')
  {
    if (empty($table)) {
      return;
    }

    $result = $this->getList($table, 'all');
    return $result;
  }

}


 ?>
