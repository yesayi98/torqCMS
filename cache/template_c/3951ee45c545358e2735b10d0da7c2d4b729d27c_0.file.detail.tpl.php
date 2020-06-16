<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-16 14:48:10
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\categories\detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee8b17a6d4bc2_63662701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3951ee45c545358e2735b10d0da7c2d4b729d27c' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\categories\\detail.tpl',
      1 => 1591768784,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee8b17a6d4bc2_63662701 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['category']->value['name']) {?>
   <?php $_smarty_tpl->_assignInScope('header', (($_smarty_tpl->tpl_vars['category']->value['id']).(': ')).($_smarty_tpl->tpl_vars['category']->value['name']));
} else { ?>
   <?php $_smarty_tpl->_assignInScope('header', "New Category");
}?>
<div class="card-header text-uppercase">
  <div class="card-title d-inline"><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</div>
  <div class="button-group pull-right">
    <button type="button" form="detail-form" class="btn btn-success" name="save-detail"><i class="fa fa-save"></i> save</button>
    <?php if ($_smarty_tpl->tpl_vars['category']->value) {?>
      <button type="button" data-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('backend/categories/delete?c=').($_smarty_tpl->tpl_vars['category']->value['id'])),$_smarty_tpl ) );?>
" class="btn btn-danger" name="delete-detail"><i class="fa fa-trash"></i> delete</button>
    <?php }?>
  </div>
</div>
<div class="card-body">
  <div class="">
    <form class="category-detail" id="detail-form" data-ajaxsend=true action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/categories/save'),$_smarty_tpl ) );?>
" method="post">
      <?php if ($_smarty_tpl->tpl_vars['category']->value) {?>
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
">
      <?php }?>
      <div class="row">
        <div class="col-12">
          <div class="form-group row">
            <label class="col-12 col-form-label">name</label>
            <div class="col-12">
              <input type="text" name="name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
">
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="form-group row">
            <label class="col-12 col-form-label">Description</label>
            <div class="col-12">
              <textarea name="description"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</textarea>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="form-group row">
            <label class="col-12 col-form-label">Parent</label>
            <div class="col-12 categories-settings">
              <select class="form-control search-select" name="parent_id">
                <option value=0>select parent</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categoryList']->value, 'item', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['id'] == $_smarty_tpl->tpl_vars['category']->value['parent_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
: <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </select>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="form-group row">
            <label class="col-12 col-form-label">Active</label>
            <div class="col-12">
              <input type="checkbox" name="active" class="js-switch" data-color="#14abef" <?php if ($_smarty_tpl->tpl_vars['category']->value['active']) {?>checked<?php }
if (!$_smarty_tpl->tpl_vars['category']->value) {?>checked<?php }?>>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="form-group row">
            <label class="col-12 col-form-label">Display in menu</label>
            <div class="col-12">
              <input type="checkbox" name="in_menu" class="js-switch" data-color="#14abef"  <?php if ($_smarty_tpl->tpl_vars['category']->value['in_menu'] || !isset($_smarty_tpl->tpl_vars['category']->value)) {?>checked<?php }?>>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="form-group row">
            <label class="col-12 col-form-label">Without article</label>
            <div class="col-12">
              <input type="checkbox" name="content" class="js-switch" data-color="#14abef"  <?php if ($_smarty_tpl->tpl_vars['category']->value['content']) {?>checked<?php }?>>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="form-group row">
            <label class="col-12 col-form-label">External url</label>
            <div class="col-12">
              <input type="text" name="external_url" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['external_url'];?>
">
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="form-group row">
            <label class="col-12 col-form-label">Sort id</label>
            <div class="col-12">
              <input type="number" name="sort_id" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['sort_id'];?>
">
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Images</label>
            <div class="col-sm-12">
               <div class="gallery-container gallery-actions" data-multi=false>
                 <div class="image-container button">
                   <button type="button"
                           class="btn btn-info gallery-opener"
                           name="gallery"
                           data-toggle="modal"
                           data-target=".gallery-modal">
                     <i class="ti-gallery"></i>
                   </button>
                 </div>
                 <?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['category']->value['image']);?>
                 <?php if (!$_smarty_tpl->tpl_vars['image']->value) {?>
                   <div class="image-container">
                   </div>
                   <?php } else { ?>
                   <div class="image-container">
                     <button type="button" name="deleteImage" class="btn btn-danger deleteImage" data-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/articles/deleteImage'),$_smarty_tpl ) );?>
" data-article="<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
"><i class="ti-close"></i></button>
                     <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value['path'];?>
" class="detail-image" >
                     <input type="hidden" name="media_id" class="detail-image-id" value="<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
">
                   </div>
                 <?php }?>

               </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="form-group row">
            <div class="col-sm-12">
               <div class="buttons-container">
                 <div class="buttons-group">
                   <a role="button" href="javaScript:void(0)" class="btn btn-info" name="openTranslator" data-toggle="modal" data-target=".translations-modal"><i class="ti-smallcap"></i> transitions</a>
                 </div>
               </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_723048975ee8b17a6bb770_11272983', "translations-modal");
?>

<?php }
/* {block "translations-content"} */
class Block_13029657235ee8b17a6bcb64_60988797 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div class="card">
                 <div class="card-body">
                   <ul class="nav nav-pills nav-pills-success nav-justified" role="tablist">
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                      <?php if ($_smarty_tpl->tpl_vars['language']->value['id'] == 1) {?>
                        <?php continue 1;?>
                      <?php }?>
                       <li class="nav-item">
                         <a class="nav-link<?php if ($_smarty_tpl->tpl_vars['key']->value == 1) {?> active<?php }?>" data-toggle="pill" href="#piil-<?php echo $_smarty_tpl->tpl_vars['language']->value['id'];?>
"> <span class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</span></a>
                       </li>
                     <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                   </ul>

                   <!-- Tab panes -->
                   <div class="tab-content">
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                      <?php if ($_smarty_tpl->tpl_vars['language']->value['id'] == 1) {?>
                        <?php continue 1;?>
                      <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('key', $_smarty_tpl->tpl_vars['key']->value-1);?>
                      <?php }?>
                      <?php $_smarty_tpl->_assignInScope('langID', $_smarty_tpl->tpl_vars['language']->value['id']);?>
                      <div id="piil-<?php echo $_smarty_tpl->tpl_vars['language']->value['id'];?>
" class="container tab-pane<?php if ($_smarty_tpl->tpl_vars['langID']->value == 2) {?> active<?php }?>">
                        <div class="row">
                          <div class="col-12">
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Name</label>
                              <div class="col-sm-10">
                                <input type="text" form="detail-form" name="translation[<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
][name]" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['translations']->value[$_smarty_tpl->tpl_vars['key']->value]['name'];?>
">
                              </div>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Description</label>
                              <div class="col-sm-10">
                                <textarea name="translation[<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
][description]" form="detail-form" class="form-control" data-description="true">
                                  <?php echo $_smarty_tpl->tpl_vars['translations']->value[$_smarty_tpl->tpl_vars['key']->value]['description'];?>

                                </textarea>
                              </div>
                            </div>
                          </div>
                          <input type="hidden" name="category_id" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
">
                        </div>
                      </div>
                     <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                   </div>
                 </div>
              </div>
            <?php
}
}
/* {/block "translations-content"} */
/* {block "translations-modal"} */
class Block_723048975ee8b17a6bb770_11272983 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'translations-modal' => 
  array (
    0 => 'Block_723048975ee8b17a6bb770_11272983',
  ),
  'translations-content' => 
  array (
    0 => 'Block_13029657235ee8b17a6bcb64_60988797',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="modal fade translations-modal">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Gallery</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="contaiener">
                      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13029657235ee8b17a6bcb64_60988797', "translations-content", $this->tplIndex);
?>

                  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fa fa-check-square-o"></i> Add</button>
      </div>
    </div>
  </div>
</div>
<?php
}
}
/* {/block "translations-modal"} */
}
