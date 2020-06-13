<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-10 08:30:41
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\emotions\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee070015b0e74_11747755',
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
function content_5ee070015b0e74_11747755 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10416181255ee070015a8c68_52320146', "container-content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "backend/index/index.tpl");
}
/* {block "breadcrump"} */
class Block_20302534835ee070015aa3b9_20727786 extends Smarty_Internal_Block
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
class Block_5056280895ee070015ab348_10223905 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php
}
}
/* {/block "buttons"} */
/* {block "table-list"} */
class Block_7716526265ee070015a9953_15240494 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row pt-2 pb-2">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20302534835ee070015aa3b9_20727786', "breadcrump", $this->tplIndex);
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5056280895ee070015ab348_10223905', "buttons", $this->tplIndex);
?>

    </div>
  <?php
}
}
/* {/block "table-list"} */
/* {block "table-block"} */
class Block_14746432805ee070015ac444_51533802 extends Smarty_Internal_Block
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
class Block_10416181255ee070015a8c68_52320146 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container-content' => 
  array (
    0 => 'Block_10416181255ee070015a8c68_52320146',
  ),
  'table-list' => 
  array (
    0 => 'Block_7716526265ee070015a9953_15240494',
  ),
  'breadcrump' => 
  array (
    0 => 'Block_20302534835ee070015aa3b9_20727786',
  ),
  'buttons' => 
  array (
    0 => 'Block_5056280895ee070015ab348_10223905',
  ),
  'table-block' => 
  array (
    0 => 'Block_14746432805ee070015ac444_51533802',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7716526265ee070015a9953_15240494', "table-list", $this->tplIndex);
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14746432805ee070015ac444_51533802', "table-block", $this->tplIndex);
?>




<?php
}
}
/* {/block "container-content"} */
}
