<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-14 10:53:41
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\category\filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee5d785648c27_19284595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba4bd5c5863aa8dba33e161aa131520cb862e98e' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\category\\filter.tpl',
      1 => 1590238458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee5d785648c27_19284595 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'categories' => 
  array (
    'compiled_filepath' => 'C:\\Users\\User\\OSPanel\\domains\\torq\\cache\\template_c\\ba4bd5c5863aa8dba33e161aa131520cb862e98e_0.file.filter.tpl.php',
    'uid' => 'ba4bd5c5863aa8dba33e161aa131520cb862e98e',
    'call_name' => 'smarty_template_function_categories_14391644055ee5d785607af9_95910058',
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
                 <input type="hidden" name="c" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
">
             </form>
         </div>
        <!--  <div class="widget_list widget_color">
             <h3>Select By Color</h3>
             <ul>
                 <li>
                     <a href="shop.html#">Black  <span>(6)</span></a>
                 </li>
                 <li>
                     <a href="shop.html#"> Blue <span>(8)</span></a>
                 </li>
                 <li>
                     <a href="shop.html#">Brown <span>(10)</span></a>
                 </li>
                 <li>
                     <a href="shop.html#"> Green <span>(6)</span></a>
                 </li>
                 <li>
                     <a href="shop.html#">Pink <span>(4)</span></a>
                 </li>

             </ul>
         </div> -->

         <div class="widget_list tags_widget">
             <h3>Ամենափնտրվողները</h3>
             <div class="tag_cloud">
                 <a href="shop.html#">Բանան</a>
                 <a href="shop.html#">Միս</a>
                 <a href="shop.html#">խՆձոր</a>
                 <a href="shop.html#">խոզի չալաղաջ</a>
                 <a href="shop.html#">կաթ</a>
                 <a href="shop.html#">Մանդարին</a>
                 <a href="shop.html#">Կիվի</a>
             </div>
         </div>
         <div class="widget_list banner_widget">
             <div class="banner_thumb">
                 <a href="shop.html#"><img src="assets/img/bg/banner17.jpg" alt=""></a>
             </div>
         </div>
     </div>
 </aside>
 <!--sidebar widget end-->
<?php }
/* smarty_template_function_categories_14391644055ee5d785607af9_95910058 */
if (!function_exists('smarty_template_function_categories_14391644055ee5d785607af9_95910058')) {
function smarty_template_function_categories_14391644055ee5d785607af9_95910058(Smarty_Internal_Template $_smarty_tpl,$params) {
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
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>("frontend/category?c=").($_smarty_tpl->tpl_vars['entry']->value['id'])),$_smarty_tpl ) );
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
/*/ smarty_template_function_categories_14391644055ee5d785607af9_95910058 */
}
