<?php

/**
  * BackendController class
  * get all classes which need for backend controller
  * Written only for Torq CMS
  */
  abstract class BackendController extends Controller{

    function __construct($view, $request, $route)
    {
      parent::__construct($view, $request, $route);

      $admin = $this->View()->getAssign('admin');
      if (empty($admin)) {
        $this->route = 'backend/login/login';
        return;
      }
    }

  }
 ?>
