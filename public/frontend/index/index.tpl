{block name="header"}
    {include file="frontend/index/header.tpl"}
{/block}

{block name='breadcrumbs_area'}
{/block}

{block name="pageContent"}
  {if $has_emotions}
    <div class="emotion-section">
      {action module="frontend" controller="emotions" action='index'}
    </div>
  {/if}

{/block}

{block name="footer"}
    {include file="frontend/index/footer.tpl"}
{/block}
