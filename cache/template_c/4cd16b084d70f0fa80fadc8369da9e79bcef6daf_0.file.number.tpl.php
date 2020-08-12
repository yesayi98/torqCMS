<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-11 18:31:26
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\basics\coreItems\number.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f32b9ce51a437_87553956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cd16b084d70f0fa80fadc8369da9e79bcef6daf' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\basics\\coreItems\\number.tpl',
      1 => 1597145088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f32b9ce51a437_87553956 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="number-field">
    <input name="content"
              class="form-control"
              type="number"
              rows="3"
              form="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
              value="<?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
"
              placeholder="value">
</div>
<?php }
}
