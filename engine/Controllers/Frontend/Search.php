<?php

/**
 *
 */
class searchController extends Controller
{
  public function index()
  {
    $this->route = 'category';

    $articleModel = $this->__get('Articles');

    $context = $this->getRequest()->get['search'];
    $context = strtolower($context);
    $sql = "SELECT a.id
            FROM articles a
            LEFT JOIN article_attributes aa ON aa.article_id = a.id
            LEFT JOIN article_category ac ON ac.article_id = a.id
            LEFT JOIN article_translations atr ON atr.article_id = a.id
            LEFT JOIN categories c ON c.id = ac.category_id
            LEFT JOIN category_translation ct ON ct.category_id = c.id
            WHERE LOWER(a.name) LIKE '%$context%' OR
                  LOWER(a.keywords) LIKE '%$context%' OR
                  LOWER(a.description) LIKE '%$context%' OR
                  a.price LIKE '%$context%' OR
                  LOWER(aa.color) LIKE '%$context%' OR
                  LOWER(aa.ordernumber) LIKE '%$context%' OR
                  LOWER(atr.name) LIKE '%$context%' OR
                  LOWER(atr.description) LIKE '%$context%' OR
                  LOWER(c.name) LIKE '%$context%' OR
                  LOWER(ct.name) LIKE '%$context%'
                  GROUP BY a.id
            ";
    $productIds = Connection()->fetchAll($sql);
    $articles;
    foreach ($productIds as $product_id) {
      $articles[] = $articleModel->getArticleById($product_id);
    }

    $products['data'] = $articles;
    if ($articles) {
      $title = $this->View()->translating('searchby').' '.$searchContext;
    }else{
      $title = $this->View()->translating('nothingfinded');
    }



    $this->View()->setAssign('Articles.products', $products);

    $this->View()->setAssign('title', $title);

  }
}


 ?>
