<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-17 15:18:56
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\category\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eea0a30418c63_72071242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5bf997225f37698a1db0b1ceaf6ddaa2457cb04' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\category\\index.tpl',
      1 => 1592396334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:frontend/category/filter.tpl' => 1,
    'file:frontend/category/listing.tpl' => 1,
  ),
),false)) {
function content_5eea0a30418c63_72071242 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1198525125eea0a30407524_92839108', 'breadcrumbs_area');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_654814455eea0a30411204_57126671', "pageContent");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'frontend/index/index.tpl');
}
/* {block 'breadcrumbs_area'} */
class Block_1198525125eea0a30407524_92839108 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumbs_area' => 
  array (
    0 => 'Block_1198525125eea0a30407524_92839108',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <!--breadcrumbs area start-->
  <div class="breadcrumbs_area" <?php if ($_smarty_tpl->tpl_vars['category']->value['image']) {?>style="background: url('<?php echo $_smarty_tpl->tpl_vars['category']->value['image']['path'];?>
')"<?php }?>>
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="breadcrumb_content">
                      <h3><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
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
/* {block 'sidebar'} */
class Block_16509396185eea0a304136a3_04028171 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php $_smarty_tpl->_subTemplateRender("file:frontend/category/filter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'sidebar'} */
/* {block 'wraper'} */
class Block_18585395575eea0a30417493_69592906 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php $_smarty_tpl->_subTemplateRender("file:frontend/category/listing.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'wraper'} */
/* {block "pageContent"} */
class Block_654814455eea0a30411204_57126671 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageContent' => 
  array (
    0 => 'Block_654814455eea0a30411204_57126671',
  ),
  'sidebar' => 
  array (
    0 => 'Block_16509396185eea0a304136a3_04028171',
  ),
  'wraper' => 
  array (
    0 => 'Block_18585395575eea0a30417493_69592906',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



  <!--shop  area start-->
  <div class="shop_area mt-70 mb-70">
      <div class="container">
          <div class="row">
              <div class="filter-action-container col-12 d-lg-none">
                <div class="filter-opener shop_toolbar_wrapper">
                  <a href="javascript:void(0)" class="filter-opener-button btn btn-outline-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"filter"),$_smarty_tpl ) );?>
</a>
                </div>
              </div>
              <div class="col-lg-3 col-md-12 col-12 filter-container hidden-before-lg">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16509396185eea0a304136a3_04028171', 'sidebar', $this->tplIndex);
?>

              </div>
              <div class="col-lg-9 col-md-12 col-12" data-content=true>
                <!--shop wrapper start-->
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18585395575eea0a30417493_69592906', 'wraper', $this->tplIndex);
?>

                <!--shop wrapper end-->
              </div>
          </div>
      </div>
  </div>
  <!--shop  area end-->
<?php
}
}
/* {/block "pageContent"} */
}
