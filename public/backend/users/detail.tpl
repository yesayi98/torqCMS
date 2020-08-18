{extends file="backend/orders/detail.tpl"}
{block name="container-content"}
  <div class="card">
      <div class="card-header text-uppercase">
        <div class="card-title float-left">
           {$user.id}: {$user.name} {$user.lastname}
        </div>
        <div class="cart-buttons float-right button-group">
          <button type="button" form="detail-form" class="btn btn-success" name="save-detail"><i class="fa fa-save"></i> save</button>
          {if $user}
          <button type="button" data-url="{url url='backend/users/delete'}" data-name="o" data-id="{$user.id}" class="btn btn-danger" name="delete-detail"><i class="fa fa-trash"></i> delete</button>
          {/if}
          <a href="{url url='backend/users/'}" class="btn btn-info" ><i class="fa fa-undo"></i> back</a>
        </div>
      </div>
       <div class="card-body">
         <div class="detail-form-container">
           {block name="detail-form-container"}
             <form class="detail-form" id="detail-form" data-detail="{$user.id}" action="{url url='backend/users/save'}" method="post" data-ajaxsend="true">
               {block name="form-content"}
                 <div class="row">
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">Name</label>
                       <div class="col-sm-10">
                         <input type="text" name="name" class="form-control" value="{$user.name}" {if $user}readonly{/if}>
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">lastname</label>
                       <div class="col-sm-10">
                         <input type="text" name="lastname" {if $user}readonly{/if} class="form-control" value=" {$user.lastname}">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">email</label>
                       <div class="col-sm-10">
                         <input type="text" name="email" {if $user}readonly{/if} class="form-control" value="{$user.email}">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">phone</label>
                       <div class="col-sm-10">
                         <input type="text" name="phone" {if $user}readonly{/if} class="form-control" value="{$user.phone}">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">specific_id</label>
                       <div class="col-sm-10">
                         <input type="text" name="specific_id" {if $user}readonly{/if} class="form-control" value="{$user.specific_id}">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">guest</label>
                       <div class="col-sm-10">
                         <input type="text" name="guest" {if $user}readonly{/if} class="form-control" value="{$user.guest}">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">confirmed</label>
                       <div class="col-sm-10">
                         <input type="text" name="confirmed" {if $user}readonly{/if} class="form-control" value="{$user.confirmed}">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">gender</label>
                       <div class="col-sm-10">
                         <input type="text" name="gender" {if $user}readonly{/if} class="form-control" value="{$user.gender}">
                       </div>
                     </div>
                   </div>


                   <div class="col-12">
                     <div class="table-head">
                       <div class="table-title d-inline-block">
                         user orders
                       </div>
                     </div>
                     <div class="table-responsive">
                       <table id="default-datatable" class="table table-busered">
                         {block name="user-detail-table-head"}
                           <thead>
                               <tr>
                                   <th>ID</th>
                                   <th>price</th>
                                   <th>delivery</th>
                                   <th>bonus_price</th>
                                   <th>total_price</th>
                                   <th>order_status</th>
                                   <th>delivery_status</th>
                                   <th>Action</th>
                               </tr>
                           </thead>
                         {/block}
                         {block name="user-detail-table-body"}
                           <tbody>
                             {foreach $user.orders.data as $order}
                               <tr>
                                   <td>{$order.id}</td>
                                   <td>{$order.product_total} {$currentCur.symbol}</td>
                                   <td>{$order.delivery_price} {$currentCur.symbol}</td>
                                   <td>{$order.bonus_price} {$currentCur.symbol}</td>
                                   <td>{$order.total_price} {$currentCur.symbol}</td>
                                   <td>{$order.os_name}</td>
                                   <td>{$order.ds_name}</td>
                                   <td>
                                     <a href="{url url='backend/orders/detail?o='|cat:$order.id}" class="btn btn-info waves-effect detail-button waves-light m-1"><i class="fa fa-pencil"></i></a>
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
               <input type="hidden" name="id" value="{$user.id}">
             </form>
           {/block}
         </div>
       </div>
     </div>
{/block}
