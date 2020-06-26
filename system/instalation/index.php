<?php
 if (!empty($_POST) && !is_file('lock.txt')) {
    $db_configs = "// DB
                  define('TIMEZONE', '".$_POST['TIMEZONE']."');
                  define('DB_DRIVER', '".$_POST['DB_DRIVER']."');
                  define('DB_HOSTNAME', '".$_POST['DB_HOSTNAME']."');
                  define('DB_USERNAME', '".$_POST['DB_USERNAME']."');
                  define('DB_PASSWORD', '".$_POST['DB_PASSWORD']."');
                  define('DB_DATABASE', '".$_POST['DB_DATABASE']."');
                  define('DB_PORT', '".$_POST['DB_PORT']."');";
    $file_path = fopen($_SERVER['DOCUMENT_ROOT'].'/config.php', 'a');
    fwrite($file_path, $db_configs);
    fclose($file_path);

    $lockfile = fopen("lock.txt", "w") or die("Unable to open file!");

    // installing db
    if ($_POST['skip'] !== 'on') {

      $sql = file_get_contents(__DIR__.'/torq_cms.sql');
      $servername = $_POST['DB_HOSTNAME'];
      $username = $_POST['DB_USERNAME'];
      $password = $_POST['DB_PASSWORD'];
      $db = $_POST['DB_DATABASE'];

      // Create connection
      $connection = new mysqli($servername, $username, $password, $db);
      // Check connection
      if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
      }
      // set necessary tables
      $connection->multi_query((string) $sql);
      if ($connection->error) {
        die($connection->error);
      }
    }
    $_POST = [];
    header('location: '.$_SERVER['HTTP_HOST']);
  }elseif (!empty($_POST)) {
    include 'config.php';
    // set default admin
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $username = htmlspecialchars(trim($_POST['username']));
    $password = md5(trim($_POST['password']));
    $admin_group = htmlspecialchars(trim($_POST['admin_group']));
    $connection = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    // Check connection
    if ($connection->connect_error) {
      die("Connection failed: " . $connection->connect_error);
    }
    $sql = "INSERT INTO `admins`(`name`, `email`, `username`, `password`, `admin_group`)
            VALUES ('$name','$email','$username','$password','$admin_group')";

    $connection->query((string) $sql);
    if ($connection->error) {
      die($connection->error);
    }
    $lockfile = fopen(__DIR__."/torq.lock", "w") or die("Unable to open file!");
    unlink('lock.txt');
    header('location: '.BASE_URL.'/backend');
 }elseif (is_file('lock.txt')) {
   include __DIR__.'/create_admin.php';
   exit;

 }else{
   include __DIR__.'/start.php';
 }
?>
