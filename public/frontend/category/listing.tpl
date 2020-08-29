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
              <option value="default">{translator selector="sortby"}</option>
              {foreach from=$sortings item=$sorting key=$key}
                <option value="{$sorting.selector}" {if $sort == $sorting.selector}selected disabled{/if}>{translator selector="{$sorting.selector}"}</option>
              {/foreach}
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
