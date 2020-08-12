<?php

/**
 *
 */
class View extends Container
{
  public $articles;
  public $categories;
  public $translations;
  public $advertisings;
  public $theme;
  protected $assign = array();

  protected $connection;

  function __construct($lang, $currency, $connection)
  {
    parent::__construct($lang, $currency, $connection);
    $this->lang = intval($lang);
    $this->connection = $connection;
    if(!$this->lang){
      $this->lang = 1;
    }
    if(!$currency){
      $currency = 1;
    }
    $this->currency = Container()->Currencies()->getCurrency(intval($currency));

    $this->theme = new Theme();
    // parent::__construct($container);

    if (is_file(DOCUMENT_ROOT.'/cache/language/translations_'.$this->lang.'.json')) {
      $this->translations = json_decode(DOCUMENT_ROOT.'/cache/language/translations_'.$this->lang.'.json', JSON_UNESCAPED_UNICODE);
    }else{
      $this->writeLanguageCache();
    }
    $this->translations = Container()->Translator()->getTranslationsByLanguageID($this->lang);
  }


  private function writeLanguageCache()
  {

    $translations = json_encode(Container()->Translator()->getTranslationsByLanguageID($this->lang), JSON_UNESCAPED_UNICODE);
    // $translations = $this->normJsonStr($translations);
    //open and write into the translations file
    $file = fopen(DOCUMENT_ROOT.'/cache/language/translations_'.$this->lang.'.json', 'w');
    fwrite($file, $translations);

    //close that file
    fclose($file);
  }


  /**
  * @param string $type
  * @param mixed $message
  */
  public function setMessage($type = null, $message = null)
  {
    if (!$type || !$message) {
      return;
    }
    if (!is_array($_SESSION['message'])) {
      $_SESSION['message'] = array();
    }
    $_SESSION['message'][$type][] = $message;

  }

  public function getAssign($key = '')
  {
    if ($key == '') {
      return $this->assign;
    }else{
      return $this->assign[$key];
    }
  }

  public function setAssign($key, $value)
  {
    if (strpos($key, '.')) {
      $seporator = explode(".", $key, 2);
      $model = $seporator[0];
      $key = $seporator[1];
      if ($model == "Articles" && $value != null) {
          if ($this->lang != 1) {
            $value = $this->translateArticles($value, $this->lang);
          }
          if ($this->currency['default'] != 1) {
            $value = $this->setPrices($value);
          }
      }
      if ($model == "Categories" && $value != null) {
          if ($this->lang != 1) {
            $value = $this->translateCategories($value, $this->lang);
          }
      }
      if ($model == "Advertising" && $value != null) {
          if ($this->lang != 1) {
            $value = $this->translateAdvertising($value, $this->lang);
          }
      }
    }

    $this->assign[$key] = $value;
  }
  public function removeAssign($key = null)
  {
    if ($key) {
      unset($this->assign[$key]);
    }
  }
  public function translating($selector)
  {
    $key = array_search($selector, array_column($this->translations, 'selector'));
    if ($this->translations[$key]["selector"] == $selector) {
      return $this->translations[$key]["translate"];
    }else{
      return $selector;
    }
  }

}
