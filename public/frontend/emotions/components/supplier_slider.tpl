<div class="supplier-slider">
    <div class="row mt-3">
        <div class="col-12">
            <div class="section_title my-3">
              <!-- <p>Recently added our store </p> -->
               <h2>{$component.title}</h2>
            </div>
        </div>
    </div>
    <div class="product_carousel product_column8 owl-carousel mt-3">
      {foreach $items as $supplier}
        <article class="single_product product-item {block name='classname'}supplier-box{/block}">
          {block name='article-content'}
            <figure>
              {block name='article-image'}
                <div class="supplier-thumb">
                    <div class="supplier-img">
                        {block name='image-link'}
                        <a class="primary_img" href="{url url='search?suppliers%5B%5D='|cat:$supplier.id}">
                          <span class="image-component">
                            <span class="image-container">
                              {if $supplier.media.thumbnails.0}
                              <img src="{$supplier.media.thumbnails.1.thumb_path}" alt="{$supplier.name}">
                              {elseif $supplier.image}
                              <img src="{$supplier.media.path}" alt="{$supplier.name}">
                              {else}
                              <img src="{$notFoundPath}" alt="{$supplier.name}">
                              {/if}
                            </span>
                          </span>
                        </a>
                        {/block}
                    </div>
                </div>
              {/block}
              {block name="article-content"}
                <figcaption class="product_content">
                    {block name='product-name'}
                      <h4 class="product_name" title="{$supplier.name}"><a href="{url url='category?c='|cat:$supplier.id}">{$supplier.name|truncate:40}</a></h4>
                    {/block}
                </figcaption>
              {/block}
            </figure>
          {/block}
        </article>
      {/foreach}
    </div>
</div>
