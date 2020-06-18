{extends file='frontend/account/index.tpl'}
{block name="pageContent"}
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb_content">
              <div class="page-title mt-5 mb-5">
                <h3>{translator selector='confirmyouremail'}</h3>
              </div>
              <div class="page-content mb-5">
                <a href="{url url=''}" class="btn btn-primary btn-success">{translator selector='home'}</a>
              </div>
              <div class="page-content mb-5">
                <a href="{url url='account/sendConfirmation'}" class="btn btn-primary btn-outline-success">{translator selector='send_again'}</a>
              </div>
            </div>
        </div>
    </div>
</div>
{/block}
