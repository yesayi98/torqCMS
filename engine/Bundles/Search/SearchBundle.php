<?php
namespace Bundles\Search;
/**
 * Search bundle: search system for articles in torq_cms
 */
abstract class SearchBundle
{

  protected $queryByContext;
  protected $container;
  protected $context;

  /**
   * @param array $context
   * @param Container $container
   */
  function __construct($context)
  {
    $this->container = Container();
    $this->context = $context;
    $this->queryByContext = $this->createQueryByContext($context);
  }

  /**
  * @param array $context
  * @return string $sql
  */
  abstract public function createQueryByContext($context);


  public function getQueryByContext()
  {
    return $this->queryByContext;
  }

  public function getContext()
  {
    return $this->context;
  }

}


 ?>
