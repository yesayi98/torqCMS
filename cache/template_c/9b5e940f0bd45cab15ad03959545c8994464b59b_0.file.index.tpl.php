<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-31 21:20:27
  from 'E:\OSPanel\domains\torq\public\backend\articles\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed3f56be8c0e2_39200225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b5e940f0bd45cab15ad03959545c8994464b59b' => 
    array (
      0 => 'E:\\OSPanel\\domains\\torq\\public\\backend\\articles\\index.tpl',
      1 => 1587378265,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:backend/articles/table.tpl' => 1,
  ),
),false)) {
function content_5ed3f56be8c0e2_39200225 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4800197645ed3f56be81578_50209992', "container-content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "backend/index/index.tpl");
}
/* {block "breadcrump"} */
class Block_4096418425ed3f56be83049_66530134 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="col-sm-9">
          <h4 class="page-title">Article Overview</h4>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Articles</a></li>
            <li class="breadcrumb-item active" aria-current="page">Overview</li>
          </ol>
        </div>
      <?php
}
}
/* {/block "breadcrump"} */
/* {block "buttons"} */
class Block_1772735235ed3f56be84656_43083748 extends Smarty_Internal_Block
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
class Block_14616305785ed3f56be82530_87284429 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row pt-2 pb-2">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4096418425ed3f56be83049_66530134', "breadcrump", $this->tplIndex);
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1772735235ed3f56be84656_43083748', "buttons", $this->tplIndex);
?>

    </div>
  <?php
}
}
/* {/block "table-list"} */
/* {block "table-block"} */
class Block_15488855855ed3f56be85a94_03926017 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:backend/articles/table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block "table-block"} */
/* {block "container-content"} */
class Block_4800197645ed3f56be81578_50209992 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container-content' => 
  array (
    0 => 'Block_4800197645ed3f56be81578_50209992',
  ),
  'table-list' => 
  array (
    0 => 'Block_14616305785ed3f56be82530_87284429',
  ),
  'breadcrump' => 
  array (
    0 => 'Block_4096418425ed3f56be83049_66530134',
  ),
  'buttons' => 
  array (
    0 => 'Block_1772735235ed3f56be84656_43083748',
  ),
  'table-block' => 
  array (
    0 => 'Block_15488855855ed3f56be85a94_03926017',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14616305785ed3f56be82530_87284429', "table-list", $this->tplIndex);
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15488855855ed3f56be85a94_03926017', "table-block", $this->tplIndex);
?>




<?php
}
}
/* {/block "container-content"} */
}
