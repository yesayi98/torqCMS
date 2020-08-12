<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-14 15:26:06
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\orders\articleDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f0d964ec54df4_63407028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04b920f3cf1693f1234716751d4fe91f3e396d3c' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\orders\\articleDetail.tpl',
      1 => 1594725961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0d964ec54df4_63407028 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20655602105f0d964ec334d4_28248012', "order-modal-content");
?>

<?php }
/* {block "order-modal-content"} */
class Block_20655602105f0d964ec334d4_28248012 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'order-modal-content' => 
  array (
    0 => 'Block_20655602105f0d964ec334d4_28248012',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <form class="order-detail-form" id="order-detail-form" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>"backend/orders/saveDetail"),$_smarty_tpl ) );?>
" method="post">
    <div class="form-group row">
      <label class="col-12 col-form-label">order ID</label>
      <div class="col-12">
        <input type="text" name="order_id" readonly class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['order_id']->value;?>
">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-12 col-form-label">Product</label>
      <div class="col-12">
        <select class="form-control"
                <?php if ($_smarty_tpl->tpl_vars['order_detail']->value['id']) {?>style="pointer-events: none"<?php }?>
                name="article_id">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"
                          <?php if ($_smarty_tpl->tpl_vars['product']->value['id'] == $_smarty_tpl->tpl_vars['order_detail']->value['article_id']) {?>selected<?php }?>>
                          <?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>

                  </option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-12 col-form-label">Quantity</label>
      <div class="col-12">
        <input type="number" name="quantity" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['order_detail']->value['quantity'];?>
">
      </div>
    </div>
    <input type="hidden" name="order_detail" value="<?php echo $_smarty_tpl->tpl_vars['order_detail']->value['id'];?>
">
  </form>
<?php
}
}
/* {/block "order-modal-content"} */
}
