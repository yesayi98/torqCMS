<div class="row">
    <div class="col-12">
        <div class="section_title">
           <!-- <p>Our recent articles about Organic</p> -->
           <h2>{$component.title}</h2>
        </div>
    </div>
</div>
<div class="row">
    <div class="blog_carousel blog_column3 owl-carousel">
      {foreach $items as $blog}
        {include file="frontend/category/product-box/box-blog.tpl"}
      {/foreach}
    </div>
</div>
