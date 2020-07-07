<?php

/**
 * class controller for blog system, backend
 */
class blogController extends BackendController
{
  /**
   * actions should be a public methodes
   * index is an default action, calls in running blog controller
   */
  public function index()
  {
    // get blog model
    $model = $this->__get('Blog');
    // get blog list
    $blogs = $model->getBlogList();
    // assign vars
    $this->View()->setAssign('blogs', $blogs);
  }

  /**
   * actions should be a public methodes
   * detail is an action, calls on running blog details
   */
  public function detail()
  {
    // get request params
    $reqeust = $this->getRequest();
    $blogID = $reqeust->get['blog'];

    // get blog model
    $model = $this->__get('Blog');

    //get blog if it exist
    if (!empty($blogID)) {
      $blog = $model->getBlog($blogID);
      // assign vars
      $this->View()->setAssign('blog', $blog);
    }

    // get query builder for categories
    $queryBuilder = $model->getQueryBuilder();
    // create query
    $query = $queryBuilder->select()->setTable('categories');
    $query->where()->equals('external_url', "'blog'");
    // get categories
    $queryBuilder->execute($query);
    $categories = $queryBuilder->fetchAll();

    $this->View()->setAssign('categories', $categories);

  }

  /**
   * actions should be a public methodes
   * save is an action, calls on running blog save
   */
  public function save()
  {
    $request = $this->getRequest()->request;

    $blog['name'] = $request['name'];
    $blog['author'] = $request['author'];
    $blog['active'] = $request['active'];
    $blog['description'] = $request['description'];
    $blog['category_id'] = $request['category_id'];
    $blog['created_date'] = $request['created_date'];
    $blog['changed_date'] = date("Y-m-d");
    $blog['media_id'] = $request['media_id'];
    $success = true;
    if (!empty($request['id'])) {
      $blog['id'] = $request['id'];
      $success = $this->updateBlog($blog);
    }else{
      $blog['id'] = $this->insertBlog($blog);
      if (empty($blog['id'])) {
        $success = false;
      }
    }
    if (!$success) {
      $message = Connection()->getError();
    }else{
      $message = "success";
    }

    if ($request['XHR']) {
      die(
        json_encode(
            array(
              'success' => $success,
              'message' => $message
            )
          )
        );
    }else{
      Router::redirect('backend/blog/detail?blog='.$blog['id']);
    }
  }

  /**
  * actions should be public function
  * delete is an action, calls on running blog delete
  */
  public function delete()
  {
    // get request params
    $reqeust = $this->getRequest();
    $blogID = $reqeust->get['blog'];

    // get blog model
    $model = $this->__get('Blog');
    // deleting
    $success = $model->deleteBlog($blogID);
    $message = "success";
    if (!$success) {
      $message = Connection()->getError();
    }
    if ($request['XHR']) {
      die(
        json_encode(
            array(
              'success' => $success,
              'message' => 'success'
            )
          )
        );
    }else{
      Router::redirect('backend/blog/');
    }
  }

    /**
    * @param array $blog
    * @return int $insertedId
    */
    private function insertBlog($blog)
    {
      $this->__get('Blog')->setBlog($blog);

      return Connection()->getInsertedId();
    }

    /**
    * @param array $blog
    * @return int
    */
    private function updateBlog($blog)
    {
      $inserted = $this->__get('Blog')->updateBlog($blog);

      return $inserted;
    }
}


 ?>
