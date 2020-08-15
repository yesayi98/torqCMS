<?php
namespace Core\Compiller;
use JShrink\Minifier;
/**
 *
 */
class JsCompiller
{
  public static function compileAllFiles($theme, $minify = true)
  {

    $compiledJs = '';
    foreach ($theme->js as $path) {
      $js = file_get_contents($path);
      // Basic (default) usage.
      $compiledJs .= Minifier::minify($js).';';
    }
    foreach (glob(DOCUMENT_ROOT."/cache/js/*.js") as $filepath) {
      unlink($filepath);
    }
    if ($compiledJs) {
      $f = fopen(DOCUMENT_ROOT.'/cache/js/cache_'.time().'.js', 'w');
      fwrite($f, $compiledJs);
      return fclose($f);
    }
  }
}


 ?>
