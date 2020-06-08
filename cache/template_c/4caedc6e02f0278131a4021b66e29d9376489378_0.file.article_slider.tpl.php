<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-31 21:08:42
  from 'E:\OSPanel\domains\torq\public\frontend\emotions\components\article_slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed3f2aa570940_36687037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4caedc6e02f0278131a4021b66e29d9376489378' => 
    array (
      0 => 'E:\\OSPanel\\domains\\torq\\public\\frontend\\emotions\\components\\article_slider.tpl',
      1 => 1590227198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:frontend/category/product-box/box-minimal.tpl' => 1,
  ),
),false)) {
function content_5ed3f2aa570940_36687037 (Smarty_Internal_Template $_smarty_tpl) {
?><!--product area start-->

            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                      <!-- <p>Recently added our store </p> -->
                       <h2><?php echo $_smarty_tpl->tpl_vars['component']->value['title'];?>
</h2>
                    </div>
                </div>
            </div>
             <div class="product_container">
               <div class="row">
                   <div class="col-12">
                        <div class="product_carousel product_column5 owl-carousel">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                              <?php $_smarty_tpl->_subTemplateRender("file:frontend/category/product-box/box-minimal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                </div>
            </div>
<?php }
}
