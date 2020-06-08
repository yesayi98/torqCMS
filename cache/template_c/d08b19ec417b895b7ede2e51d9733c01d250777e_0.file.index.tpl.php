<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-07 12:36:14
  from 'D:\OSPanel\domains\torq\public\frontend\index\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edcb50e7ad151_86768563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd08b19ec417b895b7ede2e51d9733c01d250777e' => 
    array (
      0 => 'D:\\OSPanel\\domains\\torq\\public\\frontend\\index\\index.tpl',
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
function content_5edcb50e7ad151_86768563 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13449002035edcb50e44cda6_97048358', "header");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21021182985edcb50e5e6a35_57409785', 'breadcrumbs_area');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_233743945edcb50e5e7a72_62780229', "pageContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19491412825edcb50e7ab643_23565595', "footer");
?>

<?php }
/* {block "header"} */
class Block_13449002035edcb50e44cda6_97048358 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_13449002035edcb50e44cda6_97048358',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:frontend/index/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "header"} */
/* {block 'breadcrumbs_area'} */
class Block_21021182985edcb50e5e6a35_57409785 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumbs_area' => 
  array (
    0 => 'Block_21021182985edcb50e5e6a35_57409785',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'breadcrumbs_area'} */
/* {block "pageContent"} */
class Block_233743945edcb50e5e7a72_62780229 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageContent' => 
  array (
    0 => 'Block_233743945edcb50e5e7a72_62780229',
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
class Block_19491412825edcb50e7ab643_23565595 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_19491412825edcb50e7ab643_23565595',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:frontend/index/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "footer"} */
}
