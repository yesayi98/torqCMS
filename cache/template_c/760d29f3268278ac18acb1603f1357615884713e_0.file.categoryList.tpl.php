<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-02 15:06:40
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\categories\includes\categoryList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ead62504ccb62_82629361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '760d29f3268278ac18acb1603f1357615884713e' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\categories\\includes\\categoryList.tpl',
      1 => 1588421189,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ead62504ccb62_82629361 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'categories' => 
  array (
    'compiled_filepath' => 'C:\\Users\\User\\OSPanel\\domains\\torq\\cache\\template_c\\760d29f3268278ac18acb1603f1357615884713e_0.file.categoryList.tpl.php',
    'uid' => '760d29f3268278ac18acb1603f1357615884713e',
    'call_name' => 'smarty_template_function_categories_11742856665ead62504a6851_20151944',
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
/* smarty_template_function_categories_11742856665ead62504a6851_20151944 */
if (!function_exists('smarty_template_function_categories_11742856665ead62504a6851_20151944')) {
function smarty_template_function_categories_11742856665ead62504a6851_20151944(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_categories_11742856665ead62504a6851_20151944 */
}
