<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-17 09:49:43
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\checkout\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee9bd07a20829_22268147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9af628e33bbcc9bef7b702200d61c58fab6e8119' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\checkout\\error.tpl',
      1 => 1592376582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee9bd07a20829_22268147 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3726145935ee9bd07a1d141_47764653', 'breadcrumbs_area');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18841006765ee9bd07a1fe80_75163079', "pageContent");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "frontend/index/index.tpl");
}
/* {block 'breadcrumbs_area'} */
class Block_3726145935ee9bd07a1d141_47764653 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumbs_area' => 
  array (
    0 => 'Block_3726145935ee9bd07a1d141_47764653',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <!--breadcrumbs area start-->
  <div class="breadcrumbs_area">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="breadcrumb_content">
                      <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"payerror"),$_smarty_tpl ) );?>
</h3>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!--breadcrumbs area end-->
<?php
}
}
/* {/block 'breadcrumbs_area'} */
/* {block "pageContent"} */
class Block_18841006765ee9bd07a1fe80_75163079 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageContent' => 
  array (
    0 => 'Block_18841006765ee9bd07a1fe80_75163079',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="shop_area shop_reverse mt-70 mb-70">
    
</div>
<?php
}
}
/* {/block "pageContent"} */
}
