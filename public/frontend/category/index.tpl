{extends file='frontend/index/index.tpl'}

{block name='breadcrumbs_area'}
  <!--breadcrumbs area start-->
  <div class="breadcrumbs_area" {if $category.image}style="background: url('{$category.image.path}')"{/if}>
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="breadcrumb_content">
                      <h3>{$category.name}</h3>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!--breadcrumbs area end-->
{/block}

{block name="pageContent"}


  <!--shop  area start-->
  <div class="shop_area shop_reverse mt-70 mb-70">
      <div class="container">
          <div class="row">
              <div class="col-lg-3 col-md-12">
                {block name='sidebar'}
                  {include file="frontend/category/filter.tpl"}
                {/block}
              </div>
              <div class="col-lg-9 col-md-12" data-content=true>
                <!--shop wrapper start-->
                {block name='wraper'}
                  {include file="frontend/category/listing.tpl"}
                {/block}
                <!--shop wrapper end-->
              </div>
          </div>
      </div>
  </div>
  <!--shop  area end-->
{/block}
