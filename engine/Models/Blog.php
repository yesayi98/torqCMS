<?php

/**
 * class Blog extends from Models
 */
class Blog extends Model
{

  private $table = "blog";

  public function saveBlog($blog)
  {
    if (empty($blog)) {
      return;
    }

    $query = $this->insert($this->table, $blog);
    return $query;
  }

  public function updateBlog($blog)
  {
    if (empty($blog)) {
      return;
    }

    $query = $this->update($this->table, $blog);
    return $query;
  }

  public function deleteBlog($blog_id)
  {
    if (empty($blog_id)) {
      return;
    }

    $query = $this->delete($this->table, $blog_id);
    return $query;
  }

  public function getBlogList()
  {
    $query = $this->getList($this->table);

    if (isset($query['data'])) {
      foreach ($query['data'] as &$blog) {
        $blog['image'] = $this->container->Media()->getMedia($blog['media_id']);
      }
    }else{
      foreach ($query as &$blog) {
        $blog['image'] = $this->container->Media()->getMedia($blog['media_id']);
      }
    }

    return $query;
  }

  public function getBlogsByCategory($category_id)
  {
    $query = $this->get($this->table, $category_id, 'category_id', 'id', false);

    foreach ($query['data'] as &$blog) {
      $blog['image'] = $this->container->Media()->getMedia($blog['media_id']);
    }

    return $query;
  }

  public function getBlog($id)
  {
    $blog = $this->get($this->table, $id);

    $blog['image'] = $this->container->Media()->getMedia($blog['media_id']);

    return $blog;
  }

}


 ?>
