<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-15 09:20:16
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\emotions\components\banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee7132071d7d2_96807258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88d5b95a40d384bc034cfafd4e5b4002d106048b' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\emotions\\components\\banner.tpl',
      1 => 1589543223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee7132071d7d2_96807258 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="banner-component banner_fullwidth mt-40" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['items']->value[0]['media']['path'];?>
)">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner_full_content" style="padding: 50px 0">
                    <!-- <p>Black Fridays !</p> -->
                    <h2><?php echo $_smarty_tpl->tpl_vars['items']->value[0]['description'];?>
</h2>
                    <!-- <a href="shop.html">discover now</a> -->
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
