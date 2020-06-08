
    <!--product details start-->
    <div class="product_details mt-70 mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    {include file="frontend/detail/images.tpl"}
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">

                        <div class="product_item">
                            {block name='name-box'}
                              <h1>{$product.name}</h1>
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
                                  {$product.description}
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
                                  <a href="{url url='basket/add?a='|cat:$product.id}" data-ajaxsend='true'> {translator selector="buynow"} </a>
                              </div>
                            {/block}

                            {block name='button-group'}
                            <div class="product_d_action">
                                 <ul>
                                      <li class="wishlist{if $product.wished} wished{/if}">
                                        <a href="{url url='wishlist/add?a='|cat:$product.id}" title="{translator selector='wished'}" class="btn btn-outline-success btn-circle is-icon-left" data-wishlist="true">
                                          <span class="icon"><i class="lnr lnr-heart"></i></span>
                                          <span> {translator selector='wished'}</span>
                                        </a>
                                      </li>
                                 </ul>
                            </div>
                            {/block}
                            <div class="modal_social mt-60">
                                <h2>{translator selector='share'}</h2>
                                <ul>
                                    <li class="facebook"><a href="index.html#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="instagram"><a href="index.html#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product details end-->

    <!--product info start-->
    <div class="product_d_info mb-65">
        <div class="container">
            <div class="row">
                <div class="col-12">
                  {if $product.options}
                    <div class="product_d_inner">
                      <div class="product_info_button">
                          <ul class="nav" role="tablist">
                              <li>
                                   <a class="active" data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet" aria-selected="false">{translator selector='properties'}</a>
                              </li>
                          </ul>
                      </div>
                      <div class="tab-content">
                          <div class="tab-pane fade show active" id="sheet" role="tabpanel" >
                              <div class="product_d_table">
                                <table>
                                    <tbody>
                                      {foreach $product.options as $option}
                                        <tr>
                                            <td class="first_child">{$option.name}</td>
                                            <td>{$option.value}</td>
                                        </tr>
                                      {/foreach}
                                    </tbody>
                                </table>
                              </div>
                          </div>
                      </div>
                    </div>
                  {/if}
                </div>
            </div>
        </div>
    </div>
    <!--product info end-->

    <!--product area start-->
    <section class="product_area related_products">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    {$items = $similarProducts}
                    {$component.title = {translator selector='similarProducts'}}
                    {include file="frontend/emotions/components/article_slider.tpl"}
                </div>
            </div>
        </div>
    </section>
    <!--product area end-->
