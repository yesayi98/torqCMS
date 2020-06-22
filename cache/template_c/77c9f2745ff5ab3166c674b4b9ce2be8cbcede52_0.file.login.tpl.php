<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-18 23:32:53
  from 'D:\OSPanel\domains\torq\public\backend\login\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eebcf750f1739_25251122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77c9f2745ff5ab3166c674b4b9ce2be8cbcede52' => 
    array (
      0 => 'D:\\OSPanel\\domains\\torq\\public\\backend\\login\\login.tpl',
      1 => 1591636512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eebcf750f1739_25251122 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15467292815eebcf750e2475_23876632', "sitebar-wrapper");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18886676225eebcf750e5466_82328014', "header");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2703764975eebcf750e6b91_68930684', "content-wrapper");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16764143555eebcf750f0ba0_90484528', "footer");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "backend/index/index.tpl");
}
/* {block "sitebar-wrapper"} */
class Block_15467292815eebcf750e2475_23876632 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sitebar-wrapper' => 
  array (
    0 => 'Block_15467292815eebcf750e2475_23876632',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 <?php
}
}
/* {/block "sitebar-wrapper"} */
/* {block "header"} */
class Block_18886676225eebcf750e5466_82328014 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_18886676225eebcf750e5466_82328014',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "header"} */
/* {block "content-wrapper"} */
class Block_2703764975eebcf750e6b91_68930684 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content-wrapper' => 
  array (
    0 => 'Block_2703764975eebcf750e6b91_68930684',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="height-100v d-flex align-items-center justify-content-center">

 <div class="card card-authentication1 mb-0">
   <div class="card-body">
    <div class="card-content p-2">
     <div class="text-center">
       <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_BACKEND']->value;?>
assets/images/logo-icon.png" alt="logo icon">
     </div>
     <div class="card-title text-uppercase text-center py-3">Log in</div>
      <form class="login-form" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/admin/login'),$_smarty_tpl ) );?>
" method="post">
       <div class="form-group">
       <label for="exampleInputUsername" class="sr-only">Username</label>
        <div class="position-relative has-icon-right">
         <input type="text" id="exampleInputUsername" name="admin" class="form-control input-shadow" placeholder="Enter Username">
         <div class="form-control-position">
           <i class="icon-user"></i>
         </div>
        </div>
       </div>
       <div class="form-group">
       <label for="exampleInputPassword" class="sr-only">Password</label>
        <div class="position-relative has-icon-right">
         <input type="password" id="exampleInputPassword" name="password" class="form-control input-shadow" placeholder="Enter Password">
         <div class="form-control-position">
           <i class="icon-lock"></i>
         </div>
        </div>
       </div>
      <button type="submit" class="btn btn-light btn-block">Log in</button>


      </form>
      </div>
     </div>
      </div>
    </div>
<?php
}
}
/* {/block "content-wrapper"} */
/* {block "footer"} */
class Block_16764143555eebcf750f0ba0_90484528 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_16764143555eebcf750f0ba0_90484528',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "footer"} */
}
