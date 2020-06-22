<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-19 19:03:52
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\emotions\table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eecd3d8e56834_08120993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe41e73d523673ed38ae4b66e8aeb89a6882f173' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\emotions\\table.tpl',
      1 => 1591767377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eecd3d8e56834_08120993 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14782363785eecd3d8ded557_85870031', "table-name");
?>

      <div class="card-body">
        <div class="table-responsive">
          <table id="default-datatable" class="table table-bordered">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20278176265eecd3d8deeb80_36751968', "table-head");
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11299453645eecd3d8df0986_95264491', "table-body");
?>

          </table>
        </div>
      </div>
    </div>
  </div>
</div><!-- End Row-->
<?php }
/* {block "table-name"} */
class Block_14782363785eecd3d8ded557_85870031 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'table-name' => 
  array (
    0 => 'Block_14782363785eecd3d8ded557_85870031',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="card-header"><i class="fa fa-table"></i> Emotions List</div>
      <?php
}
}
/* {/block "table-name"} */
/* {block "table-head"} */
class Block_20278176265eecd3d8deeb80_36751968 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'table-head' => 
  array (
    0 => 'Block_20278176265eecd3d8deeb80_36751968',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Row Height</th>
                      <th>Is Fullscreen</th>
                      <th>Class</th>
                      <th>Activity</th>
                      <th>Action</th>
                  </tr>
              </thead>
            <?php
}
}
/* {/block "table-head"} */
/* {block "table-body"} */
class Block_11299453645eecd3d8df0986_95264491 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'table-body' => 
  array (
    0 => 'Block_11299453645eecd3d8df0986_95264491',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['emotions']->value, 'emotion');
$_smarty_tpl->tpl_vars['emotion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['emotion']->value) {
$_smarty_tpl->tpl_vars['emotion']->do_else = false;
?>
                  <tr>
                      <td><?php echo $_smarty_tpl->tpl_vars['emotion']->value['id'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['emotion']->value['name'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['emotion']->value['row_height'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['emotion']->value['full_screen'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['emotion']->value['class'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['emotion']->value['active'];?>
</td>
                      <td>
                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('backend/emotions/detail?e=').($_smarty_tpl->tpl_vars['emotion']->value['id'])),$_smarty_tpl ) );?>
" class="btn btn-info waves-effect waves-light m-1"><i class="fa fa-pencil"></i></a>
                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('backend/emotions/delete?e=').($_smarty_tpl->tpl_vars['emotion']->value['id'])),$_smarty_tpl ) );?>
" class="btn btn-danger waves-effect waves-light m-1"><i class="fa fa-trash"></i></a>
                      </td>
                  </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </tbody>
            <?php
}
}
/* {/block "table-body"} */
}
