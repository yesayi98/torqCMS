<?php
/**
 * Smarty plugin
 *
 * @package    Smarty
 * @subpackage PluginsFunction
 */
/**
 * Smarty {url} function plugin
 * Type:     function
 * Name:     counter
 * Purpose:  print out a counter value
 *
 * @author Monte Ohrt <monte at ohrt dot com>
 * @link   http://www.smarty.net/manual/en/language.function.counter.php {counter}
 *         (Smarty online manual)
 *
 * @param array                    $params   parameters
 * @param Smarty_Internal_Template $template template object
 *
 * @return string|null
 */
function smarty_function_url($params, $template)
{
  if(empty($params['url'])) {
      $url = "url";
  } else {
    $url = $params['url'];
  }
  $url = BASE_URL.$url;
  return $url;
}
