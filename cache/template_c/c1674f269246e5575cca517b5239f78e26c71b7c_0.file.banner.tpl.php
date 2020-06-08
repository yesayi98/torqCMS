<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-31 21:08:42
  from 'E:\OSPanel\domains\torq\public\frontend\emotions\components\banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed3f2aa448883_63227393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1674f269246e5575cca517b5239f78e26c71b7c' => 
    array (
      0 => 'E:\\OSPanel\\domains\\torq\\public\\frontend\\emotions\\components\\banner.tpl',
      1 => 1589543223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed3f2aa448883_63227393 (Smarty_Internal_Template $_smarty_tpl) {
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
