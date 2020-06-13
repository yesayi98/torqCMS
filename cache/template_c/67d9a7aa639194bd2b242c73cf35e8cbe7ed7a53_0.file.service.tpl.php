<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-08 22:55:05
  from 'D:\OSPanel\domains\torq\public\frontend\emotions\components\service.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ede97998e8aa1_57881181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67d9a7aa639194bd2b242c73cf35e8cbe7ed7a53' => 
    array (
      0 => 'D:\\OSPanel\\domains\\torq\\public\\frontend\\emotions\\components\\service.tpl',
      1 => 1591636513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ede97998e8aa1_57881181 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('item', $_smarty_tpl->tpl_vars['items']->value[0]);?>
<div class="single_shipping col_4">
    <div class="shipping_icone">
        <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['media']['path'];?>
" alt="">
    </div>
    <div class="shipping_content">
        <h3><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</h3>
        <?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>

    </div>
</div>
<?php }
}
