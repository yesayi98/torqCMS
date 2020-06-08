<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-15 18:14:59
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\category\product-box\box-small.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebeb1f33e8d29_66419800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a1e14b2ba45af3ea6932453d6b040159a203fa5' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\category\\product-box\\box-small.tpl',
      1 => 1589554496,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebeb1f33e8d29_66419800 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17589449305ebeb1f33e1384_99976545', 'classname');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15175039715ebeb1f33e24e2_29648319', 'button-group');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10757876545ebeb1f33e30f9_53948025', 'price-box');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7550769995ebeb1f33e60a4_50726593', 'product-countdown');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14429929835ebeb1f33e6c61_71769254', 'product-quantity');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18793915585ebeb1f33e77f8_07967470', 'product-unit');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15763445225ebeb1f33e8345_29886431', 'basket-button');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "frontend/category/product-box/box-minimal.tpl");
}
/* {block 'classname'} */
class Block_17589449305ebeb1f33e1384_99976545 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'classname' => 
  array (
    0 => 'Block_17589449305ebeb1f33e1384_99976545',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
box-small<?php
}
}
/* {/block 'classname'} */
/* {block 'button-group'} */
class Block_15175039715ebeb1f33e24e2_29648319 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'button-group' => 
  array (
    0 => 'Block_15175039715ebeb1f33e24e2_29648319',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'button-group'} */
/* {block 'price-box'} */
class Block_10757876545ebeb1f33e30f9_53948025 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'price-box' => 
  array (
    0 => 'Block_10757876545ebeb1f33e30f9_53948025',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<div class="action_links">
    <ul>
        <li class="add_to_cart"><a href="cart.html" title="" data-original-title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
        <li class="quick_button"><a href="index.html#" data-toggle="modal" data-target="#modal_box" title="" data-original-title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
        <li class="wishlist"><a href="wishlist.html" title="" data-original-title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
    </ul>
</div>
<?php
}
}
/* {/block 'price-box'} */
/* {block 'product-countdown'} */
class Block_7550769995ebeb1f33e60a4_50726593 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product-countdown' => 
  array (
    0 => 'Block_7550769995ebeb1f33e60a4_50726593',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'product-countdown'} */
/* {block 'product-quantity'} */
class Block_14429929835ebeb1f33e6c61_71769254 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product-quantity' => 
  array (
    0 => 'Block_14429929835ebeb1f33e6c61_71769254',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'product-quantity'} */
/* {block 'product-unit'} */
class Block_18793915585ebeb1f33e77f8_07967470 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product-unit' => 
  array (
    0 => 'Block_18793915585ebeb1f33e77f8_07967470',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'product-unit'} */
/* {block 'basket-button'} */
class Block_15763445225ebeb1f33e8345_29886431 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'basket-button' => 
  array (
    0 => 'Block_15763445225ebeb1f33e8345_29886431',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'basket-button'} */
}
