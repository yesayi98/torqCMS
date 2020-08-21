<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-20 17:46:59
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\detail\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f3e8ce356ec41_66084848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0360df2a61d8e00e5c3777598ed53741fc11278' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\detail\\index.tpl',
      1 => 1597934818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:frontend/detail/content.tpl' => 1,
    'file:frontend/emotions/components/article_slider.tpl' => 1,
  ),
),false)) {
function content_5f3e8ce356ec41_66084848 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20499461595f3e8ce354a001_28569478', 'breadcrumbs_area');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19073983465f3e8ce355b036_77673262', "pageContent");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'frontend/index/index.tpl');
}
/* {block 'breadcrumbs_area'} */
class Block_20499461595f3e8ce354a001_28569478 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumbs_area' => 
  array (
    0 => 'Block_20499461595f3e8ce354a001_28569478',
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
                   <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'details'),$_smarty_tpl ) );?>
</h3>
                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumps']->value, 'breadcrump');
$_smarty_tpl->tpl_vars['breadcrump']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['breadcrump']->value) {
$_smarty_tpl->tpl_vars['breadcrump']->do_else = false;
?>
                    <span><?php echo $_smarty_tpl->tpl_vars['breadcrump']->value['name'];?>
</span>
                    <span class="fa fa-angle-right"></span>
                   <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                   <span><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</span>
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
/* {block 'product-detail'} */
class Block_19839247075f3e8ce355b871_03688264 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:frontend/detail/content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <!--product info start-->
        <?php if ($_smarty_tpl->tpl_vars['product']->value['options']) {?>
        <div class="product_d_info mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product_d_inner">
                          <div class="product_info_button">
                              <ul class="nav" role="tablist">
                                  <li>
                                       <a class="active" data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet" aria-selected="false"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'properties'),$_smarty_tpl ) );?>
</a>
                                  </li>
                              </ul>
                          </div>
                          <div class="tab-content">
                              <div class="tab-pane fade show active" id="sheet" role="tabpanel" >
                                  <div class="product_d_table">
                                    <table>
                                        <tbody>
                                          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['options'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                                            <tr>
                                                <td class="first_child"><?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
</td>
                                                <td>
                                                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['option']->value['values'], 'value', false, 'key', 'foo', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['total'];
?>
                                                    <?php echo $_smarty_tpl->tpl_vars['value']->value['value'];
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['last'] : null)) {?>, <?php }?>
                                                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </td>
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
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
        <!--product info end-->

        <!--product area start-->
        <section class="product_area related_products">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <?php $_smarty_tpl->_assignInScope('items', $_smarty_tpl->tpl_vars['similarProducts']->value);?>
                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'similarProducts'),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
$_tmp_array = isset($_smarty_tpl->tpl_vars['component']) ? $_smarty_tpl->tpl_vars['component']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['title'] = $_prefixVariable1;
$_smarty_tpl->_assignInScope('component', $_tmp_array);?>
                        <?php $_smarty_tpl->_subTemplateRender("file:frontend/emotions/components/article_slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    </div>
                </div>
            </div>
        </section>
        <!--product area end-->
        <!--last seen start-->
        <section class="product_area last_seen_products mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                      <?php if ($_smarty_tpl->tpl_vars['last_seen']->value) {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['action'][0], array( array('module'=>"frontend",'controller'=>"detail",'action'=>'lastseen'),$_smarty_tpl ) );?>

                      <?php }?>
                    </div>
                </div>
            </div>
        </section>
        <!--last seen end-->
  <?php
}
}
/* {/block 'product-detail'} */
/* {block "pageContent"} */
class Block_19073983465f3e8ce355b036_77673262 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageContent' => 
  array (
    0 => 'Block_19073983465f3e8ce355b036_77673262',
  ),
  'product-detail' => 
  array (
    0 => 'Block_19839247075f3e8ce355b871_03688264',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19839247075f3e8ce355b871_03688264', 'product-detail', $this->tplIndex);
?>

<?php
}
}
/* {/block "pageContent"} */
}
