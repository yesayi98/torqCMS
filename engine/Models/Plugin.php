<?php
/**
 *
 */
class Plugin
{

  private $container;

  function __construct($container)
  {
    $this->container = $container;
  }
  public function getPluginByName($name){
    $sql = "SELECT * FROM core_plugins WHERE name = '$name'";

    $query = Connection()->fetchOne($sql);

    return $query;
  }
  public function getPluginById($id){
    $sql = "SELECT * FROM core_plugins WHERE id = '$id'";

    $query = Connection()->fetchOne($sql);

    return $query;
  }
  public function getPluginList()
  {
    $sql = "SELECT * FROM core_plugins";

    $query = Connection()->fetchAll($sql);

    return $query;
  }

  function getPluginComponents($name='')
  {
    if ($name == "") {
      return;
    }
    return parse_ini_file("admin/plugins/$name/plugin.ini");
  }

  public function install($message = "")
  {
    if ($message != ""){
      $result['message'] = $message;
    }
      $childName = get_called_class();

    $sql = "UPDATE core_plugins SET status = 'active' WHERE name = '$childName'";
    return Connection()->set($sql);
  }
  public function uninstall($message = "")
  {
    $childName = get_called_class();

    if ($message != ""){
      $result['message'] = $message;
    }

    $sql = "UPDATE core_plugins SET status = 'deactive' WHERE name = '$childName'";
    return Connection()->set($sql);
  }
  public function deletePlugin($pluginName = null)
  {
    $sql = "SELECT * FROM core_plugins WHERE name = '$pluginName'";
    $plugin = Connection()->fetchOne($sql);
    $this->deleteAll(dirname($plugin['path']));

    $sql = "DELETE FROM core_plugins WHERE name = '$pluginName'";
    return Connection()->set($sql);
  }

  function deleteAll($str) {
    //It it's a file.
    if (is_file($str)) {
        //Attempt to delete it.
        return unlink($str);
    }
    //If it's a directory.
    elseif (is_dir($str)) {
        //Get a list of the files in this directory.
        $scan = glob(rtrim($str,'/').'/*');
        //Loop through the list of files.
        foreach($scan as $index=>$path) {
            //Call our recursive function.
            deleteAll($path);
        }
        //Remove the directory itself.
        return @rmdir($str);
    }
  }
}



 ?>
