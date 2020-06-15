<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-14 23:46:26
  from 'D:\OSPanel\domains\torq\public\backend\categories\includes\categoryList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee68ca23510d4_13026491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9dc4c04e06e66e05cb205524d5fd5632396276f' => 
    array (
      0 => 'D:\\OSPanel\\domains\\torq\\public\\backend\\categories\\includes\\categoryList.tpl',
      1 => 1591636512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee68ca23510d4_13026491 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'categories' => 
  array (
    'compiled_filepath' => 'D:\\OSPanel\\domains\\torq\\cache\\template_c\\d9dc4c04e06e66e05cb205524d5fd5632396276f_0.file.categoryList.tpl.php',
    'uid' => 'd9dc4c04e06e66e05cb205524d5fd5632396276f',
    'call_name' => 'smarty_template_function_categories_12079877595ee68ca22f4bd7_14434519',
  ),
));
?>
<div class="category-list" data-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/categories/categoryList'),$_smarty_tpl ) );?>
">
  <ul class="sidebar-menu in">
    <li class="active">
      <a href="javaScript:void(0)">Root</a>
      <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories', array('data'=>$_smarty_tpl->tpl_vars['categories']->value), true);?>

    </li>
  </ul>
</div>
<?php }
/* smarty_template_function_categories_12079877595ee68ca22f4bd7_14434519 */
if (!function_exists('smarty_template_function_categories_12079877595ee68ca22f4bd7_14434519')) {
function smarty_template_function_categories_12079877595ee68ca22f4bd7_14434519(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('level'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <ul class="sidebar-submenu level-<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'entry');
$_smarty_tpl->tpl_vars['entry']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->do_else = false;
?>
        <li>
          <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>("backend/categories/detail?c=").($_smarty_tpl->tpl_vars['entry']->value['id'])),$_smarty_tpl ) );?>
" class="waves-effect category">
            <span><?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
: <?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
</span>
            <?php if ($_smarty_tpl->tpl_vars['entry']->value['has_subcategory']) {?>
              <i class="fa fa-angle-left pull-right"></i>
            <?php }?>
          </a>
          <?php if ($_smarty_tpl->tpl_vars['entry']->value['has_subcategory']) {?>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories', array('data'=>$_smarty_tpl->tpl_vars['entry']->value['subcategories'],'level'=>$_smarty_tpl->tpl_vars['level']->value+1), true);?>

          <?php }?>
        </li>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}}
/*/ smarty_template_function_categories_12079877595ee68ca22f4bd7_14434519 */
}
