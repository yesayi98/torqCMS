<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-14 23:03:10
  from 'D:\OSPanel\domains\torq\public\frontend\account\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee6827eb82d45_00843146',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1dc520dce3fe0e8c07b3239a40cb4d1c58963992' => 
    array (
      0 => 'D:\\OSPanel\\domains\\torq\\public\\frontend\\account\\login.tpl',
      1 => 1591636512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee6827eb82d45_00843146 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9767947905ee6827eb60555_47062312', 'breadcrumbs_area');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10868812805ee6827eb70f73_84775706', "pageContent");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'frontend/index/index.tpl');
}
/* {block 'breadcrumbs_area'} */
class Block_9767947905ee6827eb60555_47062312 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumbs_area' => 
  array (
    0 => 'Block_9767947905ee6827eb60555_47062312',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                       <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'loginRegister'),$_smarty_tpl ) );?>
</h3>
                        <ul>
                          <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>''),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'home'),$_smarty_tpl ) );?>
</a></li>
                          <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'loginRegister'),$_smarty_tpl ) );?>
</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'breadcrumbs_area'} */
/* {block "pageContent"} */
class Block_10868812805ee6827eb70f73_84775706 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageContent' => 
  array (
    0 => 'Block_10868812805ee6827eb70f73_84775706',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="customer_login">
        <div class="container">
            <div class="row">
               <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"login"),$_smarty_tpl ) );?>
</h2>
                        <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>"account/login"),$_smarty_tpl ) );?>
" method="post">
                            <p>
                                <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"email"),$_smarty_tpl ) );?>
 <span>*</span></label>
                                <input type="email" name='email' class="form-control">
                             </p>

                             <p>
                                <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"password"),$_smarty_tpl ) );?>
 <span>*</span></label>
                                <input type="password" name='password' class="form-control">
                             </p>
                            <div class="login_submit">
                                <div class="pull-left">
                                  <label>
                                    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'account/remindpassword'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"remind"),$_smarty_tpl ) );?>
</a>
                                  </label>
                                </div>
                                <button type="submit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"login"),$_smarty_tpl ) );?>
</button>
                            </div>
                        </form>
                     </div>
                </div>
                <!--login area start-->

                <!--register area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form register">
                        <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"register"),$_smarty_tpl ) );?>
</h2>
                        <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>"account/register"),$_smarty_tpl ) );?>
" method="post">
                            <div class="row">

                                <div class="col-lg-6 col-md-6 form-box">
                                    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"name"),$_smarty_tpl ) );?>
<span>*</span></label>
                                    <input type="text" name='name' class="form-control">
                                </div>

                                <div class="col-lg-6 col-md-6 form-box">
                                    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"lastname"),$_smarty_tpl ) );?>
<span>*</span></label>
                                    <input type="text" name='lastname' class="form-control">
                                </div>

                                <div class="col-lg-12 col-md-12 form-box">
                                    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"email"),$_smarty_tpl ) );?>
<span>*</span></label>
                                    <input type="email" name='email' class="form-control">
                                </div>

                                <div class="col-lg-6 col-md-6 form-box">
                                    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"password"),$_smarty_tpl ) );?>
<span>*</span></label>
                                    <input type="password" name='password' class="form-control">
                                </div>

                                <div class="col-lg-6 col-md-6 form-box">
                                    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"repassword"),$_smarty_tpl ) );?>
<span>*</span></label>
                                    <input type="password" name='re_password' class="form-control">
                                </div>
                            </div>

                            <div class="login_submit">
                                <div class="pull-left">
                                  <label>
                                    <input type="checkbox" name="agreedwithterms" checked>
                                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"agreedwith"),$_smarty_tpl ) );?>
</span>
                                  </label>
                                </div>
                                <button type="submit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"register"),$_smarty_tpl ) );?>
</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--register area end-->
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "pageContent"} */
}
