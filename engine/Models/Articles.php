<?php
namespace Models\Articles;

use Models\ArticleImages\ArticleImages;
use Models\ArticleCategories\ArticleCategories;
use Models\ArticleTranslation\ArticleTranslation;

/**
 *
 */
class Articles extends \Model
{
  private $articleImages;
  private $articleCategories;
  private $wishlist = array();
  public $ArticleOptions;

  function __construct($container)
  {
    parent::__construct($container);
    $this->container = $container;
    $this->articleImages = $this->ArticleImages();
    $this->articleCategories = $this->ArticleCategories();
    $wishlistModel = new \Wishlist($container);
    $this->wishlist = $wishlistModel->getProductsBySession();
    $this->ArticleOptions = new \Options($container);
  }


  public function ArticleImages()
  {
    return new ArticleImages($this->container);
  }

  public function ArticleOptions()
  {
    return $this->ArticleOptions;
  }

  public function ArticleCategories()
  {

    return new ArticleCategories($this->container);
  }

  public function ArticleTranslation()
  {

    return new ArticleTranslation($this->container);
  }


  // returns all articles
  // return array $articles

  public function getArticles($all = null)
  {

    $sql = "SELECT a.*, aa.video_article, aa.video_url,aa.video_url, aa.ordernumber FROM articles a
            LEFT JOIN article_attributes aa ON aa.article_id = a.id";
            $route = \Router::getRoute();
            if ($route['module'] !== 'backend') {
              $sql .= 'WHERE a.active = 1';
            }
    if (!$all) {
      $articles = Connection()->query($sql);
      foreach ($articles['data'] as &$article) {
        $article['images'] = $this->articleImages->getArticleImages($article['id']);
        $article['category_id'] = $this->articleCategories->getArticleCategories($article['id']);

        $article['rating'] = $this->getArticleRating($article['id']);
        $article['attributes'] = $this->getArticleAttributes($article['id']);
        $article['is_new'] = $this->getCheckNewer($article);
        $article['wished'] = $this->getCheckWished($article);
        $article['supplier'] = $this->getArticleSupplier($article['attributes']['supplier_id']);
        $article['unit_params'] = $this->getArticleUnit($article['unit_id']);

      }
    }else{
      $articles = Connection()->fetchAll($sql);
      foreach ($articles as &$article) {
        $article['images'] = $this->articleImages->getArticleImages($article['id']);
        $article['category_id'] = $this->articleCategories->getArticleCategories($article['id']);

        $article['rating'] = $this->getArticleRating($article['id']);
        $article['attributes'] = $this->getArticleAttributes($article['id']);
        $article['is_new'] = $this->getCheckNewer($article);
        $article['wished'] = $this->getCheckWished($article);
        $article['supplier'] = $this->getArticleSupplier($article['attributes']['supplier_id']);
        $article['unit_params'] = $this->getArticleUnit($article['unit_id']);
      }
    }

    return $articles;
  }


  private function getArticleUnit($unit_id)
  {
    if (empty($unit_id)) {
      return;
    }

    $unit = $this->container->Units()->getUnit($unit_id);
    return $unit;
  }

  public function getCheckNewer(array $article)
  {
    if(!$article){
      return;
    }
    $relisedate = $article['added_in'];
    $curentdate = date("Y-m-d H:i:s", time());
    if (strtotime($curentdate)-strtotime($relisedate) < 7*24*60*60) {
      return true;
    }else{
      return false;
    }
  }
  public function getCheckWished(array $article)
  {
    if(!$article){
      return;
    }
    $wishlist = $this->wishlist;
    if (in_array($article['id'], array_column($wishlist, 'article_id'))) {
      return true;
    }else{
      return false;
    }
  }

  private function getArticleAttributes($id){
    $sql = "SELECT * FROM article_attributes WHERE article_id = $id";
    $attribute = Connection()->fetchOne($sql);
      unset($attribute['id']);
    return $attribute;
  }

  public function getLastArticles()
  {

    $sql = "SELECT a.*, aa.video_article, aa.video_url,aa.video_url, aa.ordernumber FROM articles a
            LEFT JOIN article_attributes aa ON aa.article_id = a.id ORDER BY `date` DESC";

    $articles = Connection()->query($sql);

    foreach ($articles['data'] as &$article) {
      $article['images'] = $this->articleImages->getArticleImages($article['id']);
      $article['category_id'] = $this->articleCategories->getArticleCategories($article['id']);

      $article['rating'] = $this->getArticleRating($article['id']);
      $article['attributes'] = $this->getArticleAttributes($article['id']);
      $article['is_new'] = $this->getCheckNewer($article);
      $article['wished'] = $this->getCheckWished($article);
      $article['supplier'] = $this->getArticleSupplier($article['attributes']['supplier_id']);
      $article['unit_params'] = $this->getArticleUnit($article['unit_id']);
    }
    return $articles;
  }

  public function getRandomArticles()
  {


    $sql = "SELECT a.*, aa.video_article, aa.video_url,aa.video_url, aa.ordernumber FROM articles a
            LEFT JOIN article_attributes aa ON aa.article_id = a.id ORDER BY rand()";

    $articles = Connection()->query($sql);

    foreach ($articles as &$article) {
      $article['images'] = $this->articleImages->getArticleImages($article['id']);
      $article['category_id'] = $this->articleCategories->getArticleCategories($article['id']);

      $article['rating'] = $this->getArticleRating($article['id']);
      $article['is_new'] = $this->getCheckNewer($article);
      $article['wished'] = $this->getCheckWished($article);
      $article['supplier'] = $this->getArticleSupplier($article['attributes']['supplier_id']);
      $article['unit_params'] = $this->getArticleUnit($article['unit_id']);

    }
    return $articles;
  }
  public function getArticleList($all = false)
  {
    $articles = $this->getList('articles', $all?'all':null);

    return $articles;
  }

  public function getArticleById($id)
  {
    $id = intval($id);
    if(!$id ){
      return;
    }

    $sql = "SELECT a.*, aa.video_article, aa.video_url,aa.video_url, aa.ordernumber FROM articles a
            LEFT JOIN article_attributes aa ON aa.article_id = a.id
            WHERE a.id = $id";
    $route = \Router::getRoute();
    if ($route['module'] !== 'backend') {
      $sql .= ' AND a.active = 1';
    }
    $article = Connection()->fetchOne($sql);
    $article['images'] = $this->articleImages->getArticleImages($article['id']);
    $article['category_id'] = $this->articleCategories->getArticleCategories($article['id']);
    $article['reviews'] = $this->getArticleReviewsByArticleID($article['id'], true);
    $article['rating'] = $this->getArticleRating($article['id']);
    $article['attributes'] = $this->getArticleAttributes($article['id']);
    $article['is_new'] = $this->getCheckNewer($article);
    $article['wished'] = $this->getCheckWished($article);
    $article['options'] = $this->getArticleOptions($article['id']);
    $article['supplier'] = $this->getArticleSupplier($article['attributes']['supplier_id']);
    $article['unit_params'] = $this->getArticleUnit($article['unit_id']);

    return $article;
  }

  // return array $articles
  public function getArticlesByCategory($categoryId, $limit = 12, $offset = 0)
  {
    $builder = $this->getQueryBuilder();
    $query = $builder->select()->setTable('articles');
    $route = \Router::getRoute();
    if ($route['module'] !== 'backend') {
      $query->where()->equals('active', 1)->end();
    }
    $query->leftJoin('article_attributes', 'id', 'article_id', ['ordernumber']);
    $query->leftJoin('article_category', 'id', 'article_id')->where()->equals('category_id', $categoryId)->end();
    $query->limit($offset, $limit);
    $builder->execute($query);
    $articles = $builder->fetchAll();

    foreach ($articles as &$article) {
      $article['images'] =  $this->articleImages->getArticleImages($article['id']);
      $article['category_id'] = $this->articleCategories->getArticleCategories($article['id']);
      $article['rating'] = $this->getArticleRating($article['id']);
      $article['attributes'] = $this->getArticleAttributes($article['id']);
      $article['is_new'] = $this->getCheckNewer($article);
      $article['wished'] = $this->getCheckWished($article);
      $article['supplier'] = $this->getArticleSupplier($article['attributes']['supplier_id']);
      $article['unit_params'] = $this->getArticleUnit($article['unit_id']);
    }

    return $articles;
  }
  public function getArticlesByCategoryWithPagination($categoryId, $sorting=null, $limit=12)
  {
    $limit = intval($limit);
    $categoryId = intval($categoryId);
    if(!$categoryId){
      return;
    }
    $sql = "SELECT a.*, aa.video_article, aa.video_url,aa.video_url, aa.ordernumber FROM articles a
            LEFT JOIN article_category ac ON ac.article_id = a.id
            LEFT JOIN categories c ON c.id = ac.category_id
            LEFT JOIN article_attributes aa ON aa.article_id = a.id
            WHERE ac.category_id = $categoryId";
    $route = \Router::getRoute();
    if ($route['module'] !== 'backend') {
      $sql .= " AND a.active = 1";
    }

    if ($sorting == 'price_asc') {
      $sortType = 'a.price ASC';
    }
    elseif ($sorting == 'price_desc') {
      $sortType = 'a.price DESC';
    }
    elseif ($sorting == 'name_asc') {
      $sortType = 'a.price ASC';
    }
    elseif ($sorting == 'name_desc') {
      $sortType = 'a.price DESC';
    }
    elseif ($sorting == 'sale_end') {
      $sortType = 'aa.sale_end DESC';
    }
    elseif ($sorting == 'sales') {
      $sortType = 'a.discount DESC';
    }
    elseif ($sorting == 'newer') {
      $sortType = 'a.added_in DESC';
    }
    elseif ($sorting == 'topseller') {
      $sortType = 'a.sold DESC';
    }
    elseif ($sorting == null) {
      $sortType = null;
    }

    $sql .= " GROUP BY a.id";

    if ($sortType) {
      $sql .= " ORDER BY $sortType";
    }
    if ($limit) {
      $_GET['limit']=$limit;
    }

    $articles = Connection()->query($sql);


    foreach ($articles['data'] as &$article) {
      $article['images'] =  $this->articleImages->getArticleImages($article['id']);
      $article['category_id'] = $this->articleCategories->getArticleCategories($article['id']);
      $article['rating'] = $this->getArticleRating($article['id']);
      $article['attributes'] = $this->getArticleAttributes($article['id']);
      $article['is_new'] = $this->getCheckNewer($article);
      $article['wished'] = $this->getCheckWished($article);
      $article['supplier'] = $this->getArticleSupplier($article['attributes']['supplier_id']);
      $article['unit_params'] = $this->getArticleUnit($article['unit_id']);
    }

    return $articles;
  }

  public function getArticlesByCategoryWithPaginationByArray($categoryArray)
  {
    if(count($categoryArray) == 0){
      return;
    }
    $sql = "SELECT a.*, aa.video_article, aa.video_url,aa.video_url, aa.ordernumber FROM articles a
            LEFT JOIN article_category ac ON ac.article_id = a.id
            LEFT JOIN categories c ON c.id = ac.category_id
            LEFT JOIN article_attributes aa ON aa.article_id = a.id";

    foreach ($categoryArray as $key => $categoryId) {
      $categoryId = intval($categoryId);
      if($key == 0){
        $sql.=" WHERE ac.category_id = $categoryId";
      }else{
        $sql.=" OR ac.category_id = $categoryId";
      }
    }
    $sql .= " GROUP BY a.id";


    $articles = Connection()->query($sql);


    foreach ($articles['data'] as &$article) {
      $article['images'] =  $this->articleImages->getArticleImages($article['id']);
      $article['category_id'] = $this->articleCategories->getArticleCategories($article['id']);
      $article['rating'] = $this->getArticleRating($article['id']);
      $article['attributes'] = $this->getArticleAttributes($article['id']);
      $article['is_new'] = $this->getCheckNewer($article);
      $article['wished'] = $this->getCheckWished($article);
      $article['supplier'] = $this->getArticleSupplier($article['attributes']['supplier_id']);
      $article['unit_params'] = $this->getArticleUnit($article['unit_id']);
    }

    return $articles;
  }

  /**
  * @param int $supplier_id
  */
  public function getArticleSupplier($supplier_id)
  {
    return $this->container->Supplier()->getSupplier($supplier_id);
  }


  public function updateArticle($data)
  {


    $mediaId = $data['media'];
    if (is_array($mediaId)) {
      $imageIds = $mediaId;
    }else{
      $imageIds = null;
    }

    $articleId = $data['id'];
    $name = $data['name'];
    $description = $data['description'];
    $date = date("Y-m-d H:i:s", time());
    $categoryId = $data['category_id'];
    if (is_array($categoryId)) {
      $categoryIds = $categoryId;
    }else{
      $categoryIds = null;
    }
    $price = $data['price'];
    $get_price = $data['get_price']?$data['get_price']:0;
    $discount = $data['discount'];
    $in_stock	= $data['in_stock'];
    $min_purchuase	= $data['min_purchuase'];
    $unit	= $data['unit'];
    $unit_id = $data['unit_id'];
    $keywords = $data['keywords'];
    $active	= $data['active'];
    $attributes['video_url'] = $data['video_url'];
    $attributes['video_article'] = $data['video_article'];
    $attributes['ordernumber'] = $data['ordernumber'];
    $attributes['sale_end'] = $data['sale_end'];
    $attributes['supplier_id'] = $data['supplier']['id'];

    $sql = "UPDATE articles SET
                  `name` = '$name',
                  `description` = '$description',
                  `date` = '$date',
                  `price` = '$price',
                  `get_price` = '$get_price',
                  `discount` = '$discount',
                  `in_stock` = '$in_stock',
                  `unit` = '$unit',
                  `min_purchuase` = '$min_purchuase',
                  `unit_id` = '$unit_id',
                  `active` = '$active',
                  `keywords` = '$keywords'
            WHERE `id` = $articleId;";
    $query = Connection()->set($sql);
    $mediaInserted;
    if($query){
      $this->updateArticleAttributes($attributes, $articleId);

      if ($imageIds) {
        foreach ($imageIds as $imageId) {
          $imageId = intval($imageId);
          $mediaInserted = $this->articleImages->setArticleImageId($articleId, $imageId);

          if ($mediaInserted) {
            continue;
          }else{
            break;
          }
        }
      }else{
        $mediaInserted = true;
      }

      if ($categoryIds) {
        foreach ($categoryIds as $categoryId) {
          $categoryId = intval($categoryId);
          $categoryInserted = $this->articleCategories->setArticleCategoryId($articleId, $categoryId);

          if ($categoryInserted) {
            continue;
          }else{
            break;
          }
        }
      }else{
       return  true;
      }

      if ($mediaInserted && $categoryInserted) {
        return true;
      }
    } else {
      return false;
    }
  }

  public function setArticleAttributes($attributes, $articleId){


    if(!$articleId){
      return;
    }
    $attributes['article_id'] = $articleId;

    $articles = $this->insert('article_attributes', $attributes);
    return $query;
  }

  public function updateArticleAttributes($attributes, $articleId){

    if(!$articleId){
      return;
    }
    if (count(Connection()->fetchOne("SELECT id FROM article_attributes WHERE article_id = $articleId")) == false) {
      return $this->setArticleAttributes($attributes, $articleId);
    }

    $attributes['article_id'] = $articleId;
    // $query = Connection()->set($sql);
    $query = $this->update('article_attributes', $attributes, 'article_id');

    return true;
  }

  public function setArticle($data)
  {

  $mediaId = $data['media'];
  if (is_array($mediaId)) {
    $imageIds = $mediaId;
  }else{
    $imageIds[] = 0;
  }
  $categoryId = $data['category_id'];
  if (is_array($categoryId)) {
    $categoryIds = $categoryId;
  }else{
    $categoryIds = null;
  }
  $data['added_in'] = date('Y:m:d');

  $attributes['video_url'] = $data['video_url'];
  $attributes['video_article'] = $data['video_article'];
  $attributes['ordernumber'] = $data['ordernumber'];
  $attributes['sale_end'] = $data['sale_end'];
  $attributes['supplier_id'] = $data['supplier']['id'];

  $query = $this->insert('articles', $data);
  $mediaInserted;
  if($query){
    $articleId = Connection()->getInsertedId();

    $this->setArticleAttributes($attributes, $articleId);
    if($imageIds){
      foreach ($imageIds as $imageId) {
        $mediaInserted = $this->articleImages->setArticleImageId($articleId, $imageId);
        if ($mediaInserted) {
          continue;
        }else{
          break;
        }
      }
    }else{
     $mediaInserted = true;
    }
    if ($categoryIds) {
      foreach ($categoryIds as $categoryId) {
        $categoryId = intval($categoryId);
        $categoryInserted = $this->articleCategories->setArticleCategoryId($articleId, $categoryId);

        if ($categoryInserted) {
          continue;
        }else{
          break;
        }
      }
    }else{
     return  true;
    }

    if ($mediaInserted && $categoryInserted) {
      return true;
    }
  } else {
    return false;
  }
}
public function deleteArticle($articleId)
{
  if(!$articleId){
    return;
  }

  $sql = "DELETE a,ai FROM
                    articles a
                    LEFT JOIN article_images ai ON a.id = ai.article_id
                    LEFT JOIN article_attributes aa ON a.id = aa.article_id
                    LEFT JOIN article_category ac ON a.id = ac.article_id
                    LEFT JOIN special_articles sa ON a.id = sa.article_id
                    LEFT JOIN popular_articles pa ON a.id = pa.article_id
                  WHERE
                    a.id = $articleId;
                  ";

  $query = Connection()->set($sql);
  return $query;
}


  public function getMin($type)
  {
    if ($type == 'price') {
      $sql = "SELECT *, MIN($type) AS $type FROM articles WHERE discount = (SELECT MAX(discount) AS discount FROM articles WHERE $type = (SELECT MIN($type) FROM articles))";
      $article = Connection()->fetchOne($sql);

      $article['price'] = floatval($article['price']) - floatval($article['price']) * floatval($article['discount'])/100;

    }else{
      $sql = "SELECT MAX($type) as $type FROM articles";
      $article = Connection()->fetchOne($sql);

    }
      return $article[$type];
  }

  public function getMax($type)
  {
      $sql = "SELECT MAX($type) as $type FROM articles";
      $article = Connection()->fetchOne($sql);

      return $article[$type];
  }

  public function getArticleReviews()
  {
    $reviews = $this->getList('article_rating');

    foreach ($reviews['data'] as &$review) {
      $review['product'] = $this->container->Articles()->getArticleById($review['article_id']);
      $review['user'] = $this->container->Users()->getUser($review['user_id']);
    }

    return $reviews;
  }

  public function getArticleReviewsByArticleID($article_id, $active)
  {
    $active = (int) $active;
    $reviews = $this->get('article_rating', $article_id."' AND active = '$active", 'article_id');
    if (!empty($reviews) && !isset($reviews[0])) {
      $revs[0] = $reviews;
      $reviews = $revs;
    }
    foreach ($reviews as &$review) {
      $review['user'] = $this->container->Users()->getUser($review['user_id']);
    }
    return $reviews;
  }

  public function setArticleReview($rating)
  {
    $reviews = $this->insert('article_rating', $rating);

    return $reviews;
  }

  public function updateArticleReview($rating)
  {
    $reviews = $this->update('article_rating', $rating);
    return $reviews;
  }

  public function getArticleOptions($article_id)
  {
    if (!$article_id) {
      return;
    }

    // $sql = "SELECT * FROM article_options WHERE article_id = '$article_id'";

    $options = $this->ArticleOptions->getArticleOptions($article_id);

    // $options = Connection()->fetchAll($sql);

    return $options;
  }

  public function deleteArticleOption($option_id)
  {
    if (!$option_id) {
      return;
    }

    $sql = "DELETE FROM article_options WHERE id = '$option_id'";
    $query = Connection()->set($sql);

    return $query;

  }

  public function updateArticleOption($option)
  {

    $id = $option['id'];
    $name = $option['name'];
    $value = $option['value'];

    $sql = "UPDATE article_options SET name = '$name', value = '$value' WHERE id = $id";

    $query = Connection()->set($sql);
    return $query;

  }


  public function getArticlesByAttributeName($attributeName, $value)
  {

    if (!empty(Connection()->exec("SHOW COLUMNS FROM `articles` LIKE '$attributeName';")->num_rows)) {
      $tableCode = "a";
    }elseif (!empty(Connection()->exec("SHOW COLUMNS FROM `article_attributes` LIKE '$attributeName';")->num_rows)) {
      $tableCode = "aa";
    }else{
      return false;
    }

    $sql = "SELECT *, aa.id as attribute_id FROM articles a
            LEFT JOIN article_attributes aa ON aa.article_id = a.id
            WHERE $tableCode.$attributeName = '$value'";
    $list = Connection()->fetchAll($sql);


    $articles;

    foreach ($list as $article) {
      $articles[] = $this->getArticleById($article['id']);
    }

    return $articles;
  }

  public function getArticleAttributeValueTypes($attribute)
  {
    if (!$attribute) {
      return false;
    }
    $attributeName = $attribute['name'];
    if (!empty(Connection()->exec("SHOW COLUMNS FROM `articles` LIKE '$attributeName';")->num_rows)) {
      $tableCode = "a";
      $table = 'articles';
    }elseif (!empty(Connection()->exec("SHOW COLUMNS FROM `article_attributes` LIKE '$attributeName';")->num_rows)) {
      $tableCode = "aa";
      $table = 'article_attributes';
    }else{
      return false;
    }

    $sql = "SELECT $tableCode.$attributeName FROM $table $tableCode GROUP BY $tableCode.$attributeName";

    $list = Connection()->fetchAll($sql);
    return $list;
  }

  /**
  * @param string $optionname
  * @return array $optionValues
  */
  public function getArticleOptionTypes($attribute)
  {
    if (empty($attribute)) {
      return false;
    }
    $table_name = $attribute['filter_table'];
    $column_name = $attribute['filter_column'];
    $value_name = $attribute['name'];
    $sql = "SELECT * FROM $table_name WHERE $column_name = '$value_name' GROUP BY value";
    $optionValues = Connection()->fetchAll($sql);

    return $optionValues;
  }



  /**
  * @param string $sql
  * @return array $articles
  */
  public function getArticlesByQuery($query)
  {
    $sql = $query?$query:null;

    if(!$sql){
      return;
    }

    $articles = Connection()->query($sql);
    // var_dump(Connection()->getError());exit;
    foreach ($articles['data'] as &$article) {
      $article['images'] = $this->articleImages->getArticleImages($article['id']);
      $article['category_id'] = $this->articleCategories->getArticleCategories($article['id']);
      $article['rating'] = $this->getArticleRating($article['id']);
      $article['attributes'] = $this->getArticleAttributes($article['id']);
      $article['is_new'] = $this->getCheckNewer($article);
      $article['wished'] = $this->getCheckWished($article);
    }

    return $articles;
  }

  public function getArticleRating($articleID)
  {
    $sql = "SELECT sum(rating_count)/count(id) as rating FROM article_rating WHERE article_id = $articleID AND active = 1";

    $query = Connection()->fetchOne($sql);

    return $query['rating'];
  }

  public function runSlugMaker($id)
  {
    $this->slugMaker($id);
  }

  private function slugMaker($id)
  {

    $articleName = $this->getArticleById($id)['name'];
    $slug = Bundles\SlugConverter::slug($articleName).'/';

    $params = 'route=detail&a='.$id;
    $originalUrl = 'detail?a='.$id;

    $coreUrlsModel = $this->container->CoreUrls();

    $data = $coreUrlsModel->getUrlByOriginal($originalUrl);
    if (empty($data['id'])) {
      $data['params'] = $params;
      $data['original_url'] = $originalUrl;
      $data['changed_url'] = $slug;
      $coreUrlsModel->setUrl($data);
    }else{
      $data['params'] = $params;
      $data['original_url'] = $originalUrl;
      $data['changed_url'] = $slug;
      $coreUrlsModel->updateUrl($data);
    }
  }
}

 ?>
