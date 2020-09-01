<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-01 10:40:40
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\index\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4dfaf8db10a3_90277412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf2cf77fb45e0b95f3c6dd9de1ba2d0129f74d13' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\index\\header.tpl',
      1 => 1598946040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:frontend/index/canvas-menu.tpl' => 1,
    'file:frontend/index/menu.tpl' => 1,
  ),
),false)) {
function content_5f4dfaf8db10a3_90277412 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!--offcanvas menu area start-->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18974760435f4dfaf8d69938_18405831', 'overlay');
?>


<!--  M E D I A   MENU   START ---- -->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7338180145f4dfaf8d6c551_16497614', 'offcanvas-menu');
?>

<!--  M E D I A   MENU   END ---- -->


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17952070555f4dfaf8d75558_71718582', 'header');
?>

    <!--  BIG MENU END -->
<?php }
/* {block 'overlay'} */
class Block_18974760435f4dfaf8d69938_18405831 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'overlay' => 
  array (
    0 => 'Block_18974760435f4dfaf8d69938_18405831',
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
class Block_7338180145f4dfaf8d6c551_16497614 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'offcanvas-menu' => 
  array (
    0 => 'Block_7338180145f4dfaf8d6c551_16497614',
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
class Block_3530151795f4dfaf8d76b03_08216372 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                  <li class="language"><a href="javaScript:void(0)"> <?php echo $_smarty_tpl->tpl_vars['currentLang']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['language']->value['short_code'];?>
 <i class="icon-right ion-ios-arrow-down"></i></a>
                                      <ul class="dropdown_language">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                                          <li><a href="?lang=<?php echo $_smarty_tpl->tpl_vars['language']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['language']->value['short_code'];?>
</a></li>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                      </ul>
                                  </li>
                                  <?php
}
}
/* {/block 'header-language'} */
/* {block 'header-currency'} */
class Block_11024882125f4dfaf8d8c690_20457593 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                  <li class="currency"><a href="javaScript:void(0)"><?php echo $_smarty_tpl->tpl_vars['currentCur']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['currentCur']->value['symbol'];?>
 <i class="icon-right ion-ios-arrow-down"></i></a>
                                      <ul class="dropdown_currency">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
                                          <li><a href="?cur=<?php echo $_smarty_tpl->tpl_vars['currency']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['currency']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value['symbol'];?>
</a></li>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                      </ul>
                                  </li>
                                  <?php
}
}
/* {/block 'header-currency'} */
/* {block 'header-social'} */
class Block_9912778525f4dfaf8d930d6_26548423 extends Smarty_Internal_Block
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
class Block_15820201585f4dfaf8d76095_19582364 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3530151795f4dfaf8d76b03_08216372', 'header-language', $this->tplIndex);
?>

                                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11024882125f4dfaf8d8c690_20457593', 'header-currency', $this->tplIndex);
?>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9912778525f4dfaf8d930d6_26548423', 'header-social', $this->tplIndex);
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
class Block_2374451875f4dfaf8d98cd5_79221904 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                      <div class="col-lg-2 col-sm-6 col-12">
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
class Block_18257828535f4dfaf8d9c897_69798987 extends Smarty_Internal_Block
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
class Block_1996315115f4dfaf8dad878_85663847 extends Smarty_Internal_Block
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
class Block_6040868315f4dfaf8da65f1_88235430 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <div class="header_account_area">
                                <div class="header_account_list register d-flex" >
                                  <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>"account"),$_smarty_tpl ) );?>
"><span class="lnr lnr-user"></span>
                                    <div class="canvas hover canvas invisible d-none">
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
                                  </a>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1996315115f4dfaf8dad878_85663847', 'mini-cart', $this->tplIndex);
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
class Block_19441030385f4dfaf8d9bfa8_35029635 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                      <div class="col-lg-10 col-sm-6 col-12 mt-3">
                          <div class="header_right_info">
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18257828535f4dfaf8d9c897_69798987', 'header-search-bar', $this->tplIndex);
?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6040868315f4dfaf8da65f1_88235430', 'header-info-bar', $this->tplIndex);
?>

                          </div>
                      </div>
                      <?php
}
}
/* {/block 'header-middle-right'} */
/* {block 'header-middle'} */
class Block_8054708845f4dfaf8d981a5_92658425 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="header_middle">
                <div class="container">
                    <div class="row align-items-center">
                      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2374451875f4dfaf8d98cd5_79221904', 'header-logo', $this->tplIndex);
?>

                      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19441030385f4dfaf8d9bfa8_35029635', 'header-middle-right', $this->tplIndex);
?>

                    </div>
                </div>
            </div>
            <?php
}
}
/* {/block 'header-middle'} */
/* {block 'main-menu'} */
class Block_6320432555f4dfaf8daf7d2_79270402 extends Smarty_Internal_Block
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
class Block_19304141825f4dfaf8daf193_69483439 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="header_bottom sticky-header">
                <div class="container">
                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6320432555f4dfaf8daf7d2_79270402', 'main-menu', $this->tplIndex);
?>

                </div>
            </div>
            <?php
}
}
/* {/block 'header-bottom'} */
/* {block 'header'} */
class Block_17952070555f4dfaf8d75558_71718582 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_17952070555f4dfaf8d75558_71718582',
  ),
  'header-top' => 
  array (
    0 => 'Block_15820201585f4dfaf8d76095_19582364',
  ),
  'header-language' => 
  array (
    0 => 'Block_3530151795f4dfaf8d76b03_08216372',
  ),
  'header-currency' => 
  array (
    0 => 'Block_11024882125f4dfaf8d8c690_20457593',
  ),
  'header-social' => 
  array (
    0 => 'Block_9912778525f4dfaf8d930d6_26548423',
  ),
  'header-middle' => 
  array (
    0 => 'Block_8054708845f4dfaf8d981a5_92658425',
  ),
  'header-logo' => 
  array (
    0 => 'Block_2374451875f4dfaf8d98cd5_79221904',
  ),
  'header-middle-right' => 
  array (
    0 => 'Block_19441030385f4dfaf8d9bfa8_35029635',
  ),
  'header-search-bar' => 
  array (
    0 => 'Block_18257828535f4dfaf8d9c897_69798987',
  ),
  'header-info-bar' => 
  array (
    0 => 'Block_6040868315f4dfaf8da65f1_88235430',
  ),
  'mini-cart' => 
  array (
    0 => 'Block_1996315115f4dfaf8dad878_85663847',
  ),
  'header-bottom' => 
  array (
    0 => 'Block_19304141825f4dfaf8daf193_69483439',
  ),
  'main-menu' => 
  array (
    0 => 'Block_6320432555f4dfaf8daf7d2_79270402',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <header>
        <div class="main_header">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15820201585f4dfaf8d76095_19582364', 'header-top', $this->tplIndex);
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8054708845f4dfaf8d981a5_92658425', 'header-middle', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19304141825f4dfaf8daf193_69483439', 'header-bottom', $this->tplIndex);
?>

        </div>
    </header>
    <!--header area end-->
    <?php
}
}
/* {/block 'header'} */
}
