<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-01 14:33:09
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\category\filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4e31750ece98_81784393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba4bd5c5863aa8dba33e161aa131520cb862e98e' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\category\\filter.tpl',
      1 => 1598959987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4e31750ece98_81784393 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'categories' => 
  array (
    'compiled_filepath' => 'C:\\Users\\User\\OSPanel\\domains\\torq\\cache\\template_c\\ba4bd5c5863aa8dba33e161aa131520cb862e98e_0.file.filter.tpl.php',
    'uid' => 'ba4bd5c5863aa8dba33e161aa131520cb862e98e',
    'call_name' => 'smarty_template_function_categories_4913425995f4e3175074cc9_61220785',
  ),
));
?>

<!--sidebar widget start-->
 <aside class="sidebar_widget">
     <div class="widget_inner">
         <div class="widget_list widget_categories">
             <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"catalog"),$_smarty_tpl ) );?>
</h3>
             <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories', array('data'=>$_smarty_tpl->tpl_vars['categoryList']->value), true);?>

         </div>
         <div class="widget_list widget_filter">
             <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'category/search'),$_smarty_tpl ) );?>
" id='filter_form'>
                 <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"filterByPrice"),$_smarty_tpl ) );?>
</h3>
                 <div class="filter-type">
                   <div id="slider-range"></div>
                   <button type="submit" data-rangesubmiter="true"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>"filter"),$_smarty_tpl ) );?>
</button>
                   <input type="text" id="amount" />
                   <input type="hidden" name="price[min]" id="min-price" value='<?php echo $_smarty_tpl->tpl_vars['minPrice']->value;?>
'>
                   <input type="hidden" name="price[max]" id="max-price" value='<?php echo $_smarty_tpl->tpl_vars['maxPrice']->value;?>
'>
                 </div>
                 <input type="hidden" name="search" value="<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
">
                 <input type="hidden" name="sort" value="<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
" id="sorting_input">
                 <input type="hidden" name="c" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
">
             </form>
         </div>
         <div class="widget_list widget_color">
              <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'suppliers'),$_smarty_tpl ) );?>
</h3>
              <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['suppliers']->value, 'supplier', false, 'key');
$_smarty_tpl->tpl_vars['supplier']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['supplier']->value) {
$_smarty_tpl->tpl_vars['supplier']->do_else = false;
?>
                <li>
                    <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['context']->value['suppliers'] && in_array($_smarty_tpl->tpl_vars['supplier']->value['id'],$_smarty_tpl->tpl_vars['context']->value['suppliers'])) {?>checked<?php }?> data-filter="true" id="fil_supplier_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="suppliers[]" value="<?php echo $_smarty_tpl->tpl_vars['supplier']->value['id'];?>
" form="filter_form">
                    <label for="fil_supplier_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><a href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['supplier']->value['name'];?>
</a></label>
                </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
          </div>
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filters']->value, 'filter', false, 'item');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
         <div class="widget_list widget_color">
              <h3><?php echo $_smarty_tpl->tpl_vars['filter']->value['option']['name'];?>
</h3>
              <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter']->value['option']['values'], 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                <li>
                    <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['context']->value['options'] && in_array($_smarty_tpl->tpl_vars['value']->value['id'],$_smarty_tpl->tpl_vars['context']->value['options'])) {?>checked<?php }?> data-filter="true" id="fil_<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="options[]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" form="filter_form">
                    <label for="fil_<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><a href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['value']->value['value'];?>
</a></label>
                </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
          </div>
         <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
         <div class="widget_list banner_widget">
             <div class="banner_thumb">
                              </div>
         </div>
     </div>
 </aside>
 <!--sidebar widget end-->
<?php }
/* smarty_template_function_categories_4913425995f4e3175074cc9_61220785 */
if (!function_exists('smarty_template_function_categories_4913425995f4e3175074cc9_61220785')) {
function smarty_template_function_categories_4913425995f4e3175074cc9_61220785(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('level'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <ul class="level-<?php echo $_smarty_tpl->tpl_vars['level']->value;
if ($_smarty_tpl->tpl_vars['level']->value > 0) {?> widget_dropdown_categories dropdown_categories<?php }?>">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'entry');
$_smarty_tpl->tpl_vars['entry']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->do_else = false;
?>
      <?php if (!$_smarty_tpl->tpl_vars['entry']->value['in_menu'] || !$_smarty_tpl->tpl_vars['entry']->value['active']) {?>
        <?php continue 1;?>
      <?php }?>
        <li class="widget_sub_categories sub_categories">
          <?php if ($_smarty_tpl->tpl_vars['entry']->value['subCategories']) {?>
            <?php $_smarty_tpl->_assignInScope('href', 'javascript:void(0)');?>
          <?php } else { ?>
            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>("category?c=").($_smarty_tpl->tpl_vars['entry']->value['id'])),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('href', $_prefixVariable1);?>
          <?php }?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
">
            <?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>

          </a>
          <?php if ($_smarty_tpl->tpl_vars['entry']->value['subCategories']) {?>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories', array('data'=>$_smarty_tpl->tpl_vars['entry']->value['subCategories'],'level'=>$_smarty_tpl->tpl_vars['level']->value+1), true);?>

          <?php }?>
        </li>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}}
/*/ smarty_template_function_categories_4913425995f4e3175074cc9_61220785 */
}
