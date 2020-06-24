<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-22 19:03:27
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\advertisings\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef0c83f37f841_41225643',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '810b409088ed99d2102847464788fe85a30bf14b' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\advertisings\\index.tpl',
      1 => 1592838141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:backend/advertisings/table.tpl' => 1,
  ),
),false)) {
function content_5ef0c83f37f841_41225643 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12540581175ef0c83f376493_62556818', "breadcrump");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1001556345ef0c83f377670_20250827', "table-block");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "backend/articles/index.tpl");
}
/* {block "breadcrump"} */
class Block_12540581175ef0c83f376493_62556818 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrump' => 
  array (
    0 => 'Block_12540581175ef0c83f376493_62556818',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="col-sm-9">
    <h4 class="page-title">Advertising Overview</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javaScript:void();">Advertising</a></li>
      <li class="breadcrumb-item active" aria-current="page">Overview</li>
    </ol>
  </div>
<?php
}
}
/* {/block "breadcrump"} */
/* {block "table-block"} */
class Block_1001556345ef0c83f377670_20250827 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'table-block' => 
  array (
    0 => 'Block_1001556345ef0c83f377670_20250827',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="list-container" data-content='true'>
    <?php $_smarty_tpl->_subTemplateRender("file:backend/advertisings/table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </div>
<?php
}
}
/* {/block "table-block"} */
}
