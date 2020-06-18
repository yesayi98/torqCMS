<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-18 23:29:13
  from 'D:\OSPanel\domains\torq\public\frontend\emotions\components\category_teaser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eebce9963a412_05929091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f8a67334bf805ab7708983462847c873bb52cd0' => 
    array (
      0 => 'D:\\OSPanel\\domains\\torq\\public\\frontend\\emotions\\components\\category_teaser.tpl',
      1 => 1592510869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eebce9963a412_05929091 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('category', $_smarty_tpl->tpl_vars['items']->value['category']);
$_smarty_tpl->_assignInScope('sorting', $_smarty_tpl->tpl_vars['items']->value['sorting']);?>
<div class="category-header">
  <div class="row">
    <div class="col-12">
        <div class="product_header">
            <div class="section_title">
               <!-- <p>Recently added our store</p> -->
               <h2><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</h2>
            </div>
            <div class="product_tab_btn">
                <ul class="nav" role="tablist" data-category="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" >
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sorting']->value, 'sort', false, 'key');
$_smarty_tpl->tpl_vars['sort']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['sort']->value) {
$_smarty_tpl->tpl_vars['sort']->do_else = false;
?>
                  <li>
                      <a class="<?php if ($_smarty_tpl->tpl_vars['key']->value == 0) {?>active<?php }?>"
                         data-category-sort='<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
'
                         data-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>((('emotions/category?c=').($_smarty_tpl->tpl_vars['category']->value['id'])).('&sort=')).($_smarty_tpl->tpl_vars['sort']->value)),$_smarty_tpl ) );?>
"
                         data-toggle="tab"
                         href="#plant<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"
                         role="tab"
                         aria-controls="plant1"
                         aria-selected="true">
                         <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>$_smarty_tpl->tpl_vars['sort']->value),$_smarty_tpl ) );?>

                      </a>
                  </li>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        </div>
      </div>
    </div>
</div>
<div class="product_container">
  <div class="row">
    <div class="col-12">
      <div class="tab-content">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sorting']->value, 'sort', false, 'key');
$_smarty_tpl->tpl_vars['sort']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['sort']->value) {
$_smarty_tpl->tpl_vars['sort']->do_else = false;
?>
          <div class="tab-pane fade<?php if ($_smarty_tpl->tpl_vars['key']->value == 0) {?> show active<?php }?>" id="plant<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" role="tabpanel">
            <div class="tab-inner-content" data-content='true'>
              <div class="self-preloader">
                <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_FRONTEND']->value;?>
assets/img/icon/preloader.gif" alt="preloader">
              </div>
            </div>
          </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
    </div>
  </div>
</div>
<?php }
}
