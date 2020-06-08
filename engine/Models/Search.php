<?php /**
 *
 */
class Search
{
  private $connection;
  private $container;
  function __construct($connection, $container)
  {
    $this->connection = $connection;
    $this->container = $container;
  }
  public function Search($context)
  {
    if(!$context){
      return;
    }

    $result = [
      'categories' => $this->searchFromCategories($context),
    ];

    return $result;
  }
  public function searchFromCategories($context){

    $connection = $this->connection;

    $sql = "SELECT * FROM categories WHERE name LIKE '%$context%'";

    $query = mysqli_query($connection, $sql);
    $categories = mysqli_fetch_all($query, MYSQLI_ASSOC);

    if(!$categories){
      $sql = "SELECT c.*, ct.name AS translated_name  FROM category_translation ct
              LEFT JOIN categories c ON c.id = ct.category_id WHERE ct.name LIKE '%$context%'";

              $query = mysqli_query($connection, $sql);
              $categories = mysqli_fetch_all($query, MYSQLI_ASSOC);
    }
    return $categories;
  }
}
 ?>
