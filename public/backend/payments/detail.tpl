{extends file="backend/payments/index.tpl"}

{block name="css-container"}
  <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet"/>
  <link href="assets/plugins/inputtags/css/bootstrap-tagsinput.css" rel="stylesheet" />
  {$smarty.block.parent}
{/block}

{block name="container-content"}
  <div class="card">
      <div class="card-header text-uppercase">
        <div class="card-title float-left">
           {$payment.id}: {$payment.name}
        </div>
        <div class="cart-buttons float-right button-group">
          <button type="button" form="detail-form" class="btn btn-success" name="save-detail"><i class="fa fa-save"></i> save</button>
          {if $payment}
          <button type="button" data-url="{url url='backend/payments/delete?l='|cat:$payment.id}" class="btn btn-danger" name="delete-detail"><i class="fa fa-trash"></i> delete</button>
          {/if}
          <a href="{url url='backend/payments/'}" class="btn btn-info" ><i class="fa fa-undo"></i> back</a>
        </div>
      </div>
       <div class="card-body">
         <div class="detail-form-container">
           {block name="detail-form-container"}
             <form class="detail-form" id="detail-form" data-detail="{$payment.id}" action="{url url='backend/payments/save'}" method="post" data-ajaxsend="true">
               {block name="form-content"}
                 <div class="row">
                   <div class="col-12">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">Name</label>
                       <div class="col-sm-10">
                         <input type="text" name="name" class="form-control" value="{$payment.name}">
                       </div>
                     </div>
                   </div>
                   <div class="col-12">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">Description</label>
                       <div class="col-sm-10">
                         <textarea name="description" class="form-control" rows="8" cols="80">{$payment.description}</textarea>
                       </div>
                     </div>
                   </div>
                   <div class="col-12">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">Client ID</label>
                       <div class="col-sm-10">
                          <input type="text" name="client_id" class="form-control" value="{$payment.client_id}">
                       </div>
                     </div>
                   </div>
                   <div class="col-12">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">Client secret key</label>
                       <div class="col-sm-10">
                          <input type="password" name="client_secret_key" class="form-control" value="{$payment.client_secret_key}">
                       </div>
                     </div>
                   </div>
                   <div class="col-12">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">default</label>
                       <div class="col-sm-10">
                         <input type="password" name="client_password" class="form-control" value="{$payment.client_password}">
                       </div>
                     </div>
                   </div>
                 </div>
               {/block}
               <input type="hidden" name="id" value="{$payment.id}">
             </form>
           {/block}
         </div>
       </div>
     </div>


{/block}

{block name="modal-container"}
  {block name="gallery-modal"}
  <div class="modal fade gallery-modal">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Gallery</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="contaiener" data-content="true" data-url="{url url='backend/media'}">

          </div>
        </div>
        <div class="modal-footer">
          <form class="addImage" action="{url url='backend/media/'}" id="imageToDetail" method="post">
            <button type="submit" class="btn btn-light addDetailImage"><i class="fa fa-check-square-o"></i> Add</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  {/block}


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
