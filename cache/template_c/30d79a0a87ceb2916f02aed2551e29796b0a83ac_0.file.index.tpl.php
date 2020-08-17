<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-15 17:30:03
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\compare\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f37f16b31a541_12583112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30d79a0a87ceb2916f02aed2551e29796b0a83ac' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\compare\\index.tpl',
      1 => 1597501801,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f37f16b31a541_12583112 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7937092245f37f16b2fa131_82921293', "pageContent");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "frontend/index/index.tpl");
}
/* {block "pageContent"} */
class Block_7937092245f37f16b2fa131_82921293 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageContent' => 
  array (
    0 => 'Block_7937092245f37f16b2fa131_82921293',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\User\\OSPanel\\domains\\torq\\engine\\Library\\smarty-master\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>

<div class="container">
  <div class="table-content mt-3 mb-3 cart_page table-responsive">
    <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"product"),$_smarty_tpl ) );?>
</th>
          <th scope="col"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"name"),$_smarty_tpl ) );?>
</th>
          <th scope="col"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"price"),$_smarty_tpl ) );?>
</th>
          <th scope="col"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"description"),$_smarty_tpl ) );?>
</th>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['options']->value, 'option', false, 'key');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
          <th scope="col"><?php echo $_smarty_tpl->tpl_vars['option']->value;?>
</th>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <th scope="col"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"action"),$_smarty_tpl ) );?>
</th>
        </tr>
      </thead>
      <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
          <tr>
            <th scope="row"><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</th>
            <td><img src="<?php echo $_smarty_tpl->tpl_vars['product']->value['images'][0]['thumbnails'][0]['thumb_path'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
"> </td>
            <td><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</td>
            <td><p> <?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
 <?php echo $_smarty_tpl->tpl_vars['currentCur']->value['symbol'];?>
 </p></td>
            <td><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', htmlspecialchars_decode($_smarty_tpl->tpl_vars['product']->value['description'], ENT_QUOTES)));?>
</td>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['options']->value, 'option', false, 'key');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
            <th scope="col">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['options'], 'productoption', false, 'key');
$_smarty_tpl->tpl_vars['productoption']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['productoption']->value) {
$_smarty_tpl->tpl_vars['productoption']->do_else = false;
?>
                  <?php if ($_smarty_tpl->tpl_vars['productoption']->value['name'] == $_smarty_tpl->tpl_vars['option']->value) {?>
                    <?php echo $_smarty_tpl->tpl_vars['productoption']->value['value'];?>

                  <?php }?>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </th>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <td><button type="button" class="btn btn-danger compare-delete-btn" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" data-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>"compare/delete"),$_smarty_tpl ) );?>
" name="button"><i class="fa fa-trash"></i></button></td>
          </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </tbody>
    </table>
    <?php } else { ?>
    <div class="message-container mt-3 mb-3">
      <div class="message warning">
        <h3><i class="fa fa-warning"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"products_not_found"),$_smarty_tpl ) );?>
</h3>
      </div>
    </div>

    <?php }?>

  </div>
</div>
<?php
}
}
/* {/block "pageContent"} */
}
