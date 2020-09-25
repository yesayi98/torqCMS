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
 * Purpose:  print out a url value
 *
 *
 * @param array                    $params   parameters
 * @param Smarty_Internal_Template $template template object
 *
 * @return string|null
 */
function smarty_function_url($params, $template)
{
  if(empty($params['url'])) {
      $url = "";
  } else {
    $url = Container()->CoreUrls()->getUrlByOriginal($params['url'])['changed_url'];
    if (empty($url)) {
      $url = $params['url'];
    }
  }
  $url = BASE_URL.'/'.$url;
  return $url;
}


/**
 * Smarty plugin
 *
 * @package    Smarty
 * @subpackage PluginsFunction
 */
/**
 * Smarty {action} function plugin
 * Type:     function
 * Name:     counter
 * Purpose:  print out response of request
 * @param array                    $params   parameters
 * @param Smarty_Internal_Template $template template object
 *
 * @return string|null
 */
function smarty_function_action($params, $template)
{
  $url = '';
  if(!empty($params['module'])) {
      $url .= $params['module'].'/';
      unset($params['module']);
  }
  if(!empty($params['controller'])) {
      $url .= $params['controller'].'/';
      unset($params['controller']);
  }
  if(!empty($params['action'])) {
      $url .= $params['action'];
      unset($params['action']);
  }

  // $url = BASE_URL.'/'.$url;

  $data = array();
  $data['widget'] = true;
  // $data['lang'] = Container()->getSession('lang');
  // $data['session_id'] = session_id();
  $data['csrf'] = Container()->getSession('csrf');
  if ($params) {
    $data = array_merge($data, $params);
  }
  $_POST = $data;
  $_GET['route'] = $url;
  $_REQUEST['route'] = $url;

  Router::start();
}

/*
 * Smarty plugin
 * -------------------------------------------------------------
 * Type:     function
 * Name:     split_array
 * Version:  1.0
 * Date:     July 24, 2004
 * Author:    Monte Ohrt <monte@ispi.net>
 * Purpose:  split an array into equal proportioned arrays
 * Input:    var = array to split
 *           num = number of ways (columns) to split
 *           assign = template var to assign result to
 *
 * Examples: {split_array var=$foobar num=4 assign="foobar"}
 * -------------------------------------------------------------
 */
function smarty_function_split_array($params, &$smarty)
{

    if(!isset($params['var'])) {
        $smarty->trigger_error("split_array: missing 'var' parameter");
        return;
    }
    if(!isset($params['num'])) {
        $smarty->trigger_error("split_array: missing 'num' parameter");
        return;
    }
    if(!isset($params['assign'])) {
        $smarty->trigger_error("split_array: missing 'assign' parameter");
        return;
    }
    if(!is_array($params['var'])) {
        $smarty->trigger_error("split_array: expecting 'var' as an array");
        return;
    }

    $_num = (int) $params['num'];

    $_count = count($params['var']);

    if($_count <= $_num ) {
        for($_x = 0; $_x < $_count; $_x++)
            $_split_array[$_x] = isset($params['var'][$_x]) ? array($params['var'][$_x]) : array('');
    } else {
        $_mod = $_count % $_num;
        $_div = floor($_count / $_num);
        for($_x = 0; $_x < $_num; $_x++) {
            if($_x+1 <= $_mod)
                $_length = $_div + 1;
            else
                $_length = $_div;

            $_split_array[$_x] = !empty($params['var']) ? array_splice($params['var'],0,$_length) : array('');
        }
    }

    $smarty->assign($params['assign'],$_split_array);

}

function smarty_function_translator($params, $template)
{
  if (!isset($params['selector'])) {
    $smarty->trigger_error('translator: missing "selector" parameter');
    return;
  }
  $selector=$params['selector'];
  $view = Router::$_VIEW;

  $translation = $view->translating($selector);

  if (preg_match('/{\$(.*?)}/', $translation, $match) == 1) {
    $components = explode('.', $match[1]);
    $variable = $view->getAssign($components[0]);
    if (isset($variable[$components[1]][$components[2]])) {
      $variable = $variable[$components[1]][$components[2]];
    }
    $translation = str_replace('{$'.$match[1].'}', $variable, $translation);
  }

  return htmlspecialchars_decode($translation);
}


 ?>
