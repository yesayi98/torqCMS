<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-31 22:33:36
  from 'E:\OSPanel\domains\torq\public\frontend\error\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed40690618c86_53069281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cbdd0744b9e6f814327d7dc25f5cd9d379231e4' => 
    array (
      0 => 'E:\\OSPanel\\domains\\torq\\public\\frontend\\error\\index.tpl',
      1 => 1590590905,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed40690618c86_53069281 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1672238045ed4069059bf85_37369098', "pageContent");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'frontend/index/index.tpl');
}
/* {block "pageContent"} */
class Block_1672238045ed4069059bf85_37369098 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageContent' => 
  array (
    0 => 'Block_1672238045ed4069059bf85_37369098',
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
                      <p class="big-text">404</p>
                    </div>
                    <div class="page-content mb-5">
                      <p class="text-middle">The page you requested not found</p>
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
