<div class="row">
  <div class="col-12 col-lg-6 col-xl-6">
    <div class="form-group row">
      <label class="col-12 col-form-label">Key</label>
    </div>
  </div>
  <div class="col-12 col-lg-6 col-xl-6">
    <div class="form-group row">
      <label class="col-12 col-form-label">Value</label>
    </div>
  </div>
</div>
{foreach from=$article.options item=$option key=key name=name}
<div class="row item" data-id={$article.id}>
  <div class="col-12 col-lg-6 col-xl-6">
    <div class="form-group row">
      <div class="col-12">
        <input type="text" class="form-control" value="{$option.name}" disabled>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-6 col-xl-6">
    <div class="form-group row">
      <div class="col-10">
        <input type="text" class="form-control" value="{$option.value}" disabled>
      </div>
      <div class="col-2">
        <button type="button" class="btn btn-danger deleteDetailOption" data-url="{url url='backend/articles/deleteOption?o='|cat:$option.id}" name="button"><i class="fa fa-trash"></i></button>
      </div>
    </div>
  </div>
</div>
{/foreach}
