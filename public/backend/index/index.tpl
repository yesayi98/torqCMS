{block name="html_document"}
<!DOCTYPE html>
<html lang="en">
{block name='head'}
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <base href="{$BASE_BACKEND}">
    <title>Torq ADMIN</title>
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet"/>
    <script src="assets/js/pace.min.js"></script>
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon.ico.png" type="image/x-icon">
    <!-- Vector CSS -->
    {block name="css-container"}
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
    {/block}

  </head>
{/block}

{block name="body"}

<body class="bg-theme bg-theme2">


  {block name="wrapper"}
  <!-- Start wrapper-->
   <div id="wrapper">
     {block name="sitebar-wrapper"}
     <!-- Start sitebar-wrapper-->

     <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
       {block name="logo-container"}
         <div class="brand-logo">
            <a href="{url url="backend"}">
             <img src="{$BASE_BACKEND}assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
             <h5 class="logo-text">Torq Admin</h5>
           </a>
         </div>
        {/block}
        {block name="sitebar-menu"}
          <ul class="sidebar-menu">
            <li class="sidebar-header">MAIN NAVIGATION</li>
            {foreach $menu as $menuItem}
              {block name="menu-item"}
                <li>
                  <a href="{url url=$menuItem.url}" class="waves-effect {$menuItem.name|lower}" data-action="{$menuItem.name|lower}">
                    <i class="{$menuItem.icon}"></i> <span>{$menuItem.name}</span>
                    {if $menuItem.has_children}
                      <i class="fa fa-angle-left pull-right"></i>
                    {/if}
                  </a>
                  {if $menuItem.has_children}
                    <ul class="sidebar-submenu">
                      {foreach $menuItem.children as $child}
                        <li><a href="{url url=$child.url}"><i class="{$child.icon}"></i>{$child.name}</a></li>
                      {/foreach}
                    </ul>
                  {/if}

                </li>
              {/block}
            {/foreach}

            <li class="sidebar-header">LABELS</li>
            <li><a href="http://armcoding.com" class="waves-effect"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a></li>
          </ul>
        {/block}

     </div>
     <!--End sidebar-wrapper-->
  {/block}

  {block name="header"}
  <!--Start topbar header-->

  <header class="topbar-nav">
    {block name="top-navbar"}
    <nav class="navbar navbar-expand fixed-top">
      {block name="navigation-left"}
        <ul class="navbar-nav mr-auto align-items-center">
          <li class="nav-item">
            <a class="nav-link toggle-menu" href="javascript:void();">
              <i class="icon-menu menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <form class="search-bar" action="{url url='backend/search'}">
              <input type="text" class="form-control" placeholder="Enter keywords">
              <a href="javascript:void();"><i class="icon-magnifier"></i></a>
            </form>
          </li>
        </ul>
      {/block}
      {block name="navigation-right"}
      <ul class="navbar-nav align-items-center right-nav-link">
        {block name="navigation-notifications"}
          <li class="nav-item dropdown-lg">
            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
              <i class="fa fa-bell-o"></i><span class="badge badge-info badge-up">0</span></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">you not have any notifications</li>
                  </ul>
            </div>
          </li>
        {/block}
        {block name="navigation-admin"}
        <li class="nav-item">
          <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="index.html#">
            <span class="user-profile"><img src="{$BASE_BACKEND}assets/images/avatars/avatar-13.png" class="img-circle" alt="user avatar"></span>
          </a>
          <ul class="dropdown-menu dropdown-menu-right">
           <li class="dropdown-item user-details">
            <a href="javaScript:void();">
               <div class="media">
                 <div class="avatar"><img class="align-self-start mr-3" src="{$BASE_BACKEND}assets/images/avatars/avatar-13.png" alt="user avatar"></div>
                <div class="media-body">
                <h6 class="mt-2 user-title">{$admin.name}</h6>
                <p class="user-subtitle">{$admin.email}</p>
                </div>
               </div>
              </a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-item"><a href="{url url='backend/admin/profile'}"><i class="icon-wallet mr-2"></i> Account</a></li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-item"><a href="{url url='backend/admin/logout'}"><i class="icon-power mr-2"></i> Logout</a></li>
          </ul>
        </li>
        {/block}
      </ul>
      {/block}
    </nav>
    {/block}
  </header>
  <!--End topbar header-->
  {/block}


  <div class="clearfix"></div>
  {block name="content-wrapper"}
  <div class="content-wrapper">
    <div class="container-fluid" {if $route.controller == 'index' || $route.controller == 'categories' || $route.action == 'detail'}data-content="true"{/if}>
      {block name="container-content"}
      <!--Start Dashboard Content-->

  <div class="card mt-3">
    <div class="card-content">
        <div class="row row-group m-0">
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">{$orderCount} / <span class="orders relative-box"></span> <span class="float-right"><i class="fa fa-shopping-cart"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Total Orders</p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">{$articleCount} <span class="float-right"><i class="zmdi zmdi-labels"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Articles</p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">{$userCount} <span class="float-right"><i class="fa fa-eye"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Users</p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">{$ordersTotal.price} Դ <span class="float-right"><i class="fa fa-envira"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:{$ordersTotal.percent}"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Daily Income <span class="float-right">{$ordersTotal.percent} {if $ordersTotal.up}<i class="zmdi zmdi-long-arrow-up">{else}<i class="zmdi zmdi-long-arrow-down">{/if}</i></span></p>
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
         {include file='backend/orders/table.tpl'}
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
             {block name="table-head"}
               <thead>
                   <tr>
                       <th>ID</th>
                       <th>Name</th>
                       <th>Action</th>
                   </tr>
               </thead>
             {/block}
             {block name="table-body"}
               <tbody>
                 {foreach $users as $user}
                   <tr>
                       <td>{$user.id}</td>
                       <td>{$user.name} {$user.lastname}</td>
                       <td>
                         <a href="{url url='backend/users/detail?u='|cat:$user.id}" class="btn btn-info waves-effect waves-light m-1"><i class="fa fa-pencil"></i></a>
                       </td>
                   </tr>
                 {/foreach}
               </tbody>
             {/block}
           </table>
         </div>
       </div>
     </div>
   </div>
   <div class="col-12 col-lg-6 col-xl-6">
       <div class="card">
         <div class="card-header">Customer Review
           <div class="card-action">
             <div class="dropdown">
               <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                 <i class="icon-options"></i>
               </a>
               <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="javascript:void();">Action</a>
                  <a class="dropdown-item" href="javascript:void();">Another action</a>
                  <a class="dropdown-item" href="javascript:void();">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void();">Separated link</a>
               </div>
             </div>
           </div>
         </div>
         <div class="card-body">
           {action module="backend" controller="reviews"}
         </div>
         <div class="card-footer">
           <div class="action-container float-right">
             <a href="{url url="backend/reviews"}" class="btn btn-info">see more</a>
           </div>
         </div>
       </div>
    </div>
  </div><!--End Row-->

      <!--End Dashboard Content-->
    <!--start overlay-->
    <div class="overlay toggle-menu"></div>
  <!--end overlay-->
      {/block}
    </div>
    <!-- End container-fluid-->

    </div><!--End content-wrapper-->
  {/block}

     <!--Start Back To Top Button-->
      <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
      <!--End Back To Top Button-->
    {block name="footer"}
    <!--Start footer-->
    <footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2020 Armcoding
        </div>
      </div>
    </footer>
    <!--End footer-->
    {/block}


    {block name="right-sidebar"}
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
    {/block}
    </div>
    <!--End wrapper-->
  {/block}

  {block name="modal-container"}
  {/block}

  {block name="notification-container"}
    <div class="lobibox-notify-wrapper top right"></div>
  {/block}

  {block name="js-container"}
      <!-- Bootstrap core JavaScript-->
      <script src="{$BASE_BACKEND}assets/js/jquery.min.js"></script>
      <script src="{$BASE_BACKEND}assets/js/jquery.pubSub.js"></script>
      <script src="{$BASE_BACKEND}assets/js/jquery.notification.js"></script>
      <script src="{$BASE_BACKEND}assets/js/popper.min.js"></script>
      <script src="{$BASE_BACKEND}assets/js/bootstrap.min.js"></script>

      <!-- simplebar js -->
      <script src="{$BASE_BACKEND}assets/plugins/simplebar/js/simplebar.js"></script>
      <!-- sidebar-menu js -->
      <script src="{$BASE_BACKEND}assets/js/sidebar-menu.js"></script>

      <!-- Custom scripts -->
      <script src="{$BASE_BACKEND}assets/js/app-script.js"></script>
      <!-- Chart js -->

      <script src="{$BASE_BACKEND}assets/plugins/Chart.js/Chart.min.js"></script>
      <!-- Vector map JavaScript -->
      <script src="{$BASE_BACKEND}assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
      <script src="{$BASE_BACKEND}assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
      <!-- Easy Pie Chart JS -->
      <script src="{$BASE_BACKEND}assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>

      <!--notification js -->
      <script src="{$BASE_BACKEND}assets/plugins/notifications/js/lobibox.min.js"></script>
      <script src="{$BASE_BACKEND}assets/plugins/notifications/js/notifications.min.js"></script>
      <script src="{$BASE_BACKEND}assets/plugins/notifications/js/notification-custom-script.js"></script>

      <!-- Sparkline JS -->
      <script src="{$BASE_BACKEND}assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
      <script src="{$BASE_BACKEND}assets/plugins/jquery-knob/excanvas.js"></script>
      <script src="{$BASE_BACKEND}assets/plugins/jquery-knob/jquery.knob.js"></script>
      <script src="{$BASE_BACKEND}assets/js/jquery.paginator.js"></script>
        <script>
            window.route = {$route|@json_encode}
            $(function() {
                $(".knob").knob();
            });
        </script>
      {if $route.controller == 'index'}
        <!-- Index js -->
        <script src="{$BASE_BACKEND}assets/js/index.js"></script>
        <!-- loader scripts -->
        <script src="{$BASE_BACKEND}assets/js/jquery.loading-indicator.js"></script>
      {/if}


        {/block}
      </body>
    {/block}

  </html>

{/block}
