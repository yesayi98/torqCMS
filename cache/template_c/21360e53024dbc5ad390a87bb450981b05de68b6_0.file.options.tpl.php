<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-31 21:20:33
  from 'E:\OSPanel\domains\torq\public\backend\articles\options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed3f571ac7586_72307245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21360e53024dbc5ad390a87bb450981b05de68b6' => 
    array (
      0 => 'E:\\OSPanel\\domains\\torq\\public\\backend\\articles\\options.tpl',
      1 => 1588159888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed3f571ac7586_72307245 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
  <div class="col-12 col-lg-6 col-xl-6">
    <div class="form-group row">
      <label class="col-12 col-form-label">Key</label>
    </div>
  </div>
  <div class="col-12 col-lg-6 col-xl-6">
    <div class="form-group row">
      <label class="col-12 col-form-label">Value</label>
    </div>
  </div>
</div>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value['options'], 'option', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
<div class="row item" data-id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
>
  <div class="col-12 col-lg-6 col-xl-6">
    <div class="form-group row">
      <div class="col-12">
        <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
" disabled>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-6 col-xl-6">
    <div class="form-group row">
      <div class="col-10">
        <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
" disabled>
      </div>
      <div class="col-2">
        <button type="button" class="btn btn-danger deleteDetailOption" data-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('backend/articles/deleteOption?o=').($_smarty_tpl->tpl_vars['option']->value['id'])),$_smarty_tpl ) );?>
" name="button"><i class="fa fa-trash"></i></button>
      </div>
    </div>
  </div>
</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
