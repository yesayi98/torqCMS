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

}



 ?>
