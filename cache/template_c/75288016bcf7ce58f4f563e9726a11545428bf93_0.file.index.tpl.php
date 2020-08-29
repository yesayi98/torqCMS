<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-18 15:15:11
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\payments\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f3bc64fdddbf2_38013560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75288016bcf7ce58f4f563e9726a11545428bf93' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\payments\\index.tpl',
      1 => 1597752566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:backend/payments/table.tpl' => 1,
  ),
),false)) {
function content_5f3bc64fdddbf2_38013560 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7059870805f3bc64fdd4945_88075318', "container-content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "backend/index/index.tpl");
}
/* {block "breadcrump"} */
class Block_20685190265f3bc64fdd5b99_34345879 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="col-sm-9">
          <h4 class="page-title">payments Overview</h4>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">payments</a></li>
            <li class="breadcrumb-item active" aria-current="page">Overview</li>
          </ol>
        </div>
      <?php
}
}
/* {/block "breadcrump"} */
/* {block "buttons"} */
class Block_17879330125f3bc64fdd6af5_01000252 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="col-sm-3">
          <div class="btn-group float-sm-right">
            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/payments/detail'),$_smarty_tpl ) );?>
" class="btn btn-success waves-effect waves-light m-1"><i class="fa fa-plus pr-2"></i>Add New</a>
          </div>
        </div>
      <?php
}
}
/* {/block "buttons"} */
/* {block "table-list"} */
class Block_14302377125f3bc64fdd5372_98710652 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row pt-2 pb-2">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20685190265f3bc64fdd5b99_34345879', "breadcrump", $this->tplIndex);
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17879330125f3bc64fdd6af5_01000252', "buttons", $this->tplIndex);
?>

    </div>
  <?php
}
}
/* {/block "table-list"} */
/* {block "table-block"} */
class Block_17873868345f3bc64fdd9795_76221674 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="list-container" data-content='true'>
      <?php $_smarty_tpl->_subTemplateRender("file:backend/payments/table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
  <?php
}
}
/* {/block "table-block"} */
/* {block "container-content"} */
class Block_7059870805f3bc64fdd4945_88075318 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container-content' => 
  array (
    0 => 'Block_7059870805f3bc64fdd4945_88075318',
  ),
  'table-list' => 
  array (
    0 => 'Block_14302377125f3bc64fdd5372_98710652',
  ),
  'breadcrump' => 
  array (
    0 => 'Block_20685190265f3bc64fdd5b99_34345879',
  ),
  'buttons' => 
  array (
    0 => 'Block_17879330125f3bc64fdd6af5_01000252',
  ),
  'table-block' => 
  array (
    0 => 'Block_17873868345f3bc64fdd9795_76221674',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14302377125f3bc64fdd5372_98710652', "table-list", $this->tplIndex);
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17873868345f3bc64fdd9795_76221674', "table-block", $this->tplIndex);
?>

<?php
}
}
/* {/block "container-content"} */
}
