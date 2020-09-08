<?php
session_start();

require DOCUMENT_ROOT.'/vendor/autoload.php';
require 'fundamental.php';
require 'frontfunctions.php';
$connection = $GLOBALS['connection'];
$Container = new Container($connection);
$modelEntity = new \Core\Components\ModelManager($dbParams, $modelPaths);
$Container->setModelManager($modelEntity);

Router::start($_GET);

?>
