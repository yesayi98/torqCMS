<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-18 14:50:59
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\units\table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f3bc0a347b020_99243049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6eb393cb9285e8de3ad015432949fb6edd61c82d' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\units\\table.tpl',
      1 => 1597751457,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3bc0a347b020_99243049 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20569252815f3bc0a345fea0_89460634', "table-name");
?>

      <div class="card-body">
        <div class="table-responsive">
          <table id="default-datatable" class="table table-bordered">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_514187905f3bc0a3461e36_92087804', "table-head");
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10453157835f3bc0a3462ad9_05197616', "table-body");
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
      <?php echo $_smarty_tpl->tpl_vars['units']->value['pagination'];?>

    </div>
  </div>
</div>
<?php }
/* {block "table-name"} */
class Block_20569252815f3bc0a345fea0_89460634 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'table-name' => 
  array (
    0 => 'Block_20569252815f3bc0a345fea0_89460634',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="card-header"><i class="fa fa-table"></i> Currency List</div>
      <?php
}
}
/* {/block "table-name"} */
/* {block "table-head"} */
class Block_514187905f3bc0a3461e36_92087804 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'table-head' => 
  array (
    0 => 'Block_514187905f3bc0a3461e36_92087804',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>code</th>
                      <th>Action</th>
                  </tr>
              </thead>
            <?php
}
}
/* {/block "table-head"} */
/* {block "table-body"} */
class Block_10453157835f3bc0a3462ad9_05197616 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'table-body' => 
  array (
    0 => 'Block_10453157835f3bc0a3462ad9_05197616',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['units']->value, 'unit');
$_smarty_tpl->tpl_vars['unit']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['unit']->value) {
$_smarty_tpl->tpl_vars['unit']->do_else = false;
?>
                  <tr>
                      <td><?php echo $_smarty_tpl->tpl_vars['unit']->value['id'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['unit']->value['name'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['unit']->value['code'];?>
</td>
                      <td>
                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('backend/units/detail?l=').($_smarty_tpl->tpl_vars['unit']->value['id'])),$_smarty_tpl ) );?>
" class="btn btn-info waves-effect waves-light m-1"><i class="fa fa-pencil"></i></a>
                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('backend/units/delete?l=').($_smarty_tpl->tpl_vars['unit']->value['id'])),$_smarty_tpl ) );?>
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
