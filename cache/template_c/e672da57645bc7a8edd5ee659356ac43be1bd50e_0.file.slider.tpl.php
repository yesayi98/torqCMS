<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-14 22:54:56
  from 'D:\OSPanel\domains\torq\public\frontend\emotions\components\slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee680905e8308_54977711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e672da57645bc7a8edd5ee659356ac43be1bd50e' => 
    array (
      0 => 'D:\\OSPanel\\domains\\torq\\public\\frontend\\emotions\\components\\slider.tpl',
      1 => 1591636513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee680905e8308_54977711 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--slider area start-->
    <section class="slider_section">
        <div class="slider_area owl-carousel">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'slider');
$_smarty_tpl->tpl_vars['slider']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slider']->value) {
$_smarty_tpl->tpl_vars['slider']->do_else = false;
?>
            <div class="single_slider d-flex align-items-center" data-bgimg="<?php echo $_smarty_tpl->tpl_vars['slider']->value['media']['path'];?>
">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="slider_content">
                                <h1><?php echo $_smarty_tpl->tpl_vars['slider']->value['name'];?>
</h1>
                                <?php echo $_smarty_tpl->tpl_vars['slider']->value['description'];?>

                                <a href="<?php echo $_smarty_tpl->tpl_vars['slider']->value['url'];?>
" class="mt-20"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'viewMore'),$_smarty_tpl ) );?>
</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </section>
    <!--slider area end-->
<?php }
}
