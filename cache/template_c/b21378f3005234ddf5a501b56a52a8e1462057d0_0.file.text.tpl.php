<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-11 18:31:26
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\basics\coreItems\text.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f32b9ce2711f9_55433537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b21378f3005234ddf5a501b56a52a8e1462057d0' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\basics\\coreItems\\text.tpl',
      1 => 1597145074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f32b9ce2711f9_55433537 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="text-field">
    <textarea name="content"
              class="form-control"
              rows="3"
              form="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
              placeholder="content"><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>

    </textarea>
</div>
<?php }
}
