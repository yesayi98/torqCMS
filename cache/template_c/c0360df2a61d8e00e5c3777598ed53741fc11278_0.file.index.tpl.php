<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-26 14:27:08
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\detail\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eccfd0c28a672_65719903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0360df2a61d8e00e5c3777598ed53741fc11278' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\detail\\index.tpl',
      1 => 1590479587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:frontend/detail/content.tpl' => 1,
  ),
),false)) {
function content_5eccfd0c28a672_65719903 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16619230565eccfd0c275a14_21178665', 'breadcrumbs_area');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17779549285eccfd0c285777_24150405', "pageContent");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'frontend/index/index.tpl');
}
/* {block 'breadcrumbs_area'} */
class Block_16619230565eccfd0c275a14_21178665 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumbs_area' => 
  array (
    0 => 'Block_16619230565eccfd0c275a14_21178665',
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
                   <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'details'),$_smarty_tpl ) );?>
</h3>
                   <span><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</span>
                   <span class="fa fa-angle-right"></span>
                   <span><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</span>
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
/* {block 'product-detail'} */
class Block_2675862725eccfd0c285f98_26604260 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:frontend/detail/content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block 'product-detail'} */
/* {block "pageContent"} */
class Block_17779549285eccfd0c285777_24150405 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageContent' => 
  array (
    0 => 'Block_17779549285eccfd0c285777_24150405',
  ),
  'product-detail' => 
  array (
    0 => 'Block_2675862725eccfd0c285f98_26604260',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2675862725eccfd0c285f98_26604260', 'product-detail', $this->tplIndex);
?>

<?php
}
}
/* {/block "pageContent"} */
}
