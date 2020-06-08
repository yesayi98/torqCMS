{extends file="frontend/category/product-box/box-minimal.tpl"}
{block name='classname'}box-small{/block}
{block name='button-group'}
{/block}
{block name='price-box'}
{$smarty.block.parent}
<div class="action_links">
    <ul>
        <li class="add_to_cart"><a href="cart.html" title="" data-original-title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
        <li class="quick_button"><a href="index.html#" data-toggle="modal" data-target="#modal_box" title="" data-original-title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
        <li class="wishlist"><a href="wishlist.html" title="" data-original-title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
    </ul>
</div>
{/block}
{block name='product-countdown'}
{/block}
{block name='product-quantity'}
{/block}
{block name='product-unit'}
{/block}
{block name='basket-button'}
{/block}
