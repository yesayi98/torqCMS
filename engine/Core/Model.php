<?php
/**
* @abstract class Model
* construct will get Container
*/

abstract class Model
{

  /**
  * @object Container
  */
  protected $container;

  function __construct($container)
  {
    if (isset($_SESSION['user'])) {
      $this->user_id =$container->getSession('user')['id'];
    }else{
      $this->user_id = $container->getCookie('user')['id'];
    }
    $this->session_id = $container->getSessionId();
    if (empty($this->user_id)) {
      $this->user_id = 0;
    }
    $this->container = $container;
    $this->connection = Connection();
  }

  /**
  * @return int
  */
  public function getLastInsertedId()
  {
    $this->connection->getLastInsertedId();
  }


  /**
  * @param string $tablename
  * @param mixed $limit
  * @return bool if not tablename
  * @return array $list
  */
  public function getList($tablename, $limit = null)
  {

    if (!$tablename) {
      return false;
    }

    $sql = "SELECT * FROM $tablename";
    if ($limit == 'all') {
      $list = Connection()->fetchAll($sql);
    }else{
      $_GET['limit'] = $limit;
      $list = Connection()->query($sql);
    }

    return $list;
  }


  protected function execute($query)
  {
    $result = Connection()->executeQuery($query);

    return $result;
  }


  protected function getTableColumns($tablename, $getId = false)
  {
    $db = DB_DATABASE;
    if (!$tablename) {
      return;
    }
    $sql = "SELECT COLUMN_NAME, DATA_TYPE FROM information_schema.columns WHERE table_name='$tablename' AND TABLE_SCHEMA = '$db'";

    $list = Connection()->fetchAll($sql);
    if (!$getId) {
      unset($list[array_search('id', array_column($list, 'COLUMN_NAME'))]);
    }
    return $list;
  }

  protected function insert($table, $values)
  {
    $tableColumns = $this->getTableColumns($table, true);
    $sql = 'INSERT INTO '.$table.' '.'(';
      foreach ($tableColumns as $key => $value) {
        $sql .= '`'.$value['COLUMN_NAME'].'`';
        if ($key != count($tableColumns)-1) {
          $sql .= ", ";
        }
      }
    $sql .= ') VALUES (';
      foreach ($tableColumns as $key => $tableColumn) {
        $dataType = $tableColumn['DATA_TYPE'];
        $tableColumn = $tableColumn['COLUMN_NAME'];

        $tableValue = $values[$tableColumn];
        if ($dataType === 'int') {
          if ($tableColumn === 'id') {
            $tableValue = "NULL";
          }else{
            $tableValue = intval($tableValue);
          }
          $sql .= "$tableValue,";
          continue;
        }
        if ($dataType === 'bool') {

          $tableValue = intval($tableValue);
          $sql .= "$tableValue,";
          continue;
        }
        if ($dataType === 'tinyint') {

          $tableValue = intval($tableValue);
          $sql .= "$tableValue,";
          continue;
        }
        if ($dataType === 'date') {
          if (empty($tableValue)) {
            $tableValue = 0;
          }else{
            $tableValue = "'$tableValue'";
          }
          $sql .= "$tableValue,";
          continue;
        }
        $sql .= "'$tableValue',";
      }
    $sql = substr($sql, 0, -1);

    $sql .= ')';
    $query = $this->connection->set($sql);

    return $query;
  }

  protected function delete($table, $condition, $by = 'id')
  {
    $sql = "DELETE FROM $table WHERE $by = '$condition'";

    $query = $this->connection->set($sql);

    return $query;
  }

  protected function update($table, $values, $by = 'id')
  {
    $tableColumns = $this->getTableColumns($table);

    $sql = "UPDATE $table SET";
    foreach ($tableColumns as $key => $tableColumn) {
      if (!in_array($tableColumn['COLUMN_NAME'], array_keys($values))) {
        continue;
      }

      $dataType = $tableColumn['DATA_TYPE'];
      $tableColumn = $tableColumn['COLUMN_NAME'];

      $tableValue = $values[$tableColumn];
      if ($dataType === 'int') {
        $tableValue = intval($tableValue);
        $sql .= " `$tableColumn` = $tableValue,";
        continue;
      }
      if ($dataType === 'date') {
        if (empty($tableValue)) {
          $tableValue = 0;
        }else{
          $tableValue = "'$tableValue'";
        }
        $sql .= " $tableColumn = $tableValue,";
        continue;
      }
      $sql .= " $tableColumn = '$tableValue',";
    }
    $sql = substr($sql, 0, -1);

    $condition = $values[$by];
    $sql .=" WHERE $by = '$condition'";
    $query = $this->connection->set($sql);

    return $query;
  }

  /**
  * @param string $table
  * @param string $by
  * @param mixed $condition
  */
  protected function get($table, $condition, $by = "id", $sortBy = 'id', bool $all = true)
  {
    $sql = "SELECT * FROM $table WHERE $by = '$condition'";

    $sql .= " ORDER BY $sortBy";
    if ($all) {
      $data = Connection()->fetchAll($sql);
      if (count($data) == 1) {
        return $data[0];
      }
    }else{
      $data = Connection()->query($sql);
    }

    return $data;
  }

  public function getQueryBuilder()
  {

    return new QueryBuilder($this->container);

  }

}


?>
