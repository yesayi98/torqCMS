<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-22 10:43:33
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\articles\options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f40cca5bcb3c7_25261622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '193222974851b354e302b920acc905ef752c5144' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\articles\\options.tpl',
      1 => 1598082212,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f40cca5bcb3c7_25261622 (Smarty_Internal_Template $_smarty_tpl) {
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
      <div class="col-12">
        <div class="article-categories">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['option']->value['values'], 'value', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
            <div class="added-category-container">
              <span class="added-category-text"><?php echo $_smarty_tpl->tpl_vars['value']->value['value'];?>
</span>
              <button class="option-relation-deleter btn btn-danger ml-1 p-0" data-value_id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
 data-article_id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
 data-ajaxsend="true" type="button" data-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/articles/deleteRelation'),$_smarty_tpl ) );?>
"><i class="ti-close"></i></button>
            </div>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
