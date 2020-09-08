<?php
class Container
{
  private $connection;

  private $Categories;
  private $Articles;
  private $Media;
  private $Advertisings;
  private $Translator;
  private $Delivery;
  private $Units;
  private $Payments;
  private $Search;
  private $Orders;
  private $Admins;
  private $Core;
  private $Users;
  private $Blog;
  private $Wishlist;
  private $Basket;
  private $Currencies;

  protected $currency;
  protected $lang;

  private $modelManager;

  public function __construct($connection)
  {
    $this->connection = $connection;
    $this->Categories = new Categories($this);
    $this->Articles = new Models\Articles\Articles($this);
    $this->Media = new Media($this);
    $this->Advertisings = new Advertisings($this);
    $this->Translator = new Translator($this);
    $this->Search = new Search($connection, $this);
    $this->Delivery = new Delivery($this);
    $this->Orders = new Orders($this);
    $this->Units = new Units($this);
    $this->Admins = new Admins($this);
    $this->Payments = new Payments($this);
    $this->Core = new Core($this);
    $this->Plugin = new Plugin($this);
    $this->Users = new Models\Users\Users($this);
    $this->Wishlist = new Wishlist($this);
    $this->Basket = new Basket($this);
    $this->Filters = new Filters($this);
    $this->Supplier = new Supplier($this);
    $this->Blog = new Blog($this);
    $this->Currencies = new Currencies($this);
    $this->Template = new Template($this);
    $this->CoreMenu = new CoreMenu($this);
    $this->Emotions = new Emotions($this);
    $this->CoreUrls = new CoreUrls($this);
    $this->ModelEntity = new ModelEntity($this);
  }

  public function get($key){

    if (isset($this->$key)) {
      return $this->{$key};
    }

  }

  public function set($key, $value){
    $this->$key = $value;
  }

  public function setModelManager(\Core\Components\ModelManager $modelManager)
  {
    $this->modelManager = $modelManager;
  }

  public function ModelManager()
  {
    return $this->modelManager;
  }

  public function setCookie($key,  $value, $expires = 24*3600, $path = '/')
  {
    if (is_array($value)) {
      $value = serialize($value);
    }

    setcookie($key, $value, time() + $expires, $path);
  }

  public function getCookie($key)
  {
    if (!$key) {
      return $_COOKIE;
    }
    $cookie = $_COOKIE[$key];
    if (@unserialize($cookie) === false) {
      return $cookie;
    }else{
      return unserialize($cookie);
    }
  }

  public function destroyCookie($key)
  {
    unset($_COOKIE[$key]);
    setcookie($key, null, -1, '/');
  }

  public function setSession($key, $value)
  {
    if (!$key) {
      return;
    }
    $_SESSION[$key] = $value;
  }

  public function getSession($key, $value = NULL)
  {
    if (!empty($value)) {
      return $_SESSION[$key][$value];
    }
    if (isset($_SESSION[$key])) {
      return $_SESSION[$key];
    }
    return false;
  }

  public function getSessionId()
  {
    return session_id();
  }
  // destroy session
  public function destroySession()
  {
    $this->Basket()->deleteItemsBySession();
    $this->Wishlist()->deleteItemsBySession();
    session_regenerate_id(true);
    return session_destroy();
  }

  // translate Article array
  public function translateArticles(array $articles, $lang = null)
  {
    if (!$articles) {
      return;
    }
    if (!$lang) {
      $lang = $this->lang;
    }

    if ($articles["data"]) {
      $articlesWithPagination = $articles;
      $articles = $articlesWithPagination["data"];
    }elseif(!$articles[0]){
      $data = $articles;
      unset($articles);
      $articles[0] = $data;
    }
    foreach ($articles as &$article) {
      $articleTranslation = $this->Articles()->ArticleTranslation()->getArticleTranslation($article['id'], $lang);
      $article['name'] = $articleTranslation['name'];
      $article['description'] = $articleTranslation['description'];
      $article['author'] = $articleTranslation['author'];
      $article['categoryName'] = $this->Categories()->CategoryTranslation()->getCategoryTranslation($artcile['category_id'], $lang)['name'];
    }
    if (isset($articlesWithPagination)) {
      $articlesWithPagination['data'] = $articles;
      return $articlesWithPagination;
    }
    if (isset($data)) {
      return $articles[0];
    }else{
      return $articles;
    }

  }


// translate Categories array
  public function translateCategories(array $categories, $lang)
  {
    if (!$categories) {
      return;
    }
    if ($articles["data"]) {
      $categoriesWithPagination = $categories;
      $categories = $categoriesWithPagination["data"];
    }elseif (!$categories[0]) {
      $data = $categories;
      unset($categories);
      $categories[0] = $data;
    }
    foreach ($categories as &$category) {
      $categoryTranslation = $this->Categories()->CategoryTranslation()->getCategoryTranslation($category['id'], $lang);
      $category['name'] = $categoryTranslation['name'];
      $category['description'] = $categoryTranslation['description'];
    }
    if (isset($categoriesWithPagination)) {
      $categoriesWithPagination['data'] = $categories;
      return $categoriesWithPagination;
    }
    if (isset($data)) {
      return $categories[0];
    }else{
      return $categories;
    }
  }

  // translate Advertising array

  public function translateAdvertising(array $advertisings, $lang)
  {
    if (!$advertisings) {
      return;
    }
    if ($advertisings["data"]) {
      $advertisingsWithPagination = $advertisings;
      $advertisings = $advertisingsWithPagination["data"];
    }elseif (!$advertisings[0]) {
      $data = $advertisings;
      unset($advertisings);
      $categories[0] = $data;
    }
    foreach ($advertisings as &$advertising) {
      $advertisingTranslation = $this->Advertisings()->getAdvertisingTranslation($category['id'], $lang);
      $advertising['name'] = $advertisingTranslation['name'];
      $advertising['description'] = $advertisingTranslation['description'];
    }
    if (isset($advertisingsWithPagination)) {
      $advertisingsWithPagination['data'] = $advertisings;
      return $advertisingsWithPagination;
    }
    if (isset($data)) {
      return $advertisings[0];
    }else{
      return $advertisings;
    }
  }

  //set prices by currency
  public function setPrices(array $articles)
  {
    if (!$articles) {
      return;
    }
    if ($articles["data"]) {
      $articlesWithPagination = $articles;
      $articles = $articlesWithPagination["data"];
    }elseif(!$articles[0]){
      $data = $articles;
      unset($articles);
      $articles[0] = $data;
    }
    $currencyCourse = $this->currency['course'];

    foreach ($articles as &$article) {

      $article['price'] = round($article['price']/$currencyCourse, 2);

    }
    if (isset($articlesWithPagination)) {
      $articlesWithPagination['data'] = $articles;
      return $articlesWithPagination;
    }
    if (isset($data)) {
      return $articles[0];
    }else{
      return $articles;
    }

  }

  public function __call($method, $args)
  {
    $return = $this->{$method};
    return $return;
  }

  public static function numberToString($number, $lenght = 6)
  {
    $number = strval($number);
    $numberLenght = strlen($number);
    $addedZeroCount = $lenght-$numberLenght;
    if ($addedZeroCount > 0) {
      $number = str_repeat("0", $addedZeroCount).$number;
    }
    return $number;
  }

  // get current session user if it exist
  public function getCurrentUser()
  {
    $user = $this->getSession('user');
    if (empty($user)) {
      $user = $this->getCookie('user');
    }

    return $user;
  }

  // update current session user if it exist
  public function updateSessionUser()
  {
    $user = $this->getCurrentUser();
    if (empty($user['id'])) {
      return;
    }

    $userDB = $this->Users->getUser($user['id']);
    unset($userDB['password']);

    $this->setSession('user', $userDB);
    $this->setCookie('user', $userDB);
  }
}

?>
