<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-16 17:24:27
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\customs\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebff79be36e42_67713249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15d0529002f6e6029fc1978afcf8ee9dd39e0a3f' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\customs\\index.tpl',
      1 => 1589639064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebff79be36e42_67713249 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17723116355ebff79be29b44_71329288', "pageContent");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "frontend/index/index.tpl");
}
/* {block "pageContent"} */
class Block_17723116355ebff79be29b44_71329288 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageContent' => 
  array (
    0 => 'Block_17723116355ebff79be29b44_71329288',
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
