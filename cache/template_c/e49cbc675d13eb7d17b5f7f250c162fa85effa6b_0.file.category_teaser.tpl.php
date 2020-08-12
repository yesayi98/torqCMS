<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-09 13:27:06
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\emotions\components\category_teaser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f06e2ea00b2b4_32140486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e49cbc675d13eb7d17b5f7f250c162fa85effa6b' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\emotions\\components\\category_teaser.tpl',
      1 => 1594286472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f06e2ea00b2b4_32140486 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6405693125f06e2e9f3d0c5_36310321', 'component-select');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "backend/emotions/components/slider.tpl");
}
/* {block 'component-select'} */
class Block_6405693125f06e2e9f3d0c5_36310321 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'component-select' => 
  array (
    0 => 'Block_6405693125f06e2e9f3d0c5_36310321',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="col-12">
    <div class="form-group">
      <div class="card">
        <div class="card-header text-uppercase">Select <?php echo $_smarty_tpl->tpl_vars['component']->value['emotion_type']['module'];?>
</div>
        <div class="card-body">
          <select name="variables[]"  form="component-form" class="form-control">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['component']->value['items'], 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['item']->value['id'],$_smarty_tpl->tpl_vars['component']->value['vars'])) {?>selected<?php }?>>
                <?php if ($_smarty_tpl->tpl_vars['item']->value['name']) {?>
                  <?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
: <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

                <?php } else { ?>
                  <?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
: -empty-name-
                <?php }?>
              </option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </select>
        </div>
      </div>
    </div>
  </div>
<?php
}
}
/* {/block 'component-select'} */
}
