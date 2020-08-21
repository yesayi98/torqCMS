<article class="single_product product-item {block name='classname'}box-minimal{/block}" data-productid="{$product.id}">
  {block name='article-content'}
    <figure>
      {block name='article-image'}
        <div class="product_thumb">
            <div class="product-img">
                {block name='image-link'}
                <a class="primary_img" href="{url url='detail?a='|cat:$product.id}">
                  <span class="image-component">
                    <span class="image-container">
                      {if $product.images.0.thumbnails.0}
                      <img src="{$product.images.0.thumbnails.1.thumb_path}" alt="{$product.name}">
                      {elseif $product.images.0}
                      <img src="{$product.images.0.path}" alt="{$product.name}">
                      {else}
                      <img src="{$notFoundPath}" alt="{$product.name}">
                      {/if}
                    </span>
                  </span>
                </a>
                {/block}
                {block name='button-group'}
                <div class="img-icon">
                     <ul>
                          <li class="quick_button"><a href="{url url='detail/quickview?a='|cat:$product.id}" data-toggle="modal" data-modal="quickview" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                          <li class="wishlist{if $product.wished} wished{/if}">
                            <a href="{url url='wishlist/add?a='|cat:$product.id}" title="{translator selector='wished'}" data-wishlist="true">
                              <span class="lnr lnr-heart"></span>
                            </a>
                          </li>
                          <li class="compare">
                            <a href="{url url='compare/add?a='|cat:$product.id}" data-url="{url url='compare/add'}" data-id="{$product.id}" class="compare-btn" title="{translator selector='compare'}">
                              <span class="ti ti-control-shuffle"></span>
                            </a>
                          </li>
                     </ul>
                </div>
                {/block}
            </div>
            {block name='product-bages'}
            <div class="label_product">
              {if $product.discount}
                <span class="label_sale">{$product.discount}%</span>
              {/if}
              {if $product.is_new}
                <span class="label_new">{translator selector="new"}</span>
              {/if}
            </div>
            {/block}
            {block name='product-countdown'}
            {if !empty($product.attributes.sale_end) && $product.attributes.sale_end != '0000-00-00'}
              <div class="product_timing">
                  <div data-countdown="{$product.attributes.sale_end|replace:':':'/'}"></div>
              </div>
            {/if}
            {/block}

        </div>
      {/block}
      {block name="article-content"}
        <figcaption class="product_content">
            {block name='product-name'}
              <h4 class="product_name" title="{$product.name}"><a href="{url url='detail?a='|cat:$product.id}">{$product.name|truncate:40}</a></h4>
            {/block}
            {block name='product-quantity'}
            {$unit = 1}
            {if $product.unit}
              {$unit = $product.unit}
            {else}
              {$unit = 1}
            {/if}
            {$min_purchuase = $product.min_purchuase}
            {if !$min_purchuase}
              {$min_purchuase = $unit}
            {/if}
            <div class="quantity">
                <div class="quantity-button desc" >-</div>
                <input class="nums" type="number" readonly min="{$min_purchuase}" max="{$product.in_stock}" step="{$unit}" value="{$min_purchuase}">
                <div class="quantity-button add">+</div>
            </div>
            {/block}
            {block name='product-unit'}
            <div class="quantity-number">
                <h6>{$product.unit_params.name}</h6>
            </div>
            {/block}
            {block name='price-box'}
              <div class="price_box">
                  {if $product.discount}
                    {$price = $product.price - $product.price * $product.discount/100}
                    <span class="current_price"><span class="unit-price" data-value="{$price}">{$min_purchuase * $price}</span> {$currentCur.symbol}</span>
                    <span class="old_price"><span class="unit-price" data-value="{$product.price}">{$min_purchuase * $product.price}</span> {$currentCur.symbol}</span>
                  {else}
                    <span class="current_price"><span class="unit-price" data-value="{$product.price}">{$min_purchuase * $product.price}</span> {$currentCur.symbol}</span>
                  {/if}
              </div>
            {/block}
            {block name='basket-button'}
              <div class="product-button">
                  <a href="{url url='basket/add?a='|cat:$product.id}" data-ajaxsend='true'> {translator selector="buynow"} </a>
              </div>
            {/block}
        </figcaption>
      {/block}
    </figure>
  {/block}
</article>
