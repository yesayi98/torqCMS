<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-18 14:50:10
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\units\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f3bc0726bf536_00999527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18c4797e51ceaee6c357e7fd425f033b6ed36384' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\units\\index.tpl',
      1 => 1597751371,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:backend/units/table.tpl' => 1,
  ),
),false)) {
function content_5f3bc0726bf536_00999527 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2150478095f3bc0726b57f3_38922632', "container-content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "backend/index/index.tpl");
}
/* {block "breadcrump"} */
class Block_526268655f3bc0726b6a43_66585036 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="col-sm-9">
          <h4 class="page-title">Units Overview</h4>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">units</a></li>
            <li class="breadcrumb-item active" aria-current="page">Overview</li>
          </ol>
        </div>
      <?php
}
}
/* {/block "breadcrump"} */
/* {block "buttons"} */
class Block_5734301875f3bc0726b7927_17243470 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="col-sm-3">
          <div class="btn-group float-sm-right">
            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/units/detail'),$_smarty_tpl ) );?>
" class="btn btn-success waves-effect waves-light m-1"><i class="fa fa-plus pr-2"></i>Add New</a>
          </div>
        </div>
      <?php
}
}
/* {/block "buttons"} */
/* {block "table-list"} */
class Block_20180748745f3bc0726b6214_87484447 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row pt-2 pb-2">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_526268655f3bc0726b6a43_66585036', "breadcrump", $this->tplIndex);
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5734301875f3bc0726b7927_17243470', "buttons", $this->tplIndex);
?>

    </div>
  <?php
}
}
/* {/block "table-list"} */
/* {block "table-block"} */
class Block_11469569945f3bc0726ba449_23033061 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="list-container" data-content='true'>
      <?php $_smarty_tpl->_subTemplateRender("file:backend/units/table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
  <?php
}
}
/* {/block "table-block"} */
/* {block "container-content"} */
class Block_2150478095f3bc0726b57f3_38922632 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container-content' => 
  array (
    0 => 'Block_2150478095f3bc0726b57f3_38922632',
  ),
  'table-list' => 
  array (
    0 => 'Block_20180748745f3bc0726b6214_87484447',
  ),
  'breadcrump' => 
  array (
    0 => 'Block_526268655f3bc0726b6a43_66585036',
  ),
  'buttons' => 
  array (
    0 => 'Block_5734301875f3bc0726b7927_17243470',
  ),
  'table-block' => 
  array (
    0 => 'Block_11469569945f3bc0726ba449_23033061',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20180748745f3bc0726b6214_87484447', "table-list", $this->tplIndex);
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11469569945f3bc0726ba449_23033061', "table-block", $this->tplIndex);
?>

<?php
}
}
/* {/block "container-content"} */
}
