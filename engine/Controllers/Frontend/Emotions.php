<?php

/**
 *
 */
class emotionsController extends Controller
{
  public function index()
  {
    $emotionModel = $this->__get('Emotions');
    $emotions = $emotionModel->getActiveEmotions();

    foreach ($emotions as &$emotion) {
      foreach ($emotion['components'] as &$component) {
        switch ($component['emotion_type']['name']) {
          case 'category_teaser':
            $component['content'] = $this->categoryTeaser($component['variables']);
            break;
          case 'slider':
            $component['content'] = $this->getContent($component['variables'], $component['emotion_type']);
            break;
          case 'service':
            $component['content'] = $this->getContent($component['variables'], $component['emotion_type']);
            break;
          case 'blog_slider':
            $component['content'] = $this->blogSlider($component['variables']);
            break;
          case 'text':
            $component['content'] = $component['variables'];
            break;
          case 'article_slider':
            $component['content'] = $this->articleSlider($component['variables']);
            break;
          case 'article_group':
            $component['content'] = $this->articleGroup($component['variables']);
            break;
          case 'banner':
            $component['content'] = $this->getContent($component['variables'], $component['emotion_type']);
            break;
          default:
          $component['content'] = $this->getContent($component['variables'], $component['emotion_type']);
        }
      }
    }

    $this->View()->setAssign('emotions', $emotions);
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

  public function category()
  {
    $request = $this->getRequest()->request;
    $category_id = $request['c'];
    $sort = $request['sort'];
    $_GET['limit'] = 24;
    $articles = $this->__get('Articles')->getArticlesByCategoryWithPagination($category_id, $sort)['data'];

    $this->View()->setAssign('Articles.articles', $articles);
  }
}


 ?>
