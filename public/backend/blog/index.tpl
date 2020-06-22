{extends file="backend/articles/index.tpl"}

{block name="table-block"}
  <div class="list-container" data-content='true'>
    {include file="backend/blog/table.tpl"}
  </div>
{/block}
