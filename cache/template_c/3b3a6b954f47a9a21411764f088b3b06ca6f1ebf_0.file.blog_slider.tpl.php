<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-15 09:20:16
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\emotions\components\blog_slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee71320d632d5_02024010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b3a6b954f47a9a21411764f088b3b06ca6f1ebf' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\emotions\\components\\blog_slider.tpl',
      1 => 1589874141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:frontend/category/product-box/box-blog.tpl' => 1,
  ),
),false)) {
function content_5ee71320d632d5_02024010 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-12">
        <div class="section_title">
           <!-- <p>Our recent articles about Organic</p> -->
           <h2><?php echo $_smarty_tpl->tpl_vars['component']->value['title'];?>
</h2>
        </div>
    </div>
</div>
<div class="row">
    <div class="blog_carousel blog_column3 owl-carousel">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'blog');
$_smarty_tpl->tpl_vars['blog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['blog']->do_else = false;
?>
        <?php $_smarty_tpl->_subTemplateRender("file:frontend/category/product-box/box-blog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>
<?php }
}
