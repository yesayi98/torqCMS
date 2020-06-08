{extends file='frontend/index/index.tpl'}
{block name="pageContent"}

  <!--breadcrumbs area start-->
  <div class="breadcrumbs_area">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="breadcrumb_content">
                     <h3>{translator selector='wishlist'}</h3>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!--breadcrumbs area end-->


      <!--wishlist area start -->
      <div class="wishlist_area mt-70">
          <div class="container">
              <form action="wishlist.html#">
                  <div class="row">
                      <div class="col-12">
                          <div class="table_desc wishlist">
                              <div class="cart_page table-responsive">
                                  <table>
                                      <thead>
                                          <tr>
                                            <th class="product_thumb">{translator selector='image'}</th>
                                            <th class="product_name">{translator selector='name'}</th>
                                            <th class="product-price">{translator selector='price'}</th>
                                            <th class="product_quantity">{translator selector='quantity'}</th>
                                            <th class="product_total">{translator selector='buy'}</th>
                                            <th class="product_remove">{translator selector='remove'}</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        {foreach $wishlistProducts as $product}
                                          <tr class="product_content">
                                              <td class="product_thumb"><a href="{url url='detail?a='|cat:$product.id}"><img src="{$product.images.0.thumbnails.0.thumb_path}" alt=""></a></td>
                                              <td class="product_name"><a href="{url url='detail?a='|cat:$product.id}">{$product.name}</a></td>
                                              <td class="product-price">{$product.price} {$currentCur.symbol}</td>
                                              <td class="product_quantity quantity" data-url="{url url='basket/add'}" data-id='{$product.id}'>
                                                  <div class="quantity-button desc">-</div>
                                                  <input class="nums" type="number" min="{if $product.unit}{$product.unit}{else}1{/if}" max="{$product.in_stock}" step="{if $product.unit}{$product.unit}{else}1{/if}" value="{if $product.unit}{$product.unit}{else}1{/if}">
                                                  <div class="quantity-button add">+</div>
                                              </td>
                                              <td class="product_total"><a href="{url url='basket/add?a='|cat:$product.id}" data-ajaxsend='true'> {translator selector="buynow"} </a></td>
                                             <td class="product_remove"><a href="{url url='wishlist/delete?a='|cat:$product.id}"><i class="fa fa-trash-o"></i></a></td>
                                          </tr>
                                        {/foreach}
                                      </tbody>
                                  </table>
                              </div>

                          </div>
                       </div>
                   </div>

              </form>
              <div class="row">
                  <div class="col-12">
                       <div class="wishlist_share">
                          <h4>{translator selector='findus'}</h4>
                          <ul>
                              <li><a href="{translator selector='facebook'}"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="{translator selector='instagram'}"><i class="fa fa-instagram"></i></a></li>
                          </ul>
                      </div>
                  </div>
              </div>

          </div>
      </div>
      <!--wishlist area end -->

{/block}
