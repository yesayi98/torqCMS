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
      <div class="col-12">
        <div class="article-categories">
          {foreach from=$option.values item=$value key='key' name='name'}
            <div class="added-category-container">
              <span class="added-category-text">{$value.value}</span>
              <button class="option-relation-deleter btn btn-danger ml-1 p-0" data-value_id={$value.id} data-article_id={$article.id} data-ajaxsend="true" type="button" data-url="{url url='backend/articles/deleteRelation'}"><i class="ti-close"></i></button>
            </div>
          {/foreach}
        </div>
      </div>
    </div>
  </div>
</div>
{/foreach}
