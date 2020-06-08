<?php
use Core\ScssCompiler\ScssCompiler;
/**
 *
 */
class BackendAssign extends Controller
{

  public function view()
  {
    $routFile = $this->route;
    $admin = array();
    if (Container()->getSession('admin') != null){
      $admin = Container()->Admins()->getAdmin(Container()->getSession('admin', 'id'));
    }else{
      $admin = Container()->Admins()->getAdmin(Container()->getCookie('admin')['id']);
    }
    if (Container()->getSession('message') != null){
      $this->view->setAssign('message', Container()->getSession('message'));
    }
    $menuModel = $this->__get('CoreMenu');

    $menuItems = $menuModel->getMenuByParent();
    $languages = $this->__get('Translator')->getLanguageList();

    $title = ucfirst($routFile);

    $this->view->setAssign('admin', $admin);
    $this->view->setAssign('menu', $menuItems);
    $this->view->setAssign('BASE_BACKEND', BASE_BACKEND);
    $this->view->setAssign('title', $title);
    $this->view->setAssign('languages', $languages);

  }

}


 ?>
