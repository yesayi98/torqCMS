<?php
namespace Core\ScssCompiller;
use Leafo\ScssPhp\Compiler;
/**
 *
 */
class ScssCompiller
{
  public static function compileAllFiles($minify = true)
  {
    $scss = new Compiler();
    $scss->setFormatter($minify ? '\\Leafo\\ScssPhp\\Formatter\\Crunched' : '\\Leafo\\ScssPhp\\Formatter\\Expanded');
    $scss->addImportPath(function($path) {
    if (!file_exists('public/frontend/assets/css/'.$path)) return null;
        return 'public/frontend/assets/css/'.$path;
    });
    $compiledCss = '';
    $styleFiles = glob(DOCUMENT_ROOT."/public/frontend/assets/css/*.css");
    $styleFiles = array_merge($styleFiles, glob(DOCUMENT_ROOT."/public/frontend/assets/scss/*.scss"));
    foreach ($styleFiles as $filepath) {
      $path = end(explode('/', $filepath));
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
