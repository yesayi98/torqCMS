<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-19 13:29:39
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\blog\detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec3b513242c33_81674735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48f4372ec4ef10b05cb8edf8f28aac8327780a00' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\blog\\detail.tpl',
      1 => 1589884177,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:frontend/category/product-box/box-blog.tpl' => 1,
  ),
),false)) {
function content_5ec3b513242c33_81674735 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4494352455ec3b51322b762_65168067', "pageContent");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'frontend/index/index.tpl');
}
/* {block "pageContent"} */
class Block_4494352455ec3b51322b762_65168067 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageContent' => 
  array (
    0 => 'Block_4494352455ec3b51322b762_65168067',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
<section class="blog_details">
     <div class="container">
          <div class="row">
              <div class="col-12">
                <div class="blog_wrapper blog_wrapper_details">
                  <article class="single_blog">
                    <figure>
                     <div class="post_header">
                         <h3 class="post_title"><?php echo $_smarty_tpl->tpl_vars['blog']->value['name'];?>
</h3>
                          <div class="blog_meta">
                             <p><?php echo $_smarty_tpl->tpl_vars['blog']->value['created_date'];?>
</p>
                          </div>
                      </div>
                      <div class="blog_thumb">
                         <a href="javascript:void(0)"><img src="<?php echo $_smarty_tpl->tpl_vars['blog']->value['image']['path'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['blog']->value['name'];?>
"></a>
                     </div>
                     <figcaption class="blog_content">
                          <div class="post_content">
                              <?php echo $_smarty_tpl->tpl_vars['blog']->value['description'];?>

                          </div>
                          <div class="entry_content mt-50">
                              <div class="social_sharing">
                                  <p>Կիսվել :</p>
                                  <ul>
                                      <li><a href="blog-details.html#" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                      <li><a href="blog-details.html#" title="twitter"><i class="fa fa-instagram"></i></a></li>
                                  </ul>
                              </div>
                            </div>
                        </figcaption>
                   </figure>
                </article>
                  <div class="related_posts">
                      <h3><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</h3>
                      <div class="row">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['similarBlogs']->value['data'], 'blog');
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
      </div>
  </section>

  
<?php
}
}
/* {/block "pageContent"} */
}
