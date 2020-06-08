{extends file='frontend/index/index.tpl'}
{block name='breadcrumbs_area'}

  <!--breadcrumbs area start-->
  <div class="breadcrumbs_area">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="breadcrumb_content">
                     <h3>{translator selector='basket'}</h3>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!--breadcrumbs area end-->
{/block}
{block name="pageContent"}


   <!--shopping cart area start -->
  <div class="shopping_cart_area mt-70">
      <div class="container">
          <form action="cart.html#">
              <div class="row">
                  <div class="col-12">
                      <div class="table_desc">
                          <div class="cart_page table-responsive">
                              <table>
                                  <thead>
                                      <tr>
                                          <th class="product_thumb">{translator selector='image'}</th>
                                          <th class="product_name">{translator selector='name'}</th>
                                          <th class="product-price">{translator selector='price'}</th>
                                          <th class="product_quantity">{translator selector='quantity'}</th>
                                          <th class="product_total">{translator selector='total'}</th>
                                          <th class="product_remove">{translator selector='remove'}</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    {foreach $basketProducts as $product}
                                      <tr>
                                          <td class="product_thumb"><a href="{url url='detail?a='|cat:$product.id}"><img src="{$product.images.0.thumbnails.0.thumb_path}" alt=""></a></td>
                                          <td class="product_name"><a href="{url url='detail?a='|cat:$product.id}">{$product.name}</a></td>
                                          <td class="product-price">{$product.price} {$currentCur.symbol}</td>
                                          <td class="product_quantity quantity" data-url="{url url='basket/add'}" data-id='{$product.id}'>
                                              <div class="quantity-button desc">-</div>
                                              <input class="nums" type="number" min="{if $product.unit}{$product.unit}{else}1{/if}" max="{$product.in_stock}" step="{if $product.unit}{$product.unit}{else}1{/if}" value="{if $product.unit}{$product.unit}{else}{$product.quantity}{/if}">
                                              <div class="quantity-button add">+</div>
                                          </td>
                                          <td class="product_total"><span class="total-{$product.id}">{$product.total}</span> {$currentCur.symbol}</td>
                                         <td class="product_remove"><a href="{url url='basket/delete?a='|cat:$product.id}"><i class="fa fa-trash-o"></i></a></td>
                                      </tr>
                                    {/foreach}
                                  </tbody>
                              </table>
                          </div>
                          {* <div class="cart_submit">
                              <a href="{url url='basket/deleteAll'}" class="btn btn-danger">{translator selector='removeAll'}</a>
                          </div> *}
                      </div>
                   </div>
               </div>
               <!--coupon code area start-->
              <div class="coupon_area">
                  <div class="row">
                      <div class="col-lg-8 offset-2 col-md-6">
                          <div class="coupon_code right">
                              <h3>{translator selector='totalPrice'}</h3>
                              <div class="coupon_inner">
                                 <div class="cart_subtotal">
                                     <p>{translator selector='purchases'}</p>
                                     <p class="cart_amount"><span class="total-amount">{$totalPrice}</span> {$currentCur.symbol}</p>
                                 </div>
                                 <div class="cart_subtotal ">
                                     <p>{translator selector='deliveryprice'}</p>
                                     <p class="cart_amount"><span class="delivery-amount">{$deliveryPrice}</span> {$currentCur.symbol}</p>
                                 </div>
                                 <div style="border-bottom: 1px solid #ccc; margin-bottom: 20px;"></div>

                                 <div class="cart_subtotal">
                                     <p>{translator selector='total'}</p>
                                     <p class="cart_amount"><span class="primary-amount">{$deliveryPrice + $totalPrice}</span> {$currentCur.symbol}</p>
                                 </div>

                                 <div class="checkout_btn">
                                     <a href="{url url='checkout'}">{translator selector='continue'}</a>
                                 </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!--coupon code area end-->
          </form>
      </div>
  </div>
   <!--shopping cart area end -->
{/block}
