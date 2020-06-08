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

  function __construct($container)
  {
    parent::__construct($container);
    $this->container = $container;
    $this->articleImages = $this->ArticleImages();
    $this->articleCategories = $this->ArticleCategories();
    $wishlistModel = new \Wishlist($container);
    $this->wishlist = $wishlistModel->getProductsBySession();
  }


  public function ArticleImages()
  {
    return new ArticleImages($this->container);
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

    $sql = "SELECT a.*, aa.video_article, aa.video_url,aa.video_url, aa.size, aa.color, aa.material, aa.ordernumber FROM articles a
            LEFT JOIN article_attributes aa ON aa.article_id = a.id";
    if (!$all) {
      $articles = Connection()->query($sql);
      foreach ($articles['data'] as &$article) {
        $article['images'] = $this->articleImages->getArticleImages($article['id']);
        $article['category_id'] = $this->articleCategories->getArticleCategories($article['id']);
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

    $sql = "SELECT a.*, aa.video_article, aa.video_url,aa.video_url, aa.size, aa.color, aa.material, aa.ordernumber FROM articles a
            LEFT JOIN article_attributes aa ON aa.article_id = a.id ORDER BY `date` DESC";

    $articles = Connection()->query($sql);

    foreach ($articles['data'] as &$article) {
      $article['images'] = $this->articleImages->getArticleImages($article['id']);
      $article['category_id'] = $this->articleCategories->getArticleCategories($article['id']);
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


    $sql = "SELECT a.*, aa.video_article, aa.video_url,aa.video_url, aa.size, aa.color, aa.material, aa.ordernumber FROM articles a
            LEFT JOIN article_attributes aa ON aa.article_id = a.id ORDER BY rand()";

    $articles = Connection()->query($sql);

    foreach ($articles as &$article) {
      $article['images'] = $this->articleImages->getArticleImages($article['id']);
      $article['category_id'] = $this->articleCategories->getArticleCategories($article['id']);
      $article['is_new'] = $this->getCheckNewer($article);
      $article['wished'] = $this->getCheckWished($article);
      $article['supplier'] = $this->getArticleSupplier($article['attributes']['supplier_id']);
      $article['unit_params'] = $this->getArticleUnit($article['unit_id']);

    }
    return $articles;
  }
  public function getArticleList()
  {
    $articles = $this->getList('articles');

    return $articles;
  }

  public function getArticleById($id)
  {
    $id = intval($id);
    if(!$id ){
      return;
    }

    $sql = "SELECT a.*, aa.video_article, aa.video_url,aa.video_url, aa.size, aa.color, aa.material, aa.ordernumber FROM articles a
            LEFT JOIN article_attributes aa ON aa.article_id = a.id
            WHERE a.id = $id";
    $article = Connection()->fetchOne($sql);
    $article['images'] = $this->articleImages->getArticleImages($article['id']);
    $article['category_id'] = $this->articleCategories->getArticleCategories($article['id']);
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
    $query->leftJoin('article_attributes', 'id', 'article_id', ['ordernumber', 'material', 'color']);
    $query->leftJoin('article_category', 'id', 'article_id')->where()->equals('category_id', $categoryId)->end();
    $query->limit($offset, $limit);
    $builder->execute($query);
    $articles = $builder->fetchAll();

    foreach ($articles as &$article) {
      $article['images'] =  $this->articleImages->getArticleImages($article['id']);
      $article['category_id'] = $this->articleCategories->getArticleCategories($article['id']);
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
    $sql = "SELECT a.*, aa.video_article, aa.video_url,aa.video_url, aa.size, aa.color, aa.material, aa.ordernumber FROM articles a
            LEFT JOIN article_category ac ON ac.article_id = a.id
            LEFT JOIN categories c ON c.id = ac.category_id
            LEFT JOIN article_attributes aa ON aa.article_id = a.id
            WHERE ac.category_id = $categoryId";


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
    $sql = "SELECT a.*, aa.video_article, aa.video_url,aa.video_url, aa.size, aa.color, aa.material, aa.ordernumber FROM articles a
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
    $unit	= $data['unit'];
    $unit_id = $data['unit_id'];
    $keywords = $data['keywords'];
    $active	= $data['active'];
    $attributes['video_url'] = $data['video_url'];
    $attributes['video_article'] = $data['video_article'];
    $attributes['size'] = $data['size'];
    $attributes['color'] = $data['color'];
    $attributes['material'] = $data['material'];
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
    $has_video = $attributes['video_article'];
    $url_video = $attributes['video_url'];
    $size = $attributes['size'];
    $color = $attributes['color'];
    $material = $attributes['material'];
    $ordernumber = $attributes['ordernumber'];
    $sale_end = $attributes['sale_end'];
    $supplier_id = $attributes['supplier_id'];

    $sql = "INSERT INTO article_attributes(
              `article_id`,
              `video_url`,
              `video_article`,
              `size`,
              `color`,
              `material`,
              `sale_end`,
              `supplier_id`,
              `ordernumber`
            ) VALUES (
              '$articleId',
              '$url_video',
              '$has_video',
              '$size',
              '$color',
              '$material',
              '$sale_end',
              '$supplier_id',
              '$ordernumber'
            )";
            $articles = Connection()->set($sql);
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
  $get_price = $data['get_price'];
  $discount = $data['discount'];
  $in_stock	= $data['in_stock'];
  $unit	= $data['unit'];
  $unit_id	= $data['unit_id'];
  $keywords	= $data['keywords'];
  $active	= $data['active'];
  $attributes['video_url'] = $data['video_url'];
  $attributes['video_article'] = $data['video_article'];
  $attributes['size'] = $data['size'];
  $attributes['color'] = $data['color'];
  $attributes['material'] = $data['material'];
  $attributes['ordernumber'] = $data['ordernumber'];
  $attributes['sale_end'] = $data['sale_end'];
  $attributes['supplier_id'] = $data['supplier']['id'];


  $sql = "INSERT INTO articles(
            `name`,
            `description`,
            `date`,
            `price`,
            `get_price`,
            `discount`,
            `in_stock`,
            `unit`,
            `unit_id`,
            `keywords`,
            `active`
          ) VALUES (
            '$name',
            '$description',
            '$date',
            '$price',
            '$get_price',
            '$discount',
            '$in_stock',
            '$unit',
            '$unit_id',
            '$keywords',
            '$active'
          )";
  $query = Connection()->set($sql);
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
public function setSpecialArticle($id)
{

  if(!$id){
    return;
  }
  $sql = "INSERT INTO special_articles (article_id) VALUES ($id)";
  $query = Connection()->set($sql);
  if($query){
    return true;
  }
}
public function getSpecialArticles($all = false)
{


  $sql = "SELECT sa.id AS spec, a.*, aa.video_article, aa.video_url,aa.video_url,aa.size,aa.color,aa.material, aa.ordernumber FROM special_articles sa
          LEFT JOIN articles a ON sa.article_id = a.id
          LEFT JOIN article_attributes aa ON aa.article_id = a.id ";

  if ($all) {
    $articles = Connection()->fetchAll($sql);

    if($articles){

        foreach ($articles as &$article) {
          $article['images'] = $this->articleImages->getArticleImages($article['id']);
          $article['category_id'] = $this->articleCategories->getArticleCategories($article['id']);
          $article['attributes'] = $this->getArticleAttributes($article['id']);
          $article['is_new'] = $this->getCheckNewer($article);
          $article['wished'] = $this->getCheckWished($article);
        }

      return $articles;
    }
  }else {
    $articles = Connection()->query($sql);
    if($articles['data']){

        foreach ($articles['data'] as &$article) {
          $article['images'] = $this->articleImages->getArticleImages($article['id']);
          $article['category_id'] = $this->articleCategories->getArticleCategories($article['id']);
          $article['attributes'] = $this->getArticleAttributes($article['id']);
          $article['is_new'] = $this->getCheckNewer($article);
          $article['wished'] = $this->getCheckWished($article);
        }

      return $articles;
    }
  }
}
public function deleteSpecialArticle($id)
{

  if(!$id){
    return;
  }

  $sql = "DELETE FROM special_articles WHERE id = $id";
  $articles = Connection()->set($sql);
  if($articles){

    return true;
  }
}

public function setPopularArticle($id)
{

  if(!$id){
    return;
  }
  $sql = "INSERT INTO popular_articles (article_id) VALUES ($id)";
  $query = Connection()->set($sql);
  if($query){
    return true;
  }
}
public function getPopularArticles($all = false)
{


  $sql = "SELECT pa.id AS spec, a.*, aa.video_article, aa.video_url,aa.video_url, aa.size, aa.color, aa.material, aa.ordernumber FROM popular_articles pa
          LEFT JOIN articles a ON pa.article_id = a.id
          LEFT JOIN article_attributes aa ON aa.article_id = a.id ORDER BY `date` DESC";

  if ($all) {
    $articles = Connection()->fetchAll($sql);
    if($articles){

        foreach ($articles as &$article) {
          $article['images'] = $this->articleImages->getArticleImages($article['id']);
          $article['category_id'] = $this->articleCategories->getArticleCategories($article['id']);
          $article['attributes'] = $this->getArticleAttributes($article['id']);
          $article['is_new'] = $this->getCheckNewer($article);
          $article['wished'] = $this->getCheckWished($article);
        }

      return $articles;
    }
  }else {
    $articles = Connection()->query($sql);
    if($articles['data']){

        foreach ($articles['data'] as &$article) {
          $article['images'] = $this->articleImages->getArticleImages($article['id']);
          $article['category_id'] = $this->articleCategories->getArticleCategories($article['id']);
          $article['attributes'] = $this->getArticleAttributes($article['id']);
          $article['is_new'] = $this->getCheckNewer($article);
          $article['wished'] = $this->getCheckWished($article);
        }

      return $articles;
    }
  }

}
public function deletePopularArticle($id)
{

  if(!$id){
    return;
  }
  $sql = "DELETE FROM popular_articles WHERE id = $id";
  $query = Connection()->set($sql);
  if($query){

    return true;
  }
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

  public function setArticleOptions($article_id, $options)
  {
    if(!$article_id || !$options){
      return;
    }
    $sql = 'INSERT INTO article_options (
                `name`,
                `value`,
                `article_id`
             ) VALUES ';
    foreach ($options as $key => $option) {
      $article_id = $article_id;
      $name = $option['name'];
      $value = $option['value'];
      $sql .= "(
                 '$name',
                 '$value',
                 '$article_id'
               )";

        if ($option != end($options)) {
          $sql .= ', ';
        }
    }
    if($sql == ''){
      return false;
    }

    $sql .= ";";

    $query = Connection()->set($sql);

    return $query;
  }

  public function getArticleReviews()
  {
    $rewiews = Connection()->getList('article_comments');
    return $rewiews;
  }

  public function getArticleOptions($article_id)
  {
    if (!$article_id) {
      return;
    }

    $sql = "SELECT * FROM article_options WHERE article_id = '$article_id'";

    $options = Connection()->fetchAll($sql);

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

  public function getArticleAttributeValueTypes($attributeName)
  {
    if (!$attributeName) {
      return false;
    }

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
  * @param array $context [suppliers, pricing, groups, category]
  * @return string $sql
  */
  public function createQueryByContext($context)
  {
    $contextTypes = array(
      "suppliers" => 's',
      "groups" => 'aa',
      "pricing" => 'a.price',
      "category" => 'c.id',
      "search" => 'search'
    );
    $sorting = $context['sortType'];
    unset($context['sortType']);
    $sql = "SELECT a.*, aa.ordernumber FROM articles a
            LEFT JOIN article_category ac ON ac.article_id = a.id
            LEFT JOIN categories c ON c.id = ac.category_id
            LEFT JOIN article_attributes aa ON aa.article_id = a.id
            LEFT JOIN suppliers s ON s.id = aa.supplier_id
            LEFT JOIN article_translations atr ON atr.article_id = a.id
            LEFT JOIN category_translation ct ON ct.category_id = c.id";

    if(empty($context)){
      $sql .= " GROUP BY a.id";
      $this->createdQuery = $sql;
      return $sql;
    }

    $sql .= " WHERE ";

    foreach ($context as $key => $value) {
      if (empty($value)) {
        continue;
      }
      $tableKey = $contextTypes[$key];


      if ($tableKey === 'a.price') {
        $min = $value['min'];
        $max = $value['max'];
        if ($min && $max) {
          $sql .= "$tableKey >= '$min' AND $tableKey <= '$max'";
        }
        if ($key !== end(array_keys($context))) {
          $sql .= ' AND ';
        }
        continue;
      }

      if ($tableKey === 'c.id' && $value != null) {
        $sql .= "$tableKey = $value";
        if ($key !== end(array_keys($context))) {
          $sql .= ' AND ';
        }
        continue;
      }

      if ($tableKey === "search" && $value != null) {
        $sql .= " (LOWER(a.name) LIKE '%$value%' OR
                 LOWER(a.keywords) LIKE '%$value%' OR
                 LOWER(a.description) LIKE '%$value%' OR
                 LOWER(aa.color) LIKE '%$value%' OR
                 LOWER(aa.ordernumber) LIKE '%$value%' OR
                 LOWER(atr.name) LIKE '%$value%' OR
                 LOWER(atr.description) LIKE '%$value%' OR
                 LOWER(c.name) LIKE '%$value%' OR
                 LOWER(ct.name) LIKE '%$value%')";
                 if ($key !== end(array_keys($context))) {
                   $sql .= ' AND ';
                 }
                 continue;
      }
      if (!empty($value)) {
        $sql .= '(';
        foreach ($value as $key => $column) {
          $colName = $column['name'];
          $colVal = $column['value'];

          $sql .= "$tableKey.$colName = '$colVal'";

          if ($key != count($value)-1) {
            $sql .= " OR ";
          }else{
            break;
          }
        }
        $sql .= ') AND ';
      }

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


    $this->createdQuery = $sql;
    return $sql;
  }


  /**
  * @param string $sql
  * @return array $articles
  */
  public function getArticlesByQuery()
  {
    $sql = $this->createdQuery?$this->createdQuery:null;
    if(!$sql){
      return;
    }

    $articles = Connection()->query($sql);

    foreach ($articles['data'] as &$article) {
      $article['images'] = $this->articleImages->getArticleImages($article['id']);
      $article['category_id'] = $this->articleCategories->getArticleCategories($article['id']);
      $article['attributes'] = $this->getArticleAttributes($article['id']);
      $article['is_new'] = $this->getCheckNewer($article);
      $article['wished'] = $this->getCheckWished($article);
    }

    return $articles;
  }



}

 ?>
