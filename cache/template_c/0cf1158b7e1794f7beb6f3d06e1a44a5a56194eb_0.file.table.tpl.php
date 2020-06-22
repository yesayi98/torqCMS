<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-18 16:19:59
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\users\table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eeb69ff792245_99298902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cf1158b7e1794f7beb6f3d06e1a44a5a56194eb' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\users\\table.tpl',
      1 => 1589276013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eeb69ff792245_99298902 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12975184785eeb69ff72a4a6_37083593', "table-name");
?>

      <div class="card-body">


        <div class="table-responsive">
          <table id="default-datatable" class="table table-bordered">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13194882355eeb69ff730205_84908949', "table-head");
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16180616595eeb69ff7311f1_87209690', "table-body");
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
      <?php echo $_smarty_tpl->tpl_vars['users']->value['pagination'];?>

    </div>
  </div>
</div>
<?php }
/* {block "table-name"} */
class Block_12975184785eeb69ff72a4a6_37083593 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'table-name' => 
  array (
    0 => 'Block_12975184785eeb69ff72a4a6_37083593',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="card-header"><i class="fa fa-table"></i> Users (<?php echo $_smarty_tpl->tpl_vars['users']->value['total'];?>
)</div>
      <?php
}
}
/* {/block "table-name"} */
/* {block "table-head"} */
class Block_13194882355eeb69ff730205_84908949 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'table-head' => 
  array (
    0 => 'Block_13194882355eeb69ff730205_84908949',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Lastname</th>
                      <th>email</th>
                      <th>phone</th>
                      <th>gender</th>
                      <th>specific id</th>
                      <th>guest / confirmed</th>
                      <th>Action</th>
                  </tr>
              </thead>
            <?php
}
}
/* {/block "table-head"} */
/* {block "table-body"} */
class Block_16180616595eeb69ff7311f1_87209690 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'table-body' => 
  array (
    0 => 'Block_16180616595eeb69ff7311f1_87209690',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value['data'], 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                  <tr>
                      <td><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['user']->value['lastname'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['user']->value['gender'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['user']->value['specific_id'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['user']->value['guest'];?>
 / <?php echo $_smarty_tpl->tpl_vars['user']->value['confirmed'];?>
</td>
                      <td>
                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('backend/users/detail?u=').($_smarty_tpl->tpl_vars['user']->value['id'])),$_smarty_tpl ) );?>
" class="btn btn-info waves-effect waves-light m-1"><i class="fa fa-pencil"></i></a>
                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('backend/users/delete?u=').($_smarty_tpl->tpl_vars['user']->value['id'])),$_smarty_tpl ) );?>
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
