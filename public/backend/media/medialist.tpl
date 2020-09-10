{block name="media-content"}
  <div class="row content-parent">
  {block name="media-albuml-list"}
    <div class="album-content col-6 col-md-4 col-lg-2">
      <h5>Media Albums</h5>
      <ul class="album-list list-group">
        <li class="list-item"><a class="list-group-item list-group-item-action album-item" href="{url url='backend/media'}{if $fromArticles}?image=0{/if}">All</a></li>
        {foreach $albums as $album}
          <li class="list-item"><a class="list-group-item list-group-item-action album-item" href="{url url='backend/media?album='|cat:$album.id}{if $fromArticles}&image=0{/if}">{$album.name}</a></li>
        {/foreach}
      </ul>

      <div class="card mt-5">
        <div class="card-header text-uppercase">Upload media</div>
        <div class="card-body">
          <div class="button-group row">
            <div class="col-12">
              <div class="form-group row">
                  <label for="basic-select" class="col-12 col-form-label">Select album</label>
                  <div class="col-12">

                  </div>
                </div>
            </div>
          </div>
          <form action="{url url='backend/media/save'}" method="post" class="dropzone" id="dropzone" style="padding: 0" enctype="multipart/form-data">
            <div class="fallback">
              <input name="file" type="file" multiple="multiple">
            </div>
            <div class="additional">
              <select class="form-control" name='album' form="dropzone">
                {foreach $albums as $album}
                  <option value="{$album.id}">{$album.name}</option>
                {/foreach}
              </select>
            </div>
          </form>

          <!-- Dropzone JS  -->
          <script src="assets/plugins/dropzone/js/dropzone.js"></script>
        </div>
      </div>
    </div>
  {/block}
  {block name="media-list"}
    <div class="media-content col-12 col-md-8 col-lg-10" data-content='true' data-url="{url url='backend/media'}{if $fromArticles}?image=0{/if}">
      {include file="backend/media/mediagrid.tpl"}
    </div>
  {/block}
  </div>
{/block}
