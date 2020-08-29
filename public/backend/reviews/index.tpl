{extends file="backend/index/index.tpl"}
{block name="container-content"}
  {block name="table-list"}
    <div class="row pt-2 pb-2">
      {block name="breadcrump"}
        <div class="col-sm-9">
          <h4 class="page-title">Customer Reviews</h4>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Users</a></li>
            <li class="breadcrumb-item active" aria-current="page">Reviews</li>
          </ol>
        </div>
      {/block}
      {block name="buttons"}
        <div class="col-sm-3">
          <div class="btn-group float-sm-right">
            <a href="{url url='backend/reviews/detail'}" class="btn btn-success waves-effect waves-light m-1"><i class="fa fa-plus pr-2"></i>Add New</a>
          </div>
        </div>
      {/block}
    </div>
  {/block}
  {block name="table-block"}
    <div class="list-container" data-content='true'>
      {include file="backend/reviews/table.tpl"}
      <div class="row mt-3">
        <div class="col-sm-12 col-md-7">
          <div class="dataTables_paginate paging_simple_numbers" id="default-datatable_paginate">
            {$reviews.pagination}
          </div>
        </div>
      </div>
    </div>
  {/block}
{/block}
