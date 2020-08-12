<?php

/**
 * Theme class created for caching css, js files by time
 */
final class Theme
{
  /**
  * @var array $css
  */
  public $css;

  /**
  * @var array $scss
  */
  public $scss;

  /**
  * @var array $js
  */
  public $js;

  public function __construct()
  {
    $themefile = include DOCUMENT_ROOT.'/theme.php';
    $this->css = $themefile['css'];
    $this->scss = $themefile['scss'];
    $this->js = $themefile['js'];
  }
}


 ?>
