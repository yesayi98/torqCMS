<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-20 12:02:04
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\detail\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f3e3c0c5635f9_26539817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7c6d3cf4aa1e322cb0b914f39388cb4147ba40e' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\detail\\content.tpl',
      1 => 1597914123,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:frontend/detail/images.tpl' => 1,
  ),
),false)) {
function content_5f3e3c0c5635f9_26539817 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

    <!--product details start-->
    <div class="product_details mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <?php $_smarty_tpl->_subTemplateRender("file:frontend/detail/images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">

                        <div class="product_item">
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15763316205f3e3c0c53af16_32723306', 'name-box');
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5279305145f3e3c0c544dc2_20066219', 'price-box');
?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15038493225f3e3c0c54f631_09774017', 'description-box');
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2292303615f3e3c0c550cb6_70470687', 'product-quantity');
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3394596245f3e3c0c555cd8_45713660', 'product-unit');
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12380309895f3e3c0c557389_39448798', 'basket-button');
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13827671375f3e3c0c55e107_66210465', 'button-group');
?>

                            <div class="modal_social mt-60">
                                <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'share'),$_smarty_tpl ) );?>
</h2>
                                                                <!-- AddToAny BEGIN -->
                        					<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                        						<a class="rounded-circle mb-2 a2a_button_facebook"></a>
                        						<a class="rounded-circle mb-2 a2a_button_facebook_messenger"></a>
                        						<a class="rounded-circle mb-2 a2a_button_pinterest"></a>
                        						<a class="rounded-circle mb-2 a2a_button_twitter"></a>
                        						<a class="rounded-circle mb-2 a2a_button_telegram"></a>
                        						<a class="rounded-circle mb-2 a2a_button_vk"></a>
                        						<a class="rounded-circle mb-2 a2a_button_odnoklassniki"></a>
                        						<a class="rounded-circle mb-2 a2a_button_email"></a>
                        						<a class="rounded-circle mb-2 a2a_button_google_gmail"></a>
                        						<a class="rounded-circle mb-2 a2a_button_whatsapp"></a>
                        						<a class="rounded-circle mb-2 a2a_button_viber"></a>
                        						<a class="rounded-circle mb-2 a2a_button_copy_link"></a>
                        					</div>
                        					<?php echo '<script'; ?>
 async src="https://static.addtoany.com/menu/page.js"><?php echo '</script'; ?>
>
                        					<!-- AddToAny END -->
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product details end-->
<?php }
/* {block 'name-box'} */
class Block_15763316205f3e3c0c53af16_32723306 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'name-box' => 
  array (
    0 => 'Block_15763316205f3e3c0c53af16_32723306',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                              <img class="resposnsive rounden-circle w-25 float-sm-right" src="<?php echo $_smarty_tpl->tpl_vars['product']->value['supplier']['image']['path'];?>
">
                              <h1><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES);?>
</h1>
                            <?php
}
}
/* {/block 'name-box'} */
/* {block 'price-box'} */
class Block_5279305145f3e3c0c544dc2_20066219 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'price-box' => 
  array (
    0 => 'Block_5279305145f3e3c0c544dc2_20066219',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                              <div class="price_box  mb-30">
                                  <?php if ($_smarty_tpl->tpl_vars['product']->value['discount']) {?>
                                    <?php $_smarty_tpl->_assignInScope('price', $_smarty_tpl->tpl_vars['product']->value['price']-$_smarty_tpl->tpl_vars['product']->value['price']*$_smarty_tpl->tpl_vars['product']->value['discount']/100);?>
                                    <span class="current_price"><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['currentCur']->value['symbol'];?>
</span>
                                    <span class="old_price"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
 <?php echo $_smarty_tpl->tpl_vars['currentCur']->value['symbol'];?>
</span>
                                  <?php } else { ?>
                                    <span class="current_price"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
 <?php echo $_smarty_tpl->tpl_vars['currentCur']->value['symbol'];?>
</span>
                                  <?php }?>
                              </div>
                            <?php
}
}
/* {/block 'price-box'} */
/* {block 'description-box'} */
class Block_15038493225f3e3c0c54f631_09774017 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'description-box' => 
  array (
    0 => 'Block_15038493225f3e3c0c54f631_09774017',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                              <div class="product_desc mb-30">
                                  <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['product']->value['description'], ENT_QUOTES);?>

                              </div>
                            <?php
}
}
/* {/block 'description-box'} */
/* {block 'product-quantity'} */
class Block_2292303615f3e3c0c550cb6_70470687 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product-quantity' => 
  array (
    0 => 'Block_2292303615f3e3c0c550cb6_70470687',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                              <div class="quantity quantity-detail">
                                  <div class="quantity-button desc" >-</div>
                                  <input class="nums" type="number" min="<?php if ($_smarty_tpl->tpl_vars['product']->value['unit']) {
echo $_smarty_tpl->tpl_vars['product']->value['unit'];
} else { ?>1<?php }?>" max="<?php echo $_smarty_tpl->tpl_vars['product']->value['in_stock'];?>
" step="<?php if ($_smarty_tpl->tpl_vars['product']->value['unit']) {
echo $_smarty_tpl->tpl_vars['product']->value['unit'];
} else { ?>1<?php }?>" value="<?php if ($_smarty_tpl->tpl_vars['product']->value['unit']) {
echo $_smarty_tpl->tpl_vars['product']->value['unit'];
} else { ?>1<?php }?>">
                                  <div class="quantity-button add">+</div>
                              </div>
                            <?php
}
}
/* {/block 'product-quantity'} */
/* {block 'product-unit'} */
class Block_3394596245f3e3c0c555cd8_45713660 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product-unit' => 
  array (
    0 => 'Block_3394596245f3e3c0c555cd8_45713660',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <div class="quantity-number">
                                <h6><?php echo $_smarty_tpl->tpl_vars['product']->value['unit_params']['name'];?>
</h6>
                            </div>
                            <?php
}
}
/* {/block 'product-unit'} */
/* {block 'basket-button'} */
class Block_12380309895f3e3c0c557389_39448798 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'basket-button' => 
  array (
    0 => 'Block_12380309895f3e3c0c557389_39448798',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                              <div class="product-button">
                                  <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('basket/add?a=').($_smarty_tpl->tpl_vars['product']->value['id'])),$_smarty_tpl ) );?>
" data-ajaxsend='true'> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"buynowbuy"),$_smarty_tpl ) );?>
 </a>
                              </div>
                            <?php
}
}
/* {/block 'basket-button'} */
/* {block 'button-group'} */
class Block_13827671375f3e3c0c55e107_66210465 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'button-group' => 
  array (
    0 => 'Block_13827671375f3e3c0c55e107_66210465',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <div class="product_d_action">
                                 <ul class="navbar-nav">
                                      <li class="nav-item wishlist<?php if ($_smarty_tpl->tpl_vars['product']->value['wished']) {?> wished<?php }?> my-1">
                                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('wishlist/add?a=').($_smarty_tpl->tpl_vars['product']->value['id'])),$_smarty_tpl ) );?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'wished'),$_smarty_tpl ) );?>
" class="btn btn-outline-success btn-circle is-icon-left" data-wishlist="true">
                                          <span class="icon"><i class="lnr lnr-heart"></i></span>
                                          <span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'wished'),$_smarty_tpl ) );?>
</span>
                                        </a>
                                      </li>
                                      <li class="nav-item compare my-1">
                                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('compare/add?a=').($_smarty_tpl->tpl_vars['product']->value['id'])),$_smarty_tpl ) );?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'wished'),$_smarty_tpl ) );?>
" class="btn btn-outline-success btn-circle is-icon-left">
                                          <span class="icon"><i class="ti ti-control-shuffle"></i></span>
                                          <span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'compare'),$_smarty_tpl ) );?>
</span>
                                        </a>
                                      </li>
                                 </ul>
                            </div>
                            <?php
}
}
/* {/block 'button-group'} */
}
