{extends file="backend/index/index.tpl"}
{block name="container-content"}
<div class="row pt-2 pb-2">
  {block name="breadcrump"}
    <div class="col-sm-9">
      <h4 class="page-title">Core</h4>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">Basic settings</a></li>
        <li class="breadcrumb-item active" aria-current="page">Core</li>
      </ol>
    </div>
  {/block}
  {block name="table-block"}
  <div class="row w-100">
    <div class="col-lg-12">
      <div class="card">
        {block name="table-name"}
        <div class="card-header"><i class="fa fa-table"></i> Translations</div>
        {/block}
        <div class="card-body">
          <div class="table-responsive">
            <table id="default-datatable" class="table table-bordered">
              {block name="table-head"}
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>name</th>
                        <th>description</th>
                        <th>value</th>
                        <th>actions</th>
                    </tr>
                </thead>
              {/block}
              {block name="table-body"}
                <tbody>
                  {foreach from=$items.data item=$item key=id}
                    <tr>
                        <td>
                          <div class="form-group row">
                            <div class="col-sm-12" >
                              {$item.id}
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="form-group row">
                            <div class="col-sm-12" >
                              <input type="text" form="{$id}" readonly name="name" class="form-control" value="{$item.name}">
                            </div>
                          </div>
                        </td>

                        <td class="table-description">
                          <div class="form-group row">
                            <div class="col-sm-12">
                              {$item.description|unescape}
                              <input type="hidden" form="{$id}" name="description" value="{$item.description|unescape}">
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="form-group row">
                            <div class="col-sm-12" >
                              {$path = "backend/basics/coreItems/"|cat:$item.content_type|cat:".tpl"}
                              {include file=$path}
                            </div>
                          </div>
                        </td>
                        <td>
                          <form action="{url url='backend/core/save'}" id='{$id}' method="post" data-ajaxsend='true'>
                            <input type="hidden" name="id" value="{$item.id}">
                            <input type="hidden" name="content_type" value="{$item.content_type}">
                            <button type='submit' class="btn btn-success waves-effect waves-light m-1">save</button>
                          </form>
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
        {$items.pagination}
      </div>
    </div>
  </div>
  {/block}
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
<!--Category Js-->
<script src="{$BASE_BACKEND}assets/js/jquery.categories.js"></script>
<!--Switchery Js-->
<script src="{$BASE_BACKEND}assets/plugins/switchery/js/switchery.min.js"></script>
<!-- ckeditor initer -->
<script src="{$BASE_BACKEND}assets/js/jquery.editor.js"></script>

<script type="text/javascript">
  $.subscribe('detail/gallery/imageAdded', function (plugin) {
    $('.detail-image-id-static').val($('.detail-image-id').val());
  })
</script>
{/block}
