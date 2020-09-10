{block name="media-grid"}
  <div class="row">
    {foreach $media.data as $image}
      {if $ajax == true}
        {include file="backend/media/media-box/basic-box.tpl" image=$image fromArticles=$ajax}
      {else}
        {include file="backend/media/media-box/basic-box.tpl" image=$image}
      {/if}
    {/foreach}
  </div>
  <div class="pagination-container">
    {$media.pagination}
  </div>
{/block}
