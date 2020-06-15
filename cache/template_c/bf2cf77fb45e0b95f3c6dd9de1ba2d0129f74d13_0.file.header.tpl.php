<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-15 08:53:11
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\index\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee70cc736b7b1_44978997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf2cf77fb45e0b95f3c6dd9de1ba2d0129f74d13' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\index\\header.tpl',
      1 => 1591887183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:frontend/index/canvas-menu.tpl' => 1,
    'file:frontend/index/menu.tpl' => 1,
  ),
),false)) {
function content_5ee70cc736b7b1_44978997 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!Doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/img/favicon.ico">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13594488625ee70cc6b27b31_96177482', 'stylesheet-area');
?>

    <!--modernizr min js here-->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/js/vendor/modernizr-3.7.1.min.js"><?php echo '</script'; ?>
>
</head>

<body>

<!--header area start-->


<!--offcanvas menu area start-->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11241318875ee70cc6b43bf0_49911693', 'overlay');
?>


<!--  M E D I A   MENU   START ---- -->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2202157295ee70cc6b66bc5_33108735', 'offcanvas-menu');
?>

<!--  M E D I A   MENU   END ---- -->


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19269909135ee70cc6da8ea4_63412556', 'header');
?>


    <!--  BIG MENU END -->
		<?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
		<div class="message-container">
			<div class="container">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['message']->value, 'messages', false, 'type', 'name', array (
));
$_smarty_tpl->tpl_vars['messages']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['messages']->value) {
$_smarty_tpl->tpl_vars['messages']->do_else = false;
?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'mess');
$_smarty_tpl->tpl_vars['mess']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mess']->value) {
$_smarty_tpl->tpl_vars['mess']->do_else = false;
?>
						<div class="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 message" data-type="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['mess']->value;?>
">
							<?php echo '<?=';?>
 translator($type.'_'.$mess)<?php echo '?>';?>

						</div>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

			</div>
		</div>
		<?php }
}
/* {block 'stylesheet-area'} */
class Block_13594488625ee70cc6b27b31_96177482 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheet-area' => 
  array (
    0 => 'Block_13594488625ee70cc6b27b31_96177482',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <!-- CSS
      ========================= -->
      <!--bootstrap min css-->
      <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/css/bootstrap.min.css">
      <!--bootstrap min css-->
      <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/plugins/notifications/css/lobibox.min.css">
      <!--owl carousel min css-->
      <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/css/owl.carousel.min.css">
      <!--slick min css-->
      <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/css/slick.css">
      <!--magnific popup min css-->
      <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/css/magnific-popup.css">
      <!--font awesome css-->
      <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/css/font.awesome.css">
      <!--ionicons css-->
      <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/css/ionicons.min.css">
      <!--linearicons css-->
      <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/css/linearicons.css">
      <!--animate css-->
      <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/css/animate.css">
      <!--jquery ui min css-->
      <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/css/jquery-ui.min.css">
      <!--slinky menu css-->
      <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/css/slinky.menu.css">
      <!--plugins css-->
      <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/css/plugins.css">
      <!-- Main Style CSS -->
      <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/css/style.css">
    <?php
}
}
/* {/block 'stylesheet-area'} */
/* {block 'overlay'} */
class Block_11241318875ee70cc6b43bf0_49911693 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'overlay' => 
  array (
    0 => 'Block_11241318875ee70cc6b43bf0_49911693',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="off_canvars_overlay">

    </div>
    <?php
}
}
/* {/block 'overlay'} */
/* {block 'offcanvas-menu'} */
class Block_2202157295ee70cc6b66bc5_33108735 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'offcanvas-menu' => 
  array (
    0 => 'Block_2202157295ee70cc6b66bc5_33108735',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender("file:frontend/index/canvas-menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'offcanvas-menu'} */
/* {block 'header-language'} */
class Block_17446427825ee70cc6daaa91_87827846 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                                    <?php
}
}
/* {/block 'header-language'} */
/* {block 'header-currency'} */
class Block_20099674055ee70cc6dac125_97497418 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                                    <?php
}
}
/* {/block 'header-currency'} */
/* {block 'header-social'} */
class Block_10296311235ee70cc6dad5e8_87868167 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <div class="header_social text-right">
                                <ul>
                                    <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'facebookLink'),$_smarty_tpl ) );?>
"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'instagramLink'),$_smarty_tpl ) );?>
"><i class="ion-social-instagram-outline"></i></a></li>
                                </ul>
                            </div>
                          <?php
}
}
/* {/block 'header-social'} */
/* {block 'header-top'} */
class Block_10188922605ee70cc6da9b71_58975574 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="header_top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="language_currency">
                                <ul>
                                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17446427825ee70cc6daaa91_87827846', 'header-language', $this->tplIndex);
?>

                                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20099674055ee70cc6dac125_97497418', 'header-currency', $this->tplIndex);
?>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10296311235ee70cc6dad5e8_87868167', 'header-social', $this->tplIndex);
?>

                        </div>
                    </div>
                </div>
            </div>
          <?php
}
}
/* {/block 'header-top'} */
/* {block 'header-logo'} */
class Block_9360388485ee70cc6e212b1_36740859 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                      <div class="col-lg-2">
                          <div class="logo">
                              <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>''),$_smarty_tpl ) );?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value['image']['path'];?>
" alt=""></a>
                          </div>
                      </div>
                      <?php
}
}
/* {/block 'header-logo'} */
/* {block 'header-search-bar'} */
class Block_12670061685ee70cc6e257b6_12173064 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <div class="search_container">
                               <form class="search-form" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'category/search'),$_smarty_tpl ) );?>
" method="get">
                                   <div class="hover_category">
                                     <select class="select_option" name="c" id="categori2">
                                       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['searchCategories']->value, 'searchCategory');
$_smarty_tpl->tpl_vars['searchCategory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['searchCategory']->value) {
$_smarty_tpl->tpl_vars['searchCategory']->do_else = false;
?>
                                          <option <?php if ($_smarty_tpl->tpl_vars['category']->value['id'] == $_smarty_tpl->tpl_vars['searchCategory']->value['id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['searchCategory']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['searchCategory']->value['name'];?>
</option>
                                       <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                      </select>
                                   </div>
                                    <div class="search_box">
                                        <input placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'search'),$_smarty_tpl ) );?>
" type="text" name='search'>
                                        <button type="submit"><span class="lnr lnr-magnifier"></span></button>
                                    </div>
                                </form>
                            </div>
                            <?php
}
}
/* {/block 'header-search-bar'} */
/* {block 'mini-cart'} */
class Block_20067210005ee70cc723c6c9_44073764 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <div class="mini_cart" data-basket=true>

                                    </div>
                                    <?php
}
}
/* {/block 'mini-cart'} */
/* {block 'header-info-bar'} */
class Block_20538055335ee70cc722edf4_65251401 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <div class="header_account_area">
                                <div class="header_account_list register">
                                  <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
                                    <ul>
                                        <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'account'),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['lastname'];?>
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
                                <div class="header_account_list header_wishlist">
                                    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'wishlist'),$_smarty_tpl ) );?>
"><span class="lnr lnr-heart"></span> <span class="item_count"><?php echo $_smarty_tpl->tpl_vars['favCount']->value;?>
</span> </a>
                                </div>
                                <div class="header_account_list <?php if ($_smarty_tpl->tpl_vars['route']->value['controller'] != "basket") {?>mini_cart_wrapper<?php }?>">
                                   <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'basket'),$_smarty_tpl ) );?>
" class="opener"><span class="lnr lnr-cart"></span><span class="item_count"><?php echo $_smarty_tpl->tpl_vars['basketCount']->value;?>
</span></a>
                                    <!--mini cart-->
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20067210005ee70cc723c6c9_44073764', 'mini-cart', $this->tplIndex);
?>

                                    <!--mini cart end-->
                               </div>
                            </div>
                            <?php
}
}
/* {/block 'header-info-bar'} */
/* {block 'header-middle-right'} */
class Block_10445130805ee70cc6e24b27_12004341 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                      <div class="col-lg-10">
                          <div class="header_right_info">
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12670061685ee70cc6e257b6_12173064', 'header-search-bar', $this->tplIndex);
?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20538055335ee70cc722edf4_65251401', 'header-info-bar', $this->tplIndex);
?>

                          </div>
                      </div>
                      <?php
}
}
/* {/block 'header-middle-right'} */
/* {block 'header-middle'} */
class Block_20093007945ee70cc6e20775_21510430 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="header_middle">
                <div class="container">
                    <div class="row align-items-center">
                      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9360388485ee70cc6e212b1_36740859', 'header-logo', $this->tplIndex);
?>

                      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10445130805ee70cc6e24b27_12004341', 'header-middle-right', $this->tplIndex);
?>

                    </div>
                </div>
            </div>
            <?php
}
}
/* {/block 'header-middle'} */
/* {block 'main-menu'} */
class Block_11590204825ee70cc7240509_86912151 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender("file:frontend/index/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php
}
}
/* {/block 'main-menu'} */
/* {block 'header-bottom'} */
class Block_2345342645ee70cc723f934_74563671 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="header_bottom sticky-header">
                <div class="container">
                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11590204825ee70cc7240509_86912151', 'main-menu', $this->tplIndex);
?>

                </div>
            </div>
            <?php
}
}
/* {/block 'header-bottom'} */
/* {block 'header'} */
class Block_19269909135ee70cc6da8ea4_63412556 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_19269909135ee70cc6da8ea4_63412556',
  ),
  'header-top' => 
  array (
    0 => 'Block_10188922605ee70cc6da9b71_58975574',
  ),
  'header-language' => 
  array (
    0 => 'Block_17446427825ee70cc6daaa91_87827846',
  ),
  'header-currency' => 
  array (
    0 => 'Block_20099674055ee70cc6dac125_97497418',
  ),
  'header-social' => 
  array (
    0 => 'Block_10296311235ee70cc6dad5e8_87868167',
  ),
  'header-middle' => 
  array (
    0 => 'Block_20093007945ee70cc6e20775_21510430',
  ),
  'header-logo' => 
  array (
    0 => 'Block_9360388485ee70cc6e212b1_36740859',
  ),
  'header-middle-right' => 
  array (
    0 => 'Block_10445130805ee70cc6e24b27_12004341',
  ),
  'header-search-bar' => 
  array (
    0 => 'Block_12670061685ee70cc6e257b6_12173064',
  ),
  'header-info-bar' => 
  array (
    0 => 'Block_20538055335ee70cc722edf4_65251401',
  ),
  'mini-cart' => 
  array (
    0 => 'Block_20067210005ee70cc723c6c9_44073764',
  ),
  'header-bottom' => 
  array (
    0 => 'Block_2345342645ee70cc723f934_74563671',
  ),
  'main-menu' => 
  array (
    0 => 'Block_11590204825ee70cc7240509_86912151',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <header>
        <div class="main_header">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10188922605ee70cc6da9b71_58975574', 'header-top', $this->tplIndex);
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20093007945ee70cc6e20775_21510430', 'header-middle', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2345342645ee70cc723f934_74563671', 'header-bottom', $this->tplIndex);
?>

        </div>
    </header>
    <!--header area end-->
    <?php
}
}
/* {/block 'header'} */
}
