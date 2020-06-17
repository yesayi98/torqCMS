<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-17 11:41:48
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\contact\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee9d74c6143c9_31952121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04fcdd120f6c6d5bd315462e1f8a155d5b1c6166' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\contact\\index.tpl',
      1 => 1592383225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee9d74c6143c9_31952121 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13212110355ee9d74c5ecaf7_35122547', "pageContent");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "frontend/index/index.tpl");
}
/* {block "pageContent"} */
class Block_13212110355ee9d74c5ecaf7_35122547 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageContent' => 
  array (
    0 => 'Block_13212110355ee9d74c5ecaf7_35122547',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                       <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'contact'),$_smarty_tpl ) );?>
</h3>
                        <ul>
                            <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>''),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'home'),$_smarty_tpl ) );?>
</a></li>
                            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'contact'),$_smarty_tpl ) );?>
</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->


    <!--contact area start-->
    <div class="contact_area mt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                   <div class="contact_message content">
                        <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'contactUs'),$_smarty_tpl ) );?>
</h3>
                        <ul>
                            <li><i class="fa fa-map-marker"></i>  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'address'),$_smarty_tpl ) );?>
</li>
                            <li><i class="fa fa-envelope-o"></i> <a href="contact.html#"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'emailAddress'),$_smarty_tpl ) );?>
</a></li>
                            <li><i class="fa fa-phone"></i><a href="tel:<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'phoneNumber'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'phoneNumber'),$_smarty_tpl ) );?>
</a>  </li>
                        </ul>
                        <iframe style="margin-top: 30px;" src="<?php echo $_smarty_tpl->tpl_vars['location']->value;?>
" width="100%" height="350" frameborder="0" tabindex="0"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                   <div class="contact_message form">
                        <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'writeUs'),$_smarty_tpl ) );?>
</h3>
                        <form id="contact-form" method="POST" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>"contact/send"),$_smarty_tpl ) );?>
">
                            <p>
                               <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'yourname'),$_smarty_tpl ) );?>
</label>
                                <input name="name" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'name'),$_smarty_tpl ) );?>
*" type="text">
                            </p>
                            <p>
                               <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'youremail'),$_smarty_tpl ) );?>
</label>
                               <input name="email" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'email'),$_smarty_tpl ) );?>
 *" type="email">
                            </p>
                            <div class="contact_textarea">
                                <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'yourmessage'),$_smarty_tpl ) );?>
</label>
                                <textarea placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'yourmessage'),$_smarty_tpl ) );?>
*" name="message" class="form-control2" ></textarea>
                            </div>
                            <button type="submit"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'send'),$_smarty_tpl ) );?>
</button>
                            <p class="form-messege"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--contact area end-->

<?php
}
}
/* {/block "pageContent"} */
}
