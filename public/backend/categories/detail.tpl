{if $category.name}
   {$header = $category.id|cat:': '|cat:$category.name}
{else}
   {$header="New Category"}
{/if}
<div class="card-header text-uppercase">
  <div class="card-title d-inline">{$header}</div>
  <div class="button-group pull-right">
    <button type="button" form="detail-form" class="btn btn-success" name="save-detail"><i class="fa fa-save"></i> save</button>
    {if $category}
      <button type="button" data-url="{url url='backend/categories/delete?c='|cat:$category.id}" class="btn btn-danger" name="delete-detail"><i class="fa fa-trash"></i> delete</button>
    {/if}
  </div>
</div>
<div class="card-body">
  <div class="">
    <form class="category-detail" id="detail-form" data-ajaxsend=true action="{url url='backend/categories/save'}" method="post">
      {if $category}
        <input type="hidden" name="id" value="{$category.id}">
      {/if}
      <div class="row">
        <div class="col-12">
          <div class="form-group row">
            <label class="col-12 col-form-label">name</label>
            <div class="col-12">
              <input type="text" name="name" class="form-control" value="{$category.name}">
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="form-group row">
            <label class="col-12 col-form-label">Description</label>
            <div class="col-12">
              <textarea name="description">{$category.description}</textarea>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="form-group row">
            <label class="col-12 col-form-label">Parent</label>
            <div class="col-12 categories-settings">
              <select class="form-control search-select" name="parent_id">
                <option value=0>select parent</option>
                {foreach from=$categoryList item=$item key=key name=name}
                  {if $item.id == $category.id}
                    {continue}
                  {/if}
                  <option value="{$item.id}" {if $item.id==$category.parent_id}selected{/if}>{$item.id}: {$item.name}</option>
                {/foreach}
              </select>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="form-group row">
            <label class="col-12 col-form-label">Active</label>
            <div class="col-12">
              <input type="checkbox" name="active" class="js-switch" data-color="#14abef" {if $category.active}checked{/if}{if !$category}checked{/if}>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="form-group row">
            <label class="col-12 col-form-label">Display in menu</label>
            <div class="col-12">
              <input type="checkbox" name="in_menu" class="js-switch" data-color="#14abef"  {if $category.in_menu || !isset($category)}checked{/if}>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="form-group row">
            <label class="col-12 col-form-label">Without article</label>
            <div class="col-12">
              <input type="checkbox" name="content" class="js-switch" data-color="#14abef"  {if $category.content}checked{/if}>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="form-group row">
            <label class="col-12 col-form-label">External url</label>
            <div class="col-12">
              <input type="text" name="external_url" class="form-control" value="{$category.external_url}">
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="form-group row">
            <label class="col-12 col-form-label">Sort id</label>
            <div class="col-12">
              <input type="number" name="sort_id" class="form-control" value="{$category.sort_id}">
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Images</label>
            <div class="col-sm-12">
               <div class="gallery-container gallery-actions" data-multi=false>
                 <div class="image-container button">
                   <button type="button"
                           class="btn btn-info gallery-opener"
                           name="gallery"
                           data-toggle="modal"
                           data-target=".gallery-modal">
                     <i class="ti-gallery"></i>
                   </button>
                 </div>
                 {$image =$category.image}
                 {if !$image}
                   <div class="image-container">
                   </div>
                   {else}
                   <div class="image-container">
                     <button type="button" name="deleteImage" class="btn btn-danger deleteImage" data-url="{url url='backend/articles/deleteImage'}" data-article="{$article.id}"><i class="ti-close"></i></button>
                     <img src="{$image.path}" class="detail-image" >
                     <input type="hidden" name="media_id" class="detail-image-id" value="{$image.id}">
                   </div>
                 {/if}

               </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="form-group row">
            <div class="col-sm-12">
               <div class="buttons-container">
                 <div class="buttons-group">
                   <a role="button" href="javaScript:void(0)" class="btn btn-info" name="openTranslator" data-toggle="modal" data-target=".translations-modal"><i class="ti-smallcap"></i> transitions</a>
                 </div>
               </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
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
                          <input type="hidden" name="category_id" value="{$category.id}">
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
