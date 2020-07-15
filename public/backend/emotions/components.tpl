{block name='emotion-component'}
<div class="row">
  {foreach $emotion.components as $component}
    <div class="col-xl-{$component.col_xl}
                col-lg-{$component.col_lg}
                col-md-{$component.col_md}
                col-sm-{$component.col_sm}
                col-xs-{$component.col_xs}
                col-{$component.cols} mb-3">
      {if !$component.rows}
        {$component.rows = 4}
      {/if}
      {$height = $component.rows * $emotion.row_height}
      {if $height == 0}
        {$height = 'auto'}
      {else}
        {$height = $height|cat:'px'}
      {/if}
      <div class="emotion-component card" style="height: {$height}">
        <div class="card-body">
          <div class="row w-100">
            <div class="emotion-type d-flex justify-content-center col-12">
              <h3>{$component.emotion_type.name}</h3>
            </div>
            <div class="emotion-action d-flex flex-wrap justify-content-center col-12">
              <div class="m-3">
                <a href="{url url='backend/emotions/componentDetail'}" data-value="{$component.id}" class="btn btn-success changer">Change</a>
              </div>
              <div class="m-3">
                <a href="{url url='backend/emotions/componentDelete'}" data-value="{$component.id}" class="btn btn-danger deleter">Delete</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  {/foreach}
  <div class="col-12">
    <div class="emotion-component card">
      <div class="card-body">
        <form class="emotion-detail" data-ajaxsend=true action="{url url='backend/emotions/componentsave'}" method="post">
          {if $emotion}
            <input type="hidden" name="emotion_id" value="{$emotion.id}">
          {/if}
          <div class="row">
            <div class="col-12">
              <div class="form-group row">
                <label class="col-12 col-form-label">title</label>
                <div class="col-12">
                  <input type="text" name="title" class="form-control" value="{$component.title}">
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group row">
                <label class="col-12 col-form-label">type</label>
                <div class="col-12">
                  <select class="form-control" name="type">
                    {foreach $emotionTypes as $type}
                    <option value="{$type.id}">{$type.name}</option>
                    {/foreach}
                  </select>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group row">
                <label class="col-12 col-form-label">col_xl</label>
                <div class="col-12">
                  <input type="number" name="col_xl" class="form-control">
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group row">
                <label class="col-12 col-form-label">col_lg</label>
                <div class="col-12">
                  <input type="number" name="col_lg" class="form-control">
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group row">
                <label class="col-12 col-form-label">col_md</label>
                <div class="col-12">
                  <input type="number" name="col_md" class="form-control">
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group row">
                <label class="col-12 col-form-label">col_sm</label>
                <div class="col-12">
                  <input type="number" name="col_sm" class="form-control">
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group row">
                <label class="col-12 col-form-label">col_xs</label>
                <div class="col-12">
                  <input type="number" name="col_xs" class="form-control">
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group row">
                <label class="col-12 col-form-label">cols</label>
                <div class="col-12">
                  <input type="number" name="cols" class="form-control">
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group row">
                <label class="col-12 col-form-label">rows</label>
                <div class="col-12">
                  <input type="number" name="rows" class="form-control" value="{$emotion.sort_id}">
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group row">
                <label class="col-12 col-form-label">Sort id</label>
                <div class="col-12">
                  <input type="number" name="sort_id" class="form-control" value="{$emotion.sort_id}">
                </div>
              </div>
            </div>
            <div class="col-12">
                <button type='submit' name='addNew' class="btn btn-info"><i class="fa fa-plus"></i> add</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

{/block}
