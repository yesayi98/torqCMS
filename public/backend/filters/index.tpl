{extends file="backend/index/index.tpl"}

{block name="container-content"}
  {block name="table-list"}
    <div class="row pt-2 pb-2">
      {block name="breadcrump"}
        <div class="col-sm-9">
          <h4 class="page-title">filters Overview</h4>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">filters</a></li>
            <li class="breadcrumb-item active" aria-current="page">Overview</li>
          </ol>
        </div>
      {/block}

    </div>
  {/block}
  {block name="table-block"}
    <div class="list-container" data-content='true'>
      <ul class="list-group list-group-flush">
        {foreach from=$filters.data item=$filter key=$key}
          <li class="list-group-item bg-transparent">
            <form class="form-group" action="{url url="backend/filters/save"}" data-ajaxsend="true" method="post">
              <div class=" d-flex justify-content-between mr-3">
                    <input type="hidden" name="id" value="{$filter.id}">
                    <select class="form-control" name="option_id">
                      <option value="">select option</option>
                      {foreach from=$options item=$option}
                        <option value="{$option.id}" {if $option.id == $filter.option_id}selected{/if}>{$option.name}</option>
                      {/foreach}
                    </select>
                    <button type="submit" class="btn btn-success" name="button">Submit</button>
              </div>
            </form>
          </li>
        {/foreach}
        <li class="list-group-item bg-transparent">
          <form class="form-group" action="{url url="backend/filters/save"}" method="post">
            <div class="title">
              NEW FILTER
            </div>
            <div class=" d-flex justify-content-between mr-3">
                  <input type="hidden" name="id" value="">
                  <select class="form-control" name="option_id">
                    <option value="">select option</option>
                    {foreach from=$options item=$option}
                      <option value="{$option.id}">{$option.name}</option>
                    {/foreach}
                  </select>
                  <button type="submit" class="btn btn-success" name="button">Submit</button>
            </div>
          </form>
        </li>
       </ul>
    </div>
  {/block}
{/block}
