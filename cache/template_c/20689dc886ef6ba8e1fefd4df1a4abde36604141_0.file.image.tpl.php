<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-11 18:31:26
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\basics\coreItems\image.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f32b9ce3e6e38_82197770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20689dc886ef6ba8e1fefd4df1a4abde36604141' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\basics\\coreItems\\image.tpl',
      1 => 1597145071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f32b9ce3e6e38_82197770 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="gallery-container gallery-actions" data-multi=false>
  <div class="image-container button">
    <button type="button"
            class="btn btn-info gallery-opener"
            name="gallery"
            data-toggle="modal"
            data-target=".gallery-modal">
      <i class="ti-gallery"></i>
    </button>
  </div>
  <?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['item']->value['image']);?>
  <?php if (!$_smarty_tpl->tpl_vars['image']->value) {?>
    <div class="image-container">
    </div>
    <?php } else { ?>
    <div class="image-container">
      <button type="button" name="deleteImage" class="btn btn-danger deleteImage" data-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/articles/deleteImage'),$_smarty_tpl ) );?>
" data-article="<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
"><i class="ti-close"></i></button>
      <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value['path'];?>
" class="detail-image" >
      <input type="hidden" name="media_id" form="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="detail-image-id" value="<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
">
    </div>
  <?php }?>
  <input type="hidden" name="content" form="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="detail-image-id-static" value="">
</div>
<?php }
}
