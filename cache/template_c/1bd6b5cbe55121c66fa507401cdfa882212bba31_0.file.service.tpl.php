<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-15 16:21:08
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\emotions\components\service.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebe97442132c2_67324271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bd6b5cbe55121c66fa507401cdfa882212bba31' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\emotions\\components\\service.tpl',
      1 => 1589385116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebe97442132c2_67324271 (Smarty_Internal_Template $_smarty_tpl) {
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