<?php

date_default_timezone_set(TIMEZONE);

$dbDriver = DB_DRIVER;
$host = DB_HOSTNAME;
$dbUser = DB_USERNAME;
$dbPassword = DB_PASSWORD;
$dbName = DB_DATABASE;
$dbPort = DB_PORT;
$connection = new Connection($host, $dbUser, $dbPassword, $dbName);

function Connection(){
  return $GLOBALS['connection'];
}

function Container()
{
  return $GLOBALS['Container'];
}

 ?>
