{extends file="backend/index/index.tpl"}

{block name="container-content"}
  {block name="table-list"}
    <div class="row pt-2 pb-2">
      {block name="breadcrump"}
        <div class="col-sm-9">
          <h4 class="page-title">Emotions</h4>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Content</a></li>
            <li class="breadcrumb-item active" aria-current="page">Emotions</li>
          </ol>
        </div>
      {/block}
      {block name="buttons"}
      {/block}
    </div>
  {/block}
  {block name="table-block"}
    {include file="backend/emotions/table.tpl"}
  {/block}



{/block}
