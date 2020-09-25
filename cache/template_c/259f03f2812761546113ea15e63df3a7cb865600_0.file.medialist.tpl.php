<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-24 14:53:34
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\media\medialist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6c88be010119_17611619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '259f03f2812761546113ea15e63df3a7cb865600' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\media\\medialist.tpl',
      1 => 1599735460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:backend/media/mediagrid.tpl' => 1,
  ),
),false)) {
function content_5f6c88be010119_17611619 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4212354475f6c88bdc18552_04298415', "media-content");
?>

<?php }
/* {block "media-albuml-list"} */
class Block_7758137675f6c88bdc760f3_79520599 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="album-content col-6 col-md-4 col-lg-2">
      <h5>Media Albums</h5>
      <ul class="album-list list-group">
        <li class="list-item"><a class="list-group-item list-group-item-action album-item" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/media'),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['fromArticles']->value) {?>?image=0<?php }?>">All</a></li>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['albums']->value, 'album');
$_smarty_tpl->tpl_vars['album']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['album']->value) {
$_smarty_tpl->tpl_vars['album']->do_else = false;
?>
          <li class="list-item"><a class="list-group-item list-group-item-action album-item" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('backend/media?album=').($_smarty_tpl->tpl_vars['album']->value['id'])),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['fromArticles']->value) {?>&image=0<?php }?>"><?php echo $_smarty_tpl->tpl_vars['album']->value['name'];?>
</a></li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>

      <div class="card mt-5">
        <div class="card-header text-uppercase">Upload media</div>
        <div class="card-body">
          <div class="button-group row">
            <div class="col-12">
              <div class="form-group row">
                  <label for="basic-select" class="col-12 col-form-label">Select album</label>
                  <div class="col-12">

                  </div>
                </div>
            </div>
          </div>
          <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/media/save'),$_smarty_tpl ) );?>
" method="post" class="dropzone" id="dropzone" style="padding: 0" enctype="multipart/form-data">
            <div class="fallback">
              <input name="file" type="file" multiple="multiple">
            </div>
            <div class="additional">
              <select class="form-control" name='album' form="dropzone">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['albums']->value, 'album');
$_smarty_tpl->tpl_vars['album']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['album']->value) {
$_smarty_tpl->tpl_vars['album']->do_else = false;
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['album']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['album']->value['name'];?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </select>
            </div>
          </form>

          <!-- Dropzone JS  -->
          <?php echo '<script'; ?>
 src="assets/plugins/dropzone/js/dropzone.js"><?php echo '</script'; ?>
>
        </div>
      </div>
    </div>
  <?php
}
}
/* {/block "media-albuml-list"} */
/* {block "media-list"} */
class Block_15917238675f6c88bdedd4b7_86812116 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="media-content col-12 col-md-8 col-lg-10" data-content='true' data-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/media'),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['fromArticles']->value) {?>?image=0<?php }?>">
      <?php $_smarty_tpl->_subTemplateRender("file:backend/media/mediagrid.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
  <?php
}
}
/* {/block "media-list"} */
/* {block "media-content"} */
class Block_4212354475f6c88bdc18552_04298415 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'media-content' => 
  array (
    0 => 'Block_4212354475f6c88bdc18552_04298415',
  ),
  'media-albuml-list' => 
  array (
    0 => 'Block_7758137675f6c88bdc760f3_79520599',
  ),
  'media-list' => 
  array (
    0 => 'Block_15917238675f6c88bdedd4b7_86812116',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="row content-parent">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7758137675f6c88bdc760f3_79520599', "media-albuml-list", $this->tplIndex);
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15917238675f6c88bdedd4b7_86812116', "media-list", $this->tplIndex);
?>

  </div>
<?php
}
}
/* {/block "media-content"} */
}
