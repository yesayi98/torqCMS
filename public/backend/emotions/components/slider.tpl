<!--slider area start-->
<div class="content" data-content='true'>
  <div class="form-group">
    {block name="component-form"}
        <div class="row">
          <label class="form-label col-12">
            <span>Title</span>
            <input type="text" name="title" form="component-form" value="{$component.title}" class="form-control">
          </label>
          <label class="form-label col-md-4 col-sm-6 col-12">
            <span>col-xl</span>
            <input type="number" name="col_xl" form="component-form" value="{$component.col_xl}" class="form-control">
          </label>
          <label class="form-label col-md-4 col-sm-6 col-12">
            <span>col-lg</span>
            <input type="number" name="col_lg" form="component-form" value="{$component.col_lg}" class="form-control">
          </label>
          <label class="form-label col-md-4 col-sm-6 col-12">
            <span>col-md</span>
            <input type="number" name="col_md" form="component-form" value="{$component.col_md}" class="form-control">
          </label>
          <label class="form-label col-md-4 col-sm-6 col-12">
            <span>col-sm</span>
            <input type="number" name="col_sm" form="component-form" value="{$component.col_sm}" class="form-control">
          </label>
          <label class="form-label col-md-4 col-sm-6 col-12">
            <span>col-xs</span>
            <input type="number" name="col_xs" form="component-form" value="{$component.col_xs}" class="form-control">
          </label>
          <label class="form-label col-md-4 col-sm-6 col-12">
            <span>col</span>
            <input type="number" name="cols" form="component-form" value="{$component.cols}" class="form-control">
          </label>
          <label class="form-label col-12">
            <span>row</span>
            <input type="number" name="rows" form="component-form" value="{$component.rows}" class="form-control">
          </label>
          {block name='component-select'}
            <div class="col-12">
              <div class="form-group">
                <div class="card">
                  <div class="card-header text-uppercase">Select {$component.emotion_type.module}</div>
                  <div class="card-body">
                    <select name="variables[]"  form="component-form" class="multi-select" multiple="multiple" id="component-multi-select">
                      {foreach $component.items item=$item key=$key}
                        <option value="{$item.id}" {if in_array($item.id, $component.vars)}selected{/if}>
                          {if $item.name}
                            {$item.id}: {$item.name}
                          {else}
                            {$item.id}: -empty-name-
                          {/if}
                        </option>
                      {/foreach}
                    </select>
                  </div>
                </div>
              </div>
            </div>
          {/block}
          <input type="hidden" name="emotion_id" form="component-form" value="{$component.emotion_id}">
          <input type="hidden" name="type" form="component-form" value="{$component.type}">
          <input type="hidden" name="id" form="component-form" value="{$component.id}">
        </div>
    {/block}
  </div>
</div>
<!--slider area end-->
