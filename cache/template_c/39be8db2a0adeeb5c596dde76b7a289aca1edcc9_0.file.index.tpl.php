<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-14 01:01:02
  from 'D:\OSPanel\domains\torq\public\frontend\error\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee54c9ecfbdb2_63183186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39be8db2a0adeeb5c596dde76b7a289aca1edcc9' => 
    array (
      0 => 'D:\\OSPanel\\domains\\torq\\public\\frontend\\error\\index.tpl',
      1 => 1591636513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee54c9ecfbdb2_63183186 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18975579225ee54c9ecf5da6_81786244', "pageContent");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'frontend/index/index.tpl');
}
/* {block "pageContent"} */
class Block_18975579225ee54c9ecf5da6_81786244 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageContent' => 
  array (
    0 => 'Block_18975579225ee54c9ecf5da6_81786244',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="breadcrumbs_area mb-5" style="height: auto">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="breadcrumb_content">
                    <div class="page-title mt-5 mb-5">
                      <h1>ERROR PAGE</h1>
                    </div>
                    <div class="page-content mb-5">
                      <p class="big-text"><?php echo $_smarty_tpl->tpl_vars['code']->value;?>
</p>
                    </div>
                    <div class="page-content mb-5">
                      <p class="text-middle"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
<?php
}
}
/* {/block "pageContent"} */
}
