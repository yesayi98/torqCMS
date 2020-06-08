<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-08 10:00:52
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\emotions\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edde224f2f834_18102344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81a5dea8b1f1cb282d74ab7ee68b55dc93a688c9' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\emotions\\index.tpl',
      1 => 1591599611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edde224f2f834_18102344 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2043691725edde224f07e99_40688253', 'emotion-components');
?>

<?php }
/* {block 'emotion-component'} */
class Block_20181620865edde224f185d0_74574520 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['emotion']->value['components'], 'component');
$_smarty_tpl->tpl_vars['component']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['component']->value) {
$_smarty_tpl->tpl_vars['component']->do_else = false;
?>
            <div class="col-xl-<?php echo $_smarty_tpl->tpl_vars['component']->value['col_xl'];?>
 col-lg-<?php echo $_smarty_tpl->tpl_vars['component']->value['col_lg'];?>
 col-md-<?php echo $_smarty_tpl->tpl_vars['component']->value['col_md'];?>
 col-sm-<?php echo $_smarty_tpl->tpl_vars['component']->value['col_sm'];?>
 col-xs-<?php echo $_smarty_tpl->tpl_vars['component']->value['col_xs'];?>
 col-<?php echo $_smarty_tpl->tpl_vars['component']->value['cols'];?>
">
              <?php $_smarty_tpl->_assignInScope('height', $_smarty_tpl->tpl_vars['component']->value['rows']*$_smarty_tpl->tpl_vars['emotion']->value['row_height']);?>
              <?php if ($_smarty_tpl->tpl_vars['height']->value == 0) {?>
                <?php $_smarty_tpl->_assignInScope('height', 'auto');?>
              <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('height', ($_smarty_tpl->tpl_vars['height']->value).('px'));?>
              <?php }?>
              <div class="emotion-row" style="height: <?php echo $_smarty_tpl->tpl_vars['height']->value;?>
">
                <?php $_smarty_tpl->_assignInScope('template', ("frontend/").($_smarty_tpl->tpl_vars['component']->value['emotion_type']['template']));?>
                <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['template']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['component']->value['content']), 0, true);
?>
              </div>
            </div>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php
}
}
/* {/block 'emotion-component'} */
/* {block 'emotion-components'} */
class Block_2043691725edde224f07e99_40688253 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'emotion-components' => 
  array (
    0 => 'Block_2043691725edde224f07e99_40688253',
  ),
  'emotion-component' => 
  array (
    0 => 'Block_20181620865edde224f185d0_74574520',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="emotion-container">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['emotions']->value, 'emotion');
$_smarty_tpl->tpl_vars['emotion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['emotion']->value) {
$_smarty_tpl->tpl_vars['emotion']->do_else = false;
?>
    <div class="<?php echo $_smarty_tpl->tpl_vars['emotion']->value['class'];?>
">
      <div class="container<?php if ($_smarty_tpl->tpl_vars['emotion']->value['full_screen']) {?>-full-screen<?php }?>">
        <div class="row<?php if ($_smarty_tpl->tpl_vars['emotion']->value['full_screen']) {?>-full-screen<?php }?>">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20181620865edde224f185d0_74574520', 'emotion-component', $this->tplIndex);
?>

        </div>
      </div>
    </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
<?php
}
}
/* {/block 'emotion-components'} */
}
