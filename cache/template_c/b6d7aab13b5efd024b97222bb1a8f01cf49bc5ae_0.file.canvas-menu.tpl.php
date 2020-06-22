<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-18 23:29:10
  from 'D:\OSPanel\domains\torq\public\frontend\index\canvas-menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eebce96d5a107_49569823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6d7aab13b5efd024b97222bb1a8f01cf49bc5ae' => 
    array (
      0 => 'D:\\OSPanel\\domains\\torq\\public\\frontend\\index\\canvas-menu.tpl',
      1 => 1592510869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eebce96d5a107_49569823 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="offcanvas_menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="offcanvas_menu_wrapper">
                    <div class="canvas_close">
                        <a href="javascript:void(0)"><i class="icon-x"></i></a>
                    </div>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5452683325eebce96d15846_70897506', "language_currency_canvas");
?>

                    <div class="header_social text-right">
                        <ul>
                            <li><a href="index.html#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="index.html#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                    <div class="search_container">
                       <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>"category/search"),$_smarty_tpl ) );?>
">
                            <div class="search_box">
                                <input placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"search"),$_smarty_tpl ) );?>
" name="search" type="text">
                                <button type="submit"><span class="lnr lnr-magnifier"></span></button>
                            </div>
                        </form>
                    </div>
                    <div class="header_account_area">
                        <div class="header_account_list login-register">
                          <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
                            <ul>
                                <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'account'),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</a></li>
                                <li><span>/</span></li>
                                <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'account/logout'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'logout'),$_smarty_tpl ) );?>
</a></li>
                            </ul>
                          <?php } else { ?>
                          <ul>
                              <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'account/login'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'register'),$_smarty_tpl ) );?>
</a></li>
                              <li><span>/</span></li>
                              <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'account/login'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'login'),$_smarty_tpl ) );?>
</a></li>
                          </ul>
                          <?php }?>
                        </div>
                    </div>
                    <div class="call-support">
                        <p><a href="tel:<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'phoneNumber'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'phoneNumber'),$_smarty_tpl ) );?>
</a> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'ifquestions'),$_smarty_tpl ) );?>
</p>
                    </div>

                    <div id="menu" class="text-left ">
                        <ul class="offcanvas_main_menu">
                            <li><a class="<?php if ($_smarty_tpl->tpl_vars['route']->value['controller'] == 'index') {?>active<?php }?>"  href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>''),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'home'),$_smarty_tpl ) );?>
</a></li>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mainCategories']->value, 'menuItem');
$_smarty_tpl->tpl_vars['menuItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menuItem']->value) {
$_smarty_tpl->tpl_vars['menuItem']->do_else = false;
?>
                            <?php if (!$_smarty_tpl->tpl_vars['menuItem']->value['in_menu'] || !$_smarty_tpl->tpl_vars['menuItem']->value['active']) {?>
                              <?php continue 1;?>
                            <?php }?>
                              <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('category?c=').($_smarty_tpl->tpl_vars['menuItem']->value['id'])),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['menuItem']->value['name'];?>
</a></li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'contact'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'contact'),$_smarty_tpl ) );?>
</a></li>
                        </ul>
                    </div>
                    <div class="offcanvas_footer">
                        <span><a href="index.html#"><i class="fa fa-envelope-o"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'emailAddress'),$_smarty_tpl ) );?>
</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
<?php }
/* {block "language_currency_canvas"} */
class Block_5452683325eebce96d15846_70897506 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'language_currency_canvas' => 
  array (
    0 => 'Block_5452683325eebce96d15846_70897506',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="language_currency">
                        <ul>
                                                    </ul>
                    </div>
                    <?php
}
}
/* {/block "language_currency_canvas"} */
}
