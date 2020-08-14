<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-14 18:46:19
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\suppliers\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f36b1cbc4c079_84873385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79ffbb936151fc8dc5ce873eeed490b43b87984e' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\suppliers\\index.tpl',
      1 => 1597416894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:backend/suppliers/table.tpl' => 1,
  ),
),false)) {
function content_5f36b1cbc4c079_84873385 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5033750035f36b1cbb72bc1_66405031', "container-content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "backend/index/index.tpl");
}
/* {block "breadcrump"} */
class Block_4036260035f36b1cbb74825_27030553 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="col-sm-9">
          <h4 class="page-title">Suppliers Overview</h4>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Suppliers</a></li>
            <li class="breadcrumb-item active" aria-current="page">Overview</li>
          </ol>
        </div>
      <?php
}
}
/* {/block "breadcrump"} */
/* {block "buttons"} */
class Block_13329973045f36b1cbb75c21_92017479 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="col-sm-3">
          <div class="btn-group float-sm-right">
            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/suppliers/detail'),$_smarty_tpl ) );?>
" class="btn btn-success waves-effect waves-light m-1"><i class="fa fa-plus pr-2"></i>Add New</a>
          </div>
        </div>
      <?php
}
}
/* {/block "buttons"} */
/* {block "table-list"} */
class Block_1219399945f36b1cbb73d38_47916405 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row pt-2 pb-2">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4036260035f36b1cbb74825_27030553', "breadcrump", $this->tplIndex);
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13329973045f36b1cbb75c21_92017479', "buttons", $this->tplIndex);
?>

    </div>
  <?php
}
}
/* {/block "table-list"} */
/* {block "table-block"} */
class Block_2003502045f36b1cbbbc905_06174928 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="list-container" data-content='true'>
      <?php $_smarty_tpl->_subTemplateRender("file:backend/suppliers/table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
  <?php
}
}
/* {/block "table-block"} */
/* {block "container-content"} */
class Block_5033750035f36b1cbb72bc1_66405031 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container-content' => 
  array (
    0 => 'Block_5033750035f36b1cbb72bc1_66405031',
  ),
  'table-list' => 
  array (
    0 => 'Block_1219399945f36b1cbb73d38_47916405',
  ),
  'breadcrump' => 
  array (
    0 => 'Block_4036260035f36b1cbb74825_27030553',
  ),
  'buttons' => 
  array (
    0 => 'Block_13329973045f36b1cbb75c21_92017479',
  ),
  'table-block' => 
  array (
    0 => 'Block_2003502045f36b1cbbbc905_06174928',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1219399945f36b1cbb73d38_47916405', "table-list", $this->tplIndex);
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2003502045f36b1cbbbc905_06174928', "table-block", $this->tplIndex);
?>

<?php
}
}
/* {/block "container-content"} */
}
