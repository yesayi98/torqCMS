<?php

/**
 *
 */
class usersController extends BackendController
{

  public function index()
  {
    $usersModel = $this->__get('Users');

    $users = $usersModel->getUserList();

    $this->View()->setAssign('users', $users);

    if ($this->getRequest()->request['XHR']) {
      $this->route = "backend/users/table";
    }
  }

  public function detail()
  {
    $user_id = $this->getRequest()->request['u'];
    $usersModel = $this->__get('Users');
    $view = $this->View();

    if (!empty($user_id)) {
      $user = $usersModel->getUser($user_id);
      $user['orders'] = $this->__get('Orders')->getOrdersByUserId($user_id);
      $view->setAssign('user', $user);
    }
  }

  public function delete()
  {
    $user_id = $this->getRequest()->request['u'];
    $usersModel = $this->__get('Users');

    $usersModel->deleteUser($user_id);

    \Router::redirect('backend/users');
  }
}



 ?>
