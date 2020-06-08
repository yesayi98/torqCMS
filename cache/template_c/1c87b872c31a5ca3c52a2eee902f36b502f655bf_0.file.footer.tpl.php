<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-07 12:36:17
  from 'D:\OSPanel\domains\torq\public\frontend\index\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edcb5117b7511_52305722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c87b872c31a5ca3c52a2eee902f36b502f655bf' => 
    array (
      0 => 'D:\\OSPanel\\domains\\torq\\public\\frontend\\index\\footer.tpl',
      1 => 1590491172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:frontend/index/modal.tpl' => 1,
  ),
),false)) {
function content_5edcb5117b7511_52305722 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

    <!--footer area start-->

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21381469505edcb51178db45_43545070', "footer");
?>

    <!--footer area end-->

    <!-- modal area start-->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7506400375edcb5117a7307_06987660', "modal-area");
?>

    <!-- modal area end-->


<!-- JS
============================================ -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4587429545edcb5117a8c95_07251374', "javascript-area");
?>





</body>

</html>
<?php }
/* {block "footer-top"} */
class Block_14656403285edcb51178e763_79110281 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="footer_top">
          <div class="container">
              <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-7">
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
                  <div class="col-lg-с1 offset-1 col-md-3 col-sm-5">
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
">Կապ</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-8">
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
class Block_9206372935edcb5117a4c30_06040542 extends Smarty_Internal_Block
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
class Block_21381469505edcb51178db45_43545070 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_21381469505edcb51178db45_43545070',
  ),
  'footer-top' => 
  array (
    0 => 'Block_14656403285edcb51178e763_79110281',
  ),
  'footer-bottom' => 
  array (
    0 => 'Block_9206372935edcb5117a4c30_06040542',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <footer class="footer_widgets">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14656403285edcb51178e763_79110281', "footer-top", $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9206372935edcb5117a4c30_06040542', "footer-bottom", $this->tplIndex);
?>

    </footer>
    <?php
}
}
/* {/block "footer"} */
/* {block "modal-area"} */
class Block_7506400375edcb5117a7307_06987660 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modal-area' => 
  array (
    0 => 'Block_7506400375edcb5117a7307_06987660',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:frontend/index/modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block "modal-area"} */
/* {block "javascript-area"} */
class Block_4587429545edcb5117a8c95_07251374 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript-area' => 
  array (
    0 => 'Block_4587429545edcb5117a8c95_07251374',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!--jquery min js-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/js/vendor/jquery-3.4.1.min.js"><?php echo '</script'; ?>
>
<!-- plugins JS -->
<!-- publish subscribe plugin JS -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/plugins/pubSub/jquery.pubSub.js"><?php echo '</script'; ?>
>
<!-- notigications plugin JS -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/plugins/notifications/js/lobibox.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/plugins/notifications/js/notification-custom-script.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/plugins/notifications/js/notifications.min.js"><?php echo '</script'; ?>
>
<!--state manager js-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/js/stateManager.js"><?php echo '</script'; ?>
>
<!--popper min js-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/js/popper.js"><?php echo '</script'; ?>
>
<!--bootstrap min js-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!--owl carousel min js-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/js/owl.carousel.min.js"><?php echo '</script'; ?>
>
<!--slick min js-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/js/slick.min.js"><?php echo '</script'; ?>
>
<!--magnific popup min js-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/js/jquery.magnific-popup.min.js"><?php echo '</script'; ?>
>
<!--counterup min js-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/js/jquery.counterup.min.js"><?php echo '</script'; ?>
>
<!--jquery countdown min js-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/js/jquery.countdown.js"><?php echo '</script'; ?>
>
<!--jquery ui min js-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/js/jquery.ui.js"><?php echo '</script'; ?>
>
<!--jquery elevatezoom min js-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/js/jquery.elevatezoom.js"><?php echo '</script'; ?>
>
<!--isotope packaged min js-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/js/isotope.pkgd.min.js"><?php echo '</script'; ?>
>
<!--slinky menu js-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/js/slinky.menu.js"><?php echo '</script'; ?>
>
<!-- Plugins JS -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/js/plugins.js"><?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['route']->value['controller'] == 'category') {?>
<!-- filter JS -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/js/jquery.filter.js"><?php echo '</script'; ?>
>
<!-- sorting JS -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/js/jquery.sorting.js"><?php echo '</script'; ?>
>
<?php }
if ($_smarty_tpl->tpl_vars['route']->value['controller'] == 'checkout') {?>
<!-- chechout JS -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/js/jquery.checkout.js"><?php echo '</script'; ?>
>
<?php }
if ($_smarty_tpl->tpl_vars['route']->value['controller'] == 'index') {?>
<!-- Emotions JS -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/js/jquery.emotions.js"><?php echo '</script'; ?>
>
<?php }?>
<!-- quickview JS -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/js/jquery.quickview.js"><?php echo '</script'; ?>
>
<!-- basket JS -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/js/jquery.basket.js"><?php echo '</script'; ?>
>
<!-- wishlist JS -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/js/jquery.wishlist.js"><?php echo '</script'; ?>
>
<!-- paginator JS -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/js/jquery.paginator.js"><?php echo '</script'; ?>
>
<!-- Main JS -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/js/main.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  window.route = <?php echo json_encode($_smarty_tpl->tpl_vars['route']->value);?>
;
  window.currentCur = <?php echo json_encode($_smarty_tpl->tpl_vars['currentCur']->value);?>
;
  window.basketMessage = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"basketMessage"),$_smarty_tpl ) );?>
';
  window.wishlistMessage = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"wishlistMessage"),$_smarty_tpl ) );?>
';
  window.notFoundPath = '<?php echo $_smarty_tpl->tpl_vars['notFoundPath']->value;?>
';
<?php echo '</script'; ?>
>


<?php
}
}
/* {/block "javascript-area"} */
}
