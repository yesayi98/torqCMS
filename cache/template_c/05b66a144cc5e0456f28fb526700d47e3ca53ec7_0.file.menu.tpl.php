<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-14 10:53:41
  from 'C:\Users\User\OSPanel\domains\torq\public\frontend\index\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee5d785315bf6_62971084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05b66a144cc5e0456f28fb526700d47e3ca53ec7' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\frontend\\index\\menu.tpl',
      1 => 1590071242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee5d785315bf6_62971084 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'categories' => 
  array (
    'compiled_filepath' => 'C:\\Users\\User\\OSPanel\\domains\\torq\\cache\\template_c\\05b66a144cc5e0456f28fb526700d47e3ca53ec7_0.file.menu.tpl.php',
    'uid' => '05b66a144cc5e0456f28fb526700d47e3ca53ec7',
    'call_name' => 'smarty_template_function_categories_3239220615ee5d7852d0d00_10079819',
  ),
));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="row align-items-center">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17932818415ee5d78530ae44_87522580', 'catalog-menu-area');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18414873105ee5d78530cc29_36481351', 'main-menu-area');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20779574155ee5d785313ed6_26520708', 'phone-area');
?>

</div>
<?php }
/* smarty_template_function_categories_3239220615ee5d7852d0d00_10079819 */
if (!function_exists('smarty_template_function_categories_3239220615ee5d7852d0d00_10079819')) {
function smarty_template_function_categories_3239220615ee5d7852d0d00_10079819(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('level'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <ul class="<?php if ($_smarty_tpl->tpl_vars['level']->value == 1) {?>categories_mega_menu<?php } elseif ($_smarty_tpl->tpl_vars['level']->value == 2) {?> categorie_sub_menu<?php }?> level-<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'entry');
$_smarty_tpl->tpl_vars['entry']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->do_else = false;
?>
      <?php if (!$_smarty_tpl->tpl_vars['entry']->value['in_menu'] || !$_smarty_tpl->tpl_vars['entry']->value['active']) {?>
        <?php continue 1;?>
      <?php }?>
        <li class="<?php if ($_smarty_tpl->tpl_vars['level']->value < 2) {?>menu_item_children<?php }?>">
          <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>("category?c=").($_smarty_tpl->tpl_vars['entry']->value['id'])),$_smarty_tpl ) );?>
">
            <span><?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
</span>
            <?php if ($_smarty_tpl->tpl_vars['entry']->value['subCategories'] && $_smarty_tpl->tpl_vars['level']->value == 0) {?>
              <i class="fa fa-angle-right"></i>
            <?php }?>
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
/*/ smarty_template_function_categories_3239220615ee5d7852d0d00_10079819 */
/* {block 'catalog-menu-area'} */
class Block_17932818415ee5d78530ae44_87522580 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'catalog-menu-area' => 
  array (
    0 => 'Block_17932818415ee5d78530ae44_87522580',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="col-lg-3">
          <div class="categories_menu">
              <div class="categories_title">
                  <h2 class="categori_toggle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'catalog'),$_smarty_tpl ) );?>
</h2>
              </div>
              <div class="categories_menu_toggle">
                  <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories', array('data'=>$_smarty_tpl->tpl_vars['advancedMenuItems']->value), true);?>

              </div>
          </div>
      </div>
    <?php
}
}
/* {/block 'catalog-menu-area'} */
/* {block 'main-menu-area'} */
class Block_18414873105ee5d78530cc29_36481351 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main-menu-area' => 
  array (
    0 => 'Block_18414873105ee5d78530cc29_36481351',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="col-lg-6">
          <!--main menu start-->
          <div class="main_menu menu_position">
              <nav>
                  <ul>
                    <li><a class="<?php if ($_smarty_tpl->tpl_vars['route']->value['controller'] == 'index') {?>active<?php }?>"  href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>''),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'home'),$_smarty_tpl ) );?>
</a></li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mainCategories']->value, 'menuItem');
$_smarty_tpl->tpl_vars['menuItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menuItem']->value) {
$_smarty_tpl->tpl_vars['menuItem']->do_else = false;
?>
                    <?php if (!$_smarty_tpl->tpl_vars['menuItem']->value['in_menu'] || !$_smarty_tpl->tpl_vars['menuItem']->value['active']) {?>
                      <?php continue 1;?>
                    <?php }?>
                      <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('category?c=').($_smarty_tpl->tpl_vars['menuItem']->value['id'])),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['menuItem']->value['name'];?>
</a></li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </ul>
              </nav>
          </div>
          <!--main menu end-->
      </div>
    <?php
}
}
/* {/block 'main-menu-area'} */
/* {block 'phone-area'} */
class Block_20779574155ee5d785313ed6_26520708 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'phone-area' => 
  array (
    0 => 'Block_20779574155ee5d785313ed6_26520708',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="col-lg-3">
        <div class="call-support">
            <p><a href="tel:<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'phoneNumber'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'phoneNumber'),$_smarty_tpl ) );?>
</a> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translator'][0], array( array('selector'=>'ifquetions'),$_smarty_tpl ) );?>
</p>
        </div>
    </div>
    <?php
}
}
/* {/block 'phone-area'} */
}
