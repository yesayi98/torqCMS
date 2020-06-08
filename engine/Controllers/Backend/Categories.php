<?php

/**
 * backend contreller for categories
 */
class categoriesController extends BackendController
{
  public function index()
  {
    $categoryModel = $this->__get('Categories');
    $categories = $categoryModel->getCategories();
    $categoryList = $categoryModel->getCategoryList();

    $this->View()->setAssign('categories', $categories);
    $this->View()->setAssign('categoryList', $categoryList);
  }

  public function detail()
  {
    $category_id = $this->getRequest()->get['c'];

    $categoryModel = $this->__get('Categories');
    $categories = $categoryModel->getCategories();
    $categoryList = $categoryModel->getCategoryList();
    $category = $categoryModel->getCategoryById($category_id);
    $this->View()->setAssign('categories', $categories);
    $this->View()->setAssign('category', $category);
    $this->View()->setAssign('categoryList', $categoryList);

    if (empty($this->getRequest()->request['XHR'])) {
      $this->route="backend/categories/index";
    }
  }

  public function save()
  {
    $request = $this->getRequest()->request;
    $categoryModel = $this->__get('Categories');

    $category = [];

    $category['name'] = $request['name'];
    $category['description'] = $request['description'];
    $category['parent_id'] = $request['parent_id'];
    $category['active'] = ($request['active']==='on')?true:false;
    $category['in_menu'] = ($request['in_menu']==='on')?true:false;
    $category['content'] = ($request['content']==='on')?true:false;
    $category['external_url'] = $request['external_url'];
    $category['media_id'] = $request['media_id'][0];

    $success = true;
    $message = 'success';
    if ($request['id']) {
      $category['id'] = $request['id'];
      $success = $categoryModel->updateCategory($category);
    }else{
      $category['id'] = $categoryModel->setCategory($category);
      if (!$category['id']) {
        $success = false;
        $message = Connection()->getError();
      }
    }

    if (!empty($category['id'])) {
      $this->saveTranslation($request['translation']);
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
      Router::redirect('backend/categories/detail?c='.$category['id']);
    }
  }



  private function saveTranslation($translations)
  {
    $category_id = $translations['category_id'];
    unset( $translations['category_id'] );
    $categoryTranslationModel = $this->__get('Categories')->CategoryTranslation();
    foreach ($translations as $language => $translation) {

      $translation['category_id'] = $category_id;
      $translation['lang_id'] = $language;
      $existTranslation = $categoryTranslationModel->getCategoryTranslation($category_id, $language);

      if (empty($existTranslation)) {
        $query = $categoryTranslationModel->saveTranslation($translation);
      }else{
        $query = $categoryTranslationModel->updateTranslation($translation);
      }
      if (!$query) {
        die(json_encode(
            array(
              'success' => false,
              'message' => Connection()->getError(),
            )
          ));
      }
    }
  }

  public function delete()
  {
    $request = $this->getRequest()->request;
    $categoryModel = $this->__get('Categories');

    $query = $categoryModel->deleteCategory($request['c']);

    if ($query) {
      Router::redirect('backend/categories/detail');
    }
  }

  public function categoryList()
  {
    $categoryModel = $this->__get('Categories');
    $categories = $categoryModel->getCategories();
    $this->route = "backend/categories/includes/categoryList";
    $this->View()->setAssign('categories', $categories);
  }
}


 ?>
