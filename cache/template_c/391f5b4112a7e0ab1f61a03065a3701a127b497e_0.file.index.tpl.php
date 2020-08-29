<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-27 14:10:13
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\reviews\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f479495b48fe2_06806628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '391f5b4112a7e0ab1f61a03065a3701a127b497e' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\reviews\\index.tpl',
      1 => 1598526612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:backend/reviews/table.tpl' => 1,
  ),
),false)) {
function content_5f479495b48fe2_06806628 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1427833375f479495b34a49_75468695', "container-content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "backend/index/index.tpl");
}
/* {block "breadcrump"} */
class Block_19208901425f479495b35e51_41835930 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="col-sm-9">
          <h4 class="page-title">Customer Reviews</h4>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Users</a></li>
            <li class="breadcrumb-item active" aria-current="page">Reviews</li>
          </ol>
        </div>
      <?php
}
}
/* {/block "breadcrump"} */
/* {block "buttons"} */
class Block_4961976625f479495b36d05_04538258 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="col-sm-3">
          <div class="btn-group float-sm-right">
            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/reviews/detail'),$_smarty_tpl ) );?>
" class="btn btn-success waves-effect waves-light m-1"><i class="fa fa-plus pr-2"></i>Add New</a>
          </div>
        </div>
      <?php
}
}
/* {/block "buttons"} */
/* {block "table-list"} */
class Block_17032756885f479495b35616_44335850 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row pt-2 pb-2">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19208901425f479495b35e51_41835930', "breadcrump", $this->tplIndex);
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4961976625f479495b36d05_04538258', "buttons", $this->tplIndex);
?>

    </div>
  <?php
}
}
/* {/block "table-list"} */
/* {block "table-block"} */
class Block_4947354855f479495b3b167_10759516 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="list-container" data-content='true'>
      <?php $_smarty_tpl->_subTemplateRender("file:backend/reviews/table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <div class="row mt-3">
        <div class="col-sm-12 col-md-7">
          <div class="dataTables_paginate paging_simple_numbers" id="default-datatable_paginate">
            <?php echo $_smarty_tpl->tpl_vars['reviews']->value['pagination'];?>

          </div>
        </div>
      </div>
    </div>
  <?php
}
}
/* {/block "table-block"} */
/* {block "container-content"} */
class Block_1427833375f479495b34a49_75468695 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container-content' => 
  array (
    0 => 'Block_1427833375f479495b34a49_75468695',
  ),
  'table-list' => 
  array (
    0 => 'Block_17032756885f479495b35616_44335850',
  ),
  'breadcrump' => 
  array (
    0 => 'Block_19208901425f479495b35e51_41835930',
  ),
  'buttons' => 
  array (
    0 => 'Block_4961976625f479495b36d05_04538258',
  ),
  'table-block' => 
  array (
    0 => 'Block_4947354855f479495b3b167_10759516',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17032756885f479495b35616_44335850', "table-list", $this->tplIndex);
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4947354855f479495b3b167_10759516', "table-block", $this->tplIndex);
?>

<?php
}
}
/* {/block "container-content"} */
}
