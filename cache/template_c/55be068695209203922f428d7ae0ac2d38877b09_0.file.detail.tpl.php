<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-15 15:32:59
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\articles\detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebe8bfbd6c8f1_26344844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55be068695209203922f428d7ae0ac2d38877b09' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\articles\\detail.tpl',
      1 => 1589372527,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:backend/articles/options.tpl' => 1,
  ),
),false)) {
function content_5ebe8bfbd6c8f1_26344844 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10690366085ebe8bfbc5c645_86696321', "css-container");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7759533505ebe8bfbcbb154_01781453', "container-content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20478639175ebe8bfbcf31c3_13819703', "modal-container");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1282153245ebe8bfbd6ab83_24732128', "js-container");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "backend/articles/index.tpl");
}
/* {block "css-container"} */
class Block_10690366085ebe8bfbc5c645_86696321 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css-container' => 
  array (
    0 => 'Block_10690366085ebe8bfbc5c645_86696321',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet"/>
  <link href="assets/plugins/inputtags/css/bootstrap-tagsinput.css" rel="stylesheet" />
  <!-- Dropzone css -->
    <link href="assets/plugins/dropzone/css/dropzone.css" rel="stylesheet" type="text/css">
  <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php
}
}
/* {/block "css-container"} */
/* {block "form-content"} */
class Block_1255162915ebe8bfbcd18a3_73242580 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                 <div class="row">
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">Name</label>
                       <div class="col-sm-10">
                         <input type="text" name="name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['name'];?>
">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">get price</label>
                       <div class="col-sm-10">
                         <input type="number" name="get_price" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['get_price'];?>
">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">Ordernumber</label>
                       <div class="col-sm-10">
                         <input type="text" name="ordernumber" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['ordernumber'];?>
">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">sale price</label>
                       <div class="col-sm-10">
                         <input type="number" name="price" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['price'];?>
">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">supplier</label>
                       <div class="col-sm-10">
                         <input type="text" name="supplier" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['supplier']['name'];?>
">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">discount</label>
                       <div class="col-sm-10">
                         <input type="number" name="discount" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['discount'];?>
">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">active</label>
                       <div class="col-sm-10">
                         <select class="form-control" name='active'>
                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['article']->value['active']) {?>selected<?php }?>>yes</option>
                            <option value="0" <?php if (!$_smarty_tpl->tpl_vars['article']->value['active']) {?>selected<?php }?>>no</option>
                         </select>
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">in stock</label>
                       <div class="col-sm-10">
                         <input type="number" name="in_stock" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['in_stock'];?>
">
                       </div>
                     </div>
                   </div>
                   <div class="col-12">
                     <div class="form-group row">
                       <label class="col-sm-1 col-form-label">Description</label>
                       <div class="col-sm-11">
                         <textarea name="description" class="form-control">
                           <?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>

                         </textarea>
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">unit</label>
                       <div class="col-sm-10">
                         <input type="number" class="form-control" name="unit" min=0 value="<?php echo $_smarty_tpl->tpl_vars['article']->value['unit'];?>
">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">unit type</label>
                       <div class="col-sm-10">
                         <select class="form-control" name='unit_type'>
                           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['units']->value, 'unit');
$_smarty_tpl->tpl_vars['unit']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['unit']->value) {
$_smarty_tpl->tpl_vars['unit']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['unit']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['unit']->value['id'] == $_smarty_tpl->tpl_vars['article']->value['unit_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['unit']->value['name'];?>
</option>
                           <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                         </select>
                       </div>
                     </div>
                   </div>
                   <div class="col-12">
                     <div class="form-group row">
                       <label class="col-sm-1 col-form-label">category</label>
                       <div class="col-sm-11 categories-settings">
                         <div class="article-categories">
                           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value['category_id'], 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                             <div class="added-category-container">
                               <span class="added-category-text"><?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
: <?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</span>
                               <input class="added-category-input" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
">
                               <button class="added-category btn btn-danger" data-ajaxsend="true" type="button" data-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/articles/deleteCategory'),$_smarty_tpl ) );?>
"><i class="ti-close"></i></button>
                             </div>
                           <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                         </div>
                         <select class="form-control category-selector search-select">
                           <option value="">Select Category</option>
                           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
: <?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</option>
                           <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                         </select>
                       </div>
                     </div>
                   </div>
                   <div class="col-12">
                     <div class="form-group row">
                       <label class="col-sm-1 col-form-label">keywords</label>
                       <div class="col-sm-11 keywords">
                          <input type="text" name="keywords" class="form-control" data-role="tagsinput" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['keywords'];?>
"/>
                       </div>
                     </div>
                   </div>
                   <div class="col-12">
                     <div class="form-group row">
                       <label class="col-sm-1 col-form-label">timer to</label>
                       <div class="col-sm-11">
                          <input type="date" name='sale_end' class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['attributes']['sale_end'];?>
"/>
                       </div>
                     </div>
                   </div>
                   <div class="col-12">
                     <div class="form-group row">
                       <label class="col-sm-1 col-form-label">Images</label>
                       <div class="col-sm-11">
                          <div class="gallery-container gallery-actions" data-multi=true>
                            <div class="image-container button">
                              <button type="button"
                                      class="btn btn-info gallery-opener"
                                      name="gallery"
                                      data-toggle="modal"
                                      data-target=".gallery-modal">
                                <i class="ti-gallery"></i>
                              </button>
                            </div>
                            <?php $_smarty_tpl->_assignInScope('images', $_smarty_tpl->tpl_vars['article']->value['images']);?>
                            <?php if (!$_smarty_tpl->tpl_vars['images']->value) {?>
                              <div class="image-container">
                              </div>
                            <?php }?>
                             <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
                               <div class="image-container">
                                 <button type="button" name="deleteImage" class="btn btn-danger deleteImage" data-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/articles/deleteImage'),$_smarty_tpl ) );?>
" data-article="<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
"><i class="ti-close"></i></button>
                                 <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value['path'];?>
" class="detail-image" >
                                 <input type="hidden" name="media_id" class="detail-image-id" value="<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
">
                               </div>
                             <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                          </div>
                       </div>
                     </div>
                   </div>
                   <div class="col-12">
                     <div class="form-group row">
                       <div class="col-sm-1"></div>
                       <div class="col-sm-11">
                          <div class="buttons-container">
                            <div class="buttons-group">
                              <a role="button" href="javaScript:void(0)" class="btn btn-info" name="openTranslator" data-toggle="modal" data-target=".translations-modal"><i class="ti-smallcap"></i> transitions</a>
                              <a role="button" href="javaScript:void(0)" class="btn btn-info <?php if (!$_smarty_tpl->tpl_vars['article']->value) {?>disabled<?php }?>" <?php if (!$_smarty_tpl->tpl_vars['article']->value) {?>aria-disabled="true"<?php }?> name="openOptions" data-toggle="modal" data-target=".options-modal" ><i class="ti-layout-list-post"></i> options</a>
                            </div>
                          </div>
                       </div>
                     </div>
                   </div>
                 </div>
               <?php
}
}
/* {/block "form-content"} */
/* {block "detail-form-container"} */
class Block_3465125405ebe8bfbccfbf2_04519993 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

             <form class="detail-form" id="detail-form" data-detail="<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/articles/save'),$_smarty_tpl ) );?>
" method="post" data-ajaxsend="true">
               <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1255162915ebe8bfbcd18a3_73242580', "form-content", $this->tplIndex);
?>

               <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">
             </form>
           <?php
}
}
/* {/block "detail-form-container"} */
/* {block "container-content"} */
class Block_7759533505ebe8bfbcbb154_01781453 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container-content' => 
  array (
    0 => 'Block_7759533505ebe8bfbcbb154_01781453',
  ),
  'detail-form-container' => 
  array (
    0 => 'Block_3465125405ebe8bfbccfbf2_04519993',
  ),
  'form-content' => 
  array (
    0 => 'Block_1255162915ebe8bfbcd18a3_73242580',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="card">
      <div class="card-header text-uppercase">
        <div class="card-title float-left">
           <?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
: <?php echo $_smarty_tpl->tpl_vars['article']->value['name'];?>

        </div>
        <div class="cart-buttons float-right button-group">
          <button type="button" form="detail-form" class="btn btn-success" name="save-detail"><i class="fa fa-save"></i> save</button>
          <?php if ($_smarty_tpl->tpl_vars['article']->value) {?>
          <button type="button" data-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('backend/articles/delete?a=').($_smarty_tpl->tpl_vars['article']->value['id'])),$_smarty_tpl ) );?>
" class="btn btn-danger" name="delete-detail"><i class="fa fa-trash"></i> delete</button>
          <?php }?>
          <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/articles/'),$_smarty_tpl ) );?>
" class="btn btn-info" ><i class="fa fa-undo"></i> back</a>
        </div>
      </div>
       <div class="card-body">
         <div class="detail-form-container">
           <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3465125405ebe8bfbccfbf2_04519993', "detail-form-container", $this->tplIndex);
?>

         </div>
       </div>
     </div>


<?php
}
}
/* {/block "container-content"} */
/* {block "gallery-modal"} */
class Block_12238598875ebe8bfbcf3b28_56589802 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="modal fade gallery-modal">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Gallery</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="contaiener" data-content="true" data-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/media'),$_smarty_tpl ) );?>
">

          </div>
        </div>
        <div class="modal-footer">
          <form class="addImage" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/media/'),$_smarty_tpl ) );?>
" id="imageToDetail" method="post">
            <button type="submit" class="btn btn-light addDetailImage"><i class="fa fa-check-square-o"></i> Add</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php
}
}
/* {/block "gallery-modal"} */
/* {block "translations-content"} */
class Block_1639305105ebe8bfbcf62c5_05783036 extends Smarty_Internal_Block
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
                            <input type="hidden" name="article_id" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
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
class Block_12647335055ebe8bfbcf5588_69611549 extends Smarty_Internal_Block
{
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1639305105ebe8bfbcf62c5_05783036', "translations-content", $this->tplIndex);
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
/* {block "options-content"} */
class Block_9638989505ebe8bfbd636b3_20399591 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="content" data-content=true data-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('backend/articles/options?a=').($_smarty_tpl->tpl_vars['article']->value['id'])),$_smarty_tpl ) );?>
">
                  <?php $_smarty_tpl->_subTemplateRender("file:backend/articles/options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
                <div class="row">
                  <div class="col-12 col-lg-6 col-xl-6">
                    <div class="form-group row">
                      <label class="col-12 col-form-label">Key</label>
                      <div class="col-12">
                        <input type="text" name="name" class="form-control" value="">
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-lg-6 col-xl-6">
                    <div class="form-group row">
                      <label class="col-12 col-form-label">Value</label>
                      <div class="col-12">
                        <input type="text" name="value" class="form-control" value="">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="button-group pull-right">
                  <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" name="article_id">
                  <button type="submit" class="btn btn-success addDetailOption"><i class="fa fa-check-square-o"></i> Add</button>
                </div>
                <?php
}
}
/* {/block "options-content"} */
/* {block "options-modal"} */
class Block_13296649595ebe8bfbd62637_17442386 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="modal fade options-modal">
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
              <form class="optionsForm" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/articles/saveOptions'),$_smarty_tpl ) );?>
" method="post" data-ajaxsend="true" callback="me.articleDetail.onOpenOptionAdd">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9638989505ebe8bfbd636b3_20399591', "options-content", $this->tplIndex);
?>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php
}
}
/* {/block "options-modal"} */
/* {block "modal-container"} */
class Block_20478639175ebe8bfbcf31c3_13819703 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modal-container' => 
  array (
    0 => 'Block_20478639175ebe8bfbcf31c3_13819703',
  ),
  'gallery-modal' => 
  array (
    0 => 'Block_12238598875ebe8bfbcf3b28_56589802',
  ),
  'translations-modal' => 
  array (
    0 => 'Block_12647335055ebe8bfbcf5588_69611549',
  ),
  'translations-content' => 
  array (
    0 => 'Block_1639305105ebe8bfbcf62c5_05783036',
  ),
  'options-modal' => 
  array (
    0 => 'Block_13296649595ebe8bfbd62637_17442386',
  ),
  'options-content' => 
  array (
    0 => 'Block_9638989505ebe8bfbd636b3_20399591',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12238598875ebe8bfbcf3b28_56589802', "gallery-modal", $this->tplIndex);
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12647335055ebe8bfbcf5588_69611549', "translations-modal", $this->tplIndex);
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13296649595ebe8bfbd62637_17442386', "options-modal", $this->tplIndex);
?>

<?php
}
}
/* {/block "modal-container"} */
/* {block "js-container"} */
class Block_1282153245ebe8bfbd6ab83_24732128 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js-container' => 
  array (
    0 => 'Block_1282153245ebe8bfbd6ab83_24732128',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

  <!-- ckeditor -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_BACKEND']->value;?>
assets/plugins/ckeditor/js/ckeditor.js"><?php echo '</script'; ?>
>
  <!--select2 plugin-->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_BACKEND']->value;?>
assets/plugins/select2/js/select2.min.js"><?php echo '</script'; ?>
>
  <!--Inputtags Js-->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_BACKEND']->value;?>
assets/plugins/inputtags/js/bootstrap-tagsinput.js"><?php echo '</script'; ?>
>
  <!--Detail Js-->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_BACKEND']->value;?>
assets/js/jquery.detail.js"><?php echo '</script'; ?>
>
  <!-- ckeditor initer -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_BACKEND']->value;?>
assets/js/jquery.editor.js"><?php echo '</script'; ?>
>

<?php
}
}
/* {/block "js-container"} */
}
