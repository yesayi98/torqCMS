<!--product area start-->

            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                      <!-- <p>Recently added our store </p> -->
                       <h2>{$component.title}</h2>
                    </div>
                </div>
            </div>
             <div class="product_container">
               <div class="row">
                   <div class="col-12">
                        <div class="product_carousel product_column5 owl-carousel">
                            {foreach $items as $product}
                              {include file="frontend/category/product-box/box-minimal.tpl"}
                            {/foreach}
                        </div>
                    </div>
                </div>
            </div>
