<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-28 18:01:37
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\filters\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f491c5157a569_28722116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fec4c7bfdc84e2060f8347e3a11da373fbe0cb8e' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\filters\\index.tpl',
      1 => 1598626728,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f491c5157a569_28722116 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8840859945f491c51552518_10285237', "container-content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "backend/index/index.tpl");
}
/* {block "breadcrump"} */
class Block_18100563465f491c51554532_32392954 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="col-sm-9">
          <h4 class="page-title">filters Overview</h4>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">filters</a></li>
            <li class="breadcrumb-item active" aria-current="page">Overview</li>
          </ol>
        </div>
      <?php
}
}
/* {/block "breadcrump"} */
/* {block "table-list"} */
class Block_4308314055f491c51553758_50134804 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row pt-2 pb-2">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18100563465f491c51554532_32392954', "breadcrump", $this->tplIndex);
?>


    </div>
  <?php
}
}
/* {/block "table-list"} */
/* {block "table-block"} */
class Block_11598398225f491c51556394_65166270 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="list-container" data-content='true'>
      <ul class="list-group list-group-flush">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filters']->value['data'], 'filter', false, 'key');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
          <li class="list-group-item bg-transparent">
            <form class="form-group" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>"backend/filters/save"),$_smarty_tpl ) );?>
" data-ajaxsend="true" method="post">
              <div class=" d-flex justify-content-between mr-3">
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['filter']->value['id'];?>
">
                    <select class="form-control" name="option_id">
                      <option value="">select option</option>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['options']->value, 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['option']->value['id'] == $_smarty_tpl->tpl_vars['filter']->value['option_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
</option>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                    <button type="submit" class="btn btn-success" name="button">Submit</button>
              </div>
            </form>
          </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <li class="list-group-item bg-transparent">
          <form class="form-group" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>"backend/filters/save"),$_smarty_tpl ) );?>
" method="post">
            <div class="title">
              NEW FILTER
            </div>
            <div class=" d-flex justify-content-between mr-3">
                  <input type="hidden" name="id" value="">
                  <select class="form-control" name="option_id">
                    <option value="">select option</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['options']->value, 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </select>
                  <button type="submit" class="btn btn-success" name="button">Submit</button>
            </div>
          </form>
        </li>
       </ul>
    </div>
  <?php
}
}
/* {/block "table-block"} */
/* {block "container-content"} */
class Block_8840859945f491c51552518_10285237 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container-content' => 
  array (
    0 => 'Block_8840859945f491c51552518_10285237',
  ),
  'table-list' => 
  array (
    0 => 'Block_4308314055f491c51553758_50134804',
  ),
  'breadcrump' => 
  array (
    0 => 'Block_18100563465f491c51554532_32392954',
  ),
  'table-block' => 
  array (
    0 => 'Block_11598398225f491c51556394_65166270',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4308314055f491c51553758_50134804', "table-list", $this->tplIndex);
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11598398225f491c51556394_65166270', "table-block", $this->tplIndex);
?>

<?php
}
}
/* {/block "container-content"} */
}
