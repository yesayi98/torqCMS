<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-28 15:11:49
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\category\listing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f48f485857ec4_18670618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62ca2be0266977dc0428b63de6c91bb088bc3380' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\category\\listing.tpl',
      1 => 1598616708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:frontend/category/product-box/box-minimal.tpl' => 1,
  ),
),false)) {
function content_5f48f485857ec4_18670618 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4587295205f48f4858360f7_98980649', 'top-toolbar');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1322099995f48f48584c8e2_91109293', 'product-list');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1928000285f48f4858561b7_95546824', 'bottom-toolbar');
?>

<!--shop toolbar end-->
<?php }
/* {block 'top-toolbar'} */
class Block_4587295205f48f4858360f7_98980649 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top-toolbar' => 
  array (
    0 => 'Block_4587295205f48f4858360f7_98980649',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!--shop toolbar start-->
<div class="shop_toolbar_wrapper">
    <div class="shop_toolbar_btn">

        <button data-role="grid_3" type="button" class="active btn-grid-3" data-toggle="tooltip" title="3"></button>

        <button data-role="grid_4" type="button"  class=" btn-grid-4" data-toggle="tooltip" title="4"></button>
        <!-- <button data-role="grid_list" type="button"  class="btn-list" data-toggle="tooltip" title="List"></button> -->
    </div>
    <div class=" niceselect_option">
        <div class="select_option">
            <select name="sortby">
              <option value="default"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"sortby"),$_smarty_tpl ) );?>
</option>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sortings']->value, 'sorting', false, 'key');
$_smarty_tpl->tpl_vars['sorting']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['sorting']->value) {
$_smarty_tpl->tpl_vars['sorting']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['sorting']->value['selector'];?>
" <?php if ($_smarty_tpl->tpl_vars['sort']->value == $_smarty_tpl->tpl_vars['sorting']->value['selector']) {?>selected disabled<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>((string)$_smarty_tpl->tpl_vars['sorting']->value['selector'])),$_smarty_tpl ) );?>
</option>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
    </div>
    <div class="page_amount">
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"countProducts"),$_smarty_tpl ) );?>
</p>
    </div>
</div>
 <!--shop toolbar end-->
<?php
}
}
/* {/block 'top-toolbar'} */
/* {block 'product-list'} */
class Block_1322099995f48f48584c8e2_91109293 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product-list' => 
  array (
    0 => 'Block_1322099995f48f48584c8e2_91109293',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!--  PRODUCT ---- -->
<div class="row shop_wrapper">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value['data'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
        <?php $_smarty_tpl->_subTemplateRender("file:frontend/category/product-box/box-minimal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    </div>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php
}
}
/* {/block 'product-list'} */
/* {block 'bottom-toolbar'} */
class Block_1928000285f48f4858561b7_95546824 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom-toolbar' => 
  array (
    0 => 'Block_1928000285f48f4858561b7_95546824',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="shop_toolbar t_bottom">
    <div class="pagination">
        <?php echo $_smarty_tpl->tpl_vars['products']->value['pagination'];?>

    </div>
</div>
<?php
}
}
/* {/block 'bottom-toolbar'} */
}
