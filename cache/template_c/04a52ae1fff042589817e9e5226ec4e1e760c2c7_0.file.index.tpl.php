<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-18 16:09:13
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\index\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f3bd2f9b569e3_36238501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04a52ae1fff042589817e9e5226ec4e1e760c2c7' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\index\\index.tpl',
      1 => 1597756152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:backend/orders/table.tpl' => 1,
  ),
),false)) {
function content_5f3bd2f9b569e3_36238501 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8060477605f3bd2f9ace4b0_80924276', "html_document");
?>

<?php }
/* {block "css-container"} */
class Block_16308863365f3bd2f9ad39c3_28252889 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
    <!-- simplebar CSS-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
    <!-- Bootstrap core CSS-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <!-- Sidebar CSS-->
    <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
    <!-- Custom Style-->
    <link href="assets/css/app-style.css" rel="stylesheet"/>

    <link rel="stylesheet" href="assets/plugins/notifications/css/lobibox.min.css">
    <?php
}
}
/* {/block "css-container"} */
/* {block 'head'} */
class Block_12484110475f3bd2f9ad06a4_47653977 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <base href="<?php echo $_smarty_tpl->tpl_vars['BASE_BACKEND']->value;?>
">
    <title>Torq ADMIN</title>
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet"/>
    <?php echo '<script'; ?>
 src="assets/js/pace.min.js"><?php echo '</script'; ?>
>
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon.ico.png" type="image/x-icon">
    <!-- Vector CSS -->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16308863365f3bd2f9ad39c3_28252889', "css-container", $this->tplIndex);
?>


  </head>
<?php
}
}
/* {/block 'head'} */
/* {block "logo-container"} */
class Block_12475103445f3bd2f9ad6aa9_49038123 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

         <div class="brand-logo">
            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>"backend"),$_smarty_tpl ) );?>
">
             <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_BACKEND']->value;?>
assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
             <h5 class="logo-text">Torq Admin</h5>
           </a>
         </div>
        <?php
}
}
/* {/block "logo-container"} */
/* {block "menu-item"} */
class Block_1424955175f3bd2f9ae9db7_09802307 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <li>
                  <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>$_smarty_tpl->tpl_vars['menuItem']->value['url']),$_smarty_tpl ) );?>
" class="waves-effect <?php echo mb_strtolower($_smarty_tpl->tpl_vars['menuItem']->value['name'], 'UTF-8');?>
" data-action="<?php echo mb_strtolower($_smarty_tpl->tpl_vars['menuItem']->value['name'], 'UTF-8');?>
">
                    <i class="<?php echo $_smarty_tpl->tpl_vars['menuItem']->value['icon'];?>
"></i> <span><?php echo $_smarty_tpl->tpl_vars['menuItem']->value['name'];?>
</span>
                    <?php if ($_smarty_tpl->tpl_vars['menuItem']->value['has_children']) {?>
                      <i class="fa fa-angle-left pull-right"></i>
                    <?php }?>
                  </a>
                  <?php if ($_smarty_tpl->tpl_vars['menuItem']->value['has_children']) {?>
                    <ul class="sidebar-submenu">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menuItem']->value['children'], 'child');
$_smarty_tpl->tpl_vars['child']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->do_else = false;
?>
                        <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>$_smarty_tpl->tpl_vars['child']->value['url']),$_smarty_tpl ) );?>
"><i class="<?php echo $_smarty_tpl->tpl_vars['child']->value['icon'];?>
"></i><?php echo $_smarty_tpl->tpl_vars['child']->value['name'];?>
</a></li>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                  <?php }?>

                </li>
              <?php
}
}
/* {/block "menu-item"} */
/* {block "sitebar-menu"} */
class Block_18569081355f3bd2f9add5b6_51202533 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <ul class="sidebar-menu">
            <li class="sidebar-header">MAIN NAVIGATION</li>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu']->value, 'menuItem');
$_smarty_tpl->tpl_vars['menuItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menuItem']->value) {
$_smarty_tpl->tpl_vars['menuItem']->do_else = false;
?>
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1424955175f3bd2f9ae9db7_09802307', "menu-item", $this->tplIndex);
?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <li class="sidebar-header">LABELS</li>
            <li><a href="http://armcoding.com" class="waves-effect"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a></li>
          </ul>
        <?php
}
}
/* {/block "sitebar-menu"} */
/* {block "sitebar-wrapper"} */
class Block_16639821885f3bd2f9ad5cf1_29263161 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     <!-- Start sitebar-wrapper-->

     <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
       <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12475103445f3bd2f9ad6aa9_49038123', "logo-container", $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18569081355f3bd2f9add5b6_51202533', "sitebar-menu", $this->tplIndex);
?>


     </div>
     <!--End sidebar-wrapper-->
  <?php
}
}
/* {/block "sitebar-wrapper"} */
/* {block "navigation-left"} */
class Block_11753518505f3bd2f9b0a1b9_94128634 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <ul class="navbar-nav mr-auto align-items-center">
          <li class="nav-item">
            <a class="nav-link toggle-menu" href="javascript:void();">
              <i class="icon-menu menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <form class="search-bar" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/search'),$_smarty_tpl ) );?>
">
              <input type="text" class="form-control" placeholder="Enter keywords">
              <a href="javascript:void();"><i class="icon-magnifier"></i></a>
            </form>
          </li>
        </ul>
      <?php
}
}
/* {/block "navigation-left"} */
/* {block "navigation-notifications"} */
class Block_8376334805f3bd2f9b0d078_33314278 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <li class="nav-item dropdown-lg">
            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
              <i class="fa fa-bell-o"></i><span class="badge badge-info badge-up">0</span></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">you not have any notifications</li>
                  </ul>
            </div>
          </li>
        <?php
}
}
/* {/block "navigation-notifications"} */
/* {block "navigation-admin"} */
class Block_12440995305f3bd2f9b0e545_69117926 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <li class="nav-item">
          <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="index.html#">
            <span class="user-profile"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_BACKEND']->value;?>
assets/images/avatars/avatar-13.png" class="img-circle" alt="user avatar"></span>
          </a>
          <ul class="dropdown-menu dropdown-menu-right">
           <li class="dropdown-item user-details">
            <a href="javaScript:void();">
               <div class="media">
                 <div class="avatar"><img class="align-self-start mr-3" src="<?php echo $_smarty_tpl->tpl_vars['BASE_BACKEND']->value;?>
assets/images/avatars/avatar-13.png" alt="user avatar"></div>
                <div class="media-body">
                <h6 class="mt-2 user-title"><?php echo $_smarty_tpl->tpl_vars['admin']->value['name'];?>
</h6>
                <p class="user-subtitle"><?php echo $_smarty_tpl->tpl_vars['admin']->value['email'];?>
</p>
                </div>
               </div>
              </a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-item"><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/admin/profile'),$_smarty_tpl ) );?>
"><i class="icon-wallet mr-2"></i> Account</a></li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-item"><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/admin/logout'),$_smarty_tpl ) );?>
"><i class="icon-power mr-2"></i> Logout</a></li>
          </ul>
        </li>
        <?php
}
}
/* {/block "navigation-admin"} */
/* {block "navigation-right"} */
class Block_13901900195f3bd2f9b0c068_15062158 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <ul class="navbar-nav align-items-center right-nav-link">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8376334805f3bd2f9b0d078_33314278', "navigation-notifications", $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12440995305f3bd2f9b0e545_69117926', "navigation-admin", $this->tplIndex);
?>

      </ul>
      <?php
}
}
/* {/block "navigation-right"} */
/* {block "top-navbar"} */
class Block_1163207195f3bd2f9b08b95_23999705 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <nav class="navbar navbar-expand fixed-top">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11753518505f3bd2f9b0a1b9_94128634', "navigation-left", $this->tplIndex);
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13901900195f3bd2f9b0c068_15062158', "navigation-right", $this->tplIndex);
?>

    </nav>
    <?php
}
}
/* {/block "top-navbar"} */
/* {block "header"} */
class Block_21331622165f3bd2f9b07623_52104773 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <!--Start topbar header-->

  <header class="topbar-nav">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1163207195f3bd2f9b08b95_23999705', "top-navbar", $this->tplIndex);
?>

  </header>
  <!--End topbar header-->
  <?php
}
}
/* {/block "header"} */
/* {block "table-head"} */
class Block_15294986925f3bd2f9b386d9_82611818 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

               <thead>
                   <tr>
                       <th>ID</th>
                       <th>Name</th>
                       <th>Action</th>
                   </tr>
               </thead>
             <?php
}
}
/* {/block "table-head"} */
/* {block "table-body"} */
class Block_18472716095f3bd2f9b39cf9_58438121 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

               <tbody>
                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                   <tr>
                       <td><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</td>
                       <td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['lastname'];?>
</td>
                       <td>
                         <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('backend/users/detail?u=').($_smarty_tpl->tpl_vars['user']->value['id'])),$_smarty_tpl ) );?>
" class="btn btn-info waves-effect waves-light m-1"><i class="fa fa-pencil"></i></a>
                       </td>
                   </tr>
                 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
               </tbody>
             <?php
}
}
/* {/block "table-body"} */
/* {block "container-content"} */
class Block_1626594885f3bd2f9b2d127_03057045 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <!--Start Dashboard Content-->

  <div class="card mt-3">
    <div class="card-content">
        <div class="row row-group m-0">
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"><?php echo $_smarty_tpl->tpl_vars['orderCount']->value;?>
 / <span class="orders relative-box"></span> <span class="float-right"><i class="fa fa-shopping-cart"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Total Orders</p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"><?php echo $_smarty_tpl->tpl_vars['articleCount']->value;?>
 <span class="float-right"><i class="zmdi zmdi-labels"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Articles</p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"><?php echo $_smarty_tpl->tpl_vars['userCount']->value;?>
 <span class="float-right"><i class="fa fa-eye"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Users</p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"><?php echo $_smarty_tpl->tpl_vars['ordersTotal']->value['price'];?>
 Դ <span class="float-right"><i class="fa fa-envira"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:<?php echo $_smarty_tpl->tpl_vars['ordersTotal']->value['percent'];?>
"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Daily Income <span class="float-right"><?php echo $_smarty_tpl->tpl_vars['ordersTotal']->value['percent'];?>
 <?php if ($_smarty_tpl->tpl_vars['ordersTotal']->value['up']) {?><i class="zmdi zmdi-long-arrow-up"><?php } else { ?><i class="zmdi zmdi-long-arrow-down"><?php }?></i></span></p>
                </div>
            </div>
        </div>
    </div>
  </div>

  <div class="row">
   <div class="col-12 col-lg-9">
     <div class="card">
       <div class="card-header">Not Delivered Orders
       </div>
       <div class="content" data-content='true'>
         <?php $_smarty_tpl->_subTemplateRender('file:backend/orders/table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
       </div>
     </div>
   </div>
   <div class="col-12 col-lg-3">
     <div class="card">
       <div class="card-header">NEW USERS
       </div>
       <div class="content" data-content='true'>
         <div class="table-responsive">
           <table id="default-datatable" class="table table-bordered">
             <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15294986925f3bd2f9b386d9_82611818', "table-head", $this->tplIndex);
?>

             <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18472716095f3bd2f9b39cf9_58438121', "table-body", $this->tplIndex);
?>

           </table>
         </div>
       </div>
     </div>
   </div>
  </div><!--End Row-->

      <!--End Dashboard Content-->
    <!--start overlay-->
    <div class="overlay toggle-menu"></div>
  <!--end overlay-->
      <?php
}
}
/* {/block "container-content"} */
/* {block "content-wrapper"} */
class Block_11996955875f3bd2f9b14664_04611167 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="content-wrapper">
    <div class="container-fluid" <?php if ($_smarty_tpl->tpl_vars['route']->value['controller'] == 'index' || $_smarty_tpl->tpl_vars['route']->value['controller'] == 'categories' || $_smarty_tpl->tpl_vars['route']->value['action'] == 'detail') {?>data-content="true"<?php }?>>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1626594885f3bd2f9b2d127_03057045', "container-content", $this->tplIndex);
?>

    </div>
    <!-- End container-fluid-->

    </div><!--End content-wrapper-->
  <?php
}
}
/* {/block "content-wrapper"} */
/* {block "footer"} */
class Block_12144954695f3bd2f9b44a77_03328963 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!--Start footer-->
    <footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2020 Armcoding
        </div>
      </div>
    </footer>
    <!--End footer-->
    <?php
}
}
/* {/block "footer"} */
/* {block "right-sidebar"} */
class Block_1439748405f3bd2f9b46835_77799593 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!--start color switcher-->
    <div class="right-sidebar">
     <div class="switcher-icon">
       <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
     </div>
     <div class="right-sidebar-content">

       <p class="mb-0">Gaussion Texture</p>
       <hr>

       <ul class="switcher">
         <li id="theme1"></li>
         <li id="theme2"></li>
         <li id="theme3"></li>
         <li id="theme4"></li>
         <li id="theme5"></li>
         <li id="theme6"></li>
         <li id="theme16"></li>
       </ul>

       <p class="mb-0">Gradient Background</p>
       <hr>

       <ul class="switcher">
         <li id="theme7"></li>
         <li id="theme8"></li>
         <li id="theme9"></li>
         <li id="theme10"></li>
         <li id="theme11"></li>
         <li id="theme12"></li>
         <li id="theme13"></li>
         <li id="theme14"></li>
         <li id="theme15"></li>
       </ul>

      </div>
    </div>
   <!--end color switcher-->
    <?php
}
}
/* {/block "right-sidebar"} */
/* {block "wrapper"} */
class Block_7085917405f3bd2f9ad5522_14816278 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <!-- Start wrapper-->
   <div id="wrapper">
     <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16639821885f3bd2f9ad5cf1_29263161', "sitebar-wrapper", $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21331622165f3bd2f9b07623_52104773', "header", $this->tplIndex);
?>



  <div class="clearfix"></div>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11996955875f3bd2f9b14664_04611167', "content-wrapper", $this->tplIndex);
?>


     <!--Start Back To Top Button-->
      <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
      <!--End Back To Top Button-->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12144954695f3bd2f9b44a77_03328963', "footer", $this->tplIndex);
?>



    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1439748405f3bd2f9b46835_77799593', "right-sidebar", $this->tplIndex);
?>

    </div>
    <!--End wrapper-->
  <?php
}
}
/* {/block "wrapper"} */
/* {block "modal-container"} */
class Block_12892726025f3bd2f9b48732_99319853 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php
}
}
/* {/block "modal-container"} */
/* {block "notification-container"} */
class Block_18668325995f3bd2f9b49801_51895414 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="lobibox-notify-wrapper top right"></div>
  <?php
}
}
/* {/block "notification-container"} */
/* {block "js-container"} */
class Block_1158201865f3bd2f9b4aad6_71553383 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <!-- Bootstrap core JavaScript-->
      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_BACKEND']->value;?>
assets/js/jquery.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_BACKEND']->value;?>
assets/js/jquery.pubSub.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_BACKEND']->value;?>
assets/js/jquery.notification.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_BACKEND']->value;?>
assets/js/popper.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_BACKEND']->value;?>
assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>

      <!-- simplebar js -->
      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_BACKEND']->value;?>
assets/plugins/simplebar/js/simplebar.js"><?php echo '</script'; ?>
>
      <!-- sidebar-menu js -->
      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_BACKEND']->value;?>
assets/js/sidebar-menu.js"><?php echo '</script'; ?>
>

      <!-- Custom scripts -->
      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_BACKEND']->value;?>
assets/js/app-script.js"><?php echo '</script'; ?>
>
      <!-- Chart js -->

      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_BACKEND']->value;?>
assets/plugins/Chart.js/Chart.min.js"><?php echo '</script'; ?>
>
      <!-- Vector map JavaScript -->
      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_BACKEND']->value;?>
assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_BACKEND']->value;?>
assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"><?php echo '</script'; ?>
>
      <!-- Easy Pie Chart JS -->
      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_BACKEND']->value;?>
assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"><?php echo '</script'; ?>
>

      <!--notification js -->
      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_BACKEND']->value;?>
assets/plugins/notifications/js/lobibox.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_BACKEND']->value;?>
assets/plugins/notifications/js/notifications.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_BACKEND']->value;?>
assets/plugins/notifications/js/notification-custom-script.js"><?php echo '</script'; ?>
>

      <!-- Sparkline JS -->
      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_BACKEND']->value;?>
assets/plugins/sparkline-charts/jquery.sparkline.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_BACKEND']->value;?>
assets/plugins/jquery-knob/excanvas.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_BACKEND']->value;?>
assets/plugins/jquery-knob/jquery.knob.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_BACKEND']->value;?>
assets/js/jquery.paginator.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            window.route = <?php echo json_encode($_smarty_tpl->tpl_vars['route']->value);?>

            $(function() {
                $(".knob").knob();
            });
        <?php echo '</script'; ?>
>
      <?php if ($_smarty_tpl->tpl_vars['route']->value['controller'] == 'index') {?>
        <!-- Index js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_BACKEND']->value;?>
assets/js/index.js"><?php echo '</script'; ?>
>
        <!-- loader scripts -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_BACKEND']->value;?>
assets/js/jquery.loading-indicator.js"><?php echo '</script'; ?>
>
      <?php }?>


        <?php
}
}
/* {/block "js-container"} */
/* {block "body"} */
class Block_10686327075f3bd2f9ad4d01_40535733 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<body class="bg-theme bg-theme2">


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7085917405f3bd2f9ad5522_14816278', "wrapper", $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12892726025f3bd2f9b48732_99319853', "modal-container", $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18668325995f3bd2f9b49801_51895414', "notification-container", $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1158201865f3bd2f9b4aad6_71553383', "js-container", $this->tplIndex);
?>

      </body>
    <?php
}
}
/* {/block "body"} */
/* {block "html_document"} */
class Block_8060477605f3bd2f9ace4b0_80924276 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'html_document' => 
  array (
    0 => 'Block_8060477605f3bd2f9ace4b0_80924276',
  ),
  'head' => 
  array (
    0 => 'Block_12484110475f3bd2f9ad06a4_47653977',
  ),
  'css-container' => 
  array (
    0 => 'Block_16308863365f3bd2f9ad39c3_28252889',
  ),
  'body' => 
  array (
    0 => 'Block_10686327075f3bd2f9ad4d01_40535733',
  ),
  'wrapper' => 
  array (
    0 => 'Block_7085917405f3bd2f9ad5522_14816278',
  ),
  'sitebar-wrapper' => 
  array (
    0 => 'Block_16639821885f3bd2f9ad5cf1_29263161',
  ),
  'logo-container' => 
  array (
    0 => 'Block_12475103445f3bd2f9ad6aa9_49038123',
  ),
  'sitebar-menu' => 
  array (
    0 => 'Block_18569081355f3bd2f9add5b6_51202533',
  ),
  'menu-item' => 
  array (
    0 => 'Block_1424955175f3bd2f9ae9db7_09802307',
  ),
  'header' => 
  array (
    0 => 'Block_21331622165f3bd2f9b07623_52104773',
  ),
  'top-navbar' => 
  array (
    0 => 'Block_1163207195f3bd2f9b08b95_23999705',
  ),
  'navigation-left' => 
  array (
    0 => 'Block_11753518505f3bd2f9b0a1b9_94128634',
  ),
  'navigation-right' => 
  array (
    0 => 'Block_13901900195f3bd2f9b0c068_15062158',
  ),
  'navigation-notifications' => 
  array (
    0 => 'Block_8376334805f3bd2f9b0d078_33314278',
  ),
  'navigation-admin' => 
  array (
    0 => 'Block_12440995305f3bd2f9b0e545_69117926',
  ),
  'content-wrapper' => 
  array (
    0 => 'Block_11996955875f3bd2f9b14664_04611167',
  ),
  'container-content' => 
  array (
    0 => 'Block_1626594885f3bd2f9b2d127_03057045',
  ),
  'table-head' => 
  array (
    0 => 'Block_15294986925f3bd2f9b386d9_82611818',
  ),
  'table-body' => 
  array (
    0 => 'Block_18472716095f3bd2f9b39cf9_58438121',
  ),
  'footer' => 
  array (
    0 => 'Block_12144954695f3bd2f9b44a77_03328963',
  ),
  'right-sidebar' => 
  array (
    0 => 'Block_1439748405f3bd2f9b46835_77799593',
  ),
  'modal-container' => 
  array (
    0 => 'Block_12892726025f3bd2f9b48732_99319853',
  ),
  'notification-container' => 
  array (
    0 => 'Block_18668325995f3bd2f9b49801_51895414',
  ),
  'js-container' => 
  array (
    0 => 'Block_1158201865f3bd2f9b4aad6_71553383',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html lang="en">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12484110475f3bd2f9ad06a4_47653977', 'head', $this->tplIndex);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10686327075f3bd2f9ad4d01_40535733', "body", $this->tplIndex);
?>


  </html>

<?php
}
}
/* {/block "html_document"} */
}
