<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-23 18:05:47
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\media\media-box\basic-box.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ea1aecb83e4e4_99430048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65a0e696e1defb37ab7c1aff3188e9b411a3a837' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\media\\media-box\\basic-box.tpl',
      1 => 1587654342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea1aecb83e4e4_99430048 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="image-container">
  <?php if ($_smarty_tpl->tpl_vars['fromArticles']->value) {?>
  <label>
    <input type="checkbox" name="detailImage" form="imageToDetail" class="hidden" value="<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
">
    <input type="hidden" class="pathKeeper" value="<?php echo $_smarty_tpl->tpl_vars['image']->value['path'];?>
">
    <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value['path'];?>
" class="detail-image" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value['name'];?>
">
  </label>
  <?php } else { ?>
  <a href="javaScript:void(0)" data-toggle="modal" data-target=".gallery-modal" class="gallery-item" data-id="<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
">
      <button type="button"
              name="deleteImage"
              class="btn btn-danger deleteImage"
              data-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/media/delete'),$_smarty_tpl ) );?>
"
              data-article="<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">
        <i class="ti-close"></i>
      </button>
    <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value['path'];?>
" class="detail-image" >
    <input type="hidden" name="media_id" class="media-image-id" value="<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
">
  </a>
  <?php }?>

</div>
<?php }
}
