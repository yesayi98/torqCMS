<?php

/**
 *
 */
class Options extends Model
{
  private $table = "article_options";

  public function getOptionList()
  {
    $options = $this->getList($this->table, 'all');

    foreach ($options as $key => &$option) {
      $option['values'] = $this->getOptionValues($option['id']);
    }

    return $options;
  }

  public function getOption($optionID)
  {
    $option = $this->get($this->table, $optionID);
    $option['values'] = $this->getOptionValues($option['id']);

    return $option;
  }

  public function getOptionValues($optionID)
  {
    $values = $this->get('article_option_values', $optionID, 'option_id');

    return $values;
  }

  public function getArticleOptions($articleID)
  {

    $sql = "SELECT ao.* FROM article_options_relations aor
                LEFT JOIN article_option_values aov ON aov.id = aor.value_id
                LEFT JOIN article_options ao ON ao.id = aov.option_id
                WHERE aor.article_id = $articleID GROUP BY aov.option_id";
    $options = Connection()->fetchAll($sql);

    foreach ($options as $key => &$option) {
      $option['values'] = $this->getArticleOptionValues($articleID, $option['id']);
    }

    return $options;
  }

  public function getArticleOptionValues($articleID, $optionID)
  {
    $sql = "SELECT aov.* FROM article_options_relations aor
                LEFT JOIN article_option_values aov ON aov.id = aor.value_id
                LEFT JOIN article_options ao ON ao.id = aov.option_id
                WHERE aor.article_id = $articleID AND aov.option_id = $optionID";
    $values = Connection()->fetchAll($sql);
    return $values;
  }


  public function setOption($option)
  {
    $query = $this->insert($this->table, $option);

    return $query;
  }

  public function checkIfRelationExist($relation)
  {

    $relationValue = $relation['value_id'];
    $relationArticle = $relation['article_id'];

    $sql = "SELECT * FROM article_options_relations WHERE article_id = $relationArticle AND value_id = $relationValue";

    $result = Connection()->fetchOne($sql);
    return $result?true:false;
  }

  public function getOptionValueID($value)
  {
    $builder = $this->getQueryBuilder();

    $query = $builder->select()->setTable('article_option_values');
    $query->where()->equals('value', $value['value'])->equals('option_id', $value['option_id'])->end();
    $builder->execute($query);
    $result = $builder->fetchAll();

    return $result[0]['id']?$result[0]['id']:false;
  }

  public function setOptionValue($value)
  {
    $query = $this->insert('article_option_values', $value);

    return $query;
  }

  public function setOptionRelation($relation)
  {
    $query = $this->insert('article_options_relations', $relation);

    return $query;
  }

  public function deleteOptionRelation($relationID)
  {
    $query = $this->delete('article_options_relations', $relationID);

    return $query;
  }

}


 ?>
