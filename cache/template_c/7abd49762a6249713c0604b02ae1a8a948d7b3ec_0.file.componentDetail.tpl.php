<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-09 10:03:35
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\emotions\componentDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f06b337b80e44_62783707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7abd49762a6249713c0604b02ae1a8a948d7b3ec' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\emotions\\componentDetail.tpl',
      1 => 1594274613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f06b337b80e44_62783707 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="component-content <?php echo $_smarty_tpl->tpl_vars['component']->value['emotion_type']['module'];?>
">
  <?php $_smarty_tpl->_subTemplateRender(("backend/").($_smarty_tpl->tpl_vars['component']->value['emotion_type']['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div>
<?php }
}
