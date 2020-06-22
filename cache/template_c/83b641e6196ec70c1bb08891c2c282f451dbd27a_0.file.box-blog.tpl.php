<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-18 19:36:04
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\category\product-box\box-blog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eeb97f4bb00f2_60561217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83b641e6196ec70c1bb08891c2c282f451dbd27a' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\category\\product-box\\box-blog.tpl',
      1 => 1592484798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eeb97f4bb00f2_60561217 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\User\\OSPanel\\domains\\torq\\engine\\Library\\smarty-master\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
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
            <h4 class="post_title"><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('blog/detail?a=').($_smarty_tpl->tpl_vars['blog']->value['id'])),$_smarty_tpl ) );?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['blog']->value['name']);?>
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
