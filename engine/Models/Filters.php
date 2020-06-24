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
    return $this->getList('filter_groups', 'all');
  }
}



 ?>
