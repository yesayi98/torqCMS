<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-22 19:02:51
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\blog\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef0c81b8fa6f3_56406283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0093870f8c807b8197249dbb118ebb3b619de5e4' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\blog\\index.tpl',
      1 => 1592838170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:backend/blog/table.tpl' => 1,
  ),
),false)) {
function content_5ef0c81b8fa6f3_56406283 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3135839735ef0c81b8f05d0_65165917', "breadcrump");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13135441225ef0c81b8f31e9_14999201', "table-block");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "backend/articles/index.tpl");
}
/* {block "breadcrump"} */
class Block_3135839735ef0c81b8f05d0_65165917 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrump' => 
  array (
    0 => 'Block_3135839735ef0c81b8f05d0_65165917',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="col-sm-9">
    <h4 class="page-title">Blog Overview</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javaScript:void();">Blog</a></li>
      <li class="breadcrumb-item active" aria-current="page">Overview</li>
    </ol>
  </div>
<?php
}
}
/* {/block "breadcrump"} */
/* {block "table-block"} */
class Block_13135441225ef0c81b8f31e9_14999201 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'table-block' => 
  array (
    0 => 'Block_13135441225ef0c81b8f31e9_14999201',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="list-container" data-content='true'>
    <?php $_smarty_tpl->_subTemplateRender("file:backend/blog/table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </div>
<?php
}
}
/* {/block "table-block"} */
}
