<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-18 23:28:24
  from 'D:\OSPanel\domains\torq\public\frontend\index\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eebce681d8868_55649388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b07697969092867b70e80a085ad282348e563f9' => 
    array (
      0 => 'D:\\OSPanel\\domains\\torq\\public\\frontend\\index\\header.tpl',
      1 => 1592510869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:frontend/index/canvas-menu.tpl' => 1,
    'file:frontend/index/menu.tpl' => 1,
  ),
),false)) {
function content_5eebce681d8868_55649388 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6311518425eebce67d11f74_27982526', 'stylesheet-area');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3867682865eebce67d171c7_88416505', 'overlay');
?>


<!--  M E D I A   MENU   START ---- -->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6472548005eebce67d17f16_46098678', 'offcanvas-menu');
?>

<!--  M E D I A   MENU   END ---- -->


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10089931775eebce67e5bd08_92846232', 'header');
?>

    <!--  BIG MENU END -->
<?php }
/* {block 'stylesheet-area'} */
class Block_6311518425eebce67d11f74_27982526 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheet-area' => 
  array (
    0 => 'Block_6311518425eebce67d11f74_27982526',
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
class Block_3867682865eebce67d171c7_88416505 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'overlay' => 
  array (
    0 => 'Block_3867682865eebce67d171c7_88416505',
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
class Block_6472548005eebce67d17f16_46098678 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'offcanvas-menu' => 
  array (
    0 => 'Block_6472548005eebce67d17f16_46098678',
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
class Block_16952449455eebce67e5cdf4_20494222 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                                    <?php
}
}
/* {/block 'header-language'} */
/* {block 'header-currency'} */
class Block_20550758315eebce67e5dba3_67505373 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                                    <?php
}
}
/* {/block 'header-currency'} */
/* {block 'header-social'} */
class Block_597157845eebce67e5e8a1_77511193 extends Smarty_Internal_Block
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
class Block_10512663045eebce67e5c577_27887130 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16952449455eebce67e5cdf4_20494222', 'header-language', $this->tplIndex);
?>

                                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20550758315eebce67e5dba3_67505373', 'header-currency', $this->tplIndex);
?>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_597157845eebce67e5e8a1_77511193', 'header-social', $this->tplIndex);
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
class Block_19814990545eebce67eca097_36620087 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                      <div class="col-lg-2 col-6">
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
class Block_6934109735eebce67eccb45_65231621 extends Smarty_Internal_Block
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
class Block_19636455025eebce681d3fb7_70102587 extends Smarty_Internal_Block
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
class Block_16839050085eebce681cbb61_23767946 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <div class="header_account_area">
                                <div class="header_account_list register">
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19636455025eebce681d3fb7_70102587', 'mini-cart', $this->tplIndex);
?>

                                    <!--mini cart end-->
                                </div>
                                <div class="header_account_list canvas_open">
                                    <a href="javascript:void(0)"><i class="icon-menu"></i></a>
                                </div>
                            </div>
                            <?php
}
}
/* {/block 'header-info-bar'} */
/* {block 'header-middle-right'} */
class Block_18238380915eebce67ecc398_38859042 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                      <div class="col-lg-10 col-6">
                          <div class="header_right_info">
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6934109735eebce67eccb45_65231621', 'header-search-bar', $this->tplIndex);
?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16839050085eebce681cbb61_23767946', 'header-info-bar', $this->tplIndex);
?>

                          </div>
                      </div>
                      <?php
}
}
/* {/block 'header-middle-right'} */
/* {block 'header-middle'} */
class Block_7129280045eebce67ec9772_12446103 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="header_middle">
                <div class="container">
                    <div class="row align-items-center">
                      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19814990545eebce67eca097_36620087', 'header-logo', $this->tplIndex);
?>

                      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18238380915eebce67ecc398_38859042', 'header-middle-right', $this->tplIndex);
?>

                    </div>
                </div>
            </div>
            <?php
}
}
/* {/block 'header-middle'} */
/* {block 'main-menu'} */
class Block_17282110965eebce681d6760_74019989 extends Smarty_Internal_Block
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
class Block_10671240365eebce681d5fb1_89766544 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="header_bottom sticky-header">
                <div class="container">
                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17282110965eebce681d6760_74019989', 'main-menu', $this->tplIndex);
?>

                </div>
            </div>
            <?php
}
}
/* {/block 'header-bottom'} */
/* {block 'header'} */
class Block_10089931775eebce67e5bd08_92846232 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_10089931775eebce67e5bd08_92846232',
  ),
  'header-top' => 
  array (
    0 => 'Block_10512663045eebce67e5c577_27887130',
  ),
  'header-language' => 
  array (
    0 => 'Block_16952449455eebce67e5cdf4_20494222',
  ),
  'header-currency' => 
  array (
    0 => 'Block_20550758315eebce67e5dba3_67505373',
  ),
  'header-social' => 
  array (
    0 => 'Block_597157845eebce67e5e8a1_77511193',
  ),
  'header-middle' => 
  array (
    0 => 'Block_7129280045eebce67ec9772_12446103',
  ),
  'header-logo' => 
  array (
    0 => 'Block_19814990545eebce67eca097_36620087',
  ),
  'header-middle-right' => 
  array (
    0 => 'Block_18238380915eebce67ecc398_38859042',
  ),
  'header-search-bar' => 
  array (
    0 => 'Block_6934109735eebce67eccb45_65231621',
  ),
  'header-info-bar' => 
  array (
    0 => 'Block_16839050085eebce681cbb61_23767946',
  ),
  'mini-cart' => 
  array (
    0 => 'Block_19636455025eebce681d3fb7_70102587',
  ),
  'header-bottom' => 
  array (
    0 => 'Block_10671240365eebce681d5fb1_89766544',
  ),
  'main-menu' => 
  array (
    0 => 'Block_17282110965eebce681d6760_74019989',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <header>
        <div class="main_header">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10512663045eebce67e5c577_27887130', 'header-top', $this->tplIndex);
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7129280045eebce67ec9772_12446103', 'header-middle', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10671240365eebce681d5fb1_89766544', 'header-bottom', $this->tplIndex);
?>

        </div>
    </header>
    <!--header area end-->
    <?php
}
}
/* {/block 'header'} */
}
