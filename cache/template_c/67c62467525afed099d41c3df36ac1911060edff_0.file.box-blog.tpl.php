<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-07 12:36:17
  from 'D:\OSPanel\domains\torq\public\frontend\category\product-box\box-blog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edcb511be7bf8_72156388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67c62467525afed099d41c3df36ac1911060edff' => 
    array (
      0 => 'D:\\OSPanel\\domains\\torq\\public\\frontend\\category\\product-box\\box-blog.tpl',
      1 => 1589883983,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edcb511be7bf8_72156388 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\OSPanel\\domains\\torq\\engine\\Library\\smarty-master\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<article class="single_blog">
    <figure>
        <div class="blog_thumb">
            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('blog/detail?a=').($_smarty_tpl->tpl_vars['blog']->value['id'])),$_smarty_tpl ) );?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['blog']->value['image']['path'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['blog']->value['name'];?>
"></a>
        </div>
        <figcaption class="blog_content">
           <div class="articles_date">
                 <p><?php echo $_smarty_tpl->tpl_vars['blog']->value['created_date'];?>
</p>
            </div>
            <h4 class="post_title"><a href="blog-details.html"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['blog']->value['name']);?>
</a></h4>
            <footer class="blog_footer">
                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('blog/detail?a=').($_smarty_tpl->tpl_vars['blog']->value['id'])),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"viewMore"),$_smarty_tpl ) );?>
</a>
            </footer>
        </figcaption>
    </figure>
</article>
<?php }
}
