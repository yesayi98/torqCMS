<?php

/**
 * Model repository class
 * @table = core_menu
 */
class CoreMenu extends Model
{

  protected $table = "core_menu";
  public function getMenuList()
  {
      $list = Connection()->getList($this->table);

      return $list;
  }

  public function getMenuByParent($parent = 0)
  {
    $builder = $this->getQueryBuilder();
    $query = $builder->select()->setTable($this->table);
    $query->where()->equals('parent_id', $parent)->end();
    $query->orderBy('sort_id', $builder->getOrderBy('asc'));
    $builder->execute($query);
    $menuItems = $builder->fetchAll();
    foreach ($menuItems as &$menuItem) {
      if (!empty($menuItem['has_children'])) {
        $menuItem['children'] = $this->getMenuByParent($menuItem['id']);
      }
    }

    return $menuItems;
  }
}


 ?>
