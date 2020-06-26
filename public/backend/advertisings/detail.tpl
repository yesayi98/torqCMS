{extends file="backend/articles/detail.tpl"}

{block name="container-content"}
  <div class="card">
      <div class="card-header text-uppercase">
        <div class="card-title float-left">
           {$advertising.id}: {$advertising.name}
        </div>
        <div class="cart-buttons float-right button-group">
          <button type="button" form="detail-form" class="btn btn-success" name="save-detail"><i class="fa fa-save"></i> save</button>
          {if $advertising}
          <button type="button" data-url="{url url='backend/advertisings/delete?a='|cat:$advertising.id}" class="btn btn-danger" name="delete-detail"><i class="fa fa-trash"></i> delete</button>
          {/if}
          <a href="{url url='backend/advertisings/'}" class="btn btn-info" ><i class="fa fa-undo"></i> back</a>
        </div>
      </div>
       <div class="card-body">
         <div class="detail-form-container">
           {block name="detail-form-container"}
             <form class="detail-form" id="detail-form" data-detail="{$advertising.id}" action="{url url='backend/advertisings/save'}" method="post" data-ajaxsend="true">
               {block name="form-content"}
                 <div class="row">
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">Name</label>
                       <div class="col-sm-10">
                         <input type="text" name="name" class="form-control" value="{$advertising.name}">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">url</label>
                       <div class="col-sm-10">
                         <input type="text" name="url" class="form-control" value="{$advertising.url}">
                       </div>
                     </div>
                   </div>
                   <div class="col-12">
                     <div class="form-group row">
                       <label class="col-sm-1 col-form-label">Description</label>
                       <div class="col-sm-11">
                         <textarea name="description" class="form-control">
                           {$advertising.description}
                         </textarea>
                       </div>
                     </div>
                   </div>

                   <div class="col-12">
                     <div class="form-group row">
                       <label class="col-sm-1 col-form-label">Images</label>
                       <div class="col-sm-11">
                          <div class="gallery-container gallery-actions">
                            <div class="image-container button">
                              <button type="button"
                                      class="btn btn-info gallery-opener"
                                      name="gallery"
                                      data-toggle="modal"
                                      data-target=".gallery-modal">
                                <i class="ti-gallery"></i>
                              </button>
                            </div>
                            {$image = $advertising.image}
                            {if !$image}
                              <div class="image-container">
                              </div>
                            {else}
                              <div class="image-container">
                                <button type="button" name="deleteImage" class="btn btn-danger deleteImage" data-url="{url url='backend/advertisings/deleteImage'}" data-advertising="{$advertising.id}"><i class="ti-close"></i></button>
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
                       <div class="col-sm-1"></div>
                       <div class="col-sm-11">
                          <div class="buttons-container">
                            <div class="buttons-group">
                              <a role="button" href="javaScript:void(0)" class="btn btn-info" name="openTranslator" data-toggle="modal" data-target=".translations-modal"><i class="ti-smallcap"></i> transitions</a>
                            </div>
                          </div>
                       </div>
                     </div>
                   </div>
                 </div>
               {/block}
               <input type="hidden" name="id" value="{$advertising.id}">
             </form>
           {/block}
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
          {* <form class="detail-form" id="translation" action="{url url='backend/advertisings/saveTranslation'}" method="post" data-ajaxsend="true"> *}
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
                          <input type="hidden" name="advertising_id" value="{$advertising.id}">
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
