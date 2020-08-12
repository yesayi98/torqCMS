<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-09 13:28:57
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\emotions\components\text.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f06e3599b5626_24499889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0219918df5dc310e47fb1e068863597c2ecba3b' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\emotions\\components\\text.tpl',
      1 => 1594286612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f06e3599b5626_24499889 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12754962395f06e3599b3db0_86474056', 'component-select');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "backend/emotions/components/slider.tpl");
}
/* {block 'component-select'} */
class Block_12754962395f06e3599b3db0_86474056 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'component-select' => 
  array (
    0 => 'Block_12754962395f06e3599b3db0_86474056',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="col-12">
    <textarea name="variables" form="component-form" class="form-control description"></textarea>
  </div>
<?php
}
}
/* {/block 'component-select'} */
}
