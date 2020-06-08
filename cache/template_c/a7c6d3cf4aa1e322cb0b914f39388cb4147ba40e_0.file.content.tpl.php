<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-23 12:47:34
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\detail\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec8f136007276_75868713',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7c6d3cf4aa1e322cb0b914f39388cb4147ba40e' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\detail\\content.tpl',
      1 => 1590227252,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:frontend/detail/images.tpl' => 1,
    'file:frontend/emotions/components/article_slider.tpl' => 1,
  ),
),false)) {
function content_5ec8f136007276_75868713 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19465870065ec8f135f13313_68438571', 'name-box');
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8047413755ec8f135f17e33_71871294', 'price-box');
?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20887615885ec8f135f230b2_93004916', 'description-box');
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4019160755ec8f135f24562_89641314', 'product-quantity');
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1634108575ec8f135f2d282_54212781', 'product-unit');
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9914293145ec8f135f2fc38_47773761', 'basket-button');
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1903191845ec8f135f3a870_54647343', 'button-group');
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

    <!--product info start-->
    <div class="product_d_info mb-65">
        <div class="container">
            <div class="row">
                <div class="col-12">
                  <?php if ($_smarty_tpl->tpl_vars['product']->value['options']) {?>
                    <div class="product_d_inner">
                      <div class="product_info_button">
                          <ul class="nav" role="tablist">
                              <li>
                                   <a class="active" data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet" aria-selected="false"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'properties'),$_smarty_tpl ) );?>
</a>
                              </li>
                          </ul>
                      </div>
                      <div class="tab-content">
                          <div class="tab-pane fade show active" id="sheet" role="tabpanel" >
                              <div class="product_d_table">
                                <table>
                                    <tbody>
                                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['options'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                                        <tr>
                                            <td class="first_child"><?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
</td>
                                        </tr>
                                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                              </div>
                          </div>
                      </div>
                    </div>
                  <?php }?>
                </div>
            </div>
        </div>
    </div>
    <!--product info end-->

    <!--product area start-->
    <section class="product_area related_products">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php $_smarty_tpl->_assignInScope('items', $_smarty_tpl->tpl_vars['similarProducts']->value);?>
                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'similarProducts'),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
$_tmp_array = isset($_smarty_tpl->tpl_vars['component']) ? $_smarty_tpl->tpl_vars['component']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['title'] = $_prefixVariable1;
$_smarty_tpl->_assignInScope('component', $_tmp_array);?>
                    <?php $_smarty_tpl->_subTemplateRender("file:frontend/emotions/components/article_slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
            </div>
        </div>
    </section>
    <!--product area end-->
<?php }
/* {block 'name-box'} */
class Block_19465870065ec8f135f13313_68438571 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'name-box' => 
  array (
    0 => 'Block_19465870065ec8f135f13313_68438571',
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
class Block_8047413755ec8f135f17e33_71871294 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'price-box' => 
  array (
    0 => 'Block_8047413755ec8f135f17e33_71871294',
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
class Block_20887615885ec8f135f230b2_93004916 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'description-box' => 
  array (
    0 => 'Block_20887615885ec8f135f230b2_93004916',
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
class Block_4019160755ec8f135f24562_89641314 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product-quantity' => 
  array (
    0 => 'Block_4019160755ec8f135f24562_89641314',
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
class Block_1634108575ec8f135f2d282_54212781 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product-unit' => 
  array (
    0 => 'Block_1634108575ec8f135f2d282_54212781',
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
class Block_9914293145ec8f135f2fc38_47773761 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'basket-button' => 
  array (
    0 => 'Block_9914293145ec8f135f2fc38_47773761',
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
class Block_1903191845ec8f135f3a870_54647343 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'button-group' => 
  array (
    0 => 'Block_1903191845ec8f135f3a870_54647343',
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
