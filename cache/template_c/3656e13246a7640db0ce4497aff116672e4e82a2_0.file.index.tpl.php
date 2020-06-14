<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-14 23:50:38
  from 'D:\OSPanel\domains\torq\public\frontend\customs\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee68d9e28e0e3_20023045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3656e13246a7640db0ce4497aff116672e4e82a2' => 
    array (
      0 => 'D:\\OSPanel\\domains\\torq\\public\\frontend\\customs\\index.tpl',
      1 => 1591636513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee68d9e28e0e3_20023045 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8480439705ee68d9e27b5c5_95580848', 'breadcrumbs_area');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21286020435ee68d9e28c281_92030067', "pageContent");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "frontend/index/index.tpl");
}
/* {block 'breadcrumbs_area'} */
class Block_8480439705ee68d9e27b5c5_95580848 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumbs_area' => 
  array (
    0 => 'Block_8480439705ee68d9e27b5c5_95580848',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="breadcrumbs_area" <?php if ($_smarty_tpl->tpl_vars['custom']->value['image']['path']) {?>style="background: url(<?php echo $_smarty_tpl->tpl_vars['custom']->value['image']['path'];?>
) no-repeat 0 0"<?php }?>>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <h3><?php echo $_smarty_tpl->tpl_vars['custom']->value['name'];?>
</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
}
/* {/block 'breadcrumbs_area'} */
/* {block "pageContent"} */
class Block_21286020435ee68d9e28c281_92030067 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageContent' => 
  array (
    0 => 'Block_21286020435ee68d9e28c281_92030067',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section class="about_section">
     <div class="container">
          <div class="row">
              <div class="col-12">
                 <?php echo $_smarty_tpl->tpl_vars['custom']->value['description'];?>

              </div>
          </div>
      </div>
  </section>
<?php
}
}
/* {/block "pageContent"} */
}
