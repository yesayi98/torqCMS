<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-18 11:41:01
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\languages\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f3b941df09d95_78579043',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '434d6cc8b3b5c585a1ded052a4a9a0a81e130789' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\languages\\index.tpl',
      1 => 1597740010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:backend/languages/table.tpl' => 1,
  ),
),false)) {
function content_5f3b941df09d95_78579043 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19915950815f3b941de43542_06927421', "container-content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "backend/index/index.tpl");
}
/* {block "breadcrump"} */
class Block_17228575055f3b941de453e8_17365344 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="col-sm-9">
          <h4 class="page-title">Languages Overview</h4>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Languages</a></li>
            <li class="breadcrumb-item active" aria-current="page">Overview</li>
          </ol>
        </div>
      <?php
}
}
/* {/block "breadcrump"} */
/* {block "buttons"} */
class Block_17360181895f3b941de46925_28153392 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="col-sm-3">
          <div class="btn-group float-sm-right">
            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/languages/detail'),$_smarty_tpl ) );?>
" class="btn btn-success waves-effect waves-light m-1"><i class="fa fa-plus pr-2"></i>Add New</a>
          </div>
        </div>
      <?php
}
}
/* {/block "buttons"} */
/* {block "table-list"} */
class Block_8126544495f3b941de44b35_13814158 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row pt-2 pb-2">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17228575055f3b941de453e8_17365344', "breadcrump", $this->tplIndex);
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17360181895f3b941de46925_28153392', "buttons", $this->tplIndex);
?>

    </div>
  <?php
}
}
/* {/block "table-list"} */
/* {block "table-block"} */
class Block_4010724705f3b941de89047_43023845 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="list-container" data-content='true'>
      <?php $_smarty_tpl->_subTemplateRender("file:backend/languages/table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
  <?php
}
}
/* {/block "table-block"} */
/* {block "container-content"} */
class Block_19915950815f3b941de43542_06927421 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container-content' => 
  array (
    0 => 'Block_19915950815f3b941de43542_06927421',
  ),
  'table-list' => 
  array (
    0 => 'Block_8126544495f3b941de44b35_13814158',
  ),
  'breadcrump' => 
  array (
    0 => 'Block_17228575055f3b941de453e8_17365344',
  ),
  'buttons' => 
  array (
    0 => 'Block_17360181895f3b941de46925_28153392',
  ),
  'table-block' => 
  array (
    0 => 'Block_4010724705f3b941de89047_43023845',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8126544495f3b941de44b35_13814158', "table-list", $this->tplIndex);
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4010724705f3b941de89047_43023845', "table-block", $this->tplIndex);
?>

<?php
}
}
/* {/block "container-content"} */
}
