<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-19 19:49:43
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\users\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eecde97b51905_67292929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebc47db898e0bd38a6b0a4b248a867a87f4c4fc3' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\users\\index.tpl',
      1 => 1592581492,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:backend/users/table.tpl' => 1,
  ),
),false)) {
function content_5eecde97b51905_67292929 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10299968715eecde97b4a329_71458848', "container-content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "backend/index/index.tpl");
}
/* {block "breadcrump"} */
class Block_17135134535eecde97b4b763_76901642 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="col-sm-9">
          <h4 class="page-title">User Overview</h4>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Users</a></li>
            <li class="breadcrumb-item active" aria-current="page">Overview</li>
          </ol>
        </div>
      <?php
}
}
/* {/block "breadcrump"} */
/* {block "buttons"} */
class Block_12800781475eecde97b4c640_69562798 extends Smarty_Internal_Block
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
class Block_15761830335eecde97b4ae03_36349954 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row pt-2 pb-2">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17135134535eecde97b4b763_76901642', "breadcrump", $this->tplIndex);
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12800781475eecde97b4c640_69562798', "buttons", $this->tplIndex);
?>

    </div>
  <?php
}
}
/* {/block "table-list"} */
/* {block "table-block"} */
class Block_8231025565eecde97b4d7d0_03432958 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="list-container" data-content='true'>
      <?php $_smarty_tpl->_subTemplateRender("file:backend/users/table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
  <?php
}
}
/* {/block "table-block"} */
/* {block "container-content"} */
class Block_10299968715eecde97b4a329_71458848 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container-content' => 
  array (
    0 => 'Block_10299968715eecde97b4a329_71458848',
  ),
  'table-list' => 
  array (
    0 => 'Block_15761830335eecde97b4ae03_36349954',
  ),
  'breadcrump' => 
  array (
    0 => 'Block_17135134535eecde97b4b763_76901642',
  ),
  'buttons' => 
  array (
    0 => 'Block_12800781475eecde97b4c640_69562798',
  ),
  'table-block' => 
  array (
    0 => 'Block_8231025565eecde97b4d7d0_03432958',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15761830335eecde97b4ae03_36349954', "table-list", $this->tplIndex);
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8231025565eecde97b4d7d0_03432958', "table-block", $this->tplIndex);
?>

<?php
}
}
/* {/block "container-content"} */
}
