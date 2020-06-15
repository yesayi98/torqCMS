<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-14 23:26:54
  from 'D:\OSPanel\domains\torq\public\frontend\account\address.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee6880e113428_64826885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d83e7bd9e84bd34703e293835da5e102a04f674' => 
    array (
      0 => 'D:\\OSPanel\\domains\\torq\\public\\frontend\\account\\address.tpl',
      1 => 1591636512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee6880e113428_64826885 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
<?php if ($_smarty_tpl->tpl_vars['user']->value['address']) {?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value['address'], 'address');
$_smarty_tpl->tpl_vars['address']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->do_else = false;
?>
  <div class="col-md-6 col-12 mt-30">
    <div class="our-address w-100">
        <p><strong><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['lastname'];?>
</strong></p>
        <address>
            <P><?php echo $_smarty_tpl->tpl_vars['address']->value['region'];?>
 <?php echo $_smarty_tpl->tpl_vars['address']->value['city'];?>
, <?php echo $_smarty_tpl->tpl_vars['address']->value['address'];?>
</P>
            <P><?php echo $_smarty_tpl->tpl_vars['address']->value['phone'];?>
</P>
        </address>
    </div>
  </div>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>
  <div class="basket-message col-12">
    <div class="message warning relative">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'youNotHaveAddress'),$_smarty_tpl ) );?>
<i class="fa fa-warning"></i>
    </div>
  </div>
<?php }?>
</div>
<?php }
}
