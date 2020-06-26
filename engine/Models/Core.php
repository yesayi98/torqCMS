<?php



/**
 * class Core
 */
class Core extends Model
{

  public function getItem($coreItem)
  {
    $sql = "SELECT * FROM core WHERE name = '$coreItem'";

    $result = Connection()->fetchOne($sql);

    if ($result['content_type'] === "image") {
      $result['image'] = $this->container->Media()->getMedia($result['content']);
      if (empty($result['image']['id'])) {
        $result['image']['path'] = Router::url('media/img/logo.png');
      }
    }

    return $result;
  }
  public function updateItem($core)
  {
    $id = $core['id'];
    $name = $core['name'];
    $content = $core['content'];
    $contentType = $core['content_type'];
    $descrition = $core['description'];

    $sql = "UPDATE core SET
                  name = '$name',
                  content = '$content',
                  content_type = '$contentType',
                  description = '$descrition'
            WHERE id = $id";
    return $query = Connection()->set($sql);
  }

  public function getItemList()
  {
    $result = $this->getList('core');
    return $result;
  }
}

 ?>
