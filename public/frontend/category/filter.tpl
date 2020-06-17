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
            {$href = {url url="frontend/category?c="|cat:$entry.id}}
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
                 <input type="hidden" name="c" value="{$category.id}">
             </form>
         </div>
        {* <!--  <div class="widget_list widget_color">
             <h3>Select By Color</h3>
             <ul>
                 <li>
                     <a href="shop.html#">Black  <span>(6)</span></a>
                 </li>
                 <li>
                     <a href="shop.html#"> Blue <span>(8)</span></a>
                 </li>
                 <li>
                     <a href="shop.html#">Brown <span>(10)</span></a>
                 </li>
                 <li>
                     <a href="shop.html#"> Green <span>(6)</span></a>
                 </li>
                 <li>
                     <a href="shop.html#">Pink <span>(4)</span></a>
                 </li>

             </ul>
         </div> --> *}

         <div class="widget_list tags_widget">
             <h3>Ամենափնտրվողները</h3>
             <div class="tag_cloud">
                 <a href="{url url='category/search?search=բանան'}">Բանան</a>
                 <a href="{url url='category/search?search=միս'}">Միս</a>
                 <a href="{url url='category/search?search=խնձոր'}">խՆձոր</a>
                 <a href="{url url='category/search?search=չալաղաջ'}">խոզի չալաղաջ</a>
                 <a href="{url url='category/search?search=կաթ'}">կաթ</a>
                 <a href="{url url='category/search?search=մանդարին'}">Մանդարին</a>
                 <a href="{url url='category/search?search=կիվի'}">Կիվի</a>
             </div>
         </div>
         <div class="widget_list banner_widget">
             <div class="banner_thumb">
                 <a href="shop.html#"><img src="assets/img/bg/banner17.jpg" alt=""></a>
             </div>
         </div>
     </div>
 </aside>
 <!--sidebar widget end-->
