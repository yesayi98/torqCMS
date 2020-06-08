<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-27 17:56:57
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\account\confirmation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ece7fb9a12290_79663484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77f6654ccbe665333e3cad8be53052d5b27c777b' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\account\\confirmation.tpl',
      1 => 1590591410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ece7fb9a12290_79663484 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7727593415ece7fb9a0d4f1_31507987', "pageContent");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'frontend/account/index.tpl');
}
/* {block "pageContent"} */
class Block_7727593415ece7fb9a0d4f1_31507987 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageContent' => 
  array (
    0 => 'Block_7727593415ece7fb9a0d4f1_31507987',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb_content">
              <div class="page-title mt-5 mb-5">
                <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'confirmyouremail'),$_smarty_tpl ) );?>
</h3>
              </div>
              <div class="page-content mb-5">
                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>''),$_smarty_tpl ) );?>
" class="btn btn-primary btn-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'home'),$_smarty_tpl ) );?>
</a>
              </div>
            </div>
        </div>
    </div>
</div>
<?php
}
}
/* {/block "pageContent"} */
}
