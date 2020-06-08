<div class="small_product_area product_column2 owl-carousel">
    {split_array var=$items num=$items|count/3 assign="product_arrays"}
    {foreach $product_arrays as $products}
        <div class="product_items">
          {foreach $products as $product}
          {include file="frontend/category/product-box/box-small.tpl"}
          {/foreach}
        </div>
    {/foreach}
</div>
