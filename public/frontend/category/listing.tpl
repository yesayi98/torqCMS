{block name='top-toolbar'}
<!--shop toolbar start-->
<div class="shop_toolbar_wrapper">
    <div class="shop_toolbar_btn">

        <button data-role="grid_3" type="button" class="active btn-grid-3" data-toggle="tooltip" title="3"></button>

        <button data-role="grid_4" type="button"  class=" btn-grid-4" data-toggle="tooltip" title="4"></button>
        <!-- <button data-role="grid_list" type="button"  class="btn-list" data-toggle="tooltip" title="List"></button> -->
    </div>
    <div class=" niceselect_option">
        <div class="select_option">
            <select name="sortby">
                <option {if !$sort || $sort == 'default'}selected{/if} value="default">{translator selector="sortby"}</option>
                <option value="default">{translator selector="sortby"}</option>
                <option value="name_asc" {if $sort == 'name_asc'}selected disabled{/if}>{translator selector="name_asc"}</option>
                <option value="name_desc" {if $sort == 'name_desc'}selected disabled{/if}>{translator selector="name_desc"}</option>
                <option value="price_asc" {if $sort == 'price_asc'}selected disabled{/if}>{translator selector="price_asc"}</option>
                <option value="price_desc" {if $sort == 'price_desc'}selected disabled{/if}>{translator selector="price_desc"}</option>
                <option  value="sales_sort" {if $sort == 'sales_sort'}selected disabled{/if}>{translator selector="sales_sort"}</option>
                <option value="sale_end" {if $sort == 'sale_end'}selected disabled{/if}>{translator selector="sale_end"}</option>
            </select>
        </div>
    </div>
    <div class="page_amount">
        <p>{translator selector="countProducts"}</p>
    </div>
</div>
 <!--shop toolbar end-->
{/block}

{block name='product-list'}
<!--  PRODUCT ---- -->
<div class="row shop_wrapper">
  {foreach $products.data as $product}
    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
        {include file="frontend/category/product-box/box-minimal.tpl"}
    </div>
  {/foreach}
</div>
{/block}

{block name='bottom-toolbar'}
<div class="shop_toolbar t_bottom">
    <div class="pagination">
        {$products.pagination}
    </div>
</div>
{/block}
<!--shop toolbar end-->
