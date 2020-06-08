<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-27 18:51:53
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\account\address.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ece8c99ee4e61_24641790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4d7ede245f97405eb75ae78c1207464b24a3ba5' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\account\\address.tpl',
      1 => 1590594712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ece8c99ee4e61_24641790 (Smarty_Internal_Template $_smarty_tpl) {
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
