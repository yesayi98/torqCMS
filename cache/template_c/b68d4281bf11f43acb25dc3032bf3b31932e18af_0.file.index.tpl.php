<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-26 11:27:23
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\index\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eccd2eb0462e3_90051572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b68d4281bf11f43acb25dc3032bf3b31932e18af' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\index\\index.tpl',
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
function content_5eccd2eb0462e3_90051572 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5880766905eccd2eae119c8_61015839', "header");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3700646995eccd2eae956f5_56567140', 'breadcrumbs_area');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15215339505eccd2eae96639_30041392', "pageContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4093685445eccd2eb044f95_46161126', "footer");
?>

<?php }
/* {block "header"} */
class Block_5880766905eccd2eae119c8_61015839 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_5880766905eccd2eae119c8_61015839',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:frontend/index/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "header"} */
/* {block 'breadcrumbs_area'} */
class Block_3700646995eccd2eae956f5_56567140 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumbs_area' => 
  array (
    0 => 'Block_3700646995eccd2eae956f5_56567140',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'breadcrumbs_area'} */
/* {block "pageContent"} */
class Block_15215339505eccd2eae96639_30041392 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageContent' => 
  array (
    0 => 'Block_15215339505eccd2eae96639_30041392',
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
class Block_4093685445eccd2eb044f95_46161126 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_4093685445eccd2eb044f95_46161126',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:frontend/index/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "footer"} */
}
