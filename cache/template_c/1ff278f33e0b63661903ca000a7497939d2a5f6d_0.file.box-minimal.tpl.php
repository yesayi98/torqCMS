<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-20 08:52:26
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\category\product-box\box-minimal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f3e0f9ae81b19_57979044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ff278f33e0b63661903ca000a7497939d2a5f6d' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\category\\product-box\\box-minimal.tpl',
      1 => 1597902742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3e0f9ae81b19_57979044 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<article class="single_product product-item <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6407554465f3e0f9ab26a10_48331088', 'classname');
?>
" data-productid="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5500481305f3e0f9abf2e48_22906629', 'article-content');
?>

</article>
<?php }
/* {block 'classname'} */
class Block_6407554465f3e0f9ab26a10_48331088 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'classname' => 
  array (
    0 => 'Block_6407554465f3e0f9ab26a10_48331088',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
box-minimal<?php
}
}
/* {/block 'classname'} */
/* {block 'image-link'} */
class Block_4730747605f3e0f9abf43b2_94482132 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <a class="primary_img" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('detail?a=').($_smarty_tpl->tpl_vars['product']->value['id'])),$_smarty_tpl ) );?>
">
                  <span class="image-component">
                    <span class="image-container">
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
                    </span>
                  </span>
                </a>
                <?php
}
}
/* {/block 'image-link'} */
/* {block 'button-group'} */
class Block_10405774665f3e0f9ad4e435_81791192 extends Smarty_Internal_Block
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
                          <li class="compare">
                            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('compare/add?a=').($_smarty_tpl->tpl_vars['product']->value['id'])),$_smarty_tpl ) );?>
" data-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'compare/add'),$_smarty_tpl ) );?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" class="compare-btn" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'compare'),$_smarty_tpl ) );?>
">
                              <span class="ti ti-control-shuffle"></span>
                            </a>
                          </li>
                     </ul>
                </div>
                <?php
}
}
/* {/block 'button-group'} */
/* {block 'product-bages'} */
class Block_1743076455f3e0f9ad59587_83294144 extends Smarty_Internal_Block
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
class Block_11167155145f3e0f9adddf04_99274645 extends Smarty_Internal_Block
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
class Block_12466791335f3e0f9abf3965_83061973 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="product_thumb">
            <div class="product-img">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4730747605f3e0f9abf43b2_94482132', 'image-link', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10405774665f3e0f9ad4e435_81791192', 'button-group', $this->tplIndex);
?>

            </div>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1743076455f3e0f9ad59587_83294144', 'product-bages', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11167155145f3e0f9adddf04_99274645', 'product-countdown', $this->tplIndex);
?>


        </div>
      <?php
}
}
/* {/block 'article-image'} */
/* {block 'product-name'} */
class Block_13375001705f3e0f9ade40f8_30512722 extends Smarty_Internal_Block
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
class Block_20723471025f3e0f9ade8c82_01187700 extends Smarty_Internal_Block
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
class Block_2048166855f3e0f9ae70480_33987818 extends Smarty_Internal_Block
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
class Block_20133006675f3e0f9ae717b3_06852892 extends Smarty_Internal_Block
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
class Block_5202851885f3e0f9ae7d337_01479249 extends Smarty_Internal_Block
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
class Block_13018428175f3e0f9ade3ab1_68876880 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <figcaption class="product_content">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13375001705f3e0f9ade40f8_30512722', 'product-name', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20723471025f3e0f9ade8c82_01187700', 'product-quantity', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2048166855f3e0f9ae70480_33987818', 'product-unit', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20133006675f3e0f9ae717b3_06852892', 'price-box', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5202851885f3e0f9ae7d337_01479249', 'basket-button', $this->tplIndex);
?>

        </figcaption>
      <?php
}
}
/* {/block "article-content"} */
/* {block 'article-content'} */
class Block_5500481305f3e0f9abf2e48_22906629 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'article-content' => 
  array (
    0 => 'Block_5500481305f3e0f9abf2e48_22906629',
    1 => 'Block_13018428175f3e0f9ade3ab1_68876880',
  ),
  'article-image' => 
  array (
    0 => 'Block_12466791335f3e0f9abf3965_83061973',
  ),
  'image-link' => 
  array (
    0 => 'Block_4730747605f3e0f9abf43b2_94482132',
  ),
  'button-group' => 
  array (
    0 => 'Block_10405774665f3e0f9ad4e435_81791192',
  ),
  'product-bages' => 
  array (
    0 => 'Block_1743076455f3e0f9ad59587_83294144',
  ),
  'product-countdown' => 
  array (
    0 => 'Block_11167155145f3e0f9adddf04_99274645',
  ),
  'product-name' => 
  array (
    0 => 'Block_13375001705f3e0f9ade40f8_30512722',
  ),
  'product-quantity' => 
  array (
    0 => 'Block_20723471025f3e0f9ade8c82_01187700',
  ),
  'product-unit' => 
  array (
    0 => 'Block_2048166855f3e0f9ae70480_33987818',
  ),
  'price-box' => 
  array (
    0 => 'Block_20133006675f3e0f9ae717b3_06852892',
  ),
  'basket-button' => 
  array (
    0 => 'Block_5202851885f3e0f9ae7d337_01479249',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <figure>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12466791335f3e0f9abf3965_83061973', 'article-image', $this->tplIndex);
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13018428175f3e0f9ade3ab1_68876880', "article-content", $this->tplIndex);
?>

    </figure>
  <?php
}
}
/* {/block 'article-content'} */
}
