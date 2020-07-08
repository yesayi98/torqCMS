<?php


/**
 * emottionsController controller file for handling emotions
 * Torq CMS
 * emottionsController extends Controller base backend abstract class backendController
 */
class emotionsController extends BackendController
{
  // action index calling if not set action property on a request
  // route = backend/emotions/index.tpl
  public function index()
  {
    // get model for emotions
    $emotionModel = $this->__get('Emotions');
    // get emnotion list
    $emotions = $emotionModel->getEmotionList();
    // set emotions array to view
    $this->View()->setAssign('emotions', $emotions);
  }

  public function detail()
  {
    // get model for emotions
    $emotionModel = $this->__get('Emotions');
    // get http request
    $request = $this->getRequest();
    // get emotion id from request params
    $emotionID = $request->get['e'];
    // get emotion by id
    $emotion = $emotionModel->getEmotion($emotionID);
    // now we should get emotionTypes for view it to front
    $emotionTypes = $emotionModel->getEmotionTypeList();

    // set data to view
    $view = $this->View();
    $view->setAssign('emotionTypes', $emotionTypes);
    $view->setAssign('emotion', $emotion);
  }

  private function getContent($variables, $type)
  {
    $variables = array_filter(explode('|', $variables));

    $module = ucfirst($type['module']);
    $model = $this->__get('ModelEntity');

    $contents = [];

    foreach ($variables as $key => $value) {
      $contents[] = $model->getElementById($value, $type['module']);
    }
    return $contents;
  }

  private function categoryTeaser($variables)
  {
    if (empty($variables)) {
      return;
    }
    $category_id = $variables[0];

    $categoryModel = $this->__get('Categories');

    $category = $categoryModel->getCategoryById($category_id);

    $sorting = array(
      'newer',
      'sales',
      'topseller',
    );

    return array(
      'category' => $category,
      'sorting' => $sorting
    );
  }

  private function articleSlider($variables)
  {
    if (empty($variables)) {
      return;
    }
    $variables = array_filter(explode('|', $variables));


    $articleModel = $this->__get('Articles');

    $articles = [];
    foreach ($variables as $key => $value) {
      $articles[] = $articleModel->getArticleById($value);
    }

    return $articles;
  }

  private function articleGroup($variables)
  {
    if (empty($variables)) {
      return;
    }
    $variables = array_filter(explode('|', $variables));


    $articleModel = $this->__get('Articles');

    $articles = [];
    foreach ($variables as $key => $value) {
      $articles[] = $articleModel->getArticleById($value);
    }

    return $articles;
  }

  private function blogSlider($variables)
  {
    if (empty($variables)) {
      return;
    }
    $variables = array_filter(explode('|', $variables));


    $blogModel = $this->__get("Blog");

    $blogs = [];
    foreach ($variables as $key => $value) {
      $blogs[] = $blogModel->getBlog($value);
    }
    return $blogs;
  }

  public function save()
  {
    $request = $this->getRequest()->request;

    $emotion['id'] = $request['id'];
    $emotion['name'] = $request['name'];
    $emotion['row_height'] = $request['row_height'];
    $emotion['class'] = $request['class'];
    $emotion['sort_id'] = $request['sort_id'];
    $emotion['full_screen'] = ($request['full_screen'] === "on")?1:0;
    $emotion['active'] = ($request['active'] === "on")?1:0;
    $message = "success";

    $emotionModel = $this->__get('Emotions');
    if (!empty($emotion['id'])) {
      $success = $emotionModel->updateEmotion($emotion);
    }else{
      $success = $emotionModel->setEmotion($emotion);
      if ($success) {
        $emotion['id'] = Connection()->getlLastInserted();
      }else{
        $message = Connection()->getError();
      }
    }
    if (!$success) {
      $message = Connection()->getError();
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
      Router::redirect('backend/emotions/detail?e='.$emotion['id']);
    }
  }

  public function componentsave()
  {
    $request = $this->getRequest()->request;

    $emotion['emotion_id'] = $request['emotion_id'];
    $emotion['type'] = $request['type'];
    $emotion['title'] = $request['title'];
    $emotion['variables'] = $request['variables']?$request['variables']:'';
    $emotion['col_xl'] = $request['col_xl']?$request['col_xl']:12;
    $emotion['col_lg'] = $request['col_lg']?$request['col_lg']:12;
    $emotion['col_md'] = $request['col_md']?$request['col_md']:12;
    $emotion['col_sm'] = $request['col_sm']?$request['col_sm']:12;
    $emotion['col_xs'] = $request['col_xs']?$request['col_xs']:12;
    $emotion['cols'] = $request['cols']?$request['cols']:12;
    $emotion['rows'] = $request['rows']?$request['rows']:0;
    $emotion['sort_id'] = $request['sort_id']?$request['sort_id']:0;
    $message = "success";

    $emotionModel = $this->__get('Emotions');
    if (!empty($emotion['id'])) {
      $success = $emotionModel->updateEmotionComponent($emotion);
    }else{
      $success = $emotionModel->setEmotionComponent($emotion);
      if ($success) {
        $emotion['id'] = Connection()->getlLastInserted();
      }else{
        $message = Connection()->getError();
      }
    }
    if (!$success) {
      $message = Connection()->getError();
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
      Router::redirect('backend/emotions/detail?e='.$emotion['id']);
    }
  }

  public function componentDetail()
  {
    // getting reqeust params
    $request = $this->getRequest()->request;
    $componentID = $request['id'];
    // get emption model
    $emotionModel = $this->__get('Emotions');
    // get current component
    $component = $emotionModel->getEmotionComponent($componentID);

    // set a route for emotion component
    $this->route = 'backend/'.$component['emotion_type']['template'];
    var_dump($this->route);exit;
  }

}



 ?>
