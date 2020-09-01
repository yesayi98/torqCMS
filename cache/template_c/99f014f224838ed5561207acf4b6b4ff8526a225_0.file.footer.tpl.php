<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-01 10:37:38
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\index\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4dfa422053c2_93211048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99f014f224838ed5561207acf4b6b4ff8526a225' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\index\\footer.tpl',
      1 => 1598944473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4dfa422053c2_93211048 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

    <!--footer area start-->

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6776422125f4dfa42183b01_97966593', "footer");
?>

    <!--footer area end-->
<?php }
/* {block "footer-top"} */
class Block_2692182335f4dfa42184b36_94262775 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="footer_top">
          <div class="container">
              <div class="row">
                  <div class="col-lg-4 col-md-12">
                      <div class="widgets_container contact_us">
                         <div class="footer_logo">
                             <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>''),$_smarty_tpl ) );?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['footerLogo']->value['image']['path'];?>
" alt=""></a>
                         </div>
                         <!-- <p class="footer_desc">We are a team of desi6ner20WordPress, Shopify .</p> -->
                          <p><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"address2"),$_smarty_tpl ) );?>
</span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"address"),$_smarty_tpl ) );?>
</p>
                          <p><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"email"),$_smarty_tpl ) );?>
</span> <a href="mailto: <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"emailAddress"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"emailAddress"),$_smarty_tpl ) );?>
</a></p>
                          <p><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"phone"),$_smarty_tpl ) );?>
:</span> <a href="tel:<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"phoneNumber"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"phoneNumber"),$_smarty_tpl ) );?>
</a> </p>
                      </div>
                  </div>
                  <div class="col-lg-с1 offset-1 col-md-3">
                      <div class="widgets_container widget_menu">
                          <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"link"),$_smarty_tpl ) );?>
</h3>
                          <div class="footer_menu">

                              <ul>

                                <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>''),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"home"),$_smarty_tpl ) );?>
</a></li>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mainCategories']->value, 'menuitem');
$_smarty_tpl->tpl_vars['menuitem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menuitem']->value) {
$_smarty_tpl->tpl_vars['menuitem']->do_else = false;
?>
                                <?php if (!$_smarty_tpl->tpl_vars['menuitem']->value['active']) {?>
                                  <?php continue 1;?>
                                <?php }?>
                                  <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('category?c=').($_smarty_tpl->tpl_vars['menuitem']->value['id'])),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['menuitem']->value['name'];?>
</a></li>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'contact'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'contact'),$_smarty_tpl ) );?>
</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                      <div class="widgets_container widget_newsletter">
                          <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'getNews'),$_smarty_tpl ) );?>
</h3>
                          <p class="footer_desc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'newsdesc'),$_smarty_tpl ) );?>
</p>
                          <div class="subscribe_form">
                              <form id="mc-form" class="mc-form footer-newsletter" action='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>"contact/newsletter"),$_smarty_tpl ) );?>
'>
                                  <input id="mc-email" type="email" autocomplete="off" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'youremail'),$_smarty_tpl ) );?>
" />
                                  <button id="mc-submit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'submit'),$_smarty_tpl ) );?>
</button>
                              </form>

                              <div class="mailchimp-alerts text-centre">
                                  <div class="mailchimp-submitting"></div>
                                  <div class="mailchimp-success"></div>
                                  <div class="mailchimp-error"></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <?php
}
}
/* {/block "footer-top"} */
/* {block "footer-bottom"} */
class Block_14638401915f4dfa42203eb9_23989582 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="footer_bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-7">
                        <div class="copyright_area">
                            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'allRights'),$_smarty_tpl ) );?>
  by  <a href="index.html#">ArmCoding</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="footer_payment">
                            <ul>
                                <li><a href="javaScript:void(0)"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/img/icon/payment-methods.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
}
}
/* {/block "footer-bottom"} */
/* {block "footer"} */
class Block_6776422125f4dfa42183b01_97966593 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_6776422125f4dfa42183b01_97966593',
  ),
  'footer-top' => 
  array (
    0 => 'Block_2692182335f4dfa42184b36_94262775',
  ),
  'footer-bottom' => 
  array (
    0 => 'Block_14638401915f4dfa42203eb9_23989582',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <footer class="footer_widgets">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2692182335f4dfa42184b36_94262775', "footer-top", $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14638401915f4dfa42203eb9_23989582', "footer-bottom", $this->tplIndex);
?>

    </footer>
    <?php
}
}
/* {/block "footer"} */
}
