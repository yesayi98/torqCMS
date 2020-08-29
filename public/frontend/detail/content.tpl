
    <!--product details start-->
    <div class="product_details mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    {include file="frontend/detail/images.tpl"}
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">

                        <div class="product_item">
                            {block name='name-box'}
                              <img class="resposnsive rounden-circle w-25 float-sm-right" src="{$product.supplier.image.path}">
                              <h1>{$product.name|unescape}</h1>
                              <div class="rating-container rated">
                                <div class="float-right">
                                  {'<i class="ti ti-star"></i>'|str_repeat:$product.rating}
                                </div>
                              </div>
                            {/block}

                            {block name='price-box'}
                              <div class="price_box  mb-30">
                                  {if $product.discount}
                                    {$price = $product.price - $product.price * $product.discount/100}
                                    <span class="current_price">{$price} {$currentCur.symbol}</span>
                                    <span class="old_price">{$product.price} {$currentCur.symbol}</span>
                                  {else}
                                    <span class="current_price">{$product.price} {$currentCur.symbol}</span>
                                  {/if}
                              </div>
                            {/block}
                            {block name='description-box'}
                              <div class="product_desc mb-30">
                                  {$product.description|unescape}
                              </div>
                            {/block}

                            {block name='product-quantity'}
                              <div class="quantity quantity-detail">
                                  <div class="quantity-button desc" >-</div>
                                  <input class="nums" type="number" min="{if $product.unit}{$product.unit}{else}1{/if}" max="{$product.in_stock}" step="{if $product.unit}{$product.unit}{else}1{/if}" value="{if $product.unit}{$product.unit}{else}1{/if}">
                                  <div class="quantity-button add">+</div>
                              </div>
                            {/block}

                            {block name='product-unit'}
                            <div class="quantity-number">
                                <h6>{$product.unit_params.name}</h6>
                            </div>
                            {/block}

                            {block name='basket-button'}
                              <div class="product-button">
                                  <a href="{url url='basket/add?a='|cat:$product.id}" data-ajaxsend='true'> {translator selector="buynowbuy"} </a>
                              </div>
                            {/block}

                            {block name='button-group'}
                            <div class="product_d_action">
                                 <ul class="navbar-nav">
                                      <li class="nav-item wishlist{if $product.wished} wished{/if} my-1">
                                        <a href="{url url='wishlist/add?a='|cat:$product.id}" title="{translator selector='wished'}" class="btn btn-outline-success btn-circle is-icon-left" data-wishlist="true">
                                          <span class="icon"><i class="lnr lnr-heart"></i></span>
                                          <span> {translator selector='wished'}</span>
                                        </a>
                                      </li>
                                      <li class="nav-item compare my-1">
                                        <a href="{url url='compare/add?a='|cat:$product.id}" title="{translator selector='wished'}" class="btn btn-outline-success btn-circle is-icon-left">
                                          <span class="icon"><i class="ti ti-control-shuffle"></i></span>
                                          <span> {translator selector='compare'}</span>
                                        </a>
                                      </li>
                                 </ul>
                            </div>
                            {/block}

                            <div class="modal_social mt-60">
                                <h2>{translator selector='share'}</h2>
                                {* <ul>
                                    <li class="facebook"><a href="index.html#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="instagram"><a href="index.html#"><i class="fa fa-instagram"></i></a></li>
                                </ul> *}
                                <!-- AddToAny BEGIN -->
                        					<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                        						<a class="rounded-circle mb-2 a2a_button_facebook"></a>
                        						<a class="rounded-circle mb-2 a2a_button_facebook_messenger"></a>
                        						<a class="rounded-circle mb-2 a2a_button_pinterest"></a>
                        						<a class="rounded-circle mb-2 a2a_button_twitter"></a>
                        						<a class="rounded-circle mb-2 a2a_button_telegram"></a>
                        						<a class="rounded-circle mb-2 a2a_button_vk"></a>
                        						<a class="rounded-circle mb-2 a2a_button_odnoklassniki"></a>
                        						<a class="rounded-circle mb-2 a2a_button_email"></a>
                        						<a class="rounded-circle mb-2 a2a_button_google_gmail"></a>
                        						<a class="rounded-circle mb-2 a2a_button_whatsapp"></a>
                        						<a class="rounded-circle mb-2 a2a_button_viber"></a>
                        						<a class="rounded-circle mb-2 a2a_button_copy_link"></a>
                        					</div>
                        					<script async src="https://static.addtoany.com/menu/page.js"></script>
                        					<!-- AddToAny END -->
                            </div>

                        </div>

                    </div>
                </div>
                {block name="rate-component"}
                {if $user}
                <div id="main" class="col-12">
                  <div class="card mt-3">
                    <div class="card-header">
                      <h3 class="my-3">{$product.name}: {translator selector="rate"}</h3>
                    </div>
                    <div id="container" class="rating-container card-body">
                      <form id="rate-form"
                            class="rate-form form-group"
                            action="{url url="detail/rate"}"
                            method="post"
                            datatype="json"
                            data-ajax='true'>
                        <div class="ratings my-3">
                          <i star-rating="1" class="ti ti-star star"></i>
                          <i star-rating="2" class="ti ti-star star"></i>
                          <i star-rating="3" class="ti ti-star star"></i>
                          <i star-rating="4" class="ti ti-star star"></i>
                          <i star-rating="5" class="ti ti-star star"></i>
                          <input type="number"  name="rating" id="ratingInput" value="1" style="display: none;">
                        </div>

                        <label class="d-block w-100">
                          <span class="text-muted">{translator selector="comment"}</span>
                          <textarea name="comment" placeholder="{translator selector="comment"}" class="form-control"></textarea>
                        </label>
                        <input type="hidden" name="article_id" value="{$product.id}">
                        <button type="submit" class="btn rate-button btn-large mt-3" name="button">{translator selector="submit"}</button>
                      </form>
                      <div class="my-3">
                        {if $product.reviews}
                        {foreach $product.reviews as $review}
                          <div class="comment-item card mt-3">
                            <div class="card-header">
                                {$review.user.name} {$review.user.lastname}
                            </div>
                            <div class="card-body">
                              <p>{'<i class="ti ti-star"></i>'|str_repeat:$review.rating_count}</p>
                              <p>{$review.comment}</p>
                            </div>
                          </div>
                        {/foreach}
                        {/if}
                      </div>
                    </div>
                  </div>
                </div>
                {/if}
                {/block}
            </div>
        </div>
    </div>
    <!--product details end-->
