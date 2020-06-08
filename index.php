<?php

// Configuration
if (is_file('config.php')) {
	require_once('config.php');
}
//ERROR Reporting and Debug mode
if (!DEBUG) {
	error_reporting(E_ALL);
	error_reporting(E_ERROR | E_PARSE);
}
// Check Version
if (version_compare(phpversion(), '5.4.0', '<') == true) {
	exit('PHP 5.4+ Required');
}

require_once 'system/router.php';
 ?>
