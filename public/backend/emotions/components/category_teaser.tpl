{extends file="backend/emotions/components/slider.tpl"}
{block name='component-select'}
  <div class="col-12">
    <div class="form-group">
      <div class="card">
        <div class="card-header text-uppercase">Select {$component.emotion_type.module}</div>
        <div class="card-body">
          <select name="variables[]"  form="component-form" class="form-control">
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
