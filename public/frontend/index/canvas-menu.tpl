<div class="offcanvas_menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="offcanvas_menu_wrapper">
                    <div class="canvas_close">
                        <a href="javascript:void(0)"><i class="icon-x"></i></a>
                    </div>
                    {block name="language_currency_canvas"}
                    <div class="language_currency">
                        <ul>
                            {* <li class="language"><a href="index.html#"> Language <i class="icon-right ion-ios-arrow-down"></i></a>
                                <ul class="dropdown_language">
                                    <li><a href="index.html#">French</a></li>
                                    <li><a href="index.html#">Spanish</a></li>
                                    <li><a href="index.html#">Russian</a></li>
                                </ul>
                            </li>
                            <li class="currency"><a href="index.html#"> Currency <i class="icon-right ion-ios-arrow-down"></i></a>
                                <ul class="dropdown_currency">
                                    <li><a href="index.html#">€ Euro</a></li>
                                    <li><a href="index.html#">£ Pound Sterling</a></li>
                                    <li><a href="index.html#">$ US Dollar</a></li>
                                </ul>
                            </li> *}
                        </ul>
                    </div>
                    {/block}
                    <div class="header_social text-right">
                        <ul>
                            <li><a href="index.html#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="index.html#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                    <div class="search_container">
                       <form action="{url url="category/search"}">
                            <div class="search_box">
                                <input placeholder="{translator selector="search"}" name="search" type="text">
                                <button type="submit"><span class="lnr lnr-magnifier"></span></button>
                            </div>
                        </form>
                    </div>
                    <div class="header_account_area">
                        <div class="header_account_list login-register">
                          {if $user}
                            <ul>
                                <li><a href="{url url='account'}">{$user.name}</a></li>
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
                    </div>
                    <div class="call-support">
                        <p><a href="tel:{translator selector='phoneNumber'}">{translator selector='phoneNumber'}</a> {translator selector='ifquestions'}</p>
                    </div>

                    <div id="menu" class="text-left ">
                        <ul class="offcanvas_main_menu">
                            <li><a class="{if $route.controller == 'index'}active{/if}"  href="{url url=''}">{translator selector='home'}</a></li>
                            {foreach $mainCategories as $menuItem}
                            {if !$menuItem.in_menu || !$menuItem.active}
                              {continue}
                            {/if}
                              <li><a href="{url url='category?c='|cat:$menuItem.id}">{$menuItem.name}</a></li>
                            {/foreach}
                            <li><a href="{url url='contact'}">{translator selector='contact'}</a></li>
                        </ul>
                    </div>
                    <div class="offcanvas_footer">
                        <span><a href="index.html#"><i class="fa fa-envelope-o"></i> {translator selector='emailAddress'}</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
