{block name='emotion-components'}
  <div class="emotion-container">
    {foreach $emotions as $emotion}
    <div class="{$emotion.class}">
      <div class="container{if $emotion.full_screen}-full-screen{/if}">
        <div class="row{if $emotion.full_screen}-full-screen{/if}">
          {block name='emotion-component'}
          {foreach $emotion.components as $component}
            <div class="col-xl-{$component.col_xl} col-lg-{$component.col_lg} col-md-{$component.col_md} col-sm-{$component.col_sm} col-xs-{$component.col_xs} col-{$component.cols}">
              {$height = $component.rows * $emotion.row_height}
              {if $height == 0}
                {$height = 'auto'}
              {else}
                {$height = $height|cat:'px'}
              {/if}
              <div class="emotion-row" style="height: {$height}">
                {if $component.emotion_type.template}
                  {$template = "frontend/"|cat:$component.emotion_type.template}
                  {include $template items=$component.content}
                {/if}
              </div>
            </div>
          {/foreach}
          {/block}
        </div>
      </div>
    </div>
    {/foreach}
  </div>
{/block}
