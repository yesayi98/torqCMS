<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-16 18:41:43
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\checkout\success.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee8e837aeda11_90388107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bb62b2fccb8185050e84fa40e5387975fa93add' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\checkout\\success.tpl',
      1 => 1592321889,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee8e837aeda11_90388107 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11866930405ee8e837ad6e73_41264112', 'breadcrumbs_area');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7194520305ee8e837ada190_37963161', "pageContent");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "frontend/index/index.tpl");
}
/* {block 'breadcrumbs_area'} */
class Block_11866930405ee8e837ad6e73_41264112 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumbs_area' => 
  array (
    0 => 'Block_11866930405ee8e837ad6e73_41264112',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <!--breadcrumbs area start-->
  <div class="breadcrumbs_area">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="breadcrumb_content">
                      <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"paysuccess"),$_smarty_tpl ) );?>
</h3>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!--breadcrumbs area end-->
<?php
}
}
/* {/block 'breadcrumbs_area'} */
/* {block "pageContent"} */
class Block_7194520305ee8e837ada190_37963161 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageContent' => 
  array (
    0 => 'Block_7194520305ee8e837ada190_37963161',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



  <!--shop  area start-->
  <div class="shop_area shop_reverse mt-70 mb-70">
      <div class="container">
        <div class="order_table table-responsive">
            <table>
                <thead>
                    <tr>
                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"products"),$_smarty_tpl ) );?>
</th>
                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"total"),$_smarty_tpl ) );?>
</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order']->value['details'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
<strong> × <?php echo $_smarty_tpl->tpl_vars['product']->value['quantity'];?>
</strong></td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['product']->value['total'];?>
 <?php echo $_smarty_tpl->tpl_vars['currentCur']->value['symbol'];?>
</td>
                    </tr>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>

                <tfoot>
                    <tr>
                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"total"),$_smarty_tpl ) );?>
</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['order']->value['product_total'];?>
 <?php echo $_smarty_tpl->tpl_vars['currentCur']->value['symbol'];?>
</td>
                    </tr>

                    <tr>
                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"discounted"),$_smarty_tpl ) );?>
</th>
                        <td><strong><span data-total='true'><?php echo $_smarty_tpl->tpl_vars['order']->value['bonus_price'];?>
 </span><?php echo $_smarty_tpl->tpl_vars['currentCur']->value['symbol'];?>
</strong></td>
                    </tr>

                    <tr>
                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"deliveryprice"),$_smarty_tpl ) );?>
</th>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['order']->value['delivery_price'];?>
 <?php echo $_smarty_tpl->tpl_vars['currentCur']->value['symbol'];?>
</strong></td>
                    </tr>

                    <tr class="order_total">
                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"totalPrice"),$_smarty_tpl ) );?>
</th>
                        <td><strong><span data-total='true'><?php echo $_smarty_tpl->tpl_vars['order']->value['total_price'];?>
 </span><?php echo $_smarty_tpl->tpl_vars['currentCur']->value['symbol'];?>
</strong></td>
                    </tr>

                </tfoot>
            </table>
        </div>
      </div>
  </div>
  <!--shop  area end-->
<?php
}
}
/* {/block "pageContent"} */
}
