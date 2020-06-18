<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-18 09:05:13
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\detail\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eeb041934f210_30232367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7c6d3cf4aa1e322cb0b914f39388cb4147ba40e' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\detail\\content.tpl',
      1 => 1592407770,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:frontend/detail/images.tpl' => 1,
  ),
),false)) {
function content_5eeb041934f210_30232367 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

    <!--product details start-->
    <div class="product_details mt-70 mb-70">
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2987119675eeb041932bba3_58481979', 'name-box');
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9808895745eeb0419330650_49136186', 'price-box');
?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3481944115eeb041933b273_94644392', 'description-box');
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15843060895eeb041933c671_53045693', 'product-quantity');
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6069566985eeb0419342169_77418223', 'product-unit');
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7768925995eeb04193437a8_14819648', 'basket-button');
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_837624105eeb041934b398_87555020', 'button-group');
?>

                            <div class="modal_social mt-60">
                                <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'share'),$_smarty_tpl ) );?>
</h2>
                                <ul>
                                    <li class="facebook"><a href="index.html#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="instagram"><a href="index.html#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
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
class Block_2987119675eeb041932bba3_58481979 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'name-box' => 
  array (
    0 => 'Block_2987119675eeb041932bba3_58481979',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                              <h1><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</h1>
                            <?php
}
}
/* {/block 'name-box'} */
/* {block 'price-box'} */
class Block_9808895745eeb0419330650_49136186 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'price-box' => 
  array (
    0 => 'Block_9808895745eeb0419330650_49136186',
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
class Block_3481944115eeb041933b273_94644392 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'description-box' => 
  array (
    0 => 'Block_3481944115eeb041933b273_94644392',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                              <div class="product_desc mb-30">
                                  <?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>

                              </div>
                            <?php
}
}
/* {/block 'description-box'} */
/* {block 'product-quantity'} */
class Block_15843060895eeb041933c671_53045693 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product-quantity' => 
  array (
    0 => 'Block_15843060895eeb041933c671_53045693',
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
class Block_6069566985eeb0419342169_77418223 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product-unit' => 
  array (
    0 => 'Block_6069566985eeb0419342169_77418223',
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
class Block_7768925995eeb04193437a8_14819648 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'basket-button' => 
  array (
    0 => 'Block_7768925995eeb04193437a8_14819648',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                              <div class="product-button">
                                  <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('basket/add?a=').($_smarty_tpl->tpl_vars['product']->value['id'])),$_smarty_tpl ) );?>
" data-ajaxsend='true'> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"buynow"),$_smarty_tpl ) );?>
 </a>
                              </div>
                            <?php
}
}
/* {/block 'basket-button'} */
/* {block 'button-group'} */
class Block_837624105eeb041934b398_87555020 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'button-group' => 
  array (
    0 => 'Block_837624105eeb041934b398_87555020',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <div class="product_d_action">
                                 <ul>
                                      <li class="wishlist<?php if ($_smarty_tpl->tpl_vars['product']->value['wished']) {?> wished<?php }?>">
                                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('wishlist/add?a=').($_smarty_tpl->tpl_vars['product']->value['id'])),$_smarty_tpl ) );?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'wished'),$_smarty_tpl ) );?>
" class="btn btn-outline-success btn-circle is-icon-left" data-wishlist="true">
                                          <span class="icon"><i class="lnr lnr-heart"></i></span>
                                          <span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'wished'),$_smarty_tpl ) );?>
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
