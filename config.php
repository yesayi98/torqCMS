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
define('DOCUMENT_ROOT', __DIR__);
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
define('DEBUG', false);
