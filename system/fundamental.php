<?php


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

// set arguments
// 1st argument set redirecting url
// 2nd argument set message array
// 3rd argument set type 'error', 'success', 'warning'

function redirect($url, $message = [], $type = "success")
{
  if(count($message) != 0){
    $_SESSION['message'][$type] = $message;
  }
  if (!headers_sent()) {
    header('Location: '.$url);
  }else{
    echo "<script>window.location.href='".$url."'</script>";
  }
  die;
}
function url($routing)
{
  return BASE_URL.'/'.$routing;
}
function validator($request, $type = null)
{
  if (isset($request)) {
    $validator = new Validator($request, $type);
  }
  return $validator->getRequest();
}

function post()
{
  $request = $_POST;
  if ($request) {
    return validator($request, 'post');
  }
}

function get()
{
  $request = $_GET;
  if ($request) {
    return validator($request);
  }
}

function request()
{
  $request = $_REQUEST;
  if ($request) {
    return validator($request);
  }
}

//start routing
// require DOCUMENT_ROOT.'/engine/container.php';

if (isset(get()['lang']) || isset(post()['lang'])) {
  $_SESSION['lang'] = (get()['lang'])?(get()['lang']):(post()['lang']);
}else{
  if (!$_SESSION['lang']) {
    $_SESSION['lang'] = 1;
  }
}

$lang = $_SESSION['lang'];

if (isset(get()['cur'])) {
  $_SESSION['currency'] = get()['cur'];
}else{
  if (!$_SESSION['currency']) {
    $_SESSION['currency'] = 1;
  }
}

$cur = $_SESSION['currency'];


function Container()
{
  return $GLOBALS['Container'];
}

 ?>
