<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-18 12:31:35
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\currencies\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f3b9ff727fd98_46299826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f603033d0e21aee3ca795a7a40411abc6ce90a9' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\currencies\\index.tpl',
      1 => 1597743023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:backend/currencies/table.tpl' => 1,
  ),
),false)) {
function content_5f3b9ff727fd98_46299826 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8435868215f3b9ff7276a15_24535363', "container-content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "backend/index/index.tpl");
}
/* {block "breadcrump"} */
class Block_6307002435f3b9ff7277cd8_94907207 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="col-sm-9">
          <h4 class="page-title">Currencies Overview</h4>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">currencies</a></li>
            <li class="breadcrumb-item active" aria-current="page">Overview</li>
          </ol>
        </div>
      <?php
}
}
/* {/block "breadcrump"} */
/* {block "buttons"} */
class Block_5552587165f3b9ff7278a18_18830001 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="col-sm-3">
          <div class="btn-group float-sm-right">
            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/currencies/detail'),$_smarty_tpl ) );?>
" class="btn btn-success waves-effect waves-light m-1"><i class="fa fa-plus pr-2"></i>Add New</a>
          </div>
        </div>
      <?php
}
}
/* {/block "buttons"} */
/* {block "table-list"} */
class Block_3950583755f3b9ff72774a5_82465837 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row pt-2 pb-2">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6307002435f3b9ff7277cd8_94907207', "breadcrump", $this->tplIndex);
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5552587165f3b9ff7278a18_18830001', "buttons", $this->tplIndex);
?>

    </div>
  <?php
}
}
/* {/block "table-list"} */
/* {block "table-block"} */
class Block_20432499865f3b9ff727b491_69509689 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="list-container" data-content='true'>
      <?php $_smarty_tpl->_subTemplateRender("file:backend/currencies/table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
  <?php
}
}
/* {/block "table-block"} */
/* {block "container-content"} */
class Block_8435868215f3b9ff7276a15_24535363 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container-content' => 
  array (
    0 => 'Block_8435868215f3b9ff7276a15_24535363',
  ),
  'table-list' => 
  array (
    0 => 'Block_3950583755f3b9ff72774a5_82465837',
  ),
  'breadcrump' => 
  array (
    0 => 'Block_6307002435f3b9ff7277cd8_94907207',
  ),
  'buttons' => 
  array (
    0 => 'Block_5552587165f3b9ff7278a18_18830001',
  ),
  'table-block' => 
  array (
    0 => 'Block_20432499865f3b9ff727b491_69509689',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3950583755f3b9ff72774a5_82465837', "table-list", $this->tplIndex);
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20432499865f3b9ff727b491_69509689', "table-block", $this->tplIndex);
?>

<?php
}
}
/* {/block "container-content"} */
}
