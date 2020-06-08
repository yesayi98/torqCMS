{extends file='frontend/index/index.tpl'}
{block name='breadcrumbs_area'}
  <!--breadcrumbs area start-->
  <div class="breadcrumbs_area" {if $category.image.path}style="background: url({$category.image.path}) no-repeat 0 0"{/if}>
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="breadcrumb_content">
                      <h3>{$category.name}</h3>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!--breadcrumbs area end-->
{/block}
{block name="pageContent"}

<section class="blog_page_section blog_reverse mt-70">
     <div class="container">
          <div class="row">
              <div class="col-12">
                <div class="blog_wrapper blog_wrapper_sidebar">
                    <div class="row">
                      {foreach $blogs.data as $blog}
                        <div class="col-lg-4 col-md-4 col-sm-6">
                          {include file="frontend/category/product-box/box-blog.tpl"}
                        </div>
                      {/foreach}
                    </div>
                </div>
              </div>
          </div>
      </div>
  </section>

  <div class="blog_pagination">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pagination">
                        {$blogs.pagination}
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}
