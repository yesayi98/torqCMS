{extends file="backend/articles/index.tpl"}
{block name="css-container"}
<!-- Dropzone css -->
  <link href="assets/plugins/dropzone/css/dropzone.css" rel="stylesheet" type="text/css">
  {$smarty.block.parent}
{/block}


{block name="container-content"}
  <div class="cart">
    <div class="cart-header">
      <h2 class="cart-title">Gallery Page</h2>
    </div>
    <div class="cart-body" data-content='true'>
      {include file="backend/media/medialist.tpl" albums=$albums media=$media}
    </div>
  </div>
{/block}

{block name="modal-container"}
<div class="modal fade gallery-modal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Media</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="contaiener" data-content="true" data-url="{url url='backend/media/detail'}">

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
      </div>
    </div>
  </div>
</div>
{/block}
{block name="js-container"}
  {$smarty.block.parent}
  <!--Detail Js-->
  <script src="{$BASE_BACKEND}assets/js/jquery.detail.js"></script>

{/block}
