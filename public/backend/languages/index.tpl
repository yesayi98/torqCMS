{extends file="backend/index/index.tpl"}

{block name="container-content"}
  {block name="table-list"}
    <div class="row pt-2 pb-2">
      {block name="breadcrump"}
        <div class="col-sm-9">
          <h4 class="page-title">Languages Overview</h4>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Languages</a></li>
            <li class="breadcrumb-item active" aria-current="page">Overview</li>
          </ol>
        </div>
      {/block}
      {block name="buttons"}
        <div class="col-sm-3">
          <div class="btn-group float-sm-right">
            <a href="{url url='backend/languages/detail'}" class="btn btn-success waves-effect waves-light m-1"><i class="fa fa-plus pr-2"></i>Add New</a>
          </div>
        </div>
      {/block}
    </div>
  {/block}
  {block name="table-block"}
    <div class="list-container" data-content='true'>
      {include file="backend/languages/table.tpl"}
    </div>
  {/block}
{/block}
