<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-14 11:03:25
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\checkout\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee5d9cd1814b6_81448255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14641551fc1527db71506738badda3e01595550b' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\checkout\\index.tpl',
      1 => 1592121802,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee5d9cd1814b6_81448255 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1316346325ee5d9cd14c478_85386819', 'breadcrumbs_area');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17300794375ee5d9cd14f8d5_32701036', "pageContent");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "frontend/index/index.tpl");
}
/* {block 'breadcrumbs_area'} */
class Block_1316346325ee5d9cd14c478_85386819 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumbs_area' => 
  array (
    0 => 'Block_1316346325ee5d9cd14c478_85386819',
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
                      <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"checkout"),$_smarty_tpl ) );?>
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
class Block_17300794375ee5d9cd14f8d5_32701036 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageContent' => 
  array (
    0 => 'Block_17300794375ee5d9cd14f8d5_32701036',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!--Checkout page section start-->
<div class="Checkout_section mt-70">
   <div class="container">
        <div class="row">
           <div class="col-12">
                <div class="user-actions">
                    <h3>
                        <i class="fa fa-file-o" aria-hidden="true"></i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"paywithbonus"),$_smarty_tpl ) );?>

                        <a class="Returning" href="" data-toggle="collapse" data-target="#checkout_coupon" aria-expanded="true"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"getPercent"),$_smarty_tpl ) );?>
</a>
                    </h3>
                     <div id="checkout_coupon" class="collapse" data-parent="#accordion">
                        <div class="checkout_info coupon_info">
                            <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>"checkout/bonus"),$_smarty_tpl ) );?>
" method='post'>
                                <input placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"specific_id"),$_smarty_tpl ) );?>
" type="text" name='specific_id' value="<?php echo $_smarty_tpl->tpl_vars['user']->value['specific_id'];?>
">
                                <button type="submit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"submit"),$_smarty_tpl ) );?>
</button>
                            </form>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <div class="checkout_form">
          <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'checkout/confirm'),$_smarty_tpl ) );?>
" method="post">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                        <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"setLabels"),$_smarty_tpl ) );?>
</h3>
                        <div class="row mt-20">

                            <div class="col-lg-6 mb-20">
                                <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"name"),$_smarty_tpl ) );?>
 <span>*</span></label>
                                <input type="text" name='name' value="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
">
                            </div>
                            <div class="col-lg-6 mb-20">
                                <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"lastname"),$_smarty_tpl ) );?>
<span>*</span></label>
                                <input type="text" name='lastname' value="<?php echo $_smarty_tpl->tpl_vars['user']->value['lastname'];?>
">
                            </div>
                            <div class="col-12 mb-20">
                                <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"email"),$_smarty_tpl ) );?>
</label>
                                <input type="text" name='email' value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
">
                            </div>
                            <div class="col-12 mb-20">
                                <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"phone"),$_smarty_tpl ) );?>
</label>
                                  <div class="phone-number">
                                    <input type="text" class="phone-code" name="phoneCode" value="+374" readonly>
                                    <input type="number" class="phone" name='phone' placeholder="XX XXXXXX" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>
">
                                  </div>
                                </div>
                            </div>

                            <div class="col-12 mb-20">
                              <div class="row">
                                <label class="col-12"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"youraddress"),$_smarty_tpl ) );?>
 <span>*</span></label>
                                <input class="col-12" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"youraddress"),$_smarty_tpl ) );?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['address'][0]['address'];?>
" name='address'>
                              </div>
                            </div>

                            <div class="col-12">
                                <div class="order-notes">
                                  <div class="row">
                                    <label class="col-12" for="order_note"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"ordernote"),$_smarty_tpl ) );?>
 </label>
                                    <textarea class="col-12" id="order_note" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"ordernote"),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['address'][0]['note'];?>
</textarea>
                                  </div>
                                </div>
                            </div>
                        </div>
                <div class="col-lg-6 col-md-6">
                        <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"checkout"),$_smarty_tpl ) );?>
</h3>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orderItems']->value, 'product');
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
                                        <td><?php echo $_smarty_tpl->tpl_vars['totalPrice']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['currentCur']->value['symbol'];?>
</td>
                                    </tr>

                                    <tr class='d-none'>
                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"discounted"),$_smarty_tpl ) );?>
</th>
                                        <td data-discounted='true'><strong><span data-total='true'><?php echo $_smarty_tpl->tpl_vars['totalPrice']->value+$_smarty_tpl->tpl_vars['deliveryPrice']->value;?>
 </span><?php echo $_smarty_tpl->tpl_vars['currentCur']->value['symbol'];?>
</strong></td>
                                    </tr>

                                    <tr>
                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"deliveryprice"),$_smarty_tpl ) );?>
</th>
                                        <td><strong><?php echo $_smarty_tpl->tpl_vars['deliveryPrice']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['currentCur']->value['symbol'];?>
</strong></td>
                                    </tr>

                                    <tr class="order_total">
                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"totalPrice"),$_smarty_tpl ) );?>
</th>
                                        <td><strong><span data-total='true'><?php echo $_smarty_tpl->tpl_vars['totalPrice']->value+$_smarty_tpl->tpl_vars['deliveryPrice']->value;?>
 </span><?php echo $_smarty_tpl->tpl_vars['currentCur']->value['symbol'];?>
</strong></td>
                                    </tr>

                                </tfoot>
                            </table>
                        </div>
                        <div class="payment_method" id='accordion'>
                           <div class="panel-default">
                                <input id="payment" name="payment_method" type="radio" data-target="createp_account" />
                                <label for="payment" data-toggle="collapse" data-target="#method" aria-controls="method"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"payinshipping"),$_smarty_tpl ) );?>
</label>

                                <div id="method" class="collapse one" data-parent="#accordion">
                                    <div class="card-body1">
                                       <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"payinshippingaddress"),$_smarty_tpl ) );?>
</p>
                                    </div>
                                </div>
                            </div>

                           <div class="panel-default">
                                <input id="payment_defult2" name="payment_method" type="radio" data-target="createp_account" />
                                <label for="payment_defult2" data-toggle="collapse" data-target="#collapsedefult_2" aria-controls="collapsedefult_2">Idram <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/img/icon/papyel.png" alt=""></label>

                                <div id="collapsedefult_2" class="collapse one" data-parent="#accordion">
                                    <div class="card-body1">
                                       <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-default">
                                <input id="payment_defult" name="payment_method" type="radio" data-target="createp_account" />
                                <label for="payment_defult" data-toggle="collapse" data-target="#collapsedefult" aria-controls="collapsedefult">PayPal_2 <img src="assets/img/icon/papyel.png" alt=""></label>

                                <div id="collapsedefult" class="collapse one" data-parent="#accordion">
                                    <div class="card-body1">
                                       <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="order_button mt-20">
                                <button  type="submit">Վճարել հիմա</button>
                            </div>
                        </div>
                  </div>
            </div>
          </form>
        </div>
    </div>
</div>
<!--Checkout page section end-->
<?php
}
}
/* {/block "pageContent"} */
}
