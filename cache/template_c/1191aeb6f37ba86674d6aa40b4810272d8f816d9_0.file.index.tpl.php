<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-19 19:03:52
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\emotions\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eecd3d8c4cb13_52186236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1191aeb6f37ba86674d6aa40b4810272d8f816d9' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\emotions\\index.tpl',
      1 => 1591767008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:backend/emotions/table.tpl' => 1,
  ),
),false)) {
function content_5eecd3d8c4cb13_52186236 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2230109905eecd3d8bc3d60_87153751', "container-content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "backend/index/index.tpl");
}
/* {block "breadcrump"} */
class Block_21438057265eecd3d8bc52a7_84331778 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="col-sm-9">
          <h4 class="page-title">Emotions</h4>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Content</a></li>
            <li class="breadcrumb-item active" aria-current="page">Emotions</li>
          </ol>
        </div>
      <?php
}
}
/* {/block "breadcrump"} */
/* {block "buttons"} */
class Block_487807515eecd3d8bc62c9_42184948 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php
}
}
/* {/block "buttons"} */
/* {block "table-list"} */
class Block_5129186345eecd3d8bc4910_15233476 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row pt-2 pb-2">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21438057265eecd3d8bc52a7_84331778', "breadcrump", $this->tplIndex);
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_487807515eecd3d8bc62c9_42184948', "buttons", $this->tplIndex);
?>

    </div>
  <?php
}
}
/* {/block "table-list"} */
/* {block "table-block"} */
class Block_12947090545eecd3d8bc75a3_37938071 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:backend/emotions/table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block "table-block"} */
/* {block "container-content"} */
class Block_2230109905eecd3d8bc3d60_87153751 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container-content' => 
  array (
    0 => 'Block_2230109905eecd3d8bc3d60_87153751',
  ),
  'table-list' => 
  array (
    0 => 'Block_5129186345eecd3d8bc4910_15233476',
  ),
  'breadcrump' => 
  array (
    0 => 'Block_21438057265eecd3d8bc52a7_84331778',
  ),
  'buttons' => 
  array (
    0 => 'Block_487807515eecd3d8bc62c9_42184948',
  ),
  'table-block' => 
  array (
    0 => 'Block_12947090545eecd3d8bc75a3_37938071',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5129186345eecd3d8bc4910_15233476', "table-list", $this->tplIndex);
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12947090545eecd3d8bc75a3_37938071', "table-block", $this->tplIndex);
?>




<?php
}
}
/* {/block "container-content"} */
}
