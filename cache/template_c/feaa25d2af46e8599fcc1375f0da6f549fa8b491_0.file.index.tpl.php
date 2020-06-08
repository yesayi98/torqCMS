<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-31 21:08:38
  from 'E:\OSPanel\domains\torq\public\frontend\index\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed3f2a6d6a912_54517381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'feaa25d2af46e8599fcc1375f0da6f549fa8b491' => 
    array (
      0 => 'E:\\OSPanel\\domains\\torq\\public\\frontend\\index\\index.tpl',
      1 => 1590479542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:frontend/index/header.tpl' => 1,
    'file:frontend/index/footer.tpl' => 1,
  ),
),false)) {
function content_5ed3f2a6d6a912_54517381 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13887346815ed3f2a67ff703_58298277', "header");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20006764465ed3f2a69fd2f0_41920593', 'breadcrumbs_area');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4084998655ed3f2a69fe392_66406236', "pageContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8326671895ed3f2a6d69263_94161997', "footer");
?>

<?php }
/* {block "header"} */
class Block_13887346815ed3f2a67ff703_58298277 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_13887346815ed3f2a67ff703_58298277',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:frontend/index/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "header"} */
/* {block 'breadcrumbs_area'} */
class Block_20006764465ed3f2a69fd2f0_41920593 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumbs_area' => 
  array (
    0 => 'Block_20006764465ed3f2a69fd2f0_41920593',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'breadcrumbs_area'} */
/* {block "pageContent"} */
class Block_4084998655ed3f2a69fe392_66406236 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageContent' => 
  array (
    0 => 'Block_4084998655ed3f2a69fe392_66406236',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['has_emotions']->value) {?>
    <div class="emotion-section">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['action'][0], array( array('module'=>"frontend",'controller'=>"emotions",'action'=>'index'),$_smarty_tpl ) );?>

    </div>
  <?php }?>

<?php
}
}
/* {/block "pageContent"} */
/* {block "footer"} */
class Block_8326671895ed3f2a6d69263_94161997 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_8326671895ed3f2a6d69263_94161997',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:frontend/index/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "footer"} */
}
