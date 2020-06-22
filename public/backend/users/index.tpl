{extends file="backend/index/index.tpl"}

{block name="container-content"}
  {block name="table-list"}
    <div class="row pt-2 pb-2">
      {block name="breadcrump"}
        <div class="col-sm-9">
          <h4 class="page-title">User Overview</h4>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Users</a></li>
            <li class="breadcrumb-item active" aria-current="page">Overview</li>
          </ol>
        </div>
      {/block}
      {block name="buttons"}
        <div class="col-sm-3">
          <div class="btn-group float-sm-right">
            <button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Setting</button>
            <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
              <span class="caret"></span>
            </button>
            <div class="dropdown-menu">
              <a href="javaScript:void();" class="dropdown-item">Action</a>
              <a href="javaScript:void();" class="dropdown-item">Another action</a>
              <a href="javaScript:void();" class="dropdown-item">Something else here</a>
              <div class="dropdown-divider"></div>
              <a href="javaScript:void();" class="dropdown-item">Separated link</a>
            </div>
          </div>
        </div>
      {/block}
    </div>
  {/block}
  {block name="table-block"}
    <div class="list-container" data-content='true'>
      {include file="backend/users/table.tpl"}
    </div>
  {/block}
{/block}
