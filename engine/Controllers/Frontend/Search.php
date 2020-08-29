<?php

/**
 *
 */
class searchController extends Controller
{
  public function index()
  {
    $params = $this->getRequest()->get;
    unset($params['route']);
    $urlParams = http_build_query($params);
    Router::redirect('category/search?'.$urlParams);
  }
}


 ?>
