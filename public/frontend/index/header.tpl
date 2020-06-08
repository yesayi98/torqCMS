<!Doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{$title}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {* <base href="{$BASE_FRONTEND}"> *}
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{$BASE_FRONTEND}assets/img/favicon.ico">
    {block name='stylesheet-area'}
      <!-- CSS
      ========================= -->
      <!--bootstrap min css-->
      <link rel="stylesheet" href="{$BASE_FRONTEND}assets/css/bootstrap.min.css">
      <!--bootstrap min css-->
      <link rel="stylesheet" href="{$BASE_FRONTEND}assets/plugins/notifications/css/lobibox.min.css">
      <!--owl carousel min css-->
      <link rel="stylesheet" href="{$BASE_FRONTEND}assets/css/owl.carousel.min.css">
      <!--slick min css-->
      <link rel="stylesheet" href="{$BASE_FRONTEND}assets/css/slick.css">
      <!--magnific popup min css-->
      <link rel="stylesheet" href="{$BASE_FRONTEND}assets/css/magnific-popup.css">
      <!--font awesome css-->
      <link rel="stylesheet" href="{$BASE_FRONTEND}assets/css/font.awesome.css">
      <!--ionicons css-->
      <link rel="stylesheet" href="{$BASE_FRONTEND}assets/css/ionicons.min.css">
      <!--linearicons css-->
      <link rel="stylesheet" href="{$BASE_FRONTEND}assets/css/linearicons.css">
      <!--animate css-->
      <link rel="stylesheet" href="{$BASE_FRONTEND}assets/css/animate.css">
      <!--jquery ui min css-->
      <link rel="stylesheet" href="{$BASE_FRONTEND}assets/css/jquery-ui.min.css">
      <!--slinky menu css-->
      <link rel="stylesheet" href="{$BASE_FRONTEND}assets/css/slinky.menu.css">
      <!--plugins css-->
      <link rel="stylesheet" href="{$BASE_FRONTEND}assets/css/plugins.css">
      <!-- Main Style CSS -->
      <link rel="stylesheet" href="{$BASE_FRONTEND}assets/css/style.css">
    {/block}
    <!--modernizr min js here-->
    <script src="{$BASE_FRONTEND}assets/js/vendor/modernizr-3.7.1.min.js"></script>
</head>

<body>

<!--header area start-->


<!--offcanvas menu area start-->
    {block name='overlay'}
    <div class="off_canvars_overlay">

    </div>
    {/block}

<!--  M E D I A   MENU   START ---- -->
    {block name='offcanvas-menu'}
      {include file="frontend/index/canvas-menu.tpl"}
    {/block}
<!--  M E D I A   MENU   END ---- -->


{block name='header'}

    <header>
        <div class="main_header">
          {block name='header-top'}
            <div class="header_top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="language_currency">
                                <ul>
                                  {block name='header-language'}
                                  {* <li class="language"><a href="index.html#"> Language <i class="icon-right ion-ios-arrow-down"></i></a>
                                      <ul class="dropdown_language">
                                          <li><a href="index.html#">French</a></li>
                                          <li><a href="index.html#">Spanish</a></li>
                                          <li><a href="index.html#">Russian</a></li>
                                      </ul>
                                  </li> *}
                                  {/block}
                                  {block name='header-currency'}
                                  {* <li class="currency"><a href="index.html#"> Currency <i class="icon-right ion-ios-arrow-down"></i></a>
                                      <ul class="dropdown_currency">
                                          <li><a href="index.html#">€ Euro</a></li>
                                          <li><a href="index.html#">£ Pound Sterling</a></li>
                                          <li><a href="index.html#">$ US Dollar</a></li>
                                      </ul>
                                  </li> *}
                                  {/block}
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                          {block name='header-social'}
                            <div class="header_social text-right">
                                <ul>
                                    <li><a href="{translator selector='facebookLink'}"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="{translator selector='instagramLink'}"><i class="ion-social-instagram-outline"></i></a></li>
                                </ul>
                            </div>
                          {/block}
                        </div>
                    </div>
                </div>
            </div>
          {/block}
          {block name='header-middle'}
            <div class="header_middle">
                <div class="container">
                    <div class="row align-items-center">
                      {block name='header-logo'}
                      <div class="col-lg-2">
                          <div class="logo">
                              <a href="{url url=''}"><img src="{$logo.image.path}" alt=""></a>
                          </div>
                      </div>
                      {/block}
                      {block name='header-middle-right'}
                      <div class="col-lg-10">
                          <div class="header_right_info">
                            {block name='header-search-bar'}
                            <div class="search_container">
                               <form class="search-form" action="{url url='category/search'}" method="get">
                                   <div class="hover_category">
                                     <select class="select_option" name="c" id="categori2">
                                       {foreach $searchCategories as $searchCategory}
                                          <option {if $category.id == $searchCategory.id}selected{/if} value="{$searchCategory.id}">{$searchCategory.name}</option>
                                       {/foreach}
                                      </select>
                                   </div>
                                    <div class="search_box">
                                        <input placeholder="{translator selector='search'}" type="text" name='search'>
                                        <button type="submit"><span class="lnr lnr-magnifier"></span></button>
                                    </div>
                                </form>
                            </div>
                            {/block}
                            {block name='header-info-bar'}
                            <div class="header_account_area">
                                <div class="header_account_list register">
                                  {if $user}
                                    <ul>
                                        <li><a href="{url url='account'}">{$user.name} {$user.lastname}</a></li>
                                        <li><span>/</span></li>
                                        <li><a href="{url url='account/logout'}">{translator selector='logout'}</a></li>
                                    </ul>
                                  {else}
                                  <ul>
                                      <li><a href="{url url='account/login'}">{translator selector='register'}</a></li>
                                      <li><span>/</span></li>
                                      <li><a href="{url url='account/login'}">{translator selector='login'}</a></li>
                                  </ul>
                                  {/if}
                                </div>
                                <div class="header_account_list header_wishlist">
                                    <a href="{url url='wishlist'}"><span class="lnr lnr-heart"></span> <span class="item_count">{$favCount}</span> </a>
                                </div>
                                <div class="header_account_list  mini_cart_wrapper">
                                   <a href="{url url='basket'}" class="opener"><span class="lnr lnr-cart"></span><span class="item_count">{$basketCount}</span></a>
                                    <!--mini cart-->
                                    {block name='mini-cart'}
                                    <div class="mini_cart" data-basket=true>
                                      {action module="frontend" controller="basket" action='minicart'}
                                    </div>
                                    {/block}
                                    <!--mini cart end-->
                               </div>
                            </div>
                            {/block}
                          </div>
                      </div>
                      {/block}
                    </div>
                </div>
            </div>
            {/block}
            {block name='header-bottom'}
            <div class="header_bottom sticky-header">
                <div class="container">
                  {block name='main-menu'}
                    {include file="frontend/index/menu.tpl"}
                  {/block}
                </div>
            </div>
            {/block}
        </div>
    </header>
    <!--header area end-->
    {/block}

    <!--  BIG MENU END -->
		{if $message}
		<div class="message-container">
			<div class="container">
				{foreach from=$message item=$messages key=type name=name}
					{foreach $messages as $mess}
						<div class="{$type} message" data-type="{$type}_{$mess}">
							<?= translator($type.'_'.$mess)?>
						</div>
					{/foreach}
				{/foreach}

			</div>
		</div>
		{/if}
