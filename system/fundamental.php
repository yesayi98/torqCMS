<?php

date_default_timezone_set($db['db_timezone']);

$connection = new Connection($db);

function Connection(){
  return $GLOBALS['connection'];
}

function Container()
{
  return $GLOBALS['Container'];
}

 ?>
