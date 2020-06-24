{extends file="backend/articles/index.tpl"}

{block name="breadcrump"}
  <div class="col-sm-9">
    <h4 class="page-title">Advertising Overview</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javaScript:void();">Advertising</a></li>
      <li class="breadcrumb-item active" aria-current="page">Overview</li>
    </ol>
  </div>
{/block}

{block name="table-block"}
  <div class="list-container" data-content='true'>
    {include file="backend/advertisings/table.tpl"}
  </div>
{/block}
