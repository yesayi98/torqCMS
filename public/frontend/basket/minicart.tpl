<div class="cart_gallery">
  {foreach $basketProducts as $product}
    <div class="cart_item">
       <div class="cart_img">
           <a href="{url url='detail?a='|cat:$product.id}"><img src="{$product.images.0.thumbnails.0.thumb_path}" alt="{$product.name}"></a>
       </div>
        <div class="cart_info">
            <a href="{url url='detail?a='|cat:$product.id}">{$product.name}</a>
            <p>{$product.quantity} x <span> {$product.price} {$currentCur.symbol}</span></p>
        </div>
        <div class="cart_remove">
            <a href="{url url='basket/delete?a='|cat:$product.id}"><i class="icon-x"></i></a>
        </div>
    </div>
  {/foreach}
</div>
<div class="mini_cart_table">
    <div class="cart_table_border">
        <div class="cart_total">
            <span>{translator selector="total"}</span>
            <span class="price">{$basketTotal} {$currentCur.symbol}</span>
        </div>
        <div class="cart_total mt-10">
            <span>{translator selector="totalPrice"}</span>
            <span class="price">{$basketTotal} {$currentCur.symbol} + {translator selector="deliveryprice"}</span>
        </div>
    </div>
</div>
<div class="mini_cart_footer">
   <div class="cart_button">
        <a href="{url url='basket'}"><i class="fa fa-shopping-cart"></i> {translator selector="basket"}</a>
    </div>
    <div class="cart_button">
        <a href="{url url='checkout'}"><i class="fa fa-sign-in"></i> {translator selector="pay"}</a>
    </div>

</div>
