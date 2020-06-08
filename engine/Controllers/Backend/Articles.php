<?php

/**
 * article Controller hanling an article requests
 */
class articlesController extends BackendController
{
  private $categories = [];

  public function index()
  {
    $articlesModel = $this->__get('Articles');
    $articles = $articlesModel->getArticles();

    if (!empty($this->getRequest()->request['XHR'])) {
      $this->route = "backend/articles/table";
    }

    $this->View()->setAssign('articles', $articles);
  }

  public function detail()
  {
    $article_id = $this->getRequest()->get['a'];
    $units = $this->__get('Units')->getUnitList();
    $categories = $this->__get('Categories')->getCategoryList();

    if (!empty($article_id)) {
      $article = $this->__get('Articles')->getArticleById($article_id);
      $this->View()->setAssign('article', $article);
      $translations = $this->__get('Articles')->ArticleTranslation()->getArticleTranslation($article_id);
      $this->View()->setAssign('translations', $translations);

      array_walk($categories, array($this, 'unsetCategory'), $article['category_id']);
      $categories = $this->categories;
    }

    $this->View()->setAssign('categories', $categories);
    $this->View()->setAssign('units', $units);
  }

  public function unsetCategory(&$value, $key, $categories = [])
  {
    if (!in_array($value['id'] , array_column($categories, 'id'))) {
      $this->categories[] = $value;
    }
  }

  public function save()
  {
    $request = $this->getRequest()->request;

    $article['name'] = $request['name'];
    $article['ordernumber'] = $request['ordernumber'];
    $article['supplier'] = $this->getOrSetSupplier($request['supplier']);
    $article['get_price'] = $request['get_price']?$request['get_price']:0;
    $article['price'] = $request['price']?$request['price']:0;
    $article['discount'] = $request['discount']?$request['discount']:0;
    $article['active'] = $request['active'];
    $article['description'] = $request['description'];
    $article['in_stock'] = $request['in_stock'];
    $article['unit'] = $request['unit'];
    $article['unit_id'] = $request['unit_type'];
    $article['category_id'] = $request['category_id'];
    $article['keywords'] = $request['keywords'];
    $article['sale_end'] = $request['sale_end'];
    $article['media'] = $request['media_id'];
    if (!empty($request['id'])) {
      $article['id'] = $request['id'];
      $this->updateArticle($article);
      $request['translation']['article_id'] = $article['id'];
    }else{
      $article['id'] = $this->insertArticle($article);
      $request['translation']['article_id'] = $article['id'];
    }
    $this->saveTranslation($request['translation']);

    if ($request['XHR']) {
      die(
        json_encode(
            array(
              'success' => true,
              'message' => 'success'
            )
          )
        );
    }else{
      Router::redirect('backend/articles/detail?a='.$article['id']);
    }
  }

  /**
  * @param array $article
  * @return int $insertedId
  */
  private function insertArticle($article)
  {
    $this->__get('Articles')->setArticle($article);

    return Connection()->getInsertedId();
  }

  /**
  * @param array $article
  * @return int
  */
  private function updateArticle($article)
  {
    $inserted = $this->__get('Articles')->updateArticle($article);

    return $inserted;
  }

  /**
  * @param string $supplierName
  * @return array $supplier
  */
  private function getOrSetSupplier($supplierName)
  {
    if (!$supplierName) {
      return [];
    }
    $supplierModel = $this->__get('Supplier');
    $supplier = $supplierModel->getSupplierByName($supplierName);

    if (!empty($supplier)) {
      return $supplier;
    }

    $supplier = array(
      'name' => $supplierName,
      'address' => '',
      'media_id' => NULL,
      'description' => '',
    );

    $isset = $supplierModel->setSupplier($supplier);
    $supplier = $supplierModel->getSupplierByName($supplierName);
    return $supplier;
  }


  public function deleteCategory()
  {
    $request = $this->getRequest()->request;

    $article_id = $request['article_id'];
    $category_id = $request['category_id'];

    $result = $this->__get('Articles')
                   ->ArticleCategories()
                   ->deleteArticleCategory($category_id, $article_id);
    die($result);
  }

  public function deleteImage()
  {
    $request = $this->getRequest()->request;
    $article_id = $request['article_id'];
    $media_id = $request['media_id'];

    $articleMediaRepository = $this->__get('Articles')->ArticleImages();
    $result = $articleMediaRepository->deleteArticleImage($media_id, $article_id);
    $result = array(
      'success' => $result,
    );
    die(json_encode($result));

  }

  private function saveTranslation($translations)
  {
    $article_id = $translations['article_id'];
    unset( $translations['article_id'] );
    $articleTranslationModel = $this->__get('Articles')->ArticleTranslation();
    foreach ($translations as $language => $translation) {

      $translation['article_id'] = $article_id;
      $translation['lang_id'] = $language;
      $existTranslation = $articleTranslationModel->getArticleTranslation($article_id, $language);

      if (empty($existTranslation)) {
        $query = $articleTranslationModel->saveTranslation($translation);
      }else{
        $query = $articleTranslationModel->updateTranslation($translation);
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

  public function saveOptions()
  {
    $request = $this->getRequest()->request;
    $article_id = $request['article_id'];
    $options[0]['name'] = $request['name'];
    $options[0]['value'] = $request['value'];
    $query = $this->__get('Articles')->setArticleOptions($article_id, $options);

    die(json_encode(
        array(
          'success' => $query,
          'message' => Connection()->getError()?Connection()->getError():'success',
        )
      ));
  }

  public function options()
  {
    $article_id = $this->getRequest()->get['a'];

    $options = $this->__get('Articles')->getArticleOptions($article_id);

    $article['options'] = $options;
    $article['id'] = $article_id;
    $this->View()->setAssign('article', $article);
  }
  public function deleteOption()
  {
    $option_id = $this->getRequest()->get['o'];

    $query = $this->__get('Articles')->deleteArticleOption($option_id);

    $result = json_encode(['success' => $query]);
    die($result);
  }
}



 ?>
