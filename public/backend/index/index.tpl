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
            <a href="index.html">
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
                  <a href="{url url=$menuItem.url}" class="waves-effect">
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
    <div class="container-fluid" {if $route.controller == 'index' || $route.controller == 'categories' || $route.controller == 'articles'}data-content="true"{/if}>
      {block name="container-content"}
      <!--Start Dashboard Content-->

  <div class="card mt-3">
    <div class="card-content">
        <div class="row row-group m-0">
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">9526 <span class="float-right"><i class="fa fa-shopping-cart"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Total Orders <span class="float-right">+4.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">8323 <span class="float-right"><i class="fa fa-usd"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Total Revenue <span class="float-right">+1.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">6200 <span class="float-right"><i class="fa fa-eye"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Visitors <span class="float-right">+5.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">5630 <span class="float-right"><i class="fa fa-envira"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Messages <span class="float-right">+2.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
            </div>
        </div>
    </div>
  </div>

  <div class="row">
     <div class="col-12 col-lg-8 col-xl-8">
      <div class="card">
     <div class="card-header">Site Traffic
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
        <ul class="list-inline">
        <li class="list-inline-item"><i class="fa fa-circle mr-2 text-white"></i>New Visitor</li>
        <li class="list-inline-item"><i class="fa fa-circle mr-2 text-light"></i>Old Visitor</li>
      </ul>
      <div class="chart-container-1">
        <canvas id="chart1"></canvas>
      </div>
     </div>

     <div class="row m-0 row-group text-center border-top border-light-3">
       <div class="col-12 col-lg-4">
         <div class="p-3">
           <h5 class="mb-0">45.87M</h5>
         <small class="mb-0">Overall Visitor <span> <i class="fa fa-arrow-up"></i> 2.43%</span></small>
         </div>
       </div>
       <div class="col-12 col-lg-4">
         <div class="p-3">
           <h5 class="mb-0">15:48</h5>
         <small class="mb-0">Visitor Duration <span> <i class="fa fa-arrow-up"></i> 12.65%</span></small>
         </div>
       </div>
       <div class="col-12 col-lg-4">
         <div class="p-3">
           <h5 class="mb-0">245.65</h5>
         <small class="mb-0">Pages/Visit <span> <i class="fa fa-arrow-up"></i> 5.62%</span></small>
         </div>
       </div>
     </div>

    </div>
   </div>

     <div class="col-12 col-lg-4 col-xl-4">
        <div class="card">
           <div class="card-header">Weekly sales
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
         <div class="chart-container-2">
               <canvas id="chart2"></canvas>
        </div>
           </div>
           <div class="table-responsive">
             <table class="table align-items-center">
               <tbody>
                 <tr>
                   <td><i class="fa fa-circle text-white mr-2"></i> Direct</td>
                   <td>$5856</td>
                   <td>+55%</td>
                 </tr>
                 <tr>
                   <td><i class="fa fa-circle text-light-1 mr-2"></i>Affiliate</td>
                   <td>$2602</td>
                   <td>+25%</td>
                 </tr>
                 <tr>
                   <td><i class="fa fa-circle text-light-2 mr-2"></i>E-mail</td>
                   <td>$1802</td>
                   <td>+15%</td>
                 </tr>
                 <tr>
                   <td><i class="fa fa-circle text-light-3 mr-2"></i>Other</td>
                   <td>$1105</td>
                   <td>+5%</td>
                 </tr>
               </tbody>
             </table>
           </div>
         </div>
     </div>
  </div><!--End Row-->

   <div class="row">
  <div class="col-12 col-lg-6 col-xl-4">
     <div class="card">
       <div class="card-body">
       <div class="media align-items-center">
         <div class="w_chart easy-dash-chart" data-percent="60">
         <span class="w_percent"></span>
       </div>
       <div class="media-body ml-3">
         <h6 class="mb-0">Facebook Followers</h6>
         <small class="mb-0">22.14% <i class="fa fa-arrow-up"></i> Since Last Week</small>
       </div>
       <i class="fa fa-facebook text-white text-right fa-2x"></i>
       </div>
     </div>
     </div>
   </div>
   <div class="col-12 col-lg-6 col-xl-4">
     <div class="card">
       <div class="card-body">
       <div class="media align-items-center">
         <div class="w_chart easy-dash-chart" data-percent="65">
         <span class="w_percent"></span>
       </div>
       <div class="media-body ml-3">
         <h6 class="mb-0">Twitter Tweets</h6>
         <small class="mb-0">32.15% <i class="fa fa-arrow-up"></i> Since Last Week</small>
       </div>
       <i class="fa fa-twitter text-white text-right fa-2x"></i>
       </div>
     </div>
     </div>
   </div>
   <div class="col-12 col-lg-12 col-xl-4">
     <div class="card">
       <div class="card-body">
       <div class="media align-items-center">
         <div class="w_chart easy-dash-chart" data-percent="75">
         <span class="w_percent"></span>
       </div>
       <div class="media-body ml-3">
         <h6 class="mb-0">Youtube Subscribers</h6>
         <small class="mb-0">58.24% <i class="fa fa-arrow-up"></i> Since Last Week</small>
       </div>
       <i class="fa fa-youtube text-white fa-2x"></i>
       </div>
     </div>
     </div>
   </div>
  </div><!--End Row-->


  <div class="row">
     <div class="col-12 col-lg-12 col-xl-6">
       <div class="card">
         <div class="card-header">World Selling Region
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
            <div id="dashboard-map" style="height: 275px;"></div>
         </div>
         <div class="table-responsive">
            <table class="table table-hover align-items-center">
               <thead>
                  <tr>
                      <th>Country</th>
                      <th>Income</th>
                      <th>Trend</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td><i class="flag-icon flag-icon-ca mr-2"></i> USA</td>
                      <td>4,586$</td>
                      <td><span id="trendchart1"></span></td>
                  </tr>
                  <tr>
                      <td><i class="flag-icon flag-icon-us mr-2"></i>Canada</td>
                      <td>2,089$</td>
                      <td><span id="trendchart2"></span></td>
                  </tr>

                  <tr>
                      <td><i class="flag-icon flag-icon-in mr-2"></i>India</td>
                      <td>3,039$</td>
                      <td><span id="trendchart3"></span></td>
                  </tr>

                  <tr>
                      <td><i class="flag-icon flag-icon-gb mr-2"></i>UK</td>
                      <td>2,309$</td>
                      <td><span id="trendchart4"></span></td>
                  </tr>

                  <tr>
                      <td><i class="flag-icon flag-icon-de mr-2"></i>Germany</td>
                      <td>7,209$</td>
                      <td><span id="trendchart5"></span></td>
                  </tr>

              </tbody>
          </table>
          </div>
       </div>
     </div>

   <div class="col-12 col-lg-12 col-xl-6">
        <div class="row">
      <div class="col-12 col-lg-6">
        <div class="card">
       <div class="card-body">
        <p>Page Views</p>
        <h4 class="mb-0">8,293 <small class="small-font">5.2% <i class="zmdi zmdi-long-arrow-up"></i></small></h4>
       </div>
       <div class="chart-container-3">
         <canvas id="chart3"></canvas>
       </div>
       </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="card">
       <div class="card-body">
        <p>Total Clicks</p>
        <h4 class="mb-0">7,493 <small class="small-font">1.4% <i class="zmdi zmdi-long-arrow-up"></i></small></h4>
       </div>
       <div class="chart-container-3">
        <canvas id="chart4"></canvas>
        </div>
       </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="card">
       <div class="card-body text-center">
        <p class="mb-4">Total Downloads</p>
        <input class="knob" data-width="175" data-height="175" data-readOnly="true" data-thickness=".2" data-angleoffset="90" data-linecap="round" data-bgcolor="rgba(255, 255, 255, 0.14)" data-fgcolor="#fff" data-max="15000" value="8550"/>
        <hr>
        <p class="mb-0 small-font text-center">3.4% <i class="zmdi zmdi-long-arrow-up"></i> since yesterday</p>
       </div>
       </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="card">
       <div class="card-body">
        <p>Device Storage</p>
        <h4 class="mb-3">42620/50000</h4>
        <hr>
        <div class="progress-wrapper mb-4">
           <p>Documents <span class="float-right">12GB</span></p>
                   <div class="progress" style="height:5px;">
                       <div class="progress-bar" style="width:80%"></div>
                   </div>
                </div>

        <div class="progress-wrapper mb-4">
           <p>Images <span class="float-right">10GB</span></p>
                   <div class="progress" style="height:5px;">
                       <div class="progress-bar" style="width:60%"></div>
                   </div>
                </div>

        <div class="progress-wrapper mb-4">
            <p>Mails <span class="float-right">5GB</span></p>
                   <div class="progress" style="height:5px;">
                       <div class="progress-bar" style="width:40%"></div>
                   </div>
                </div>

       </div>
       </div>
      </div>
    </div>
   </div>

  </div><!--End Row-->


    <div class="row">
      <div class="col-12 col-lg-6 col-xl-4">
        <div class="card">
           <div class="card-body">
             <p>Total Earning</p>
             <h4 class="mb-0">287,493$</h4>
             <small>1.4% <i class="zmdi zmdi-long-arrow-up"></i> Since Last Month</small>
             <hr>
             <p>Total Sales</p>
             <h4 class="mb-0">87,493</h4>
             <small>5.43% <i class="zmdi zmdi-long-arrow-up"></i> Since Last Month</small>
             <div class="mt-5">
       <div class="chart-container-4">
               <canvas id="chart5"></canvas>
        </div>
            </div>
           </div>
        </div>

      </div>

      <div class="col-12 col-lg-6 col-xl-8">
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
           <ul class="list-group list-group-flush">
              <li class="list-group-item bg-transparent">
                <div class="media align-items-center">
                  <img src="{$BASE_BACKEND}assets/images/avatars/avatar-13.png" alt="user avatar" class="customer-img rounded-circle">
                <div class="media-body ml-3">
                  <h6 class="mb-0">iPhone X <small class="ml-4">08.34 AM</small></h6>
                  <p class="mb-0 small-font">Sara Jhon : This i svery Nice phone in low budget.</p>
                </div>
                <div class="star">
                  <i class="zmdi zmdi-star"></i>
                  <i class="zmdi zmdi-star"></i>
                  <i class="zmdi zmdi-star"></i>
                  <i class="zmdi zmdi-star text-light"></i>
                  <i class="zmdi zmdi-star text-light"></i>
                </div>
              </div>
              </li>
              <li class="list-group-item bg-transparent">
                <div class="media align-items-center">
                  <img src="{$BASE_BACKEND}assets/images/avatars/avatar-15.png" alt="user avatar" class="customer-img rounded-circle">
                <div class="media-body ml-3">
                  <h6 class="mb-0">Air Pod <small class="ml-4">05.26 PM</small></h6>
                  <p class="mb-0 small-font">Danish Josh : The brand apple is original !</p>
                </div>
                <div class="star">
                  <i class="zmdi zmdi-star"></i>
                  <i class="zmdi zmdi-star"></i>
                  <i class="zmdi zmdi-star"></i>
                  <i class="zmdi zmdi-star text-light"></i>
                  <i class="zmdi zmdi-star text-light"></i>
                </div>
              </div>
              </li>
        <li class="list-group-item bg-transparent">
                <div class="media align-items-center">
                  <img src="{$BASE_BACKEND}assets/images/avatars/avatar-14.png" alt="user avatar" class="customer-img rounded-circle">
                <div class="media-body ml-3">
                  <h6 class="mb-0">Mackbook Pro <small class="ml-4">06.45 AM</small></h6>
                  <p class="mb-0 small-font">Jhon Doe : Excllent product and awsome quality</p>
                </div>
                <div class="star">
                  <i class="zmdi zmdi-star"></i>
                  <i class="zmdi zmdi-star"></i>
                  <i class="zmdi zmdi-star"></i>
                  <i class="zmdi zmdi-star text-light"></i>
                  <i class="zmdi zmdi-star text-light"></i>
                </div>
              </div>
              </li>
              <li class="list-group-item bg-transparent">
                <div class="media align-items-center">
                  <img src="{$BASE_BACKEND}assets/images/avatars/avatar-16.png" alt="user avatar" class="customer-img rounded-circle">
                <div class="media-body ml-3">
                  <h6 class="mb-0">Air Pod <small class="ml-4">08.34 AM</small></h6>
                  <p class="mb-0 small-font">Christine : The brand apple is original !</p>
                </div>
                <div class="star">
                  <i class="zmdi zmdi-star"></i>
                  <i class="zmdi zmdi-star"></i>
                  <i class="zmdi zmdi-star"></i>
                  <i class="zmdi zmdi-star"></i>
                  <i class="zmdi zmdi-star text-light"></i>
                </div>
              </div>
              </li>
              <li class="list-group-item bg-transparent">
                <div class="media align-items-center">
                  <img src="{$BASE_BACKEND}assets/images/avatars/avatar-17.png" alt="user avatar" class="customer-img rounded-circle">
                <div class="media-body ml-3">
                  <h6 class="mb-0">Mackbook <small class="ml-4">08.34 AM</small></h6>
                  <p class="mb-0 small-font">Michle : The brand apple is original !</p>
                </div>
                <div class="star">
                  <i class="zmdi zmdi-star"></i>
                  <i class="zmdi zmdi-star"></i>
                  <i class="zmdi zmdi-star"></i>
                  <i class="zmdi zmdi-star"></i>
                  <i class="zmdi zmdi-star text-light"></i>
                </div>
              </div>
              </li>
            </ul>
         </div>
      </div>
    </div><!--End Row-->

  <div class="row">
   <div class="col-12 col-lg-12">
     <div class="card">
       <div class="card-header">Recent Order Tables
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
         <div class="table-responsive">
                 <table class="table align-items-center table-flush table-borderless">
                  <thead>
                   <tr>
                     <th>Product</th>
                     <th>Photo</th>
                     <th>Product ID</th>
                     <th>Amount</th>
                     <th>Date</th>
                     <th>Shipping</th>
                   </tr>
                   </thead>
                   <tbody><tr>
                    <td>Iphone 5</td>
                    <td><img src="{$BASE_BACKEND}assets/images/products/01.png" class="product-img" alt="product img"></td>
                    <td>#9405822</td>
                    <td>$ 1250.00</td>
                    <td>03 Aug 2017</td>
          <td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 90%"></div>
                        </div></td>
                   </tr>

                   <tr>
                    <td>Earphone GL</td>
                    <td><img src="{$BASE_BACKEND}assets/images/products/02.png" class="product-img" alt="product img"></td>
                    <td>#9405820</td>
                    <td>$ 1500.00</td>
                    <td>03 Aug 2017</td>
          <td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 60%"></div>
                        </div></td>
                   </tr>

                   <tr>
                    <td>HD Hand Camera</td>
                    <td><img src="{$BASE_BACKEND}assets/images/products/03.png" class="product-img" alt="product img"></td>
                    <td>#9405830</td>
                    <td>$ 1400.00</td>
                    <td>03 Aug 2017</td>
          <td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 70%"></div>
                        </div></td>
                   </tr>

                   <tr>
                    <td>Clasic Shoes</td>
                    <td><img src="{$BASE_BACKEND}assets/images/products/04.png" class="product-img" alt="product img"></td>
                    <td>#9405825</td>
                    <td>$ 1200.00</td>
                    <td>03 Aug 2017</td>
          <td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 100%"></div>
                        </div></td>
                   </tr>

                   <tr>
                    <td>Hand Watch</td>
                    <td><img src="{$BASE_BACKEND}assets/images/products/05.png" class="product-img" alt="product img"></td>
                    <td>#9405840</td>
                    <td>$ 1800.00</td>
                    <td>03 Aug 2017</td>
          <td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 40%"></div>
                        </div></td>
                   </tr>

           <tr>
                    <td>Clasic Shoes</td>
                    <td><img src="{$BASE_BACKEND}assets/images/products/06.png" class="product-img" alt="product img"></td>
                    <td>#9405825</td>
                    <td>$ 1200.00</td>
                    <td>03 Aug 2017</td>
          <td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 100%"></div>
                        </div></td>
                   </tr>

                 </tbody></table>
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
      {if $route.controller != 'index'}
        <script src="{$BASE_BACKEND}assets/js/jquery.paginator.js"></script>
      {/if}
        <script>
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
