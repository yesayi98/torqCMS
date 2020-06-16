<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-16 15:34:19
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\account\orders\table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee8bc4b29f852_77052492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11104b639ad366111d78d47b0c97e16825aa51b6' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\account\\orders\\table.tpl',
      1 => 1590593443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee8bc4b29f852_77052492 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['orders']->value) {?>
<div class="table-responsive">
  <table class="table">
      <thead>
          <tr>
              <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'order'),$_smarty_tpl ) );?>
</th>
              <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'orderdate'),$_smarty_tpl ) );?>
</th>
              <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'orderstatus'),$_smarty_tpl ) );?>
</th>
              <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'deliverytatus'),$_smarty_tpl ) );?>
</th>
              <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'total'),$_smarty_tpl ) );?>
</th>
          </tr>
      </thead>
      <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['order']->value['buy_date'];?>
</td>
            <td><span class="success"><?php echo $_smarty_tpl->tpl_vars['order']->value['os_name'];?>
</span></td>
            <td><span class="success"><?php echo $_smarty_tpl->tpl_vars['order']->value['ds_name'];?>
</span></td>
            <td><?php echo $_smarty_tpl->tpl_vars['order']->value['total'];?>
 <?php echo $_smarty_tpl->tpl_vars['currentCur']->value['symbol'];?>
</td>
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </tbody>
  </table>
</div>
<?php } else { ?>
<div class="basket-message ">
  <div class="message warning relative">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'youNotHaveOrder'),$_smarty_tpl ) );?>
<i class="fa fa-warning"></i>
  </div>
</div>

<?php }
}
}
