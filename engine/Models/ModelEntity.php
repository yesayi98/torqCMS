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

}


 ?>
