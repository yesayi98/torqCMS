<?php
namespace Bundles\Articles;
/**
 * Search bundle: search system for articles in torq_cms
 */
abstract class StoreFrontBundle
{

  protected $lang;
  protected $container;
  protected $instance;

  /**
   * @param array $context
   */
  function __construct(\Request $reqeust)
  {
    $this->container = Container();
    $this->lang = $reqeust->getLanguage();
    $this->currency = $reqeust->getCurrency();
    $this->setInstance();
  }

  /**
   * set to instances from know which Models is used
   */
  abstract public function setInstance();

  /**
  * @param array $context
   * return result to handler storeFrontHandler
   */
  abstract public function storeFrontHandler(array $args);

  /**
   * @param string $method
   * @param array $args
   */
  function __call($method, $args)
  {
    $result = ''; // instance function

    return $this->storeFrontHandler($result);
  }

}


 ?>
