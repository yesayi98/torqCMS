<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-09 12:15:31
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\emotions\components\slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f06d22307b588_47786586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5549aa97acce4d45247d8366ba65f0e921983e72' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\emotions\\components\\slider.tpl',
      1 => 1594282516,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f06d22307b588_47786586 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!--slider area start-->
<div class="content" data-content='true'>
  <div class="form-group">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21158049625f06d223062071_75727590', "component-form");
?>

  </div>
</div>
<!--slider area end-->
<?php }
/* {block 'component-select'} */
class Block_6769866845f06d22306a463_78206740 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="col-12">
              <div class="form-group">
                <div class="card">
                  <div class="card-header text-uppercase">Select <?php echo $_smarty_tpl->tpl_vars['component']->value['emotion_type']['module'];?>
</div>
                  <div class="card-body">
                    <select name="variables[]"  form="component-form" class="multi-select" multiple="multiple" id="component-multi-select">
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
/* {block "component-form"} */
class Block_21158049625f06d223062071_75727590 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'component-form' => 
  array (
    0 => 'Block_21158049625f06d223062071_75727590',
  ),
  'component-select' => 
  array (
    0 => 'Block_6769866845f06d22306a463_78206740',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="row">
          <label class="form-label col-12">
            <span>Title</span>
            <input type="text" name="title" form="component-form" value="<?php echo $_smarty_tpl->tpl_vars['component']->value['title'];?>
" class="form-control">
          </label>
          <label class="form-label col-md-4 col-sm-6 col-12">
            <span>col-xl</span>
            <input type="number" name="col_xl" form="component-form" value="<?php echo $_smarty_tpl->tpl_vars['component']->value['col_xl'];?>
" class="form-control">
          </label>
          <label class="form-label col-md-4 col-sm-6 col-12">
            <span>col-lg</span>
            <input type="number" name="col_lg" form="component-form" value="<?php echo $_smarty_tpl->tpl_vars['component']->value['col_lg'];?>
" class="form-control">
          </label>
          <label class="form-label col-md-4 col-sm-6 col-12">
            <span>col-md</span>
            <input type="number" name="col_md" form="component-form" value="<?php echo $_smarty_tpl->tpl_vars['component']->value['col_md'];?>
" class="form-control">
          </label>
          <label class="form-label col-md-4 col-sm-6 col-12">
            <span>col-sm</span>
            <input type="number" name="col_sm" form="component-form" value="<?php echo $_smarty_tpl->tpl_vars['component']->value['col_sm'];?>
" class="form-control">
          </label>
          <label class="form-label col-md-4 col-sm-6 col-12">
            <span>col-xs</span>
            <input type="number" name="col_xs" form="component-form" value="<?php echo $_smarty_tpl->tpl_vars['component']->value['col_xs'];?>
" class="form-control">
          </label>
          <label class="form-label col-md-4 col-sm-6 col-12">
            <span>col</span>
            <input type="number" name="cols" form="component-form" value="<?php echo $_smarty_tpl->tpl_vars['component']->value['cols'];?>
" class="form-control">
          </label>
          <label class="form-label col-12">
            <span>row</span>
            <input type="number" name="rows" form="component-form" value="<?php echo $_smarty_tpl->tpl_vars['component']->value['rows'];?>
" class="form-control">
          </label>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6769866845f06d22306a463_78206740', 'component-select', $this->tplIndex);
?>

          <input type="hidden" name="emotion_id" form="component-form" value="<?php echo $_smarty_tpl->tpl_vars['component']->value['emotion_id'];?>
">
          <input type="hidden" name="type" form="component-form" value="<?php echo $_smarty_tpl->tpl_vars['component']->value['type'];?>
">
          <input type="hidden" name="id" form="component-form" value="<?php echo $_smarty_tpl->tpl_vars['component']->value['id'];?>
">
        </div>
    <?php
}
}
/* {/block "component-form"} */
}
