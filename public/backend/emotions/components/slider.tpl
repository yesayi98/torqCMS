
<!--slider area start-->
    <section class="slider_section">
        <div class="slider_area owl-carousel">
          {foreach $items as $slider}
            <div class="single_slider d-flex align-items-center" data-bgimg="{$slider.media.path}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="slider_content">
                                <h1>{$slider.name}</h1>
                                {$slider.description}
                                <a href="{$slider.url}" class="mt-20">{translator selector='viewMore'}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          {/foreach}
        </div>
    </section>
    <!--slider area end-->
