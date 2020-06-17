{extends file="backend/index/index.tpl"}

{block name="container-content"}
  {block name="table-list"}
    <div class="row pt-2 pb-2">
      {block name="breadcrump"}
        <div class="col-sm-9">
          <h4 class="page-title">Translations</h4>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Basic settings</a></li>
            <li class="breadcrumb-item active" aria-current="page">Translations</li>
          </ol>
        </div>
      {/block}
      {block name="buttons"}
        <div class="col-sm-3">
          <div class="btn-group float-sm-right">
            <button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Setting</button>
            <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
              <span class="caret"></span>
            </button>
            <div class="dropdown-menu">
              <a href="javaScript:void();" class="dropdown-item">
                <button type="button"
                        class="btn btn-success"
                        name="translator"
                        data-toggle="modal"
                        data-target=".translator-modal">
                  <span>NEW Translation</span>
                </button>
              </a>
            </div>
          </div>
        </div>
      {/block}
    </div>
  {/block}
  {block name="table-block"}
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        {block name="table-name"}
        <div class="card-header"><i class="fa fa-table"></i> Translations</div>
        {/block}
        <div class="card-body">
          <div class="table-responsive">
            <table id="default-datatable" class="table table-bordered">
              {block name="table-head"}
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Selector</th>
                        {foreach $languages as $language}
                          <th>{$language.name} {$language.short_code}</th>
                        {/foreach}
                        <th>actions</th>
                    </tr>
                </thead>
              {/block}
              {block name="table-body"}
                <tbody>
                  {foreach from=$translations.data item=$translate key=selector}
                    <tr>
                        <td>{$translate.id}</td>
                        <td>{$selector}</td>
                        {foreach $languages as $language}
                        {$lang = $language.short_code}
                        <td>
                          <div class="form-group row">
                            <div class="col-sm-12" >
                              <textarea readonly name="translate[{$lang}]" form='{$selector}' class="form-control description" rows=5>{$translate.$lang.translate}</textarea>
                            </div>
                          </div>
                        </td>
                        {/foreach}
                        <td>
                          <form action="{url url='backend/translations/save'}" id='{$selector}' method="post" data-ajaxsend='true'>
                            <input type="hidden" name="selector" value="{$selector}">
                            <button type='submit' class="btn btn-info waves-effect waves-light m-1">save</button>
                          </form>
                        </td>
                    </tr>
                  {/foreach}
                </tbody>
              {/block}
            </table>
          </div>
        </div>
      </div>
    </div>
  </div><!-- End Row-->
  <div class="row">
    <div class="col-sm-12 col-md-7">
      <div class="dataTables_paginate paging_simple_numbers" id="default-datatable_paginate">
        {$transitions.pagination}
      </div>
    </div>
  </div>

  {/block}
{/block}


{block name="modal-container"}
  {block name="translator-modal"}
  <div class="modal fade translator-modal">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">New Translation</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="table-responsive">
            <table class="table table-bordered">
              {block name="table-head"}
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Selector</th>
                        {foreach $languages as $language}
                          <th>{$language.name} {$language.short_code}</th>
                        {/foreach}
                        <th>actions</th>
                    </tr>
                </thead>
              {/block}
              {block name="table-body"}
                <tbody>
                    <tr>
                        <td>ID</td>
                        <td><input type="text" name="selector" form='newTranslation' class="form-control" value=""></td>
                        {foreach $languages as $language}
                        {$lang = $language.short_code}
                        <td>
                          <div class="form-group row">
                            <div class="col-sm-12" >
                              <textarea name="translate[{$lang}]" form='newTranslation' class="form-control" rows=5></textarea>
                            </div>
                          </div>
                        </td>
                        {/foreach}
                        <td>
                          <form action="{url url='backend/translations/save'}" id='newTranslation' method="post">
                            <button type='submit' class="btn btn-info waves-effect waves-light m-1">save</button>
                          </form>
                        </td>
                    </tr>
                </tbody>
              {/block}
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  {/block}
{/block}


{block name="js-container"}
  {$smarty.block.parent}
  <!-- add readonly -->
  <script type="text/javascript">
    $('.description').dblclick(function (event) {
      event.stopImmediatePropagation();
      $(this).prop('readonly', false);
    })
    $(document).click(function(event) {
      if (!$(event.target).hasClass( "description" ) ) {
        $('.description').prop('readonly', true);
      }
    })
  </script>

  <!--Detail Js-->
  <script src="{$BASE_BACKEND}assets/js/jquery.detail.js"></script>
{/block}
