<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-19 10:12:17
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\blog\table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eec6551813220_62305867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed9fff2bd6124c3577b53b5779ff7574f465f38a' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\blog\\table.tpl',
      1 => 1592550736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eec6551813220_62305867 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4500505625eec65517f7de1_54109508', "table-name");
?>

      <div class="card-body">
        <div class="table-responsive">
          <table id="default-datatable" class="table table-bordered">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20143110825eec65517fa698_16175038', "table-head");
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7273775465eec65517fb5c3_69965710', "table-body");
?>

          </table>
        </div>
      </div>
    </div>
  </div>
</div><!-- End Row-->
<div class="row">
  <div class="col-sm-12 col-md-7">
    <div class="dataTables_paginate paging_simple_numbers" id="default-datatable_paginate">
      <?php echo $_smarty_tpl->tpl_vars['blogs']->value['pagination'];?>

    </div>
  </div>
</div>
<?php }
/* {block "table-name"} */
class Block_4500505625eec65517f7de1_54109508 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'table-name' => 
  array (
    0 => 'Block_4500505625eec65517f7de1_54109508',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="card-header"><i class="fa fa-table"></i> Article List</div>
      <?php
}
}
/* {/block "table-name"} */
/* {block "table-head"} */
class Block_20143110825eec65517fa698_16175038 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'table-head' => 
  array (
    0 => 'Block_20143110825eec65517fa698_16175038',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Author</th>
                      <th>Created date</th>
                      <th>Changed date</th>
                      <th>Activity</th>
                      <th>Action</th>
                  </tr>
              </thead>
            <?php
}
}
/* {/block "table-head"} */
/* {block "table-body"} */
class Block_7273775465eec65517fb5c3_69965710 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'table-body' => 
  array (
    0 => 'Block_7273775465eec65517fb5c3_69965710',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\User\\OSPanel\\domains\\torq\\engine\\Library\\smarty-master\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>

              <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blogs']->value['data'], 'blog');
$_smarty_tpl->tpl_vars['blog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['blog']->do_else = false;
?>
                  <tr>
                      <td><?php echo $_smarty_tpl->tpl_vars['blog']->value['id'];?>
</td>
                      <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['blog']->value['name']);?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['blog']->value['author'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['blog']->value['created_date'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['blog']->value['changed_date'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['blog']->value['active'];?>
</td>
                      <td>
                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('backend/blog/detail?blog=').($_smarty_tpl->tpl_vars['blog']->value['id'])),$_smarty_tpl ) );?>
" class="btn btn-info waves-effect waves-light m-1"><i class="fa fa-pencil"></i></a>
                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('backend/blog/delete?blog=').($_smarty_tpl->tpl_vars['blog']->value['id'])),$_smarty_tpl ) );?>
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
