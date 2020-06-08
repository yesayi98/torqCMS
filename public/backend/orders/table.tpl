<div class="row">
  <div class="col-lg-12">
    <div class="card">
      {block name="table-name"}
      <div class="card-header"><i class="fa fa-table"></i> Orders ({$orders.total})</div>
      {/block}
      <div class="card-body">


        <div class="table-responsive">
          <table id="default-datatable" class="table table-bordered">
            {block name="table-head"}
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Name Lastname</th>
                      <th>Phone</th>
                      <th>Price</th>
                      <th>Payment</th>
                      <th>Delivery</th>
                      <th>Order</th>
                      <th>Date</th>
                      <th>Action</th>
                  </tr>
              </thead>
            {/block}
            {block name="table-body"}
              <tbody>
                {foreach $orders.data as $order}
                  <tr>
                      <td>{$order.id}</td>
                      <td>{$order.name} {$order.lastname}</td>
                      <td>{$order.address.phone}</td>
                      <td>{$order.total_price}</td>
                      <td>{$order.payment_method} {$order.pm_name}</td>
                      <td>{$order.delivery_status} {$order.ds_name}</td>
                      <td>{$order.order_status} {$order.os_name}</td>
                      <td>{$order.buy_date}</td>
                      <td>
                        <a href="{url url='backend/orders/detail?o='|cat:$order.id}" class="btn btn-info waves-effect waves-light m-1"><i class="fa fa-pencil"></i></a>
                      </td>
                  </tr>
                {/foreach}
              </tbody>
            {/block}
          </table>
        </div>
      </div>
    </div>
  </div>
</div><!-- End Row-->
<div class="row">
  <div class="col-sm-12 col-md-7">
    <div class="dataTables_paginate paging_simple_numbers" id="default-datatable_paginate">
      {$orders.pagination}
    </div>
  </div>
</div>
