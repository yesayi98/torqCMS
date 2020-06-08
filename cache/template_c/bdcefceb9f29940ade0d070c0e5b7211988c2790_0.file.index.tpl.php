<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-13 15:21:20
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\media\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebbe640924846_68139612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdcefceb9f29940ade0d070c0e5b7211988c2790' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\media\\index.tpl',
      1 => 1589372471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:backend/media/medialist.tpl' => 1,
  ),
),false)) {
function content_5ebbe640924846_68139612 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15720963295ebbe640914e47_46960078', "css-container");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7562932825ebbe6409181e1_26135696', "container-content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6126240565ebbe64091e4d8_65278136', "modal-container");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4571283205ebbe640921c16_68143331', "js-container");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "backend/articles/index.tpl");
}
/* {block "css-container"} */
class Block_15720963295ebbe640914e47_46960078 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css-container' => 
  array (
    0 => 'Block_15720963295ebbe640914e47_46960078',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Dropzone css -->
  <link href="assets/plugins/dropzone/css/dropzone.css" rel="stylesheet" type="text/css">
  <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php
}
}
/* {/block "css-container"} */
/* {block "container-content"} */
class Block_7562932825ebbe6409181e1_26135696 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container-content' => 
  array (
    0 => 'Block_7562932825ebbe6409181e1_26135696',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="cart">
    <div class="cart-header">
      <h2 class="cart-title">Gallery Page</h2>
    </div>
    <div class="cart-body" data-content='true'>
      <?php $_smarty_tpl->_subTemplateRender("file:backend/media/medialist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('albums'=>$_smarty_tpl->tpl_vars['albums']->value,'media'=>$_smarty_tpl->tpl_vars['media']->value), 0, false);
?>
    </div>
  </div>
<?php
}
}
/* {/block "container-content"} */
/* {block "modal-container"} */
class Block_6126240565ebbe64091e4d8_65278136 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modal-container' => 
  array (
    0 => 'Block_6126240565ebbe64091e4d8_65278136',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="modal fade gallery-modal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Media</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="contaiener" data-content="true" data-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/media/detail'),$_smarty_tpl ) );?>
">

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
      </div>
    </div>
  </div>
</div>
<?php
}
}
/* {/block "modal-container"} */
/* {block "js-container"} */
class Block_4571283205ebbe640921c16_68143331 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js-container' => 
  array (
    0 => 'Block_4571283205ebbe640921c16_68143331',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

  <!--Detail Js-->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_BACKEND']->value;?>
assets/js/jquery.detail.js"><?php echo '</script'; ?>
>

<?php
}
}
/* {/block "js-container"} */
}
