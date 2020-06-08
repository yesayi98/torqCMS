<?php

/**
 * Slug system in db
 */
class CoreUrls extends \Model
{
  private $table = 'core_url';

  public function getUrlByOriginal($originalUrl = '')
  {
    if (empty($originalUrl)) {
      return;
    }

    return $this->get($this->table, $originalUrl, 'original_url');
  }

  public function getUrlByChanged($changedUrl = '')
  {
    if (empty($changedUrl)) {
      return;
    }

    return $this->get($this->table, $changedUrl, 'changed_url');
  }

  public function setUrl($data)
  {
    if (empty($data)) {
      return;
    }

    return $this->insert($this->table, $data);
  }

  public function updateUrl($data)
  {
    if (empty($data)) {
      return;
    }

    return $this->update($this->table, $data);
  }

  public function deleteUrl($id)
  {
    if (empty($id)) {
      return;
    }

    return $this->delete($this->table, $id);
  }
}


 ?>
