<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-11 16:20:41
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\category\product-box\box-minimal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f329b295ab7f0_11765004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ff278f33e0b63661903ca000a7497939d2a5f6d' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\category\\product-box\\box-minimal.tpl',
      1 => 1597152039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f329b295ab7f0_11765004 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<article class="single_product product-item <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1953055035f329b295426b8_59784792', 'classname');
?>
" data-productid="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4013112575f329b29549f23_73762282', 'article-content');
?>

</article>
<?php }
/* {block 'classname'} */
class Block_1953055035f329b295426b8_59784792 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'classname' => 
  array (
    0 => 'Block_1953055035f329b295426b8_59784792',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
box-minimal<?php
}
}
/* {/block 'classname'} */
/* {block 'image-link'} */
class Block_18293915465f329b2954ada3_07778103 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <a class="primary_img" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('detail?a=').($_smarty_tpl->tpl_vars['product']->value['id'])),$_smarty_tpl ) );?>
">
                  <?php if ($_smarty_tpl->tpl_vars['product']->value['images'][0]['thumbnails'][0]) {?>
                  <img src="<?php echo $_smarty_tpl->tpl_vars['product']->value['images'][0]['thumbnails'][1]['thumb_path'];?>
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
class Block_6675339745f329b29564260_91534654 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="img-icon">
                     <ul>
                          <li class="quick_button"><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('detail/quickview?a=').($_smarty_tpl->tpl_vars['product']->value['id'])),$_smarty_tpl ) );?>
" data-toggle="modal" data-modal="quickview" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
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
class Block_16707021825f329b2956b7c1_52736327 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="label_product">
              <?php if ($_smarty_tpl->tpl_vars['product']->value['discount']) {?>
                <span class="label_sale"><?php echo $_smarty_tpl->tpl_vars['product']->value['discount'];?>
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
class Block_14957249415f329b29574c46_13888670 extends Smarty_Internal_Block
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
class Block_1777549765f329b2954a704_79167385 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="product_thumb">
            <div class="product-img">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18293915465f329b2954ada3_07778103', 'image-link', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6675339745f329b29564260_91534654', 'button-group', $this->tplIndex);
?>

            </div>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16707021825f329b2956b7c1_52736327', 'product-bages', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14957249415f329b29574c46_13888670', 'product-countdown', $this->tplIndex);
?>


        </div>
      <?php
}
}
/* {/block 'article-image'} */
/* {block 'product-name'} */
class Block_15735094785f329b2957f2e1_14347631 extends Smarty_Internal_Block
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
class Block_3053612055f329b29587653_86301002 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_assignInScope('unit', 1);?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['unit']) {?>
              <?php $_smarty_tpl->_assignInScope('unit', $_smarty_tpl->tpl_vars['product']->value['unit']);?>
            <?php } else { ?>
              <?php $_smarty_tpl->_assignInScope('unit', 1);?>
            <?php }?>
            <?php $_smarty_tpl->_assignInScope('min_purchuase', $_smarty_tpl->tpl_vars['product']->value['min_purchuase']);?>
            <?php if (!$_smarty_tpl->tpl_vars['min_purchuase']->value) {?>
              <?php $_smarty_tpl->_assignInScope('min_purchuase', $_smarty_tpl->tpl_vars['unit']->value);?>
            <?php }?>
            <div class="quantity">
                <div class="quantity-button desc" >-</div>
                <input class="nums" type="number" readonly min="<?php echo $_smarty_tpl->tpl_vars['min_purchuase']->value;?>
" max="<?php echo $_smarty_tpl->tpl_vars['product']->value['in_stock'];?>
" step="<?php echo $_smarty_tpl->tpl_vars['unit']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['min_purchuase']->value;?>
">
                <div class="quantity-button add">+</div>
            </div>
            <?php
}
}
/* {/block 'product-quantity'} */
/* {block 'product-unit'} */
class Block_1335752215f329b29595cf2_99328090 extends Smarty_Internal_Block
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
class Block_9609077935f329b29598541_25636847 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div class="price_box">
                  <?php if ($_smarty_tpl->tpl_vars['product']->value['discount']) {?>
                    <?php $_smarty_tpl->_assignInScope('price', $_smarty_tpl->tpl_vars['product']->value['price']-$_smarty_tpl->tpl_vars['product']->value['price']*$_smarty_tpl->tpl_vars['product']->value['discount']/100);?>
                    <span class="current_price"><span class="unit-price" data-value="<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['min_purchuase']->value*$_smarty_tpl->tpl_vars['price']->value;?>
</span> <?php echo $_smarty_tpl->tpl_vars['currentCur']->value['symbol'];?>
</span>
                    <span class="old_price"><span class="unit-price" data-value="<?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
"><?php echo $_smarty_tpl->tpl_vars['min_purchuase']->value*$_smarty_tpl->tpl_vars['product']->value['price'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['currentCur']->value['symbol'];?>
</span>
                  <?php } else { ?>
                    <span class="current_price"><span class="unit-price" data-value="<?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
"><?php echo $_smarty_tpl->tpl_vars['min_purchuase']->value*$_smarty_tpl->tpl_vars['product']->value['price'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['currentCur']->value['symbol'];?>
</span>
                  <?php }?>
              </div>
            <?php
}
}
/* {/block 'price-box'} */
/* {block 'basket-button'} */
class Block_5100220435f329b295a6b89_79541609 extends Smarty_Internal_Block
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
class Block_17300040015f329b2957e789_29130188 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <figcaption class="product_content">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15735094785f329b2957f2e1_14347631', 'product-name', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3053612055f329b29587653_86301002', 'product-quantity', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1335752215f329b29595cf2_99328090', 'product-unit', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9609077935f329b29598541_25636847', 'price-box', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5100220435f329b295a6b89_79541609', 'basket-button', $this->tplIndex);
?>

        </figcaption>
      <?php
}
}
/* {/block "article-content"} */
/* {block 'article-content'} */
class Block_4013112575f329b29549f23_73762282 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'article-content' => 
  array (
    0 => 'Block_4013112575f329b29549f23_73762282',
    1 => 'Block_17300040015f329b2957e789_29130188',
  ),
  'article-image' => 
  array (
    0 => 'Block_1777549765f329b2954a704_79167385',
  ),
  'image-link' => 
  array (
    0 => 'Block_18293915465f329b2954ada3_07778103',
  ),
  'button-group' => 
  array (
    0 => 'Block_6675339745f329b29564260_91534654',
  ),
  'product-bages' => 
  array (
    0 => 'Block_16707021825f329b2956b7c1_52736327',
  ),
  'product-countdown' => 
  array (
    0 => 'Block_14957249415f329b29574c46_13888670',
  ),
  'product-name' => 
  array (
    0 => 'Block_15735094785f329b2957f2e1_14347631',
  ),
  'product-quantity' => 
  array (
    0 => 'Block_3053612055f329b29587653_86301002',
  ),
  'product-unit' => 
  array (
    0 => 'Block_1335752215f329b29595cf2_99328090',
  ),
  'price-box' => 
  array (
    0 => 'Block_9609077935f329b29598541_25636847',
  ),
  'basket-button' => 
  array (
    0 => 'Block_5100220435f329b295a6b89_79541609',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <figure>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1777549765f329b2954a704_79167385', 'article-image', $this->tplIndex);
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17300040015f329b2957e789_29130188', "article-content", $this->tplIndex);
?>

    </figure>
  <?php
}
}
/* {/block 'article-content'} */
}
