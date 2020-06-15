<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-15 09:20:16
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\category\product-box\box-minimal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee713208d99b2_46335155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ff278f33e0b63661903ca000a7497939d2a5f6d' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\category\\product-box\\box-minimal.tpl',
      1 => 1590491743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee713208d99b2_46335155 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<article class="single_product product-item <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5518562795ee71320890566_75125097', 'classname');
?>
" data-productid="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3969170315ee71320893031_43390345', 'article-content');
?>

</article>
<?php }
/* {block 'classname'} */
class Block_5518562795ee71320890566_75125097 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'classname' => 
  array (
    0 => 'Block_5518562795ee71320890566_75125097',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
box-minimal<?php
}
}
/* {/block 'classname'} */
/* {block 'image-link'} */
class Block_13386874125ee71320894b23_34952260 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <a class="primary_img" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('detail?a=').($_smarty_tpl->tpl_vars['product']->value['id'])),$_smarty_tpl ) );?>
">
                  <?php if ($_smarty_tpl->tpl_vars['product']->value['images'][0]['thumbnails'][0]) {?>
                  <img src="<?php echo $_smarty_tpl->tpl_vars['product']->value['images'][0]['thumbnails'][0]['thumb_path'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
">
                  <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['images'][0]) {?>
                  <img src="<?php echo $_smarty_tpl->tpl_vars['product']->value['images'][0]['path'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
">
                  <?php } else { ?>
                  <img src="<?php echo $_smarty_tpl->tpl_vars['notFoundPath']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
">
                  <?php }?>
                </a>
                <?php
}
}
/* {/block 'image-link'} */
/* {block 'button-group'} */
class Block_20140286105ee713208a2783_24818573 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="img-icon">
                     <ul>
                          <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                          <li class="wishlist<?php if ($_smarty_tpl->tpl_vars['product']->value['wished']) {?> wished<?php }?>">
                            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('wishlist/add?a=').($_smarty_tpl->tpl_vars['product']->value['id'])),$_smarty_tpl ) );?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'wished'),$_smarty_tpl ) );?>
" data-wishlist="true">
                              <span class="lnr lnr-heart"></span>
                            </a>
                          </li>
                     </ul>
                </div>
                <?php
}
}
/* {/block 'button-group'} */
/* {block 'product-bages'} */
class Block_12701254585ee713208a81d9_89065635 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="label_product">
              <?php if ($_smarty_tpl->tpl_vars['product']->value['discount']) {?>
                <span class="label_sale"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"sale"),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['product']->value['discount'];?>
%</span>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['product']->value['is_new']) {?>
                <span class="label_new"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"new"),$_smarty_tpl ) );?>
</span>
              <?php }?>
            </div>
            <?php
}
}
/* {/block 'product-bages'} */
/* {block 'product-countdown'} */
class Block_14129520295ee713208afae3_02133495 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\User\\OSPanel\\domains\\torq\\engine\\Library\\smarty-master\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

            <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['attributes']['sale_end']) && $_smarty_tpl->tpl_vars['product']->value['attributes']['sale_end'] != '0000-00-00') {?>
              <div class="product_timing">
                  <div data-countdown="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['product']->value['attributes']['sale_end'],':','/');?>
"></div>
              </div>
            <?php }?>
            <?php
}
}
/* {/block 'product-countdown'} */
/* {block 'article-image'} */
class Block_18889078155ee71320893e39_95827029 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="product_thumb">
            <div class="product-img">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13386874125ee71320894b23_34952260', 'image-link', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20140286105ee713208a2783_24818573', 'button-group', $this->tplIndex);
?>

            </div>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12701254585ee713208a81d9_89065635', 'product-bages', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14129520295ee713208afae3_02133495', 'product-countdown', $this->tplIndex);
?>


        </div>
      <?php
}
}
/* {/block 'article-image'} */
/* {block 'product-name'} */
class Block_6904367915ee713208bc997_75648901 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\User\\OSPanel\\domains\\torq\\engine\\Library\\smarty-master\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>

              <h4 class="product_name" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
"><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('detail?a=').($_smarty_tpl->tpl_vars['product']->value['id'])),$_smarty_tpl ) );?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],40);?>
</a></h4>
            <?php
}
}
/* {/block 'product-name'} */
/* {block 'product-quantity'} */
class Block_4167755515ee713208c6308_61603347 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="quantity">
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
class Block_3177001385ee713208ce820_83512072 extends Smarty_Internal_Block
{
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
/* {block 'price-box'} */
class Block_16029186005ee713208cfe62_16317288 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div class="price_box">
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
/* {block 'basket-button'} */
class Block_18629577675ee713208d6917_79336083 extends Smarty_Internal_Block
{
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
/* {block "article-content"} */
class Block_20893031065ee713208bbd16_92038849 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <figcaption class="product_content">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6904367915ee713208bc997_75648901', 'product-name', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4167755515ee713208c6308_61603347', 'product-quantity', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3177001385ee713208ce820_83512072', 'product-unit', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16029186005ee713208cfe62_16317288', 'price-box', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18629577675ee713208d6917_79336083', 'basket-button', $this->tplIndex);
?>

        </figcaption>
      <?php
}
}
/* {/block "article-content"} */
/* {block 'article-content'} */
class Block_3969170315ee71320893031_43390345 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'article-content' => 
  array (
    0 => 'Block_3969170315ee71320893031_43390345',
    1 => 'Block_20893031065ee713208bbd16_92038849',
  ),
  'article-image' => 
  array (
    0 => 'Block_18889078155ee71320893e39_95827029',
  ),
  'image-link' => 
  array (
    0 => 'Block_13386874125ee71320894b23_34952260',
  ),
  'button-group' => 
  array (
    0 => 'Block_20140286105ee713208a2783_24818573',
  ),
  'product-bages' => 
  array (
    0 => 'Block_12701254585ee713208a81d9_89065635',
  ),
  'product-countdown' => 
  array (
    0 => 'Block_14129520295ee713208afae3_02133495',
  ),
  'product-name' => 
  array (
    0 => 'Block_6904367915ee713208bc997_75648901',
  ),
  'product-quantity' => 
  array (
    0 => 'Block_4167755515ee713208c6308_61603347',
  ),
  'product-unit' => 
  array (
    0 => 'Block_3177001385ee713208ce820_83512072',
  ),
  'price-box' => 
  array (
    0 => 'Block_16029186005ee713208cfe62_16317288',
  ),
  'basket-button' => 
  array (
    0 => 'Block_18629577675ee713208d6917_79336083',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <figure>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18889078155ee71320893e39_95827029', 'article-image', $this->tplIndex);
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20893031065ee713208bbd16_92038849', "article-content", $this->tplIndex);
?>

    </figure>
  <?php
}
}
/* {/block 'article-content'} */
}
