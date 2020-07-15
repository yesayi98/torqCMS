{extends file="backend/orders/index.tpl"}

{block name="css-container"}
  <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet"/>
  <link href="assets/plugins/inputtags/css/bootstrap-tagsinput.css" rel="stylesheet" />
  {$smarty.block.parent}
{/block}

{block name="container-content"}
  <div class="card">
      <div class="card-header text-uppercase">
        <div class="card-title float-left">
           {$order.id}: {$order.name} {$order.lastname}
        </div>
        <div class="cart-buttons float-right button-group">
          <button type="button" form="detail-form" class="btn btn-success" name="save-detail"><i class="fa fa-save"></i> save</button>
          {if $order}
          <button type="button" data-url="{url url='backend/orders/delete'}" data-name="o" data-id="{$order.id}" class="btn btn-danger" name="delete-detail"><i class="fa fa-trash"></i> delete</button>
          {/if}
          <a href="{url url='backend/orders/'}" class="btn btn-info" ><i class="fa fa-undo"></i> back</a>
        </div>
      </div>
       <div class="card-body">
         <div class="detail-form-container">
           {block name="detail-form-container"}
             <form class="detail-form" id="detail-form" data-detail="{$order.id}" action="{url url='backend/orders/save'}" method="post" data-ajaxsend="true">
               {block name="form-content"}
                 <div class="row">
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">Name</label>
                       <div class="col-sm-10">
                         <input type="text" name="name" class="form-control" value="{$order.name} {$order.lastname}" {if $order}readonly{/if}>
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">Price</label>
                       <div class="col-sm-10">
                         <input type="number" name="product_price" {if $order}readonly{/if} class="form-control" value="{$order.product_total}">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">Order number</label>
                       <div class="col-sm-10">
                         <input type="text" name="order_id" {if $order}readonly{/if} class="form-control" value="{$order.id}">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">Delivery price</label>
                       <div class="col-sm-10">
                         <input type="number" name="delivery_price" {if $order}readonly{/if} class="form-control" value="{$order.delivery_price}">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">Bonus price</label>
                       <div class="col-sm-10">
                         <input type="text" name="bonus_price" {if $order}readonly{/if} class="form-control" value="{$order.bonus_price}">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">payment Method</label>
                       <div class="col-sm-10">
                         <select class="form-control" name='payment_method' {if $order}readonly{/if} >
                           {foreach $paymentMethods as $method}
                            <option value="{$method.id}" {if $method.id == $order.payment_method}selected{/if}>{$method.name}</option>
                           {/foreach}
                         </select>
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">Total</label>
                       <div class="col-sm-10">
                         <input type="number" name='total_price' {if $order}readonly{/if} class="form-control" value="{$order.total_price}">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">buy date</label>
                       <div class="col-sm-10">
                         <input type="text" name='buy_date' {if $order}readonly{/if} class="form-control" value="{$order.buy_date}">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">delivery date</label>
                       <div class="col-sm-10">
                         <input type="date" name='delivery_date' class="form-control" value="{$order.delivery_date}">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">order status</label>
                       <div class="col-sm-10">
                         <select class="form-control" name='order_status'>
                           {foreach $orderStatuses as $status}
                            <option value="{$status.id}" {if $status.id == $order.order_status}selected{/if}>{$status.name}</option>
                           {/foreach}
                         </select>
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">delivery status</label>
                       <div class="col-sm-10">
                         <select class="form-control" name='delivery_status'>
                           {foreach $deliveryStatuses as $status}
                            <option value="{$status.id}" {if $status.id == $order.delivery_status}selected{/if}>{$status.name}</option>
                           {/foreach}
                         </select>
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">address</label>
                       <div class="col-sm-10">
                         <textarea name="name" readonly class="form-control">{$order.address.city_info.name} {$order.address.address}</textarea>
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">notes</label>
                       <div class="col-sm-10">
                         <textarea name="name" readonly class="form-control">{$order.address.notes}</textarea>
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-12 col-xl-12">
                     <div class="form-group row">
                       <label class="col-sm-1 col-form-label">phone</label>
                       <div class="col-sm-11">
                         <input name="name" readonly class="form-control" value="{$order.address.phone}">
                       </div>
                     </div>
                   </div>
                   <div class="col-12">
                     <div class="table-head">
                       <div class="table-title d-inline-block">
                         ORDER DETAILS
                       </div>
                       <div class="button-group pull-right">
                         <a href="{url url='backend/orders/articleDetail?o='|cat:$order.id}" class="btn btn-info waves-effect detail-button waves-light m-1"><i class="fa fa-plus"></i> NEW</a>
                       </div>
                     </div>
                     <div class="table-responsive">
                       <table id="default-datatable" class="table table-bordered">
                         {block name="order-detail-table-head"}
                           <thead>
                               <tr>
                                   <th>ID</th>
                                   <th>Name</th>
                                   <th>Price</th>
                                   <th>discount</th>
                                   <th>quantity</th>
                                   <th>total</th>
                                   <th>Action</th>
                               </tr>
                           </thead>
                         {/block}
                         {block name="order-detail-table-body"}
                           <tbody>
                             {foreach $order.details as $article}
                               <tr>
                                   <td>{$article.article_id}</td>
                                   <td>{$article.name}</td>
                                   <td>{$article.price}</td>
                                   <td>{$article.mainDetail.discount}</td>
                                   <td>{$article.quantity} {$article.mainDetail.unit_params.name}</td>
                                   <td>{$article.total}</td>
                                   <td>
                                     <a href="{url url='backend/orders/articleDetail?o='|cat:$order.id|cat:'&od='|cat:$article.id}" class="btn btn-info waves-effect detail-button waves-light m-1"><i class="fa fa-pencil"></i></a>
                                     <a href="{url url='backend/articles/deleteDetail?a='|cat:$article.id}" class="btn btn-danger waves-effect waves-light m-1"><i class="fa fa-trash"></i></a>
                                   </td>
                               </tr>
                             {/foreach}
                           </tbody>
                         {/block}
                       </table>
                     </div>
                   </div>
                 </div>
               {/block}
               <input type="hidden" name="id" value="{$order.id}">
             </form>
           {/block}
         </div>
       </div>
     </div>
{/block}

{block name="modal-container"}
<div class="modal fade order-detail">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">orderDetail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="contaiener" data-content="true">

        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" form="order-detail-form" class="btn btn-success"><i class="fa fa-check-square-o"></i> Save</button>
      </div>
    </div>
  </div>
</div>
{/block}

{block name="js-container"}
  {$smarty.block.parent}
  <!-- ckeditor -->
  <script src="{$BASE_BACKEND}assets/plugins/ckeditor/js/ckeditor.js"></script>
  <!--select2 plugin-->
  <script src="{$BASE_BACKEND}assets/plugins/select2/js/select2.min.js"></script>
  <!--Inputtags Js-->
  <script src="{$BASE_BACKEND}assets/plugins/inputtags/js/bootstrap-tagsinput.js"></script>
  <!--Detail Js-->
  <script src="{$BASE_BACKEND}assets/js/jquery.detail.js"></script>
  <!-- ckeditor initer -->
  <script src="{$BASE_BACKEND}assets/js/jquery.editor.js"></script>
{/block}
