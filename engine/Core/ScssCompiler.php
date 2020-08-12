<?php
namespace Core\ScssCompiller;
use Leafo\ScssPhp\Compiler;
/**
 *
 */
class ScssCompiller
{
  public static function compileAllFiles($theme, $minify = true)
  {

    $scss = new Compiler();
    $scss->setFormatter($minify ? '\\Leafo\\ScssPhp\\Formatter\\Crunched' : '\\Leafo\\ScssPhp\\Formatter\\Expanded');
    $scss->addImportPath(function($path) {
                          if (!file_exists('public/frontend/'.$path)) return null;
                              return 'public/frontend/'.$path;
                          });
    $compiledCss = '';
    $styleFiles = array_merge($theme->css, $theme->scss);
    foreach ($styleFiles as $path) {
      $compiledCss .= $scss->compile("@import '$path';");
    }
    foreach (glob(DOCUMENT_ROOT."/cache/css/*.css") as $filepath) {
      unlink($filepath);
    }
    if ($compiledCss) {
      $f = fopen(DOCUMENT_ROOT.'/cache/css/cache_'.time().'.css', 'w');
      fwrite($f, $compiledCss);
      return fclose($f);
    }
  }
}


 ?>
