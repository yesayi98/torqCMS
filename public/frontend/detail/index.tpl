{extends file='frontend/index/index.tpl'}


{block name='breadcrumbs_area'}
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                   <h3>{translator selector='details'}</h3>
                   <span>{$category.name}</span>
                   <span class="fa fa-angle-right"></span>
                   <span>{$product.name}</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->
{/block}

{block name="pageContent"}
  {block name='product-detail'}
    {include file="frontend/detail/content.tpl"}
  {/block}
{/block}
