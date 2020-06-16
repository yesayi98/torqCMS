
    <!--footer area start-->

    {block name="footer"}
    <footer class="footer_widgets">
      {block name="footer-top"}
      <div class="footer_top">
          <div class="container">
              <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-7">
                      <div class="widgets_container contact_us">
                         <div class="footer_logo">
                             <a href="{url url=''}"><img src="{$footerLogo.image.path}" alt=""></a>
                         </div>
                         <!-- <p class="footer_desc">We are a team of desi6ner20WordPress, Shopify .</p> -->
                          <p><span>{translator selector="address2"}</span> {translator selector="address"}</p>
                          <p><span>{translator selector="email"}</span> <a href="mailto: {translator selector="emailAddress"}">{translator selector="emailAddress"}</a></p>
                          <p><span>{translator selector="phone"}:</span> <a href="tel:{translator selector="phoneNumber"}">{translator selector="phoneNumber"}</a> </p>
                      </div>
                  </div>
                  <div class="col-lg-с1 offset-1 col-md-3 col-sm-5">
                      <div class="widgets_container widget_menu">
                          <h3>{translator selector="link"}</h3>
                          <div class="footer_menu">

                              <ul>

                                <li><a href="{url url=''}">{translator selector="home"}</a></li>
                                {foreach $mainCategories as $menuitem}
                                {if !$menuitem.active}
                                  {continue}
                                {/if}
                                  <li><a href="{url url='category?c='|cat:$menuitem.id}">{$menuitem.name}</a></li>
                                {/foreach}
                                <li><a href="{url url='contact'}">Կապ</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-8">
                      <div class="widgets_container widget_newsletter">
                          <h3>{translator selector='getNews'}</h3>
                          <p class="footer_desc">{translator selector='newsdesc'}</p>
                          <div class="subscribe_form">
                              <form id="mc-form" class="mc-form footer-newsletter" action='{url url="contact/newsletter"}'>
                                  <input id="mc-email" type="email" autocomplete="off" placeholder="{translator selector='youremail'}" />
                                  <button id="mc-submit">{translator selector='submit'}</button>
                              </form>

                              <div class="mailchimp-alerts text-centre">
                                  <div class="mailchimp-submitting"></div>
                                  <div class="mailchimp-success"></div>
                                  <div class="mailchimp-error"></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      {/block}

        {block name="footer-bottom"}
        <div class="footer_bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-7">
                        <div class="copyright_area">
                            <p>{translator selector='allRights'}  by  <a href="index.html#">ArmCoding</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="footer_payment">
                            <ul>
                                <li><a href="javaScript:void(0)"><img src="{$BASE_FRONTEND}assets/img/icon/payment-methods.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {/block}
    </footer>
    {/block}
    <!--footer area end-->

    <!-- modal area start-->
    {block name="modal-area"}
    {include file="frontend/index/modal.tpl"}
    {/block}
    <!-- modal area end-->


<!-- JS
============================================ -->
{block name="javascript-area"}
<!--jquery min js-->
<script src="{$BASE_FRONTEND}assets/js/vendor/jquery-3.4.1.min.js"></script>
<!-- plugins JS -->
<!-- publish subscribe plugin JS -->
<script src="{$BASE_FRONTEND}assets/plugins/pubSub/jquery.pubSub.js"></script>
<!-- notigications plugin JS -->
<script src="{$BASE_FRONTEND}assets/plugins/notifications/js/lobibox.min.js"></script>
<script src="{$BASE_FRONTEND}assets/plugins/notifications/js/notification-custom-script.js"></script>
<script src="{$BASE_FRONTEND}assets/plugins/notifications/js/notifications.min.js"></script>
<!--state manager js-->
<script src="{$BASE_FRONTEND}assets/js/stateManager.js"></script>
<!--popper min js-->
<script src="{$BASE_FRONTEND}assets/js/popper.js"></script>
<!--bootstrap min js-->
<script src="{$BASE_FRONTEND}assets/js/bootstrap.min.js"></script>
<!--owl carousel min js-->
<script src="{$BASE_FRONTEND}assets/js/owl.carousel.min.js"></script>
<!--slick min js-->
<script src="{$BASE_FRONTEND}assets/js/slick.min.js"></script>
<!--magnific popup min js-->
<script src="{$BASE_FRONTEND}assets/js/jquery.magnific-popup.min.js"></script>
<!--counterup min js-->
<script src="{$BASE_FRONTEND}assets/js/jquery.counterup.min.js"></script>
<!--jquery countdown min js-->
<script src="{$BASE_FRONTEND}assets/js/jquery.countdown.js"></script>
<!--jquery ui min js-->
<script src="{$BASE_FRONTEND}assets/js/jquery.ui.js"></script>
<!--jquery elevatezoom min js-->
<script src="{$BASE_FRONTEND}assets/js/jquery.elevatezoom.js"></script>
<!--isotope packaged min js-->
<script src="{$BASE_FRONTEND}assets/js/isotope.pkgd.min.js"></script>
<!--slinky menu js-->
<script src="{$BASE_FRONTEND}assets/js/slinky.menu.js"></script>
<!-- Plugins JS -->
<script src="{$BASE_FRONTEND}assets/js/plugins.js"></script>
{if $route.controller == 'category'}
<!-- filter JS -->
<script src="{$BASE_FRONTEND}assets/js/jquery.filter.js"></script>
<!-- sorting JS -->
<script src="{$BASE_FRONTEND}assets/js/jquery.sorting.js"></script>
{/if}
{if $route.controller == 'checkout'}
<!-- chechout JS -->
<script src="{$BASE_FRONTEND}assets/js/jquery.checkout.js"></script>
{/if}
{if $route.controller == 'index'}
<!-- Emotions JS -->
<script src="{$BASE_FRONTEND}assets/js/jquery.emotions.js"></script>
{/if}
<!-- quickview JS -->
<script src="{$BASE_FRONTEND}assets/js/jquery.quickview.js"></script>
<!-- basket JS -->
<script src="{$BASE_FRONTEND}assets/js/jquery.basket.js"></script>
<!-- wishlist JS -->
<script src="{$BASE_FRONTEND}assets/js/jquery.wishlist.js"></script>
<!-- paginator JS -->
<script src="{$BASE_FRONTEND}assets/js/jquery.paginator.js"></script>
<!-- loader JS -->
<script src="{$BASE_FRONTEND}assets/js/jquery.loader.js"></script>
<!-- Main JS -->
<script src="{$BASE_FRONTEND}assets/js/main.js"></script>
<script>
  window.route = {$route|@json_encode};
  window.currentCur = {$currentCur|@json_encode};
  window.basketMessage = '{translator selector="basketMessage"}';
  window.wishlistMessage = '{translator selector="wishlistMessage"}';
  window.notFoundPath = '{$notFoundPath}';
</script>


{/block}



{if $message}
<div class="lobibox-notify-wrapper top right">
  <div class="container">
    {foreach from=$message item=$messages key=type name=name}
      {foreach $messages as $mess}
        <div class="lobibox-notify lobibox-notify-{$type} animated-fast fadeInDown notify-mini rounded" style="width: 400px;" data-type="{$type}_{$mess}">
          {$selector = $type|cat:'_'|cat:$mess}
          <div class="lobibox-notify-icon-wrapper">
            <div class="lobibox-notify-icon">
              <div>
                <div class="icon-el">
                  <i class="fa fa-check-circle"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="lobibox-notify-body">
            <div class="lobibox-notify-msg" style="max-height: 32px;">{translator selector="$selector"}</div>
          </div>
          <span class="lobibox-close">×</span>
        </div>
      {/foreach}
    {/foreach}
  </div>
</div>
{/if}
</body>

</html>
