<div class="product_carousel product_column5 owl-carousel category-teaser">
    {split_array var=$articles num=$articles|count/3 assign="product_arrays"}
    {foreach $product_arrays as $products}
        <div class="product_items">
          {foreach $products as $product}
          {include file="frontend/category/product-box/box-minimal.tpl"}
          {/foreach}
        </div>
    {/foreach}
</div>
