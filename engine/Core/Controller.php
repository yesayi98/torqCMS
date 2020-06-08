<?php
/**
 *
 */
abstract class Controller
{
  private $post;
  private $get;
  private $request;

  protected $view;

  public $route;

  function __construct($view, $post, $get, $request, $route)
  {
    $this->post = $post;
    $this->get = $get;
    $this->request = $request;
    $this->route = $route;
    $this->view = $view;

  }

  protected function getRequest()
  {
    $request = new stdClass();
    $request->post = $this->post;
    $request->get = $this->get;
    $request->request = $this->request;

    return $request;
  }

  public function View()
  {
    return $this->view;
  }

  public function __get ($key){
    return Container()->get($key);
  }

  public function __set ($key, $value){
    return Container()->set($key, $value);
  }

}

 ?>
