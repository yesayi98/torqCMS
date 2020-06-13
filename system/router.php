<?php
session_start();

require DOCUMENT_ROOT.'/vendor/autoload.php';
require 'fundamental.php';
require 'frontfunctions.php';
$connection = $GLOBALS['connection'];
$Container = new Container($connection);

$routerParams = Router::start($_GET);


?>
