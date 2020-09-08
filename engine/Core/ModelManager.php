<?php
namespace Core\Components;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Console\ConsoleRunner;

/**
 *
 */
class ModelManager
{

  /**
   *  @var bool
   */
  private $devMode;

  /**
   *  @var array
   */
  private $dbParams;

  /**
   *  @var array
   */
  private $modelPaths;

  /**
   *  @var EntityManager
   */
  private $entityManager;


  /**
   *  @param array $dbParams
   *  @param array $modelPaths
   *  @param bool $devMode
   */
  function __construct($dbParams, $modelPaths, $devMode = true)
  {
    $this->dbParams = $dbParams;
    $this->devMode = $devMode;
    $this->modelPaths = $modelPaths;
  }

  /**
   *  @param void
   *  @return EntityManager $entityManager
   */
  public function createModelEntity()
  {
    $config = Setup::createAnnotationMetadataConfiguration($this->modelPaths, $this->devMode);
    $entityManager = EntityManager::create($this->dbParams, $config);

    ConsoleRunner::createHelperSet($entityManager);

    $this->entityManager = $entityManager;
    return $entityManager;
  }


  /**
   *  @param void
   *  @return EntityManager $entityManager
   */
  public function getEntityManager()
  {
    return $this->entityManager;
  }

}

 ?>
