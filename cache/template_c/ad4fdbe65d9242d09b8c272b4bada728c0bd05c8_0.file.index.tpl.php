<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-14 23:26:53
  from 'D:\OSPanel\domains\torq\public\frontend\account\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee6880d228ee7_27067582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad4fdbe65d9242d09b8c272b4bada728c0bd05c8' => 
    array (
      0 => 'D:\\OSPanel\\domains\\torq\\public\\frontend\\account\\index.tpl',
      1 => 1591636512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:frontend/account/orders/table.tpl' => 1,
    'file:frontend/account/address.tpl' => 1,
    'file:frontend/account/personal.tpl' => 1,
  ),
),false)) {
function content_5ee6880d228ee7_27067582 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12042720655ee6880d1e6405_09149639', 'breadcrumbs_area');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11825292185ee6880d2047c7_82043859', "pageContent");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'frontend/index/index.tpl');
}
/* {block 'breadcrumbs_area'} */
class Block_12042720655ee6880d1e6405_09149639 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumbs_area' => 
  array (
    0 => 'Block_12042720655ee6880d1e6405_09149639',
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
                       <h3><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['lastname'];?>
</h3>
                        <ul>
                            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'personalAccount'),$_smarty_tpl ) );?>
</li>
                        </ul>
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
class Block_11825292185ee6880d2047c7_82043859 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageContent' => 
  array (
    0 => 'Block_11825292185ee6880d2047c7_82043859',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- my account start  -->
<section class="main_content_area">
    <div class="container">
        <div class="account_dashboard">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <!-- Nav tabs -->
                    <div class="dashboard_tab_button">
                        <ul role="tablist" class="nav flex-column dashboard-list">
                            <li><a href="#dashboard" data-toggle="tab" class="nav-link active"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'personalAccount'),$_smarty_tpl ) );?>
</a></li>
                            <li> <a href="#orders" data-toggle="tab" class="nav-link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'orders'),$_smarty_tpl ) );?>
</a></li>
                            <li><a href="#address" data-toggle="tab" class="nav-link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'deliveryAddress'),$_smarty_tpl ) );?>
</a></li>
                            <li><a href="#account-details" data-toggle="tab" class="nav-link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'personalInfo'),$_smarty_tpl ) );?>
</a></li>
                            <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>"account/logout"),$_smarty_tpl ) );?>
" class="nav-link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'logout'),$_smarty_tpl ) );?>
</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content">
                        <div class="tab-pane fade show active" id="dashboard">
                            <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'account'),$_smarty_tpl ) );?>
 </h3>
                            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'accountText'),$_smarty_tpl ) );?>
</p>
                            <h5 class="my-account-id"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'youraccountid'),$_smarty_tpl ) );?>
 - <span><?php echo $_smarty_tpl->tpl_vars['user']->value['specific_id'];?>
</span></h5>
                            <h6 class="my-account-bon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'youraccountbonuses'),$_smarty_tpl ) );?>
</h6>
                        </div>

                        <div class="tab-pane fade" id="orders">
                            <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'orders'),$_smarty_tpl ) );?>
</h3>
                            <?php $_smarty_tpl->_subTemplateRender("file:frontend/account/orders/table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        </div>

                        <div class="tab-pane" id="address">
                            <h3 class="billing-address"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'deliveryAddress'),$_smarty_tpl ) );?>
</h3>
                            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'thereAreYourAddresses'),$_smarty_tpl ) );?>
</p>
                            <?php $_smarty_tpl->_subTemplateRender("file:frontend/account/address.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        </div>

                        <div class="tab-pane fade" id="account-details">
                            <h3>Անձնական տվյալներ</h3>
                            <?php $_smarty_tpl->_subTemplateRender("file:frontend/account/personal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- my account end   -->
<?php
}
}
/* {/block "pageContent"} */
}
