{$images = $product.images}
<div class="product-details-tab">
    <div id="img-1" class="zoomWrapper single-zoom">
        <a href="javascript:void(0)">
            <img id="zoom1" src="{$images.0.path}" data-zoom-image="{$images.0.path}" alt="{$product.name}">
        </a>
    </div>
    <div class="single-zoom-thumb">
        <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
          {if $images|count > 1}
          {foreach $images as $image}
            <li>
                <a href="product-details.html#" class="elevatezoom-gallery active" data-update="" data-image="{$image.path}" data-zoom-image="{$image.path}">
                    <img src="{$image.thumbnails.0.thumb_path}" alt="{$image.name}"/>
                </a>
            </li>
          {/foreach}
          {/if}
        </ul>
    </div>
</div>
