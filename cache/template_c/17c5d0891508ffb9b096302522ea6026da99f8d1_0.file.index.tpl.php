<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-15 10:44:58
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\basket\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee726fa319281_85208602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17c5d0891508ffb9b096302522ea6026da99f8d1' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\basket\\index.tpl',
      1 => 1590479743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee726fa319281_85208602 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4607240845ee726fa2eb718_67932310', 'breadcrumbs_area');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18918560575ee726fa2f0795_77413200', "pageContent");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'frontend/index/index.tpl');
}
/* {block 'breadcrumbs_area'} */
class Block_4607240845ee726fa2eb718_67932310 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumbs_area' => 
  array (
    0 => 'Block_4607240845ee726fa2eb718_67932310',
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
                     <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'basket'),$_smarty_tpl ) );?>
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
class Block_18918560575ee726fa2f0795_77413200 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageContent' => 
  array (
    0 => 'Block_18918560575ee726fa2f0795_77413200',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



   <!--shopping cart area start -->
  <div class="shopping_cart_area mt-70">
      <div class="container">
          <form action="cart.html#">
              <div class="row">
                  <div class="col-12">
                      <div class="table_desc">
                          <div class="cart_page table-responsive">
                              <table>
                                  <thead>
                                      <tr>
                                          <th class="product_thumb"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'image'),$_smarty_tpl ) );?>
</th>
                                          <th class="product_name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'name'),$_smarty_tpl ) );?>
</th>
                                          <th class="product-price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'price'),$_smarty_tpl ) );?>
</th>
                                          <th class="product_quantity"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'quantity'),$_smarty_tpl ) );?>
</th>
                                          <th class="product_total"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'total'),$_smarty_tpl ) );?>
</th>
                                          <th class="product_remove"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'remove'),$_smarty_tpl ) );?>
</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['basketProducts']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                      <tr>
                                          <td class="product_thumb"><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('detail?a=').($_smarty_tpl->tpl_vars['product']->value['id'])),$_smarty_tpl ) );?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['product']->value['images'][0]['thumbnails'][0]['thumb_path'];?>
" alt=""></a></td>
                                          <td class="product_name"><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('detail?a=').($_smarty_tpl->tpl_vars['product']->value['id'])),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</a></td>
                                          <td class="product-price"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
 <?php echo $_smarty_tpl->tpl_vars['currentCur']->value['symbol'];?>
</td>
                                          <td class="product_quantity quantity" data-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'basket/add'),$_smarty_tpl ) );?>
" data-id='<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
'>
                                              <div class="quantity-button desc">-</div>
                                              <input class="nums" type="number" min="<?php if ($_smarty_tpl->tpl_vars['product']->value['unit']) {
echo $_smarty_tpl->tpl_vars['product']->value['unit'];
} else { ?>1<?php }?>" max="<?php echo $_smarty_tpl->tpl_vars['product']->value['in_stock'];?>
" step="<?php if ($_smarty_tpl->tpl_vars['product']->value['unit']) {
echo $_smarty_tpl->tpl_vars['product']->value['unit'];
} else { ?>1<?php }?>" value="<?php if ($_smarty_tpl->tpl_vars['product']->value['unit']) {
echo $_smarty_tpl->tpl_vars['product']->value['unit'];
} else {
echo $_smarty_tpl->tpl_vars['product']->value['quantity'];
}?>">
                                              <div class="quantity-button add">+</div>
                                          </td>
                                          <td class="product_total"><span class="total-<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['total'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['currentCur']->value['symbol'];?>
</td>
                                         <td class="product_remove"><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('basket/delete?a=').($_smarty_tpl->tpl_vars['product']->value['id'])),$_smarty_tpl ) );?>
"><i class="fa fa-trash-o"></i></a></td>
                                      </tr>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                  </tbody>
                              </table>
                          </div>
                                                </div>
                   </div>
               </div>
               <!--coupon code area start-->
              <div class="coupon_area">
                  <div class="row">
                      <div class="col-lg-8 offset-2 col-md-6">
                          <div class="coupon_code right">
                              <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'totalPrice'),$_smarty_tpl ) );?>
</h3>
                              <div class="coupon_inner">
                                 <div class="cart_subtotal">
                                     <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'purchases'),$_smarty_tpl ) );?>
</p>
                                     <p class="cart_amount"><span class="total-amount"><?php echo $_smarty_tpl->tpl_vars['totalPrice']->value;?>
</span> <?php echo $_smarty_tpl->tpl_vars['currentCur']->value['symbol'];?>
</p>
                                 </div>
                                 <div class="cart_subtotal ">
                                     <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'deliveryprice'),$_smarty_tpl ) );?>
</p>
                                     <p class="cart_amount"><span class="delivery-amount"><?php echo $_smarty_tpl->tpl_vars['deliveryPrice']->value;?>
</span> <?php echo $_smarty_tpl->tpl_vars['currentCur']->value['symbol'];?>
</p>
                                 </div>
                                 <div style="border-bottom: 1px solid #ccc; margin-bottom: 20px;"></div>

                                 <div class="cart_subtotal">
                                     <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'total'),$_smarty_tpl ) );?>
</p>
                                     <p class="cart_amount"><span class="primary-amount"><?php echo $_smarty_tpl->tpl_vars['deliveryPrice']->value+$_smarty_tpl->tpl_vars['totalPrice']->value;?>
</span> <?php echo $_smarty_tpl->tpl_vars['currentCur']->value['symbol'];?>
</p>
                                 </div>

                                 <div class="checkout_btn">
                                     <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'checkout'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'continue'),$_smarty_tpl ) );?>
</a>
                                 </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!--coupon code area end-->
          </form>
      </div>
  </div>
   <!--shopping cart area end -->
<?php
}
}
/* {/block "pageContent"} */
}
