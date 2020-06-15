<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-14 10:53:40
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\category\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee5d78489c791_82488232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5bf997225f37698a1db0b1ceaf6ddaa2457cb04' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\category\\index.tpl',
      1 => 1590479692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:frontend/category/filter.tpl' => 1,
    'file:frontend/category/listing.tpl' => 1,
  ),
),false)) {
function content_5ee5d78489c791_82488232 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_383395995ee5d784885601_93286753', 'breadcrumbs_area');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18872591205ee5d784892d52_55923160', "pageContent");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'frontend/index/index.tpl');
}
/* {block 'breadcrumbs_area'} */
class Block_383395995ee5d784885601_93286753 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumbs_area' => 
  array (
    0 => 'Block_383395995ee5d784885601_93286753',
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
class Block_9953899765ee5d784893593_86473596 extends Smarty_Internal_Block
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
class Block_15464951235ee5d78489ae10_78841354 extends Smarty_Internal_Block
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
class Block_18872591205ee5d784892d52_55923160 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageContent' => 
  array (
    0 => 'Block_18872591205ee5d784892d52_55923160',
  ),
  'sidebar' => 
  array (
    0 => 'Block_9953899765ee5d784893593_86473596',
  ),
  'wraper' => 
  array (
    0 => 'Block_15464951235ee5d78489ae10_78841354',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



  <!--shop  area start-->
  <div class="shop_area shop_reverse mt-70 mb-70">
      <div class="container">
          <div class="row">
              <div class="col-lg-3 col-md-12">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9953899765ee5d784893593_86473596', 'sidebar', $this->tplIndex);
?>

              </div>
              <div class="col-lg-9 col-md-12" data-content=true>
                <!--shop wrapper start-->
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15464951235ee5d78489ae10_78841354', 'wraper', $this->tplIndex);
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
