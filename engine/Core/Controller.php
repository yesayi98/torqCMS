<?php
/**
 *
 */
abstract class Controller
{
  private $post;
  private $get;
  private $request;
  private $mainRequest;

  protected $view;

  public $route;

  function __construct($view, Request $request, $route)
  {
    $this->mainRequest = $request;
    $this->post = $request->getPost();
    $this->get = $request->getQuery();
    $this->request = $request->getParams();
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

  public function Request()
  {
    return $this->mainRequest;
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


  /* pre dispatch method calling before calling controller action */
  public function preDispatch()
  {
    // there are will be written subscribers from plugins
  }

  /* post dispatch method calling after writing content in the view */
  public function postDispatch()
  {
    // get Container
    // destroying session messages
    Container()->setSession('message', []);
    // destroying cache session
    Container()->setSession('clearCache', false);

    // there are will be written subscribers from plugins
  }

}

 ?>
