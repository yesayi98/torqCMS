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
    return $filters = $this->getList('filter_groups', 'all');
  }

  /**
   * @param int $filterID
   * @return array $filter
   */
  public function getFilter($filterID)
  {
    return $filter = $this->get('filter_groups', $filterID);
  }
}



 ?>
