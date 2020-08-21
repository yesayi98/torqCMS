{extends file="backend/articles/index.tpl"}

{block name="css-container"}
  <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet"/>
  <link href="assets/plugins/inputtags/css/bootstrap-tagsinput.css" rel="stylesheet" />
  <!-- Dropzone css -->
    <link href="assets/plugins/dropzone/css/dropzone.css" rel="stylesheet" type="text/css">
  {$smarty.block.parent}
{/block}

{block name="container-content"}
  <div class="card">
      <div class="card-header text-uppercase">
        <div class="card-title float-left">
           {$article.id}: {$article.name}
        </div>
        <div class="cart-buttons float-right button-group">
          <button type="button" form="detail-form" class="btn btn-success" name="save-detail"><i class="fa fa-save"></i> save</button>
          {if $article}
          <button type="button" data-url="{url url='backend/articles/delete?a='|cat:$article.id}" class="btn btn-danger" name="delete-detail"><i class="fa fa-trash"></i> delete</button>
          {/if}
          <a href="{url url='backend/articles/'}" class="btn btn-info" ><i class="fa fa-undo"></i> back</a>
        </div>
      </div>
       <div class="card-body">
         <div class="detail-form-container">
           {block name="detail-form-container"}
             <form class="detail-form" id="detail-form" data-detail="{$article.id}" action="{url url='backend/articles/save'}" method="post" data-ajaxsend="true">
               {block name="form-content"}
                 <div class="row">
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">Name</label>
                       <div class="col-sm-10">
                         <input type="text" name="name" class="form-control" value="{$article.name}">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">get price</label>
                       <div class="col-sm-10">
                         <input type="number" name="get_price" class="form-control" value="{$article.get_price}">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">Ordernumber</label>
                       <div class="col-sm-10">
                         <input type="text" name="ordernumber" class="form-control" value="{$article.ordernumber}">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">sale price</label>
                       <div class="col-sm-10">
                         <input type="number" name="price" class="form-control" value="{$article.price}">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">supplier</label>
                       <div class="col-sm-10">
                         <input type="text" name="supplier" class="form-control" value="{$article.supplier.name}">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">discount</label>
                       <div class="col-sm-10">
                         <input type="number" name="discount" class="form-control" value="{$article.discount}">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">active</label>
                       <div class="col-sm-10">
                         <select class="form-control" name='active'>
                            <option value="1" {if $article.active}selected{/if}>yes</option>
                            <option value="0" {if !$article.active}selected{/if}>no</option>
                         </select>
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">in stock</label>
                       <div class="col-sm-10">
                         <input type="number" name="in_stock" class="form-control" value="{$article.in_stock}">
                       </div>
                     </div>
                   </div>
                   <div class="col-12">
                     <div class="form-group row">
                       <label class="col-sm-1 col-form-label">Description</label>
                       <div class="col-sm-11">
                         <textarea name="description" class="form-control">
                           {$article.description}
                         </textarea>
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">Minimum Count</label>
                       <div class="col-sm-10">
                         <input type="number" class="form-control" name="min_purchuase" min=0 value="{$article.min_purchuase}">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">unit</label>
                       <div class="col-sm-10">
                         <input type="number" class="form-control" name="unit" min=0 value="{$article.unit}">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">unit type</label>
                       <div class="col-sm-10">
                         <select class="form-control" name='unit_type'>
                           {foreach $units as $unit}
                            <option value="{$unit.id}" {if $unit.id == $article.unit_id}selected{/if}>{$unit.name}</option>
                           {/foreach}
                         </select>
                       </div>
                     </div>
                   </div>
                   <div class="col-12">
                     <div class="form-group row">
                       <label class="col-sm-1 col-form-label">category</label>
                       <div class="col-sm-11 categories-settings">
                         <div class="article-categories">
                           {foreach $article.category_id as $category}
                             <div class="added-category-container">
                               <span class="added-category-text">{$category.id}: {$category.name}</span>
                               <input class="added-category-input" type="hidden" value="{$category.id}">
                               <button class="added-category btn btn-danger" data-ajaxsend="true" type="button" data-url="{url url='backend/articles/deleteCategory'}"><i class="ti-close"></i></button>
                             </div>
                           {/foreach}
                         </div>
                         <select class="form-control category-selector search-select">
                           <option value="">Select Category</option>
                           {foreach $categories as $category}
                              <option value="{$category.id}">{$category.id}: {$category.name}</option>
                           {/foreach}
                         </select>
                       </div>
                     </div>
                   </div>
                   <div class="col-12">
                     <div class="form-group row">
                       <label class="col-sm-1 col-form-label">keywords</label>
                       <div class="col-sm-11 keywords">
                          <input type="text" name="keywords" class="form-control" data-role="tagsinput" value="{$article.keywords}"/>
                       </div>
                     </div>
                   </div>
                   <div class="col-12">
                     <div class="form-group row">
                       <label class="col-sm-1 col-form-label">timer to</label>
                       <div class="col-sm-11">
                          <input type="date" name='sale_end' class="form-control" value="{$article.attributes.sale_end}"/>
                       </div>
                     </div>
                   </div>
                   <div class="col-12">
                     <div class="form-group row">
                       <label class="col-sm-1 col-form-label">Images</label>
                       <div class="col-sm-11">
                          <div class="gallery-container gallery-actions" data-multi=true>
                            <div class="image-container button">
                              <button type="button"
                                      class="btn btn-info gallery-opener"
                                      name="gallery"
                                      data-toggle="modal"
                                      data-target=".gallery-modal">
                                <i class="ti-gallery"></i>
                              </button>
                            </div>
                            {$images = $article.images}
                            {if !$images}
                              <div class="image-container">
                              </div>
                            {/if}
                             {foreach $images as $image}
                               <div class="image-container">
                                 <button type="button" name="deleteImage" class="btn btn-danger deleteImage" data-url="{url url='backend/articles/deleteImage'}" data-article="{$article.id}"><i class="ti-close"></i></button>
                                 <img src="{$image.path}" class="detail-image" >
                                 <input type="hidden" name="media_id" class="detail-image-id" value="{$image.id}">
                               </div>
                             {/foreach}
                          </div>
                       </div>
                     </div>
                   </div>
                   <div class="col-12">
                     <div class="form-group row">
                       <div class="col-sm-1"></div>
                       <div class="col-sm-11">
                          <div class="buttons-container">
                            <div class="buttons-group">
                              <a role="button" href="javaScript:void(0)" class="btn btn-info" name="openTranslator" data-toggle="modal" data-target=".translations-modal"><i class="ti-smallcap"></i> transitions</a>
                              <a role="button" href="javaScript:void(0)" class="btn btn-info {if !$article}disabled{/if}" {if !$article}aria-disabled="true"{/if} name="openOptions" data-toggle="modal" data-target=".options-modal" ><i class="ti-layout-list-post"></i> options</a>
                            </div>
                          </div>
                       </div>
                     </div>
                   </div>
                 </div>
               {/block}
               <input type="hidden" name="id" value="{$article.id}">
             </form>
           {/block}
         </div>
       </div>
     </div>


{/block}

{block name="modal-container"}
  {block name="gallery-modal"}
  <div class="modal fade gallery-modal">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Gallery</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="contaiener" data-content="true" data-url="{url url='backend/media'}">

          </div>
        </div>
        <div class="modal-footer">
          <form class="addImage" action="{url url='backend/media/'}" id="imageToDetail" method="post">
            <button type="submit" class="btn btn-light addDetailImage"><i class="fa fa-check-square-o"></i> Add</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  {/block}
  {block name="translations-modal"}
  <div class="modal fade translations-modal">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Gallery</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="contaiener">
            {* <form class="detail-form" id="translation" action="{url url='backend/articles/saveTranslation'}" method="post" data-ajaxsend="true"> *}
              {block name="translations-content"}
                <div class="card">
                   <div class="card-body">
                     <ul class="nav nav-pills nav-pills-success nav-justified" role="tablist">
                       {foreach from=$languages item=$language key=key name=name}
                        {if $language.id == 1}
                          {continue}
                        {/if}
                         <li class="nav-item">
                           <a class="nav-link{if $key==1} active{/if}" data-toggle="pill" href="#piil-{$language.id}"> <span class="hidden-xs">{$language.name}</span></a>
                         </li>
                       {/foreach}
                     </ul>

                     <!-- Tab panes -->
                     <div class="tab-content">
                       {foreach from=$languages item=$language key=key name=name}
                        {if $language.id == 1}
                          {continue}
                        {else}
                          {$key = $key-1}
                        {/if}
                        {$langID = $language.id}
                        <div id="piil-{$language.id}" class="container tab-pane{if $langID==2} active{/if}">
                          <div class="row">
                            <div class="col-12">
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                  <input type="text" form="detail-form" name="translation[{$langID}][name]" class="form-control" value="{$translations.$key.name}">
                                </div>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                  <textarea name="translation[{$langID}][description]" form="detail-form" class="form-control" data-description="true">
                                    {$translations.$key.description}
                                  </textarea>
                                </div>
                              </div>
                            </div>
                            <input type="hidden" name="article_id" value="{$article.id}">
                          </div>
                        </div>
                       {/foreach}
                     </div>
                   </div>
                </div>
              {/block}
            {* </form> *}
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-check-square-o"></i> Add</button>
        </div>
      </div>
    </div>
  </div>
  {/block}
  {block name="options-modal"}
    <div class="modal fade options-modal">
      <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Gallery</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contaiener">
              <form class="optionsForm" action="{url url='backend/articles/saveOptions'}" method="post" data-ajaxsend="true" callback="me.articleDetail.onOpenOptionAdd">
                {block name="options-content"}
                <div class="content" data-content=true data-url="{url url='backend/articles/options?a='|cat:$article.id}">
                  {include file="backend/articles/options.tpl"}
                </div>
                <div class="row">
                  <div class="col-12 col-lg-6 col-xl-6">
                    <div class="form-group row">
                      <label class="col-12 col-form-label">Key</label>
                      <div class="col-12">
                        <select class="form-control option-select search-select" name="option_id" data-url={url url="backend/articles/getvalues"} data-save_option="{url url="backend/articles/saveOption"}">
                          <option value="">Select Option</option>
                          {foreach from=$options item=$option key=key name=name}
                             <option value="{$option.name}" data-id="{$option.id}" data-position="{$key}">{$option.name}</option>
                          {/foreach}
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-lg-6 col-xl-6">
                    <div class="form-group row">
                      <label class="col-12 col-form-label">Value</label>
                      <div class="col-12">
                        <select class="form-control value-select search-select" name="value_id" data-save_option="{url url="backend/articles/saveValue"}">
                          <option value="">Select Value</option>

                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="button-group pull-right">
                  <input type="hidden" value="{$article.id}" name="article_id">
                  <button type="submit" class="btn btn-success addDetailOption"><i class="fa fa-check-square-o"></i> Add</button>
                </div>
                {/block}
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  {/block}
{/block}

{block name="js-container"}
  {$smarty.block.parent}
  <!-- ckeditor -->
  <script src="{$BASE_BACKEND}assets/plugins/ckeditor/js/ckeditor.js"></script>
  <!--select2 plugin-->
  <script src="{$BASE_BACKEND}assets/plugins/select2/js/select2.min.js"></script>
  <!--Inputtags Js-->
  <script src="{$BASE_BACKEND}assets/plugins/inputtags/js/bootstrap-tagsinput.js"></script>
  <!--Detail Js-->
  <script src="{$BASE_BACKEND}assets/js/jquery.detail.js"></script>
  <!-- ckeditor initer -->
  <script src="{$BASE_BACKEND}assets/js/jquery.editor.js"></script>
  <!-- option js -->
  <script src="{$BASE_BACKEND}assets/js/jquery.options.js"></script>

{/block}
