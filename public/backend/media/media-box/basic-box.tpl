<div class="image-container">
  {if $fromArticles}
  <label>
    <input type="checkbox" name="detailImage" form="imageToDetail" class="hidden" value="{$image.id}">
    <input type="hidden" class="pathKeeper" value="{$image.path}">
    <img src="{$image.path}" class="detail-image" alt="{$image.name}">
  </label>
  {else}
  <a href="javaScript:void(0)" data-toggle="modal" data-target=".gallery-modal" class="gallery-item" data-id="{$image.id}">
      <button type="button"
              name="deleteImage"
              class="btn btn-danger deleteImage"
              data-url="{url url='backend/media/delete'}"
              data-article="{$article.id}">
        <i class="ti-close"></i>
      </button>
    <img src="{$image.path}" class="detail-image" >
    <input type="hidden" name="media_id" class="media-image-id" value="{$image.id}">
  </a>
  {/if}

</div>
