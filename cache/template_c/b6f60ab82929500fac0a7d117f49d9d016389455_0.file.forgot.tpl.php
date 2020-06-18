<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-18 10:24:05
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\account\forgot.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eeb169548df55_91220492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6f60ab82929500fac0a7d117f49d9d016389455' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\account\\forgot.tpl',
      1 => 1592465043,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eeb169548df55_91220492 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21363165475eeb16954822d2_78691766', "pageContent");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "frontend/index/index.tpl");
}
/* {block "pageContent"} */
class Block_21363165475eeb16954822d2_78691766 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageContent' => 
  array (
    0 => 'Block_21363165475eeb16954822d2_78691766',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
  <div class="row mt-70 mb-70 justify-content-center">
    <!--login area start-->
    <div class="col-md-6 col-12">
        <div class="account_form">
          <?php if ($_smarty_tpl->tpl_vars['route']->value['action'] == 'remindpassword') {?>
            <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"youremail"),$_smarty_tpl ) );?>
</h2>
            <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>"account/remindpassword"),$_smarty_tpl ) );?>
" method="post">
                  <p>
                    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"email"),$_smarty_tpl ) );?>
 <span>*</span></label>
                    <input type="email" name='email' class="form-control">
                 </p>
                <div class="login_submit">
                    <button type="submit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"submit"),$_smarty_tpl ) );?>
</button>
                </div>
            </form>
          <?php } else { ?>
            <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"newPassword"),$_smarty_tpl ) );?>
</h2>
            <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>"account/newPassword"),$_smarty_tpl ) );?>
" method="post">
                  <p>
                    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"password"),$_smarty_tpl ) );?>
 <span>*</span></label>
                    <input type="password" name='password' class="form-control">
                 </p>
                  <p>
                    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"repassword"),$_smarty_tpl ) );?>
 <span>*</span></label>
                    <input type="password" name='re_password' class="form-control">
                 </p>
                <div class="login_submit">
                    <button type="submit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"submit"),$_smarty_tpl ) );?>
</button>
                </div>
            </form>
          <?php }?>
         </div>
    </div>
  </div>
</div>
<?php
}
}
/* {/block "pageContent"} */
}
