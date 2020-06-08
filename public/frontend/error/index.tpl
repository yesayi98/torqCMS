{extends file='frontend/index/index.tpl'}
{block name="pageContent"}
<div class="breadcrumbs_area mb-5" style="height: auto">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="breadcrumb_content">
                    <div class="page-title mt-5 mb-5">
                      <h1>ERROR PAGE</h1>
                    </div>
                    <div class="page-content mb-5">
                      <p class="big-text">{$code}</p>
                    </div>
                    <div class="page-content mb-5">
                      <p class="text-middle">{$message}</p>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
{/block}
