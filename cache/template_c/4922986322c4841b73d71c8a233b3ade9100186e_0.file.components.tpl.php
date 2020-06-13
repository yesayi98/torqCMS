<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-10 10:54:25
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\emotions\components.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee091b159f2e8_65560043',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4922986322c4841b73d71c8a233b3ade9100186e' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\emotions\\components.tpl',
      1 => 1591775564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee091b159f2e8_65560043 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4493526245ee091b1576284_13830946', 'emotion-component');
?>

<?php }
/* {block 'emotion-component'} */
class Block_4493526245ee091b1576284_13830946 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'emotion-component' => 
  array (
    0 => 'Block_4493526245ee091b1576284_13830946',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">
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
 mb-3">
      <?php if (!$_smarty_tpl->tpl_vars['component']->value['rows']) {?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['component']) ? $_smarty_tpl->tpl_vars['component']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['rows'] = 4;
$_smarty_tpl->_assignInScope('component', $_tmp_array);?>
      <?php }?>
      <?php $_smarty_tpl->_assignInScope('height', $_smarty_tpl->tpl_vars['component']->value['rows']*$_smarty_tpl->tpl_vars['emotion']->value['row_height']);?>
      <?php if ($_smarty_tpl->tpl_vars['height']->value == 0) {?>
        <?php $_smarty_tpl->_assignInScope('height', 'auto');?>
      <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('height', ($_smarty_tpl->tpl_vars['height']->value).('px'));?>
      <?php }?>
      <div class="emotion-component card" style="height: <?php echo $_smarty_tpl->tpl_vars['height']->value;?>
">
        <div class="card-body">
          <div class="row w-100">
            <div class="emotion-type d-flex justify-content-center col-12">
              <h3><?php echo $_smarty_tpl->tpl_vars['component']->value['emotion_type']['name'];?>
</h3>
            </div>
            <div class="emotion-action d-flex justify-content-center col-12">
              <div class="m-3">
                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/emotions/componentDetail'),$_smarty_tpl ) );?>
" data-value="<?php echo $_smarty_tpl->tpl_vars['component']->value['values'];?>
" class="btn btn-success">Change</a>
              </div>
              <div class="m-3">
                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/emotions/componentDelete'),$_smarty_tpl ) );?>
" data-value="<?php echo $_smarty_tpl->tpl_vars['component']->value['id'];?>
" class="btn btn-danger">Delete</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <div class="col-12">
    <div class="emotion-component card">
      <div class="card-body">
        <form class="emotion-detail" data-ajaxsend=true action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/emotions/save'),$_smarty_tpl ) );?>
" method="post">
          <?php if ($_smarty_tpl->tpl_vars['emotion']->value) {?>
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['emotion']->value['id'];?>
">
          <?php }?>
          <div class="row">
            <div class="col-12">
              <div class="form-group row">
                <label class="col-12 col-form-label">title</label>
                <div class="col-12">
                  <input type="text" name="title" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['component']->value['title'];?>
">
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group row">
                <label class="col-12 col-form-label">type</label>
                <div class="col-12">
                  <select class="form-control" name="type">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['emotionTypes']->value, 'type');
$_smarty_tpl->tpl_vars['type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['name'];?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group row">
                <label class="col-12 col-form-label">col_xl</label>
                <div class="col-12">
                  <input type="number" name="col_xl" class="form-control">
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group row">
                <label class="col-12 col-form-label">col_lg</label>
                <div class="col-12">
                  <input type="number" name="col_lg" class="form-control">
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group row">
                <label class="col-12 col-form-label">col_md</label>
                <div class="col-12">
                  <input type="number" name="col_md" class="form-control">
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group row">
                <label class="col-12 col-form-label">col_sm</label>
                <div class="col-12">
                  <input type="number" name="col_sm" class="form-control">
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group row">
                <label class="col-12 col-form-label">col_xs</label>
                <div class="col-12">
                  <input type="number" name="col_xs" class="form-control">
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group row">
                <label class="col-12 col-form-label">cols</label>
                <div class="col-12">
                  <input type="number" name="cols" class="form-control">
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group row">
                <label class="col-12 col-form-label">rows</label>
                <div class="col-12">
                  <input type="number" name="rows" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['emotion']->value['sort_id'];?>
">
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group row">
                <label class="col-12 col-form-label">Sort id</label>
                <div class="col-12">
                  <input type="number" name="sort_id" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['emotion']->value['sort_id'];?>
">
                </div>
              </div>
            </div>
            <div class="col-12">
                <button type='submit' name='addNew' class="btn btn-info"><i class="fa fa-plus"></i> add</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
}
}
/* {/block 'emotion-component'} */
}
