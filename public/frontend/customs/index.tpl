{extends file="frontend/index/index.tpl"}

{block name='breadcrumbs_area'}
<div class="breadcrumbs_area" {if $custom.image.path}style="background: url({$custom.image.path}) no-repeat 0 0"{/if}>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <h3>{$custom.name}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
{/block}

{block name="pageContent"}
  <section class="about_section">
     <div class="container">
          <div class="row">
              <div class="col-12">
                 {$custom.description}
              </div>
          </div>
      </div>
  </section>
{/block}
