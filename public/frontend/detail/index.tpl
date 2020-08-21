{extends file='frontend/index/index.tpl'}


{block name='breadcrumbs_area'}
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                   <h3>{translator selector='details'}</h3>
                   {foreach $breadcrumps as $breadcrump}
                    <span>{$breadcrump.name}</span>
                    <span class="fa fa-angle-right"></span>
                   {/foreach}
                   <span>{$product.name}</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->
{/block}

{block name="pageContent"}
  {block name='product-detail'}
    {include file="frontend/detail/content.tpl"}

        <!--product info start-->
        {if $product.options}
        <div class="product_d_info mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product_d_inner">
                          <div class="product_info_button">
                              <ul class="nav" role="tablist">
                                  <li>
                                       <a class="active" data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet" aria-selected="false">{translator selector='properties'}</a>
                                  </li>
                              </ul>
                          </div>
                          <div class="tab-content">
                              <div class="tab-pane fade show active" id="sheet" role="tabpanel" >
                                  <div class="product_d_table">
                                    <table>
                                        <tbody>
                                          {foreach $product.options as $option}
                                            <tr>
                                                <td class="first_child">{$option.name}</td>
                                                <td>
                                                  {foreach from=$option.values key='key' item='value' name='foo'}
                                                    {$value.value}{if not $smarty.foreach.foo.last}, {/if}
                                                  {/foreach}
                                                </td>
                                            </tr>
                                          {/foreach}
                                        </tbody>
                                    </table>
                                  </div>
                              </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {/if}
        <!--product info end-->

        <!--product area start-->
        <section class="product_area related_products">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        {$items = $similarProducts}
                        {$component.title = {translator selector='similarProducts'}}
                        {include file="frontend/emotions/components/article_slider.tpl"}
                    </div>
                </div>
            </div>
        </section>
        <!--product area end-->
        <!--last seen start-->
        <section class="product_area last_seen_products mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                      {if $last_seen}
                        {action module="frontend" controller="detail" action='lastseen'}
                      {/if}
                    </div>
                </div>
            </div>
        </section>
        <!--last seen end-->
  {/block}
{/block}
