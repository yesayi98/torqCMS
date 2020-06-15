<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-15 09:17:16
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\index\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee7126c272504_49808902',
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
function content_5ee7126c272504_49808902 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19619982645ee7126c261f24_34708873', "header");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12420961285ee7126c267b54_77606476', 'breadcrumbs_area');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13981278545ee7126c268b20_23233645', "pageContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15580319035ee7126c270205_45691397', "footer");
?>

<?php }
/* {block "header"} */
class Block_19619982645ee7126c261f24_34708873 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_19619982645ee7126c261f24_34708873',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:frontend/index/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "header"} */
/* {block 'breadcrumbs_area'} */
class Block_12420961285ee7126c267b54_77606476 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumbs_area' => 
  array (
    0 => 'Block_12420961285ee7126c267b54_77606476',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'breadcrumbs_area'} */
/* {block "pageContent"} */
class Block_13981278545ee7126c268b20_23233645 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageContent' => 
  array (
    0 => 'Block_13981278545ee7126c268b20_23233645',
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
class Block_15580319035ee7126c270205_45691397 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_15580319035ee7126c270205_45691397',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:frontend/index/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "footer"} */
}
