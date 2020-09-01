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
                                  <li class="language"><a href="javaScript:void(0)"> {$currentLang.name} {$language.short_code} <i class="icon-right ion-ios-arrow-down"></i></a>
                                      <ul class="dropdown_language">
                                        {foreach $languages as $language}
                                          <li><a href="?lang={$language.id}">{$language.name} {$language.short_code}</a></li>
                                        {/foreach}
                                      </ul>
                                  </li>
                                  {/block}
                                  {block name='header-currency'}
                                  <li class="currency"><a href="javaScript:void(0)">{$currentCur.name} {$currentCur.symbol} <i class="icon-right ion-ios-arrow-down"></i></a>
                                      <ul class="dropdown_currency">
                                        {foreach $currencies as $currency}
                                          <li><a href="?cur={$currency.id}">{$currency.name} {$currency.symbol}</a></li>
                                        {/foreach}
                                      </ul>
                                  </li>
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
                      <div class="col-lg-2 col-sm-6 col-12">
                          <div class="logo">
                              <a href="{url url=''}"><img src="{$logo.image.path}" alt=""></a>
                          </div>
                      </div>
                      {/block}
                      {block name='header-middle-right'}
                      <div class="col-lg-10 col-sm-6 col-12 mt-3">
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
                                <div class="header_account_list register d-flex" >
                                  <a href="{url url="account"}"><span class="lnr lnr-user"></span>
                                    <div class="canvas hover canvas invisible d-none">
                                      {if $user}
                                        <ul>
                                            <li><a href="{url url='account'}"> {$user.name}</a> <span>/</span> <a href="{url url='account/logout'}">{translator selector='logout'}</a></li>
                                        </ul>
                                      {else}
                                        <ul>
                                            <li><a href="{url url='account/login'}">{translator selector='register'} <span>/</span> {translator selector='login'}</a></li>
                                        </ul>
                                      {/if}
                                    </div>
                                  </a>
                                </div>
                                <div class="header_account_list header_compare">
                                    <a href="{url url='compare'}"><span class="ti ti-control-shuffle"></span> <span class="item_count">{$compareCount}</span> </a>
                                </div>
                                <div class="header_account_list header_wishlist">
                                    <a href="{url url='wishlist'}"><span class="lnr lnr-heart"></span> <span class="item_count">{$favCount}</span> </a>
                                </div>
                                <div class="header_account_list {if $route.controller != "basket"}mini_cart_wrapper{/if}">
                                   <a href="{url url='basket'}" class="opener"><span class="lnr lnr-cart"></span><span class="item_count">{$basketCount}</span></a>
                                    <!--mini cart-->
                                    {block name='mini-cart'}
                                    <div class="mini_cart" data-basket=true>

                                    </div>
                                    {/block}
                                    <!--mini cart end-->
                                </div>
                                <div class="header_account_list canvas_open">
                                    <a href="javascript:void(0)"><i class="icon-menu"></i></a>
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
