<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-01 10:37:37
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\index\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4dfa415c1a67_65240878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b68d4281bf11f43acb25dc3032bf3b31932e18af' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\index\\index.tpl',
      1 => 1598944480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:frontend/index/header.tpl' => 1,
    'file:frontend/index/footer.tpl' => 1,
    'file:frontend/index/modal.tpl' => 1,
  ),
),false)) {
function content_5f4dfa415c1a67_65240878 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20656420225f4dfa411a7290_98836753', "head");
?>


<body>

<!--header area start-->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7592620205f4dfa41299928_39361158', "header");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_511337605f4dfa41313c36_55467088', 'breadcrumbs_area');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12578458345f4dfa41314977_92165735', "pageContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16245266385f4dfa413c3002_64604800', "footer");
?>


    <!-- modal area start-->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21082106455f4dfa413c44d0_66791604', "modal-area");
?>

    <!-- modal area end-->


<!-- JS
============================================ -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12176648885f4dfa413c5829_82058106', "javascript-area");
?>


<?php if ($_smarty_tpl->tpl_vars['message']->value) {
echo '<script'; ?>
 type="text/javascript">
  jQuery(document).ready(function($) {
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['message']->value, 'messages', false, 'type', 'name', array (
));
$_smarty_tpl->tpl_vars['messages']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['messages']->value) {
$_smarty_tpl->tpl_vars['messages']->do_else = false;
?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'mess');
$_smarty_tpl->tpl_vars['mess']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mess']->value) {
$_smarty_tpl->tpl_vars['mess']->do_else = false;
?>
        <?php $_smarty_tpl->_assignInScope('selector', (($_smarty_tpl->tpl_vars['type']->value).('_')).($_smarty_tpl->tpl_vars['mess']->value));?>
        round_<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
_noti('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>((string)$_smarty_tpl->tpl_vars['selector']->value)),$_smarty_tpl ) );?>
');
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  });
<?php echo '</script'; ?>
>
<?php }?>

</body>

</html>
<?php }
/* {block 'stylesheet-area'} */
class Block_9697102835f4dfa412912c0_10634906 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <!-- CSS
      ========================= -->
      <!--font awesome css-->
      <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/css/font.awesome.css">
      <!--ionicons css-->
      <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/css/ionicons.min.css">
      <!--linearicons css-->
      <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/css/linearicons.css">
      <!--themify-icons css-->
      <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/css/themify-icons.css">

      <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
">
    <?php
}
}
/* {/block 'stylesheet-area'} */
/* {block "head"} */
class Block_20656420225f4dfa411a7290_98836753 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_20656420225f4dfa411a7290_98836753',
  ),
  'stylesheet-area' => 
  array (
    0 => 'Block_9697102835f4dfa412912c0_10634906',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!Doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/img/favicon.ico">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9697102835f4dfa412912c0_10634906', 'stylesheet-area', $this->tplIndex);
?>

    <!--modernizr min js here-->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/js/vendor/modernizr-3.7.1.min.js"><?php echo '</script'; ?>
>
</head>
<?php
}
}
/* {/block "head"} */
/* {block "header"} */
class Block_7592620205f4dfa41299928_39361158 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_7592620205f4dfa41299928_39361158',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:frontend/index/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "header"} */
/* {block 'breadcrumbs_area'} */
class Block_511337605f4dfa41313c36_55467088 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumbs_area' => 
  array (
    0 => 'Block_511337605f4dfa41313c36_55467088',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'breadcrumbs_area'} */
/* {block "pageContent"} */
class Block_12578458345f4dfa41314977_92165735 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageContent' => 
  array (
    0 => 'Block_12578458345f4dfa41314977_92165735',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['has_emotions']->value) {?>
    <div class="emotion-section">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['action'][0], array( array('module'=>"frontend",'controller'=>"emotions",'action'=>'index'),$_smarty_tpl ) );?>

    </div>
  <?php }?>

<?php
}
}
/* {/block "pageContent"} */
/* {block "footer"} */
class Block_16245266385f4dfa413c3002_64604800 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_16245266385f4dfa413c3002_64604800',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:frontend/index/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "footer"} */
/* {block "modal-area"} */
class Block_21082106455f4dfa413c44d0_66791604 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modal-area' => 
  array (
    0 => 'Block_21082106455f4dfa413c44d0_66791604',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:frontend/index/modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block "modal-area"} */
/* {block "javascript-area"} */
class Block_12176648885f4dfa413c5829_82058106 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript-area' => 
  array (
    0 => 'Block_12176648885f4dfa413c5829_82058106',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/js/vendor/jquery-3.4.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  window.route = <?php echo json_encode($_smarty_tpl->tpl_vars['route']->value);?>
;
  window.currentCur = <?php echo json_encode($_smarty_tpl->tpl_vars['currentCur']->value);?>
;
  window.basketMessage = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"basketMessage"),$_smarty_tpl ) );?>
';
  window.wishlistMessage = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"wishlistMessage"),$_smarty_tpl ) );?>
';
  window.notFoundPath = '<?php echo $_smarty_tpl->tpl_vars['notFoundPath']->value;?>
';
<?php echo '</script'; ?>
>


<?php
}
}
/* {/block "javascript-area"} */
}
