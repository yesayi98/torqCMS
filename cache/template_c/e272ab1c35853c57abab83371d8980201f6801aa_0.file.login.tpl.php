<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-26 11:40:33
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\login\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef5a6711d3d03_31313804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e272ab1c35853c57abab83371d8980201f6801aa' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\login\\login.tpl',
      1 => 1587040072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef5a6711d3d03_31313804 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11404953575ef5a671115ce1_60374156', "sitebar-wrapper");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17253854975ef5a6711177b9_99496913', "header");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17219944855ef5a671118466_35311658', "content-wrapper");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_445027705ef5a6711d3383_39330530', "footer");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "backend/index/index.tpl");
}
/* {block "sitebar-wrapper"} */
class Block_11404953575ef5a671115ce1_60374156 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sitebar-wrapper' => 
  array (
    0 => 'Block_11404953575ef5a671115ce1_60374156',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 <?php
}
}
/* {/block "sitebar-wrapper"} */
/* {block "header"} */
class Block_17253854975ef5a6711177b9_99496913 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_17253854975ef5a6711177b9_99496913',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "header"} */
/* {block "content-wrapper"} */
class Block_17219944855ef5a671118466_35311658 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content-wrapper' => 
  array (
    0 => 'Block_17219944855ef5a671118466_35311658',
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
class Block_445027705ef5a6711d3383_39330530 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_445027705ef5a6711d3383_39330530',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "footer"} */
}
