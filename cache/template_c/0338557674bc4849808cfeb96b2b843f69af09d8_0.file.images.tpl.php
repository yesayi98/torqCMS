<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-23 13:07:00
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\detail\images.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec8f5c4213927_91912882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0338557674bc4849808cfeb96b2b843f69af09d8' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\detail\\images.tpl',
      1 => 1590228419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec8f5c4213927_91912882 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('images', $_smarty_tpl->tpl_vars['product']->value['images']);?>
<div class="product-details-tab">
    <div id="img-1" class="zoomWrapper single-zoom">
        <a href="javascript:void(0)">
            <img id="zoom1" src="<?php echo $_smarty_tpl->tpl_vars['images']->value[0]['path'];?>
" data-zoom-image="<?php echo $_smarty_tpl->tpl_vars['images']->value[0]['path'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
">
        </a>
    </div>
    <div class="single-zoom-thumb">
        <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
            <li>
                <a href="product-details.html#" class="elevatezoom-gallery active" data-update="" data-image="<?php echo $_smarty_tpl->tpl_vars['image']->value['path'];?>
" data-zoom-image="<?php echo $_smarty_tpl->tpl_vars['image']->value['path'];?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value['thumbnails'][0]['thumb_path'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value['name'];?>
"/>
                </a>
            </li>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
</div>
<?php }
}
