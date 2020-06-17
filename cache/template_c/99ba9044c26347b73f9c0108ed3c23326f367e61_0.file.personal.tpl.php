<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-17 17:35:27
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\account\personal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eea2a2f719ea3_46971480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99ba9044c26347b73f9c0108ed3c23326f367e61' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\account\\personal.tpl',
      1 => 1592404444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eea2a2f719ea3_46971480 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="login">
    <div class="login_form_container">
          <form class="account_login_form" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>"account/changedata"),$_smarty_tpl ) );?>
" method="post">
             <div class="row">
                <div class="col-lg-6 col-md-6 form-box-change">
                    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"name"),$_smarty_tpl ) );?>
<span>*</span></label>
                    <input type="text" name='name' value="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
">
                </div>

                <div class="col-lg-6 col-md-6 form-box-change">
                    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"lastname"),$_smarty_tpl ) );?>
<span>*</span></label>
                    <input type="text" name='lastname' value="<?php echo $_smarty_tpl->tpl_vars['user']->value['lastname'];?>
">
                </div>

                <div class="col-lg-6 col-md-6 form-box-change">
                    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"email"),$_smarty_tpl ) );?>
<span>*</span></label>
                    <input type="email" name='email' value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
">
                </div>
                <div class="col-lg-6 col-md-6 form-box-change">
                    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"phone"),$_smarty_tpl ) );?>
<span>*</span></label>
                    <input type="phone" name='phone' value="<?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>
">
                </div>


                <div class="col-lg-6 col-md-6 form-box-change">
                    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"password"),$_smarty_tpl ) );?>
<span>*</span></label>
                    <input type="password" name="password">
                </div>

                <div class="col-lg-6 col-md-6 form-box-change">
                    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"repassword"),$_smarty_tpl ) );?>
<span>*</span></label>
                    <input type="password" name="re_password">
                </div>

                <div class="form-box-change-button">
                    <button type="submit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"change"),$_smarty_tpl ) );?>
</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php }
}
