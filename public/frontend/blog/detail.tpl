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

<section class="blog_details">
     <div class="container">
          <div class="row">
              <div class="col-12">
                <div class="blog_wrapper blog_wrapper_details">
                  <article class="single_blog">
                    <figure>
                     <div class="post_header">
                         <h3 class="post_title">{$blog.name}</h3>
                          <div class="blog_meta">
                             <p>{$blog.created_date}</p>
                          </div>
                      </div>
                      <div class="blog_thumb">
                         <a href="javascript:void(0)"><img src="{$blog.image.path}" alt="{$blog.name}"></a>
                     </div>
                     <figcaption class="blog_content">
                          <div class="post_content">
                              {$blog.description}
                          </div>
                          <div class="entry_content mt-50">
                              <div class="social_sharing">
                                  <p>Կիսվել :</p>
                                  <ul>
                                      <li><a href="blog-details.html#" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                      <li><a href="blog-details.html#" title="twitter"><i class="fa fa-instagram"></i></a></li>
                                  </ul>
                              </div>
                            </div>
                        </figcaption>
                   </figure>
                </article>
                  <div class="related_posts">
                      <h3>{$category.name}</h3>
                      <div class="row">
                        {foreach $similarBlogs.data as $blog}
                          <div class="col-lg-4 col-md-4 col-sm-6">
                            {include file="frontend/category/product-box/box-blog.tpl"}
                          </div>
                        {/foreach}
                      </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
  </section>


{/block}
