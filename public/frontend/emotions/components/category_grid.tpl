<div class="categories-grid">
    <div class="product_items row mt-3">
      {foreach $items as $category}
      <div class="col-lg-3 col-md-4 col-sm-6 col-12 my-3">
        <article class="single_product product-item {block name='classname'}box-minimal{/block}" data-productid="{$category.id}">
          {block name='article-content'}
            <figure>
              {block name='article-image'}
                <div class="product_thumb">
                    <div class="product-img">
                        {block name='image-link'}
                        <a class="primary_img" href="{url url='category?c='|cat:$category.id}">
                          <span class="image-component">
                            <span class="image-container">
                              {if $category.image.thumbnails.0}
                              <img src="{$category.image.thumbnails.1.thumb_path}" alt="{$category.name}">
                              {elseif $category.image}
                              <img src="{$category.image.path}" alt="{$category.name}">
                              {else}
                              <img src="{$notFoundPath}" alt="{$category.name}">
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
                      <h4 class="product_name" title="{$category.name}"><a href="{url url='category?c='|cat:$category.id}">{$category.name|truncate:40}</a></h4>
                    {/block}
                </figcaption>
              {/block}
            </figure>
          {/block}
        </article>
      </div>
      {/foreach}
    </div>
</div>
