{extends file="backend/index/index.tpl"}
{block name="css-container"}
  <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet"/>
  <link href="assets/plugins/inputtags/css/bootstrap-tagsinput.css" rel="stylesheet" />
  <link href="assets/plugins/switchery/css/switchery.min.css" rel="stylesheet">
  <!-- Dropzone css -->
  <link href="assets/plugins/dropzone/css/dropzone.css" rel="stylesheet" type="text/css">
  <!--multi select-->
  <link href="assets/plugins/jquery-multi-select/multi-select.css" rel="stylesheet" type="text/css">
  {$smarty.block.parent}
{/block}

{block name="container-content"}
  {block name="table-list"}
    <div class="row pt-2 pb-2">
      {block name="breadcrump"}
        <div class="col-sm-9">
          <h4 class="page-title">Emotions</h4>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Emotions</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail</li>
          </ol>
        </div>
      {/block}
      {block name="buttons"}

      {/block}
    </div>
  {/block}
  {block name="emotion-content"}
  <div class="row">
    <div class="col-md-4 col-sm-6">
      <div class="card">
       <div class="card-header text-uppercase">
         <div class="card-title d-inline">{$emotion.name}</div>
       </div>
       <div class="card-body">
         <div class="">
           <form class="emotion-detail" id="detail-form" data-ajaxsend=true action="{url url='backend/emotions/save'}" method="post">
             {if $emotion}
               <input type="hidden" name="id" value="{$emotion.id}">
             {/if}
             <div class="row">
               <div class="col-12">
                 <div class="form-group row">
                   <label class="col-12 col-form-label">name</label>
                   <div class="col-12">
                     <input type="text" name="name" class="form-control" value="{$emotion.name}">
                   </div>
                 </div>
               </div>
               <div class="col-12">
                 <div class="form-group row">
                   <label class="col-12 col-form-label">row height</label>
                   <div class="col-12">
                     <input type="number" name="row_height" class="form-control" value="{$emotion.row_height}">
                   </div>
                 </div>
               </div>
               <div class="col-4">
                 <div class="form-group row">
                   <label class="col-12 col-form-label">Activity</label>
                   <div class="col-12">
                     <input type="checkbox" name="active" class="js-switch" data-color="#14abef" {if $emotion.active}checked{/if}>
                   </div>
                 </div>
               </div>
               <div class="col-4">
                 <div class="form-group row">
                   <label class="col-12 col-form-label">full screen</label>
                   <div class="col-12">
                     <input type="checkbox" name="full_screen" class="js-switch" data-color="#14abef" {if $emotion.full_screen}checked{/if}>
                   </div>
                 </div>
               </div>
               <div class="col-12">
                 <div class="form-group row">
                   <label class="col-12 col-form-label">Class List (with prabel)</label>
                   <div class="col-12">
                     <input type="text" name="class" class="form-control" value="{$emotion.class}">
                   </div>
                 </div>
               </div>
               <div class="col-12">
                 <div class="form-group row">
                   <label class="col-12 col-form-label">Sort id</label>
                   <div class="col-12">
                     <input type="number" name="sort_id" class="form-control" value="{$emotion.sort_id}">
                   </div>
                 </div>
               </div>
               <div class="col-12">
                 <div class="form-group row">
                   <label class="col-12 col-form-label">actions</label>
                   <div class="col-12">
                     <button type="submit" class="btn btn-success" name="save-detail">Save</button>
                     <button type="button" data-deleteDetail="true" class="btn btn-danger pull-right" name="delete-detail">Delete</button>
                   </div>
                 </div>
               </div>
             </div>
           </form>
         </div>
       </div>
      </div>
    </div>
    <div class="col-md-8 col-sm-6">
      <div class="card">
        <div class="card-header text-uppercase">
          <div class="card-title d-inline">Components</div>
        </div>
        <div class="card-body" data-content='true'>
          {include file="backend/emotions/components.tpl"}
        </div>
		  </div>
    </div>
  </div>
  {/block}
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
  {block name="component-modal"}
  <div class="modal fade component-modal">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Component</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="contaiener" data-content="true" data-url="{url url='backend/emotions/componentDetail'}">

          </div>
        </div>
        <div class="modal-footer">
          <form class="addImage" action="{url url="backend/emotions/componentsave"}" data-ajaxsend='true' id="component-form" method="post">
            <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  {/block}
{/block}
{block name="js-container"}
  {$smarty.block.parent}
  <!--Multi Select Js-->
  <script src="assets/plugins/jquery-multi-select/jquery.multi-select.js"></script>
  <script src="assets/plugins/jquery-multi-select/jquery.quicksearch.js"></script>
  <!-- ckeditor -->
  <script src="{$BASE_BACKEND}assets/plugins/ckeditor/js/ckeditor.js"></script>
  <!--select2 plugin-->
  <script src="{$BASE_BACKEND}assets/plugins/select2/js/select2.min.js"></script>
  <!--Inputtags Js-->
  <script src="{$BASE_BACKEND}assets/plugins/inputtags/js/bootstrap-tagsinput.js"></script>
  <!--Detail Js-->
  <script src="{$BASE_BACKEND}assets/js/jquery.detail.js"></script>
  <!--emotion Js-->
  <script src="{$BASE_BACKEND}assets/js/jquery.categories.js"></script>
  <!--Emotions Js-->
  <script src="{$BASE_BACKEND}assets/js/jquery.emotions.js"></script>
  <!--Switchery Js-->
  <script src="{$BASE_BACKEND}assets/plugins/switchery/js/switchery.min.js"></script>
  <!-- ckeditor initer -->
  <script src="{$BASE_BACKEND}assets/js/jquery.editor.js"></script>

{/block}
