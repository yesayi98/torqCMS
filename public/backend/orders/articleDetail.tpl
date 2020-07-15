{block name="order-modal-content"}
  <form class="order-detail-form" id="order-detail-form" action="{url url="backend/orders/saveDetail"}" method="post">
    <div class="form-group row">
      <label class="col-12 col-form-label">order ID</label>
      <div class="col-12">
        <input type="text" name="order_id" readonly class="form-control" value="{$order_id}">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-12 col-form-label">Product</label>
      <div class="col-12">
        <select class="form-control"
                {if $order_detail.id}style="pointer-events: none"{/if}
                name="article_id">
                {foreach $products as $product}
                  <option value="{$product.id}"
                          {if $product.id == $order_detail.article_id}selected{/if}>
                          {$product.name}
                  </option>
                {/foreach}
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-12 col-form-label">Quantity</label>
      <div class="col-12">
        <input type="number" name="quantity" class="form-control" value="{$order_detail.quantity}">
      </div>
    </div>
    <input type="hidden" name="order_detail" value="{$order_detail.id}">
  </form>
{/block}
