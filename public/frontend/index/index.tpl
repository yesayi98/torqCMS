{block name="head"}

<!Doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{$title}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {* <base href="{$BASE_FRONTEND}"> *}
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{$BASE_FRONTEND}assets/img/favicon.ico">
    {block name='stylesheet-area'}
      <!-- CSS
      ========================= -->
      <!--font awesome css-->
      <link rel="stylesheet" href="{$BASE_FRONTEND}assets/css/font.awesome.css">
      <!--ionicons css-->
      <link rel="stylesheet" href="{$BASE_FRONTEND}assets/css/ionicons.min.css">
      <!--linearicons css-->
      <link rel="stylesheet" href="{$BASE_FRONTEND}assets/css/linearicons.css">
      <!--themify-icons css-->
      <link rel="stylesheet" href="{$BASE_FRONTEND}assets/css/themify-icons.css">

      <link rel="stylesheet" href="{$css}">
    {/block}
    <!--modernizr min js here-->
    <script src="{$BASE_FRONTEND}assets/js/vendor/modernizr-3.7.1.min.js"></script>
</head>
{/block}

<body>

<!--header area start-->
{block name="header"}
    {include file="frontend/index/header.tpl"}
{/block}

{block name='breadcrumbs_area'}
{/block}

{block name="pageContent"}
  {if $has_emotions}
    <div class="emotion-section">
      {action module="frontend" controller="emotions" action='index'}
    </div>
  {/if}

{/block}

{block name="footer"}
    {include file="frontend/index/footer.tpl"}
{/block}

    <!-- modal area start-->
    {block name="modal-area"}
    {include file="frontend/index/modal.tpl"}
    {/block}
    <!-- modal area end-->


<!-- JS
============================================ -->
{block name="javascript-area"}
<script src="{$BASE_FRONTEND}assets/js/vendor/jquery-3.4.1.min.js"></script>
<script src="{$js}"></script>
<script>
  window.route = {$route|@json_encode};
  window.currentCur = {$currentCur|@json_encode};
  window.basketMessage = '{translator selector="basketMessage"}';
  window.wishlistMessage = '{translator selector="wishlistMessage"}';
  window.notFoundPath = '{$notFoundPath}';
</script>


{/block}

{if $message}
<script type="text/javascript">
  jQuery(document).ready(function($) {
    {foreach from=$message item=$messages key=type name=name}
      {foreach $messages as $mess}
        {$selector = $type|cat:'_'|cat:$mess}
        round_{$type}_noti('{translator selector="$selector"}');
      {/foreach}
    {/foreach}
  });
</script>
{/if}

</body>

</html>
