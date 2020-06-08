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

    if (method_exists($this, $key)) {
      return $this->{$key}();
    }

  }

  public function set($key, $value){
    $this->$key = $value;
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
    $request = request();

    if (isset($request['session_id'])) {
      return $request['session_id'];
    }
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
  public function Categories()
  {
    return $this->Categories;
  }

  public function Articles()
  {
    return $this->Articles;
  }
  public function CoreMenu()
  {
    return $this->CoreMenu;
  }

  public function Media()
  {
    return $this->Media;
  }

  public function Filters()
  {
    return $this->Filters;
  }
  public function ModelEntity()
  {
    return $this->ModelEntity;
  }

  public function Core()
  {
    return $this->Core;
  }

  public function Advertisings()
  {
    return $this->Advertisings;
  }

  public function Translator()
  {
    return $this->Translator;
  }

  public function Delivery()
  {
    return $this->Delivery;
  }

  public function Orders()
  {
    return $this->Orders;
  }

  public function Units()
  {
    return $this->Units;
  }

  public function Admins()
  {
    return $this->Admins;
  }

  public function Plugin()
  {
    return $this->Plugin;
  }

  public function Users()
  {
    return $this->Users;
  }

  public function Payments()
  {
    return $this->Payments;
  }

  public function Emotions()
  {
    return $this->Emotions;
  }

  public function Wishlist()
  {
    return $this->Wishlist;
  }

  public function Template()
  {
    return $this->Template;
  }

  public function Basket()
  {
    return $this->Basket;
  }

  public function Supplier()
  {
    return $this->Supplier;
  }

  public function Currencies()
  {
    return $this->Currencies;
  }

  public function Search()
  {
    return $this->Search;
  }
  public function Blog()
  {
    return $this->Blog;
  }
  public function CoreUrls()
  {
    return $this->CoreUrls;
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

}


$containerRequirements = file_get_contents(DOCUMENT_ROOT.'/container.json');
$containerRequirements = json_decode($containerRequirements);
foreach (glob(__DIR__."/Library/*/autoload.php") as $filepath) {
  include $filepath;
}

$cores = $containerRequirements->include_paths;
$cores = (array) $cores;

foreach ($cores as $class => $path) {
  include DOCUMENT_ROOT.'/engine/'.$path;
}
$models = $containerRequirements->models;
$models = (array) $models;
foreach ($models as $model => $path) {
  include DOCUMENT_ROOT.'/engine/'.$path;
}

// include "Translation.php"; // defined function Translation()
// include "AdminValidator.php"; // defined obj var $adminValidator
// foreach (glob("plugins/*/*.php") as $filepath) {
//     $filename = basename($filepath, ".php");
//     $sql = "SELECT * FROM core_plugins WHERE name = '$filename'";
//     $query = Connection()->fetchOne($sql);
//
//     if (!$query) {
//       $sql = "INSERT INTO core_plugins (
//         `name`,
//         `path`,
//         `status`
//       ) VALUES (
//         '$filename',
//         '$filepath',
//         'deactive'
//       )";
//       $query = Connection()->set($sql);
//
//     }else{
//       continue;
//     }
// }


if (isset(get()['lang']) || isset(post()['lang'])) {
  $_SESSION['lang'] = (get()['lang'])?(get()['lang']):(post()['lang']);
}else{
  if (!$_SESSION['lang']) {
    $_SESSION['lang'] = 1;
  }
}

$lang = $_SESSION['lang'];

if (isset(get()['cur'])) {
  $_SESSION['currency'] = get()['cur'];
}else{
  if (!$_SESSION['currency']) {
    $_SESSION['currency'] = 1;
  }
}

$cur = $_SESSION['currency'];

function Container()
{
  $connection = $GLOBALS['connection'];

  $Container = new Container($connection);

  return $Container;

}




 ?>
