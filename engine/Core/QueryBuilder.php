<?php
use NilPortugues\Sql\QueryBuilder\Builder\GenericBuilder;
use NilPortugues\Sql\QueryBuilder\Syntax\OrderBy;
/**
 *
 */
class QueryBuilder extends GenericBuilder
{
  public function execute($query)
  {
    $query = $this->writeFormatted($query);
    $values = $this->getValues();
    foreach ($values as $key => $value) {
      $query = str_replace($key, $value, $query);
    }
    $this->contextedQuery = $query;
    $this->result = Connection()->executeQuery($query);
    if (!$this->result) {
      throw new Exception(Connection()->getError());
    }
  }

  /**
   * @param MYSQLI $type
   * @return array $result
   */
  public function fetchAll($type = MYSQLI_ASSOC)
  {
    return $this->result->fetch_all($type);
  }

  /**
   * @return array $result
   */
  public function paginate()
  {
    return Connection()->query($this->contextedQuery);
  }

  /**
   * @param string $value
   * @return array $result
   */
  public function getOrderBy($value)
  {
    if ($value === 'asc') {
        return OrderBy::ASC;
    }elseif($value === 'desc'){
      return OrderBy::DESC;
    }
  }
}
 ?>
