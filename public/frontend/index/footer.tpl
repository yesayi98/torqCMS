
    <!--footer area start-->

    {block name="footer"}
    <footer class="footer_widgets">
      {block name="footer-top"}
      <div class="footer_top">
          <div class="container">
              <div class="row">
                  <div class="col-lg-4 col-md-12">
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
                  <div class="col-lg-с1 offset-1 col-md-3">
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
                                <li><a href="{url url='contact'}">{translator selector='contact'}</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
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
