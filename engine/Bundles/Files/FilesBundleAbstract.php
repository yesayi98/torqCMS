<?php
namespace Bundles\Files;
/**
 * Search bundle: search system for articles in torq_cms
 */
abstract class FilesBundle
{

  /**
   * @var array $file
   */
  protected $file;

  /**
   * @var Container $container
   */
  protected $container;

  /**
   * @param array $file
   */
  function __construct($file = array())
  {
    $this->file = $file;
    $this->container = Container();
  }

}


 ?>
