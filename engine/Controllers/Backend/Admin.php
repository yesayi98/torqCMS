<?php

/**
 *
 */
class adminController extends BackendController
{
  public function index()
  {

  }

  public function login()
  {
    $request = $this->getRequest()->request;

    $admin = array();

    $admin['username'] = $request['admin'];
    $admin['password'] = md5($request['password']);
    if (empty($admin['username']) || empty($admin['password'])) {
      $this->View()->setMessage('error', 'empty fileds');
      Router::redirect('backend');
    }
    $adminModel = $this->__get('Admins');
    $admin = $adminModel->checkAdmin($admin);
    if (!empty($admin)) {
      unset($admin['password']);
      Container()->setSession('admin', $admin);
      Container()->setCookie('admin', $admin, time()+3600*24, '/backend');
    }

    Router::redirect('backend');
  }

  public function logout()
  {
    Container()->setSession('admin', '');
    Container()->setCookie('admin', '', time()-3600*24, '/backend');
    Router::redirect('backend');
  }

}
 ?>
