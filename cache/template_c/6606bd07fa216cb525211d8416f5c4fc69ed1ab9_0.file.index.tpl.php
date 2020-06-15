<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-15 10:23:40
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\orders\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee721fc0b32e6_62340288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6606bd07fa216cb525211d8416f5c4fc69ed1ab9' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\orders\\index.tpl',
      1 => 1588423363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:backend/orders/table.tpl' => 1,
  ),
),false)) {
function content_5ee721fc0b32e6_62340288 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3490097195ee721fc0ab9a3_18726125', "container-content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "backend/index/index.tpl");
}
/* {block "breadcrump"} */
class Block_7905587765ee721fc0ace69_96293831 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="col-sm-9">
          <h4 class="page-title">Order Overview</h4>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Orders</a></li>
            <li class="breadcrumb-item active" aria-current="page">Overview</li>
          </ol>
        </div>
      <?php
}
}
/* {/block "breadcrump"} */
/* {block "buttons"} */
class Block_6676643675ee721fc0adda6_65788235 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="col-sm-3">
          <div class="btn-group float-sm-right">
            <button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Setting</button>
            <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
              <span class="caret"></span>
            </button>
            <div class="dropdown-menu">
              <a href="javaScript:void();" class="dropdown-item">Action</a>
              <a href="javaScript:void();" class="dropdown-item">Another action</a>
              <a href="javaScript:void();" class="dropdown-item">Something else here</a>
              <div class="dropdown-divider"></div>
              <a href="javaScript:void();" class="dropdown-item">Separated link</a>
            </div>
          </div>
        </div>
      <?php
}
}
/* {/block "buttons"} */
/* {block "table-list"} */
class Block_16922674505ee721fc0ac4e9_85699885 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row pt-2 pb-2">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7905587765ee721fc0ace69_96293831', "breadcrump", $this->tplIndex);
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6676643675ee721fc0adda6_65788235', "buttons", $this->tplIndex);
?>

    </div>
  <?php
}
}
/* {/block "table-list"} */
/* {block "table-block"} */
class Block_6613965665ee721fc0aef15_08592205 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:backend/orders/table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block "table-block"} */
/* {block "container-content"} */
class Block_3490097195ee721fc0ab9a3_18726125 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container-content' => 
  array (
    0 => 'Block_3490097195ee721fc0ab9a3_18726125',
  ),
  'table-list' => 
  array (
    0 => 'Block_16922674505ee721fc0ac4e9_85699885',
  ),
  'breadcrump' => 
  array (
    0 => 'Block_7905587765ee721fc0ace69_96293831',
  ),
  'buttons' => 
  array (
    0 => 'Block_6676643675ee721fc0adda6_65788235',
  ),
  'table-block' => 
  array (
    0 => 'Block_6613965665ee721fc0aef15_08592205',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16922674505ee721fc0ac4e9_85699885', "table-list", $this->tplIndex);
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6613965665ee721fc0aef15_08592205', "table-block", $this->tplIndex);
?>

<?php
}
}
/* {/block "container-content"} */
}
