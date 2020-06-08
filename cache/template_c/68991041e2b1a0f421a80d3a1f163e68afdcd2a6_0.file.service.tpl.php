<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-31 21:08:42
  from 'E:\OSPanel\domains\torq\public\frontend\emotions\components\service.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed3f2aa0fe694_44637694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68991041e2b1a0f421a80d3a1f163e68afdcd2a6' => 
    array (
      0 => 'E:\\OSPanel\\domains\\torq\\public\\frontend\\emotions\\components\\service.tpl',
      1 => 1589385116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed3f2aa0fe694_44637694 (Smarty_Internal_Template $_smarty_tpl) {
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
