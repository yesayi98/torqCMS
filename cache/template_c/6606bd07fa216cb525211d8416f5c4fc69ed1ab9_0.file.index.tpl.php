<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-02 15:44:04
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\orders\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ead6b14cd8f26_74669651',
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
function content_5ead6b14cd8f26_74669651 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20023476315ead6b14cd08f6_62003309', "container-content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "backend/index/index.tpl");
}
/* {block "breadcrump"} */
class Block_16056027385ead6b14cd2305_47056578 extends Smarty_Internal_Block
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
class Block_4567759335ead6b14cd3458_00731988 extends Smarty_Internal_Block
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
class Block_3943914305ead6b14cd1958_32954782 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row pt-2 pb-2">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16056027385ead6b14cd2305_47056578', "breadcrump", $this->tplIndex);
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4567759335ead6b14cd3458_00731988', "buttons", $this->tplIndex);
?>

    </div>
  <?php
}
}
/* {/block "table-list"} */
/* {block "table-block"} */
class Block_16041013015ead6b14cd47a7_96839489 extends Smarty_Internal_Block
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
class Block_20023476315ead6b14cd08f6_62003309 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container-content' => 
  array (
    0 => 'Block_20023476315ead6b14cd08f6_62003309',
  ),
  'table-list' => 
  array (
    0 => 'Block_3943914305ead6b14cd1958_32954782',
  ),
  'breadcrump' => 
  array (
    0 => 'Block_16056027385ead6b14cd2305_47056578',
  ),
  'buttons' => 
  array (
    0 => 'Block_4567759335ead6b14cd3458_00731988',
  ),
  'table-block' => 
  array (
    0 => 'Block_16041013015ead6b14cd47a7_96839489',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3943914305ead6b14cd1958_32954782', "table-list", $this->tplIndex);
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16041013015ead6b14cd47a7_96839489', "table-block", $this->tplIndex);
?>

<?php
}
}
/* {/block "container-content"} */
}
