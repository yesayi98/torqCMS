{extends file="frontend/index/index.tpl"}
{block name='breadcrumbs_area'}
  <!--breadcrumbs area start-->
  <div class="breadcrumbs_area">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="breadcrumb_content">
                      <h3>{translator selector="checkout"}</h3>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!--breadcrumbs area end-->
{/block}

{block name="pageContent"}
<!--Checkout page section start-->
<div class="Checkout_section mt-70">
   <div class="container">
        <div class="row">
           <div class="col-12">
                <div class="user-actions">
                    <h3>
                        <i class="fa fa-file-o" aria-hidden="true"></i>
                        {translator selector="paywithbonus"}
                        <a class="Returning" href="" data-toggle="collapse" data-target="#checkout_coupon" aria-expanded="true">{translator selector="getPercent"}</a>
                    </h3>
                     <div id="checkout_coupon" class="collapse" data-parent="#accordion">
                        <div class="checkout_info coupon_info">
                            <form action="{url url="checkout/bonus"}" method='post'>
                                <input placeholder="{translator selector="specific_id"}" type="text" name='specific_id' value="{$user.specific_id}">
                                <button type="submit">{translator selector="submit"}</button>
                            </form>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <div class="checkout_form">
          <form action="{url url='checkout/confirm'}" method="post">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                        <h3>{translator selector="setLabels"}</h3>
                        <div class="row mt-20">

                            <div class="col-lg-6 mb-20">
                                <label>{translator selector="name"} <span>*</span></label>
                                <input type="text" name='name' value="{$user.name}">
                            </div>
                            <div class="col-lg-6 mb-20">
                                <label>{translator selector="lastname"}<span>*</span></label>
                                <input type="text" name='lastname' value="{$user.lastname}">
                            </div>
                            <div class="col-12 mb-20">
                                <label>{translator selector="email"}</label>
                                <input type="text" name='email' value="{$user.email}">
                            </div>
                            <div class="col-12 mb-20">
                                <label>{translator selector="phone"}</label>
                                  <div class="phone-number">
                                    <input type="text" class="phone-code" name="phoneCode" value="+374" readonly>
                                    <input type="number" class="phone" name='phone' placeholder="XX XXXXXX" value="{$user.phone}" required>
                                  </div>
                                </div>
                            </div>

                            <div class="col-12 mb-20">
                              <div class="row">
                                <label class="col-12">{translator selector="youraddress"} <span>*</span></label>
                                <input class="col-12" placeholder="{translator selector="youraddress"}" type="text" value="{$user.address.0.address}" name='address'>
                              </div>
                            </div>

                            <div class="col-12">
                                <div class="order-notes">
                                  <div class="row">
                                    <label class="col-12" for="order_note">{translator selector="ordernote"} </label>
                                    <textarea class="col-12" id="order_note" name="notes" placeholder="{translator selector="ordernote"}">{$user.address.0.note}</textarea>
                                  </div>
                                </div>
                            </div>
                        </div>
                <div class="col-lg-6 col-md-6">
                        <h3>{translator selector="checkout"}</h3>
                        <div class="order_table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>{translator selector="products"}</th>
                                        <th>{translator selector="total"}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  {foreach $orderItems as $product}
                                    <tr>
                                        <td>{$product.name}<strong> × {$product.quantity}</strong></td>
                                        <td> {$product.total} {$currentCur.symbol}</td>
                                    </tr>
                                  {/foreach}
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <th>{translator selector="total"}</th>
                                        <td>{$totalPrice} {$currentCur.symbol}</td>
                                    </tr>

                                    <tr {if !$bonusPrice}class='d-none'{/if}>
                                        <th>{translator selector="discounted"}</th>
                                        <td><strong><span data-total='true'>{$bonusPrice} </span>{$currentCur.symbol}</strong></td>
                                    </tr>

                                    <tr>
                                        <th>{translator selector="deliveryprice"}</th>
                                        <td><strong>{$deliveryPrice} {$currentCur.symbol}</strong></td>
                                    </tr>

                                    <tr class="order_total">
                                        <th>{translator selector="totalPrice"}</th>
                                        <td><strong><span data-total='true'>{$totalPrice + $deliveryPrice - $bonusPrice} </span>{$currentCur.symbol}</strong></td>
                                    </tr>

                                </tfoot>
                            </table>
                        </div>
                        <div class="payment_method" id='accordion'>
                           <div class="panel-default">
                                <input id="payment" name="payment_method" type="radio" data-target="createp_account" value="1"/>
                                <label for="payment" data-toggle="collapse" data-target="#method" aria-controls="method">{translator selector="payinshipping"}</label>

                                <div id="method" class="collapse one" data-parent="#accordion">
                                    <div class="card-body1">
                                       <p>{translator selector="payinshippingaddress"}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                              <div class="col-6 mt-20">
                                <label>
                                  <input type="checkbox" name="terms" required>
                                  <span>{translator selector="agreedwith"}</span> <a href="{url url="paymannyer/"}">{translator selector="terms"}</a>
                                </label>
                              </div>
                              <div class="col-6 order_button mt-20">
                                  <button type="submit">{translator selector="pay"}</button>
                              </div>
                            </div>
                        </div>
                  </div>
            </div>
          </form>
        </div>
    </div>
</div>
<!--Checkout page section end-->
{/block}
