<?php
namespace Bundles\Search;
/**
 * Article Search Bundle uses from craeting queries for Article System
 */
class ArticleSearchBundle extends SearchBundle
{
  /**
   * @param array $context
   * @return string $sql
   */
  public function createQueryByContext($context)
  {
    $filterModel = $this->container->Filters();
    $filterTypes = $filterModel->getFilterTables();

    $sortTypes = $filterModel->getSortingTypes();

    $sortType = $context['sortType'];
    unset($context['sortType']);

    // create query
    $sql = "SELECT articles.* FROM articles
            LEFT JOIN article_attributes ON article_attributes.article_id = articles.id
            LEFT JOIN article_translations ON article_translations.article_id = articles.id
            LEFT JOIN article_category ON article_category.article_id = articles.id
            LEFT JOIN article_options_relations ON article_options_relations.article_id = articles.id
            LEFT JOIN article_option_values ON article_option_values.id = article_options_relations.value_id
            LEFT JOIN categories ON categories.id = article_category.category_id
            LEFT JOIN category_translation ON category_translation.category_id = article_category.category_id
            LEFT JOIN suppliers ON suppliers.id = article_attributes.supplier_id
            WHERE articles.id > 0";

    foreach ($context as $selector => $value) {
      if (empty($value)) {
        continue;
      }
      $table = $filterTypes[$selector];
      if (!empty($table)) {
        $sql .= " and (";
        foreach ($table as $name => $column) {
          $table_name = $column['filter_table'];
          $column_name = $column['filter_column'];
          if ($key === 'search') {
            $sql .= " LOWER($table_name.$column_name) LIKE '%$value%' OR";
            if (end($filterTypes[$selector])['filter_table'] == $table_name) {
              $sql = substr($sql, 0,strlen($sql) - 2);
            }
            continue;
          }
          if ($selector === 'price') {
            $valueArrayToString = implode(' AND ', $value);
            $sql .= " $table_name.$column_name BETWEEN $valueArrayToString";
            continue;
          }
          if (!is_array($value)) {
            $sql .= " $table_name.$column_name = $value";
          }else{
            $valueArrayToString = implode(', ', $value);
            $sql .= " $table_name.$column_name IN ($valueArrayToString)";
          }
        }
        $sql .= ")";
      }
    }
    $route = \Router::getRoute();

    if ($route['module'] !== 'backend') {
      $sql .= ' AND articles.active = 1';
    }

    $sql .= " GROUP BY articles.id";

    if ($sortType) {
      $table = $sortTypes[$sortType]['sorting_table'];
      $column = $sortTypes[$sortType]['sorting_column'];
      $type = $sortTypes[$sortType]['type'];
      $sql .= " ORDER BY $table.$column $type";
    }

    return $sql;
  }
}


 ?>
