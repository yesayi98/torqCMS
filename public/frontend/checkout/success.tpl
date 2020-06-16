{extends file="frontend/index/index.tpl"}

{block name='breadcrumbs_area'}
  <!--breadcrumbs area start-->
  <div class="breadcrumbs_area">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="breadcrumb_content">
                      <h3>{translator selector="paysuccess"}</h3>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!--breadcrumbs area end-->
{/block}
{block name="pageContent"}


  <!--shop  area start-->
  <div class="shop_area shop_reverse mt-70 mb-70">
      <div class="container">
        <div class="order_table table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>{translator selector="products"}</th>
                        <th>{translator selector="total"}</th>
                    </tr>
                </thead>
                <tbody>
                  {foreach $order.details as $product}
                    <tr>
                        <td>{$product.name}<strong> × {$product.quantity}</strong></td>
                        <td> {$product.total} {$currentCur.symbol}</td>
                    </tr>
                  {/foreach}
                </tbody>

                <tfoot>
                    <tr>
                        <th>{translator selector="total"}</th>
                        <td>{$order.product_total} {$currentCur.symbol}</td>
                    </tr>

                    <tr>
                        <th>{translator selector="discounted"}</th>
                        <td><strong><span data-total='true'>{$order.bonus_price} </span>{$currentCur.symbol}</strong></td>
                    </tr>

                    <tr>
                        <th>{translator selector="deliveryprice"}</th>
                        <td><strong>{$order.delivery_price} {$currentCur.symbol}</strong></td>
                    </tr>

                    <tr class="order_total">
                        <th>{translator selector="totalPrice"}</th>
                        <td><strong><span data-total='true'>{$order.total_price} </span>{$currentCur.symbol}</strong></td>
                    </tr>

                </tfoot>
            </table>
        </div>
      </div>
  </div>
  <!--shop  area end-->
{/block}
