<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-07 14:01:12
  from 'D:\OSPanel\domains\torq\public\backend\orders\table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edcc8f8f08043_18977909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c64fd89d549153fe4427965141a678f011133aa5' => 
    array (
      0 => 'D:\\OSPanel\\domains\\torq\\public\\backend\\orders\\table.tpl',
      1 => 1588676698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edcc8f8f08043_18977909 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7208457215edcc8f8de15b1_09419771', "table-name");
?>

      <div class="card-body">


        <div class="table-responsive">
          <table id="default-datatable" class="table table-bordered">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8974120815edcc8f8e14253_51852629', "table-head");
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2761413345edcc8f8e15292_66380740', "table-body");
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
      <?php echo $_smarty_tpl->tpl_vars['orders']->value['pagination'];?>

    </div>
  </div>
</div>
<?php }
/* {block "table-name"} */
class Block_7208457215edcc8f8de15b1_09419771 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'table-name' => 
  array (
    0 => 'Block_7208457215edcc8f8de15b1_09419771',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="card-header"><i class="fa fa-table"></i> Orders (<?php echo $_smarty_tpl->tpl_vars['orders']->value['total'];?>
)</div>
      <?php
}
}
/* {/block "table-name"} */
/* {block "table-head"} */
class Block_8974120815edcc8f8e14253_51852629 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'table-head' => 
  array (
    0 => 'Block_8974120815edcc8f8e14253_51852629',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Name Lastname</th>
                      <th>Phone</th>
                      <th>Price</th>
                      <th>Payment</th>
                      <th>Delivery</th>
                      <th>Order</th>
                      <th>Date</th>
                      <th>Action</th>
                  </tr>
              </thead>
            <?php
}
}
/* {/block "table-head"} */
/* {block "table-body"} */
class Block_2761413345edcc8f8e15292_66380740 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'table-body' => 
  array (
    0 => 'Block_2761413345edcc8f8e15292_66380740',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value['data'], 'order');
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
?>
                  <tr>
                      <td><?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['order']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value['lastname'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['order']->value['address']['phone'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['order']->value['total_price'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['order']->value['payment_method'];?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value['pm_name'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['order']->value['delivery_status'];?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value['ds_name'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['order']->value['order_status'];?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value['os_name'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['order']->value['buy_date'];?>
</td>
                      <td>
                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('backend/orders/detail?o=').($_smarty_tpl->tpl_vars['order']->value['id'])),$_smarty_tpl ) );?>
" class="btn btn-info waves-effect waves-light m-1"><i class="fa fa-pencil"></i></a>
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
