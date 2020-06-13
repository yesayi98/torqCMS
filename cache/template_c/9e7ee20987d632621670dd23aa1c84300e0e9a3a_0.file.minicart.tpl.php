<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-14 01:00:56
  from 'D:\OSPanel\domains\torq\public\frontend\basket\minicart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee54c98ec5f70_94847253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e7ee20987d632621670dd23aa1c84300e0e9a3a' => 
    array (
      0 => 'D:\\OSPanel\\domains\\torq\\public\\frontend\\basket\\minicart.tpl',
      1 => 1591636513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee54c98ec5f70_94847253 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="cart_gallery">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['basketProducts']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
    <div class="cart_item">
       <div class="cart_img">
           <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('detail?a=').($_smarty_tpl->tpl_vars['product']->value['id'])),$_smarty_tpl ) );?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['product']->value['images'][0]['thumbnails'][0]['thumb_path'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
"></a>
       </div>
        <div class="cart_info">
            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('detail?a=').($_smarty_tpl->tpl_vars['product']->value['id'])),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</a>
            <p><?php echo $_smarty_tpl->tpl_vars['product']->value['quantity'];?>
 x <span> <?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
 <?php echo $_smarty_tpl->tpl_vars['currentCur']->value['symbol'];?>
</span></p>
        </div>
        <div class="cart_remove">
            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('basket/delete?a=').($_smarty_tpl->tpl_vars['product']->value['id'])),$_smarty_tpl ) );?>
"><i class="icon-x"></i></a>
        </div>
    </div>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<div class="mini_cart_table">
    <div class="cart_table_border">
        <div class="cart_total">
            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"total"),$_smarty_tpl ) );?>
</span>
            <span class="price"><?php echo $_smarty_tpl->tpl_vars['basketTotal']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['currentCur']->value['symbol'];?>
</span>
        </div>
        <div class="cart_total mt-10">
            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"totalPrice"),$_smarty_tpl ) );?>
</span>
            <span class="price"><?php echo $_smarty_tpl->tpl_vars['basketTotal']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['currentCur']->value['symbol'];?>
 + <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"deliveryprice"),$_smarty_tpl ) );?>
</span>
        </div>
    </div>
</div>
<div class="mini_cart_footer">
   <div class="cart_button">
        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'basket'),$_smarty_tpl ) );?>
"><i class="fa fa-shopping-cart"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"basket"),$_smarty_tpl ) );?>
</a>
    </div>
    <div class="cart_button">
        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'checkout'),$_smarty_tpl ) );?>
"><i class="fa fa-sign-in"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"pay"),$_smarty_tpl ) );?>
</a>
    </div>

</div>
<?php }
}
