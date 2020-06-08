{* define the function *}
{function name=categories level=0}
    <ul class="sidebar-submenu level-{$level}">
      {foreach $data as $entry}
        <li>
          <a href="{url url="backend/categories/detail?c="|cat:$entry.id}" class="waves-effect category">
            <span>{$entry.id}: {$entry.name}</span>
            {if $entry.has_subcategory}
              <i class="fa fa-angle-left pull-right"></i>
            {/if}
          </a>
          {if $entry.has_subcategory}
            {call name=categories data=$entry.subcategories level=$level+1}
          {/if}
        </li>
      {/foreach}
    </ul>
{/function}
<div class="category-list" data-url="{url url='backend/categories/categoryList'}">
  <ul class="sidebar-menu in">
    <li class="active">
      <a href="javaScript:void(0)">Root</a>
      {call categories data=$categories}
    </li>
  </ul>
</div>
