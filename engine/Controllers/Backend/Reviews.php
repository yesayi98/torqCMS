<?php
namespace Controllers\Backend;

/**
 * Customer Review Controller
 * extend from abstract class Controller
 */
class reviewsController extends \BackendController
{
  /**
   * default action index
   */
  public function index()
  {
    $reviews = $this->Articles->getArticleReviews();
    if ($this->getRequest()->post['XHR'] || $this->getRequest()->post['widget']) {
      $this->route = 'backend/reviews/table';
    }

    $this->View()->setAssign('reviews', $reviews);
  }

  /**
   * action detail
   */
  public function detail()
  {
    $request = $this->getRequest()->reqeust;
    $review = $this->Articles->getArticleReview($request['id']);

    $this->View()->setAssign('reviews', $reviews);
  }

  /**
   * action detail
   */
   public function save()
   {
     // get request
     $request = $this->getRequest()->request;
     // create articleReview array
     $articleReview = array();
     // set articleReview parapms
     $articleReview['comment'] = $request['comment'];
     $articleReview['rating_count'] = $request['rating'];
     $articleReview['article_id'] = $request['article_id'];
     $articleReview['user_id'] = $request['user_id'];
     $articleReview['active'] = $request['active'];

     // set operation status and message
     $success = true;
     $message = 'success';
     // get articleReview model
     $articleReviewModel = $this->Articles;
     if (empty($request['id'])) {
       $success = $articleReviewModel->setArticleReview($articleReview);
       $articleReview['id'] = Connection()->getLastInserted();
       if (!$success) {
         $message = Connection()->getError();
       }
     }else{
       $articleReview['id'] = $request['id'];
       $success = $articleReviewModel->updateArticleReview($articleReview);
       if (!$success) {
         $message = Connection()->getError();
       }
     }

     if ($request['XHR']) {
       die(json_encode([
         'success' => $success,
         'message' => $message,
       ]));
     }

     Router::redirect('backend/reviews/');
   }
}

 ?>
