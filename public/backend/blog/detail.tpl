{extends file="backend/articles/detail.tpl"}
{block name="container-content"}
  <div class="card">
      <div class="card-header text-uppercase">
        <div class="card-title float-left">
           {$blog.id}: {$blog.name}
        </div>
        <div class="cart-buttons float-right button-group">
          <button type="button" form="detail-form" class="btn btn-success" name="save-detail"><i class="fa fa-save"></i> save</button>
          {if $blog}
          <button type="button" data-url="{url url='backend/blog/delete?a='|cat:$blog.id}" class="btn btn-danger" name="delete-detail"><i class="fa fa-trash"></i> delete</button>
          {/if}
          <a href="{url url='backend/blog/'}" class="btn btn-info" ><i class="fa fa-undo"></i> back</a>
        </div>
      </div>
       <div class="card-body">
         <div class="detail-form-container">
           {block name="detail-form-container"}
             <form class="detail-form" id="detail-form" data-detail="{$blog.id}" action="{url url='backend/blog/save'}" method="post" data-ajaxsend="true">
               {block name="form-content"}
                 <div class="row">
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">Name</label>
                       <div class="col-sm-10">
                         <input type="text" name="name" class="form-control" value="{$blog.name}">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">author</label>
                       <div class="col-sm-10">
                         <input type="text" name="author" class="form-control" value="{$blog.author}">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">active</label>
                       <div class="col-sm-10">
                         <select class="form-control" name='active'>
                            <option value="1" {if $blog.active}selected{/if}>yes</option>
                            <option value="0" {if !$blog.active}selected{/if}>no</option>
                         </select>
                       </div>
                     </div>
                   </div>
                   <div class="col-12">
                     <div class="form-group row">
                       <label class="col-sm-1 col-form-label">Description</label>
                       <div class="col-sm-11">
                         <textarea name="description" class="form-control">
                           {$blog.description}
                         </textarea>
                       </div>
                     </div>
                   </div>
                   <div class="col-12">
                     <div class="form-group row">
                       <label class="col-sm-1 col-form-label">category</label>
                       <div class="col-sm-11">
                         <select class="form-control" name="category_id">
                           <option value="">Select Category</option>
                           {foreach $categories as $category}
                            <option value="{$category.id}" {if $category.id == $blog.category_id}selected{/if}>{$category.id}: {$category.name}</option>
                           {/foreach}
                         </select>
                       </div>
                     </div>
                   </div>

                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">created in</label>
                       <div class="col-sm-10">
                          <input type="date" name='created_date' class="form-control" value="{$blog.created_date}"/>
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">changed in</label>
                       <div class="col-sm-10">
                          <input type="date" name='change_dated' class="form-control" value="{$blog.changed_date}"/>
                       </div>
                     </div>
                   </div>
                   <div class="col-12">
                     <div class="form-group row">
                       <label class="col-sm-1 col-form-label">Images</label>
                       <div class="col-sm-11">
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
                            {$image = $blog.image}
                            {if !$image}
                              <div class="image-container">
                              </div>
                             {else}
                              <div class="image-container">
                                <button type="button" name="deleteImage" class="btn btn-danger deleteImage" data-url="{url url='backend/blog/deleteImage'}" data-blog="{$blog.id}"><i class="ti-close"></i></button>
                                <img src="{$image.path}" class="detail-image" >
                                <input type="hidden" name="media_id" class="detail-image-id" value="{$image.id}">
                              </div>
                            {/if}

                          </div>
                       </div>
                     </div>
                   </div>
                 </div>
               {/block}
               <input type="hidden" name="id" value="{$blog.id}">
             </form>
           {/block}
         </div>
       </div>
     </div>
{/block}
