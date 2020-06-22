<?php
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

// error handling
define('DEBUG', true);

// DB
define('TIMEZONE', 'Asia/Yerevan');
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'torq_cms');
define('DB_PORT', '3306');
?>
