{$category = $items.category}
{$sorting = $items.sorting}
<div class="category-header">
  <div class="row">
    <div class="col-12">
        <div class="product_header">
            <div class="section_title">
               <!-- <p>Recently added our store</p> -->
               <h2>{$category.name}</h2>
            </div>
            <div class="product_tab_btn">
                <ul class="nav" role="tablist" data-category="{$category.id}" >
                  {foreach from=$sorting item=$sort key=$key}
                  <li>
                      <a class="{if $key==0}active{/if}"
                         data-category-sort='{$sort}'
                         data-url="{url url='emotions/category?c='|cat:$category.id|cat:'&sort='|cat:$sort}"
                         data-toggle="tab"
                         href="#plant{$component.id}_{$key}"
                         role="tab"
                         aria-controls="plant1"
                         aria-selected="true">
                         {translator selector=$sort}
                      </a>
                  </li>
                  {/foreach}
                </ul>
            </div>
        </div>
      </div>
    </div>
</div>
<div class="product_container">
  <div class="row">
    <div class="col-12">
      <div class="tab-content">
        {foreach from=$sorting item=$sort key=$key}
          <div class="tab-pane fade{if $key == 0} show active{/if}" id="plant{$component.id}_{$key}" role="tabpanel">
            <div class="tab-inner-content" data-content='true'>
              <div class="self-preloader">
                <img src="{$BASE_FRONTEND}assets/img/icon/preloader.gif" alt="preloader">
              </div>
            </div>
          </div>
        {/foreach}
      </div>
    </div>
  </div>
</div>
