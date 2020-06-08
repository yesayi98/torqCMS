<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-07 12:58:42
  from 'D:\OSPanel\domains\torq\public\backend\login\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edcba52ee5949_53218799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77c9f2745ff5ab3166c674b4b9ce2be8cbcede52' => 
    array (
      0 => 'D:\\OSPanel\\domains\\torq\\public\\backend\\login\\login.tpl',
      1 => 1587040072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edcba52ee5949_53218799 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8145210685edcba52dd85d1_86400678', "sitebar-wrapper");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17384411185edcba52ddaa25_87786238', "header");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9813343245edcba52ddb9e8_91684783', "content-wrapper");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6320855785edcba52ee4d53_91247721', "footer");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "backend/index/index.tpl");
}
/* {block "sitebar-wrapper"} */
class Block_8145210685edcba52dd85d1_86400678 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sitebar-wrapper' => 
  array (
    0 => 'Block_8145210685edcba52dd85d1_86400678',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 <?php
}
}
/* {/block "sitebar-wrapper"} */
/* {block "header"} */
class Block_17384411185edcba52ddaa25_87786238 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_17384411185edcba52ddaa25_87786238',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "header"} */
/* {block "content-wrapper"} */
class Block_9813343245edcba52ddb9e8_91684783 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content-wrapper' => 
  array (
    0 => 'Block_9813343245edcba52ddb9e8_91684783',
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
class Block_6320855785edcba52ee4d53_91247721 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_6320855785edcba52ee4d53_91247721',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "footer"} */
}
