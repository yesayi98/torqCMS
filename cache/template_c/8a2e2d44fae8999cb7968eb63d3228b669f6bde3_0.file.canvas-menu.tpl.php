<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-15 09:17:16
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\index\canvas-menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee7126c36dcc7_22814225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a2e2d44fae8999cb7968eb63d3228b669f6bde3' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\index\\canvas-menu.tpl',
      1 => 1589629682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee7126c36dcc7_22814225 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="offcanvas_menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="canvas_open">
                    <a href="javascript:void(0)"><i class="icon-menu"></i></a>
                </div>
                <div class="offcanvas_menu_wrapper">
                    <div class="canvas_close">
                        <a href="javascript:void(0)"><i class="icon-x"></i></a>
                    </div>
                    <div class="language_currency">
                        <ul>
                            <li class="language"><a href="index.html#"> Language <i class="icon-right ion-ios-arrow-down"></i></a>
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
                            </li>
                        </ul>
                    </div>
                    <div class="header_social text-right">
                        <ul>
                            <!-- <li><a href="index.html#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="index.html#"><i class="ion-social-googleplus-outline"></i></a></li>
                            <li><a href="index.html#"><i class="ion-social-youtube-outline"></i></a></li> -->
                            <li><a href="index.html#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="index.html#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                    <div class="search_container">
                       <form action="index.html#">
                           <!-- <div class="hover_category">
                                <select class="select_option" name="select" id="categori1">
                                    <option selected value="1">Ամենափնտրվողները</option>
                                    <option value="2">Accessories</option>
                                    <option value="3">Accessories & More</option>
                                    <option value="4">Butters & Eggs</option>
                                    <option value="5">Camera & Video </option>
                                    <option value="6">Mornitors</option>
                                    <option value="7">Tablets</option>
                                    <option value="8">Laptops</option>
                                    <option value="9">Handbags</option>
                                    <option value="10">Headphone & Speaker</option>
                                    <option value="11">Herbs & botanicals</option>
                                    <option value="12">Vegetables</option>
                                    <option value="13">Shop</option>
                                    <option value="14">Laptops & Desktops</option>
                                    <option value="15">Watchs</option>
                                    <option value="16">Electronic</option>
                                </select>
                           </div> -->
                            <div class="search_box">
                                <input placeholder="Փնտրել..." type="text">
                                 <button type="submit"><span class="lnr lnr-magnifier"></span></button>
                            </div>
                        </form>
                    </div>
                    <div class="header_account_area">
                        <div class="header_account_list register">
                            <ul>
                                <li><a href="login.html">Գրանցվել</a></li>
                                <li><span>/</span></li>
                                <li><a href="login.html">Մուտք</a></li>
                            </ul>
                        </div>
                        <div class="header_account_list header_wishlist">
                            <a href="wishlist.html"><span class="lnr lnr-heart"></span> <span class="item_count">3</span> </a>
                        </div>
                        <div class="header_account_list  mini_cart_wrapper">
                           <a href="javascript:void(0)"><span class="lnr lnr-cart"></span><span class="item_count">2</span></a>

                            <!--mini CART-->
                            <div class="mini_cart">
                                <div class="cart_gallery">
                                    <div class="cart_item">
                                       <div class="cart_img">
                                           <a href="index.html#"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/img/s-product/product.jpg" alt=""></a>
                                       </div>
                                        <div class="cart_info">
                                            <a href="index.html#">Primis In Faucibus</a>
                                            <p>1 x <span> $65.00 </span></p>
                                        </div>
                                        <div class="cart_remove">
                                            <a href="index.html#"><i class="icon-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="cart_item">
                                       <div class="cart_img">
                                           <a href="index.html#"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/img/s-product/product2.jpg" alt=""></a>
                                       </div>
                                        <div class="cart_info">
                                            <a href="index.html#">Letraset Sheets</a>
                                            <p>1 x <span> $60.00 </span></p>
                                        </div>
                                        <div class="cart_remove">
                                            <a href="index.html#"><i class="icon-x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mini_cart_table">
                                    <div class="cart_table_border">
                                        <div class="cart_total">
                                            <span>Sub total:</span>
                                            <span class="price">$125.00</span>
                                        </div>
                                        <div class="cart_total mt-10">
                                            <span>total:</span>
                                            <span class="price">$125.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mini_cart_footer">
                                   <div class="cart_button">
                                        <a href="cart.html"><i class="fa fa-shopping-cart"></i> View cart</a>
                                    </div>
                                    <div class="cart_button">
                                        <a href="checkout.html"><i class="fa fa-sign-in"></i> Checkout</a>
                                    </div>

                                </div>
                            </div>
                            <!--mini CART end-->

                       </div>
                    </div>
                    <div class="call-support">
                        <p><a href="tel:(08)23456789">(08) 23 456 789</a> Հարցերի դեպքւմ</p>
                    </div>
                    <div id="menu" class="text-left ">
                        <ul class="offcanvas_main_menu">
                            <li class="menu-item-has-children active">
                                <a href="index.html#">Գլխավոր</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="about.html">Մեր մասին</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="contact.html">Կապ</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="blog-sidebar.html">Բաղադրատոմսեր</a>
                            </li>
                        </ul>
                    </div>
                    <div class="offcanvas_footer">
                        <span><a href="index.html#"><i class="fa fa-envelope-o"></i> info@yourdomain.com</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
<?php }
}
