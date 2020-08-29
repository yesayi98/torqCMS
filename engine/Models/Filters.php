<?php


/**
 * "Filters" extends Model abstract class entity
 */
class Filters extends Model
{
  /**
   * @return array $filters
   */
  public function getFilterList()
  {
    return $filters = $this->getList('filter_groups');
  }

  /**
   * @return array $filters
   */
  public function getFilters()
  {
    $filters = $this->getList('filter_groups', 'all');

    foreach ($filters as &$filter) {
      $filter['option'] = $this->container->Articles()->ArticleOptions()->getOption($filter['option_id']);
    }

    return $filters;
  }

  /**
   * @param int $filterID
   * @return array $filter
   */
  public function getFilter($filterID)
  {
    return $filter = $this->get('filter_groups', $filterID);
  }

  /**
   * @param int $filterID
   * @return bool $filter
   */
  public function deleteFilter($filterID)
  {
    return $filter = $this->delete('filter_groups', $filterID);
  }
  /**
   * @param array $filterID
   * @return bool $filter
   */
  public function setFilter($filter)
  {
    return $filter = $this->insert('filter_groups', $filter);
  }
  /**
   * @param array $filterID
   * @return bool $filter
   */
  public function updateFilter($filter)
  {
    return $filter = $this->update('filter_groups', $filter);
  }

  /**
   * @param void
   * @return array $filterTypes
   */
  public function getFilterTables()
  {
    $sql = "SELECT selector FROM filter_tables";
    $filterTypeSelectors = Connection()->fetchAll($sql);
    $filterTypes = [];
    foreach ($filterTypeSelectors as $filterSelector) {
      $selector = $filterSelector['selector'];
      $filterTypes[$selector] = $this->getBySelector('filter_tables', $selector);
    }

    return $filterTypes;
  }

  /**
   * @param void
   * @return array $filterTypes
   */
  public function getSortingTypes()
  {
    $sql = "SELECT selector FROM filter_sortings";
    $sortingTypeSelectors = Connection()->fetchAll($sql);
    $sortingTypes = [];
    foreach ($sortingTypeSelectors as $sortingSelector) {
      $selector = $sortingSelector['selector'];
      $sortingTypes[$selector] = $this->getBySelector('filter_sortings', $selector)[0];
    }

    return $sortingTypes;
  }

  /**
   * @param int $id
   * @return array $sortingType
   */
  public function getSortingType($id)
  {
    $sortingType = $this->get('filter_sortings', $id);
    return $sortingType;
  }

  /**
   * @param int $id
   * @return bool $sortingType
   */
  public function deleteSortingType($id)
  {
    $sortingType = $this->delete('filter_sortings', $id);
    return $sortingType;
  }

  /**
   * @param array $sorting
   * @return bool $sortingType
   */
  public function setSortingType($sorting)
  {
    $sortingType = $this->insert('filter_sortings', $sorting);
    return $sortingType;
  }

  /**
   * @param array $sorting
   * @return bool $sortingType
   */
  public function updateSortingType($sorting)
  {
    $sortingType = $this->update('filter_sortings', $sorting);
    return $sortingType;
  }
  /**
   * @param int $id
   * @return array $filterType
   */
  public function getfilterType($id)
  {
    $filterType = $this->get('filter_types', $id);
    return $filterType;
  }

  /**
   * @param int $id
   * @return bool $filterType
   */
  public function deletefilterType($id)
  {
    $filterType = $this->delete('filter_types', $id);
    return $filterType;
  }

  /**
   * @param array $filter
   * @return bool $filterType
   */
  public function setfilterType($filter)
  {
    $filterType = $this->insert('filter_types', $filter);
    return $filterType;
  }

  /**
   * @param array $filter
   * @return bool $filterType
   */
  public function updatefilterType($filter)
  {
    $filterType = $this->update('filter_types', $filter);
    return $filterType;
  }

  /**
   * @param string $table
   * @param string $selector
   * @return array $items
   */
  public function getBySelector($table, $selector)
  {
    $items = $this->get($table, $selector, 'selector');
    if (!empty($items) && !isset($items[0])) {
      $adaptItems[0] = $items;
      $items = $adaptItems;
    }
    return $items;
  }
}



 ?>
