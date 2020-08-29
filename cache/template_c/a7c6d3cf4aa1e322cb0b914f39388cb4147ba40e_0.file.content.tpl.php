<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-27 15:27:08
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\detail\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f47a69c6922c1_85996317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7c6d3cf4aa1e322cb0b914f39388cb4147ba40e' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\detail\\content.tpl',
      1 => 1598531227,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:frontend/detail/images.tpl' => 1,
  ),
),false)) {
function content_5f47a69c6922c1_85996317 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11720541975f47a69c65f363_85237244', 'name-box');
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5516819885f47a69c66b049_05901056', 'price-box');
?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4090503965f47a69c674947_26514531', 'description-box');
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14692747485f47a69c675ef5_14822999', 'product-quantity');
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5405640275f47a69c67aaf8_78108171', 'product-unit');
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4157606915f47a69c67be01_82803067', 'basket-button');
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7141991655f47a69c6803e1_35882466', 'button-group');
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
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10735930245f47a69c6858c5_67146918', "rate-component");
?>

            </div>
        </div>
    </div>
    <!--product details end-->
<?php }
/* {block 'name-box'} */
class Block_11720541975f47a69c65f363_85237244 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'name-box' => 
  array (
    0 => 'Block_11720541975f47a69c65f363_85237244',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                              <img class="resposnsive rounden-circle w-25 float-sm-right" src="<?php echo $_smarty_tpl->tpl_vars['product']->value['supplier']['image']['path'];?>
">
                              <h1><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES);?>
</h1>
                              <div class="rating-container rated">
                                <div class="float-right">
                                  <?php echo str_repeat('<i class="ti ti-star"></i>',$_smarty_tpl->tpl_vars['product']->value['rating']);?>

                                </div>
                              </div>
                            <?php
}
}
/* {/block 'name-box'} */
/* {block 'price-box'} */
class Block_5516819885f47a69c66b049_05901056 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'price-box' => 
  array (
    0 => 'Block_5516819885f47a69c66b049_05901056',
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
class Block_4090503965f47a69c674947_26514531 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'description-box' => 
  array (
    0 => 'Block_4090503965f47a69c674947_26514531',
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
class Block_14692747485f47a69c675ef5_14822999 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product-quantity' => 
  array (
    0 => 'Block_14692747485f47a69c675ef5_14822999',
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
class Block_5405640275f47a69c67aaf8_78108171 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product-unit' => 
  array (
    0 => 'Block_5405640275f47a69c67aaf8_78108171',
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
class Block_4157606915f47a69c67be01_82803067 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'basket-button' => 
  array (
    0 => 'Block_4157606915f47a69c67be01_82803067',
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
class Block_7141991655f47a69c6803e1_35882466 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'button-group' => 
  array (
    0 => 'Block_7141991655f47a69c6803e1_35882466',
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
/* {block "rate-component"} */
class Block_10735930245f47a69c6858c5_67146918 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'rate-component' => 
  array (
    0 => 'Block_10735930245f47a69c6858c5_67146918',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
                <div id="main" class="col-12">
                  <div class="card mt-3">
                    <div class="card-header">
                      <h3 class="my-3"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
: <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"rate"),$_smarty_tpl ) );?>
</h3>
                    </div>
                    <div id="container" class="rating-container card-body">
                      <form id="rate-form"
                            class="rate-form form-group"
                            action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>"detail/rate"),$_smarty_tpl ) );?>
"
                            method="post"
                            datatype="json"
                            data-ajax='true'>
                        <div class="ratings my-3">
                          <i star-rating="1" class="ti ti-star star"></i>
                          <i star-rating="2" class="ti ti-star star"></i>
                          <i star-rating="3" class="ti ti-star star"></i>
                          <i star-rating="4" class="ti ti-star star"></i>
                          <i star-rating="5" class="ti ti-star star"></i>
                          <input type="number"  name="rating" id="ratingInput" value="1" style="display: none;">
                        </div>

                        <label class="d-block w-100">
                          <span class="text-muted"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"comment"),$_smarty_tpl ) );?>
</span>
                          <textarea name="comment" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"comment"),$_smarty_tpl ) );?>
" class="form-control"></textarea>
                        </label>
                        <input type="hidden" name="article_id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
                        <button type="submit" class="btn rate-button btn-large mt-3" name="button"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"submit"),$_smarty_tpl ) );?>
</button>
                      </form>
                      <div class="my-3">
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['reviews']) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['reviews'], 'review');
$_smarty_tpl->tpl_vars['review']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['review']->value) {
$_smarty_tpl->tpl_vars['review']->do_else = false;
?>
                          <div class="comment-item card mt-3">
                            <div class="card-header">
                                <?php echo $_smarty_tpl->tpl_vars['review']->value['user']['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['review']->value['user']['lastname'];?>

                            </div>
                            <div class="card-body">
                              <p><?php echo str_repeat('<i class="ti ti-star"></i>',$_smarty_tpl->tpl_vars['review']->value['rating_count']);?>
</p>
                              <p><?php echo $_smarty_tpl->tpl_vars['review']->value['comment'];?>
</p>
                            </div>
                          </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?>
                      </div>
                    </div>
                  </div>
                </div>
                <?php }?>
                <?php
}
}
/* {/block "rate-component"} */
}
