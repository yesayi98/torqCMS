<?php
// use UTF-8
if (function_exists('mb_internal_charset')) {
  mb_internal_charset('UTF-8');
}
// SERVER SIDE
PHP_OS == "Windows" || PHP_OS == "WINNT" ? define("SEPARATOR", "\\") : define("SEPARATOR", "/");
// Base
if ($_SERVER['REQUEST_SCHEME'] == "https") {
  define('PROTOCOL', "https");
}else{
  define('PROTOCOL', "http");
}
define('DOCUMENT_ROOT', realpath(__DIR__.SEPARATOR.'..'));
if ($_SERVER['SERVER_NAME'] == 'localhost') {
  // write an folder address which you used
  define('BASE_URL', PROTOCOL.'://'.$_SERVER['HTTP_HOST'].'/torq');
}else{
  define('BASE_URL', PROTOCOL.'://'.$_SERVER['HTTP_HOST']);
}
define('BASE_PUBLIC', BASE_URL.'/public/');
define('BASE_FRONTEND', BASE_URL.'/public/frontend/');
define('BASE_BACKEND', BASE_URL.'/public/backend/');
// smarty
define('SMARTY_RESOURCE_CHAR_SET', 'UTF-8');
// error handling
define('DEBUG', true);
// DB
$db = [
  'timezone' => 'Asia/Yerevan',
  'db_driver' => 'mysqli',
  'db_hostname' => 'localhost',
  'db_password' => '',
  'db_name' => 'torq_cms',
  'db_port' => '3306'
];

// model paths
$modelPaths = [
    '/enigine/Models',
];

if (is_file(DOCUMENT_ROOT.'/config.php')) {
  include DOCUMENT_ROOT.'/config.php';
}
