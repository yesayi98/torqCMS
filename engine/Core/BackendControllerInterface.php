<?php
  /**
    * Controller interface for Backend controller classes
    * implement those interface and get all classes which need for backend controller
    * Written only for Torq CMS
    */
    //BackendControllerInterface

   interface BackendControllerInterface {

     public function getList();

     public function save();

     public function delete();

   }
 ?>
