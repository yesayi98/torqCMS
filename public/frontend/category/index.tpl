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
  <div class="shop_area mt-70 mb-70">
      <div class="container">
          <div class="row">
              <div class="filter-action-container col-12 d-lg-none">
                <div class="filter-opener shop_toolbar_wrapper">
                  <a href="javascript:void(0)" class="filter-opener-button btn btn-outline-success">{translator selector="filter"}</a>
                </div>
              </div>
              <div class="col-lg-3 col-md-12 col-12 filter-container hidden-before-lg">
                {block name='sidebar'}
                  {include file="frontend/category/filter.tpl"}
                {/block}
              </div>
              <div class="col-lg-9 col-md-12 col-12" data-content=true>
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
