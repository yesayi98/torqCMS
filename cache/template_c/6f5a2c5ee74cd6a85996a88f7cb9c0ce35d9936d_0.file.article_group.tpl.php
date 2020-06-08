<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-15 17:29:02
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\emotions\components\article_group.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebea72e61eb52_73512797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f5a2c5ee74cd6a85996a88f7cb9c0ce35d9936d' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\emotions\\components\\article_group.tpl',
      1 => 1589552940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:frontend/category/product-box/box-small.tpl' => 1,
  ),
),false)) {
function content_5ebea72e61eb52_73512797 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="small_product_area product_column2 owl-carousel">
    <?php echo smarty_function_split_array(array('var'=>$_smarty_tpl->tpl_vars['items']->value,'num'=>count($_smarty_tpl->tpl_vars['items']->value)/3,'assign'=>"product_arrays"),$_smarty_tpl);?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_arrays']->value, 'products');
$_smarty_tpl->tpl_vars['products']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['products']->value) {
$_smarty_tpl->tpl_vars['products']->do_else = false;
?>
        <div class="product_items">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
          <?php $_smarty_tpl->_subTemplateRender("file:frontend/category/product-box/box-small.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
