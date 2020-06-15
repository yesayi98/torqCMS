<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-15 09:48:08
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\blog\listing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee719a8c273a0_64858806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '669aa693a6f67875274830e858d206b59a8a7b64' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\blog\\listing.tpl',
      1 => 1590479724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:frontend/category/product-box/box-blog.tpl' => 1,
  ),
),false)) {
function content_5ee719a8c273a0_64858806 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16660942155ee719a8c0db20_02609533', 'breadcrumbs_area');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3364743475ee719a8c1d1f2_25277900', "pageContent");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'frontend/index/index.tpl');
}
/* {block 'breadcrumbs_area'} */
class Block_16660942155ee719a8c0db20_02609533 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumbs_area' => 
  array (
    0 => 'Block_16660942155ee719a8c0db20_02609533',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <!--breadcrumbs area start-->
  <div class="breadcrumbs_area" <?php if ($_smarty_tpl->tpl_vars['category']->value['image']['path']) {?>style="background: url(<?php echo $_smarty_tpl->tpl_vars['category']->value['image']['path'];?>
) no-repeat 0 0"<?php }?>>
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="breadcrumb_content">
                      <h3><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</h3>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!--breadcrumbs area end-->
<?php
}
}
/* {/block 'breadcrumbs_area'} */
/* {block "pageContent"} */
class Block_3364743475ee719a8c1d1f2_25277900 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageContent' => 
  array (
    0 => 'Block_3364743475ee719a8c1d1f2_25277900',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section class="blog_page_section blog_reverse mt-70">
     <div class="container">
          <div class="row">
              <div class="col-12">
                <div class="blog_wrapper blog_wrapper_sidebar">
                    <div class="row">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blogs']->value['data'], 'blog');
$_smarty_tpl->tpl_vars['blog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['blog']->do_else = false;
?>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                          <?php $_smarty_tpl->_subTemplateRender("file:frontend/category/product-box/box-blog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        </div>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
              </div>
          </div>
      </div>
  </section>

  <div class="blog_pagination">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pagination">
                        <?php echo $_smarty_tpl->tpl_vars['blogs']->value['pagination'];?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "pageContent"} */
}
