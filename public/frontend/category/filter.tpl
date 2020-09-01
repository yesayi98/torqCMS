{function name=categories level=0}
    <ul class="level-{$level}{if $level>0} widget_dropdown_categories dropdown_categories{/if}">
      {foreach $data as $entry}
      {if !$entry.in_menu || !$entry.active}
        {continue}
      {/if}
        <li class="widget_sub_categories sub_categories">
          {if $entry.subCategories}
            {$href = 'javascript:void(0)'}
          {else}
            {$href = {url url="category?c="|cat:$entry.id}}
          {/if}
          <a href="{$href}">
            {$entry.name}
          </a>
          {if $entry.subCategories}
            {call name=categories data=$entry.subCategories level=$level+1}
          {/if}
        </li>
      {/foreach}
    </ul>
{/function}

<!--sidebar widget start-->
 <aside class="sidebar_widget">
     <div class="widget_inner">
         <div class="widget_list widget_categories">
             <h3>{translator selector="catalog"}</h3>
             {call name=categories data=$categoryList}
         </div>
         <div class="widget_list widget_filter">
             <form action="{url url='category/search'}" id='filter_form'>
                 <h3>{translator selector="filterByPrice"}</h3>
                 <div class="filter-type">
                   <div id="slider-range"></div>
                   <button type="submit" data-rangesubmiter="true">{translator selector="filter"}</button>
                   <input type="text" id="amount" />
                   <input type="hidden" name="price[min]" id="min-price" value='{$minPrice}'>
                   <input type="hidden" name="price[max]" id="max-price" value='{$maxPrice}'>
                 </div>
                 <input type="hidden" name="search" value="{$search}">
                 <input type="hidden" name="sort" value="{$sort}" id="sorting_input">
                 <input type="hidden" name="c" value="{$category.id}">
             </form>
         </div>
         <div class="widget_list widget_color">
              <h3>{translator selector='suppliers'}</h3>
              <ul>
                {foreach from=$suppliers item=$supplier key=$key}
                <li>
                    <input type="checkbox" {if $context.suppliers && in_array($supplier.id, $context.suppliers)}checked{/if} data-filter="true" id="fil_supplier_{$key}" name="suppliers[]" value="{$supplier.id}" form="filter_form">
                    <label for="fil_supplier_{$key}"><a href="javascript:void(0)">{$supplier.name}</a></label>
                </li>
                {/foreach}
              </ul>
          </div>
         {foreach from=$filters item=$filter key=$item}
         <div class="widget_list widget_color">
              <h3>{$filter.option.name}</h3>
              <ul>
                {foreach from=$filter.option.values item=$value key=$key}
                <li>
                    <input type="checkbox" {if $context.options && in_array($value.id, $context.options)}checked{/if} data-filter="true" id="fil_{$item}_{$key}" name="options[]" value="{$value.id}" form="filter_form">
                    <label for="fil_{$item}_{$key}"><a href="javascript:void(0)">{$value.value}</a></label>
                </li>
                {/foreach}
              </ul>
          </div>
         {/foreach}
         <div class="widget_list banner_widget">
             <div class="banner_thumb">
                 {* <a href="shop.html#"><img src="assets/img/bg/banner17.jpg" alt=""></a> *}
             </div>
         </div>
     </div>
 </aside>
 <!--sidebar widget end-->
