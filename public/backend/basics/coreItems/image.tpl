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
  {$image = $item.image}
  {if !$image}
    <div class="image-container">
    </div>
    {else}
    <div class="image-container">
      <button type="button" name="deleteImage" class="btn btn-danger deleteImage" data-url="{url url='backend/articles/deleteImage'}" data-article="{$image.id}"><i class="ti-close"></i></button>
      <img src="{$image.path}" class="detail-image" >
      <input type="hidden" name="media_id" form="{$id}" class="detail-image-id" value="{$image.id}">
    </div>
  {/if}
  <input type="hidden" name="content" form="{$id}" class="detail-image-id-static" value="">
</div>
