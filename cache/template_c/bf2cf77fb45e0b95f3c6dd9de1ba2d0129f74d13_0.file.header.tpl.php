<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-14 12:14:29
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\index\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f3655f5ddd699_21909793',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf2cf77fb45e0b95f3c6dd9de1ba2d0129f74d13' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\index\\header.tpl',
      1 => 1597396468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:frontend/index/canvas-menu.tpl' => 1,
    'file:frontend/index/menu.tpl' => 1,
  ),
),false)) {
function content_5f3655f5ddd699_21909793 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4095433495f3655f5db2739_77824621', 'stylesheet-area');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8331908235f3655f5db4ad6_08892269', 'overlay');
?>


<!--  M E D I A   MENU   START ---- -->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15941787225f3655f5db5513_99391212', 'offcanvas-menu');
?>

<!--  M E D I A   MENU   END ---- -->


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14991105205f3655f5dbb670_44996416', 'header');
?>

    <!--  BIG MENU END -->
<?php }
/* {block 'stylesheet-area'} */
class Block_4095433495f3655f5db2739_77824621 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheet-area' => 
  array (
    0 => 'Block_4095433495f3655f5db2739_77824621',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <!-- CSS
      ========================= -->
      <!--font awesome css-->
      <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/css/font.awesome.css">
      <!--ionicons css-->
      <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/css/ionicons.min.css">
      <!--linearicons css-->
      <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/css/linearicons.css">
      <!--themify-icons css-->
      <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/css/themify-icons.css">

      <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
">
    <?php
}
}
/* {/block 'stylesheet-area'} */
/* {block 'overlay'} */
class Block_8331908235f3655f5db4ad6_08892269 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'overlay' => 
  array (
    0 => 'Block_8331908235f3655f5db4ad6_08892269',
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
class Block_15941787225f3655f5db5513_99391212 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'offcanvas-menu' => 
  array (
    0 => 'Block_15941787225f3655f5db5513_99391212',
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
class Block_13227566575f3655f5dbc323_04750778 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                                    <?php
}
}
/* {/block 'header-language'} */
/* {block 'header-currency'} */
class Block_352892985f3655f5dbcf00_37100122 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                                    <?php
}
}
/* {/block 'header-currency'} */
/* {block 'header-social'} */
class Block_13694188785f3655f5dbd9c6_14561806 extends Smarty_Internal_Block
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
class Block_4511221655f3655f5dbbd23_15678997 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13227566575f3655f5dbc323_04750778', 'header-language', $this->tplIndex);
?>

                                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_352892985f3655f5dbcf00_37100122', 'header-currency', $this->tplIndex);
?>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13694188785f3655f5dbd9c6_14561806', 'header-social', $this->tplIndex);
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
class Block_19614145395f3655f5dc1124_00334577 extends Smarty_Internal_Block
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
class Block_14059924235f3655f5dc3823_78035877 extends Smarty_Internal_Block
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
class Block_18851303705f3655f5dd9b56_70170456 extends Smarty_Internal_Block
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
class Block_14390232625f3655f5dd1758_61686140 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <div class="header_account_area">
                                <div class="header_account_list register d-flex" >
                                  <span class="lnr lnr-user" style="font-size: 26px"></span>
                                  <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
                                    <ul>
                                        <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'account'),$_smarty_tpl ) );?>
"> <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</a> <span>/</span> <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'account/logout'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'logout'),$_smarty_tpl ) );?>
</a></li>
                                    </ul>
                                  <?php } else { ?>
                                  <ul>
                                      <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'account/login'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'register'),$_smarty_tpl ) );?>
 <span>/</span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'login'),$_smarty_tpl ) );?>
</a></li>
                                  </ul>
                                  <?php }?>
                                </div>
                                <div class="header_account_list header_compare">
                                    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'compare'),$_smarty_tpl ) );?>
"><span class="ti ti-control-shuffle"></span> <span class="item_count"><?php echo $_smarty_tpl->tpl_vars['compareCount']->value;?>
</span> </a>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18851303705f3655f5dd9b56_70170456', 'mini-cart', $this->tplIndex);
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
class Block_18029188215f3655f5dc30f8_84769831 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                      <div class="col-lg-10 col-6">
                          <div class="header_right_info">
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14059924235f3655f5dc3823_78035877', 'header-search-bar', $this->tplIndex);
?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14390232625f3655f5dd1758_61686140', 'header-info-bar', $this->tplIndex);
?>

                          </div>
                      </div>
                      <?php
}
}
/* {/block 'header-middle-right'} */
/* {block 'header-middle'} */
class Block_17499331365f3655f5dc0b22_87539462 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="header_middle">
                <div class="container">
                    <div class="row align-items-center">
                      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19614145395f3655f5dc1124_00334577', 'header-logo', $this->tplIndex);
?>

                      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18029188215f3655f5dc30f8_84769831', 'header-middle-right', $this->tplIndex);
?>

                    </div>
                </div>
            </div>
            <?php
}
}
/* {/block 'header-middle'} */
/* {block 'main-menu'} */
class Block_13961480195f3655f5ddbc19_67620300 extends Smarty_Internal_Block
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
class Block_19215038565f3655f5ddb5e4_04043195 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="header_bottom sticky-header">
                <div class="container">
                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13961480195f3655f5ddbc19_67620300', 'main-menu', $this->tplIndex);
?>

                </div>
            </div>
            <?php
}
}
/* {/block 'header-bottom'} */
/* {block 'header'} */
class Block_14991105205f3655f5dbb670_44996416 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_14991105205f3655f5dbb670_44996416',
  ),
  'header-top' => 
  array (
    0 => 'Block_4511221655f3655f5dbbd23_15678997',
  ),
  'header-language' => 
  array (
    0 => 'Block_13227566575f3655f5dbc323_04750778',
  ),
  'header-currency' => 
  array (
    0 => 'Block_352892985f3655f5dbcf00_37100122',
  ),
  'header-social' => 
  array (
    0 => 'Block_13694188785f3655f5dbd9c6_14561806',
  ),
  'header-middle' => 
  array (
    0 => 'Block_17499331365f3655f5dc0b22_87539462',
  ),
  'header-logo' => 
  array (
    0 => 'Block_19614145395f3655f5dc1124_00334577',
  ),
  'header-middle-right' => 
  array (
    0 => 'Block_18029188215f3655f5dc30f8_84769831',
  ),
  'header-search-bar' => 
  array (
    0 => 'Block_14059924235f3655f5dc3823_78035877',
  ),
  'header-info-bar' => 
  array (
    0 => 'Block_14390232625f3655f5dd1758_61686140',
  ),
  'mini-cart' => 
  array (
    0 => 'Block_18851303705f3655f5dd9b56_70170456',
  ),
  'header-bottom' => 
  array (
    0 => 'Block_19215038565f3655f5ddb5e4_04043195',
  ),
  'main-menu' => 
  array (
    0 => 'Block_13961480195f3655f5ddbc19_67620300',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <header>
        <div class="main_header">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4511221655f3655f5dbbd23_15678997', 'header-top', $this->tplIndex);
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17499331365f3655f5dc0b22_87539462', 'header-middle', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19215038565f3655f5ddb5e4_04043195', 'header-bottom', $this->tplIndex);
?>

        </div>
    </header>
    <!--header area end-->
    <?php
}
}
/* {/block 'header'} */
}
