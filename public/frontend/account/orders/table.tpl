{if $orders}
<div class="content" data-content="true">
  <div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>{translator selector='order'}</th>
                <th>{translator selector='orderdate'}</th>
                <th>{translator selector='orderstatus'}</th>
                <th>{translator selector='deliverytatus'}</th>
                <th>{translator selector='total'}</th>
            </tr>
        </thead>
        <tbody>
          {foreach $orders.data as $order}
          <tr>
              <td>{$order.id}</td>
              <td>{$order.buy_date}</td>
              <td><span class="success">{$order.os_name}</span></td>
              <td><span class="success">{$order.ds_name}</span></td>
              <td>{$order.total} {$currentCur.symbol}</td>
          </tr>
          {/foreach}
        </tbody>
    </table>
  </div>
</div>

<div class="pagination">
  {$orders.pagination}
</div>
{else}
<div class="basket-message ">
  <div class="message warning relative">
    {translator selector='youNotHaveOrder'}<i class="fa fa-warning"></i>
  </div>
</div>

{/if}
