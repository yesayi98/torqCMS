<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-08 22:55:05
  from 'D:\OSPanel\domains\torq\public\frontend\emotions\components\banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ede9799bcfdd8_37342851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ef858c4097ca4d161a7648fe9c1bcd14dd06c03' => 
    array (
      0 => 'D:\\OSPanel\\domains\\torq\\public\\frontend\\emotions\\components\\banner.tpl',
      1 => 1591636513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ede9799bcfdd8_37342851 (Smarty_Internal_Template $_smarty_tpl) {
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
