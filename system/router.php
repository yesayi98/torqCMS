<?php
session_start();

require __DIR__.'/bootstrap.php';

Router::start($_GET);

?>
