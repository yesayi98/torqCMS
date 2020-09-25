<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-24 17:11:48
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\advertisings\detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6ca924357697_68757093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ded0932f91cdf5924a160a033fcb5813881d4a8f' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\advertisings\\detail.tpl',
      1 => 1593264145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6ca924357697_68757093 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4346262155f6ca92420c397_20767628', "container-content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15330977895f6ca924291153_24880215', "translations-modal");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "backend/articles/detail.tpl");
}
/* {block "form-content"} */
class Block_6087805295f6ca92421a6b8_99752179 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                 <div class="row">
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">Name</label>
                       <div class="col-sm-10">
                         <input type="text" name="name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['advertising']->value['name'];?>
">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">url</label>
                       <div class="col-sm-10">
                         <input type="text" name="url" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['advertising']->value['url'];?>
">
                       </div>
                     </div>
                   </div>
                   <div class="col-12">
                     <div class="form-group row">
                       <label class="col-sm-1 col-form-label">Description</label>
                       <div class="col-sm-11">
                         <textarea name="description" class="form-control">
                           <?php echo $_smarty_tpl->tpl_vars['advertising']->value['description'];?>

                         </textarea>
                       </div>
                     </div>
                   </div>

                   <div class="col-12">
                     <div class="form-group row">
                       <label class="col-sm-1 col-form-label">Images</label>
                       <div class="col-sm-11">
                          <div class="gallery-container gallery-actions">
                            <div class="image-container button">
                              <button type="button"
                                      class="btn btn-info gallery-opener"
                                      name="gallery"
                                      data-toggle="modal"
                                      data-target=".gallery-modal">
                                <i class="ti-gallery"></i>
                              </button>
                            </div>
                            <?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['advertising']->value['image']);?>
                            <?php if (!$_smarty_tpl->tpl_vars['image']->value) {?>
                              <div class="image-container">
                              </div>
                            <?php } else { ?>
                              <div class="image-container">
                                <button type="button" name="deleteImage" class="btn btn-danger deleteImage" data-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/advertisings/deleteImage'),$_smarty_tpl ) );?>
" data-advertising="<?php echo $_smarty_tpl->tpl_vars['advertising']->value['id'];?>
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
                       <div class="col-sm-1"></div>
                       <div class="col-sm-11">
                          <div class="buttons-container">
                            <div class="buttons-group">
                              <a role="button" href="javaScript:void(0)" class="btn btn-info" name="openTranslator" data-toggle="modal" data-target=".translations-modal"><i class="ti-smallcap"></i> transitions</a>
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
class Block_16319363485f6ca924219068_39129428 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

             <form class="detail-form" id="detail-form" data-detail="<?php echo $_smarty_tpl->tpl_vars['advertising']->value['id'];?>
" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/advertisings/save'),$_smarty_tpl ) );?>
" method="post" data-ajaxsend="true">
               <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6087805295f6ca92421a6b8_99752179', "form-content", $this->tplIndex);
?>

               <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['advertising']->value['id'];?>
">
             </form>
           <?php
}
}
/* {/block "detail-form-container"} */
/* {block "container-content"} */
class Block_4346262155f6ca92420c397_20767628 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container-content' => 
  array (
    0 => 'Block_4346262155f6ca92420c397_20767628',
  ),
  'detail-form-container' => 
  array (
    0 => 'Block_16319363485f6ca924219068_39129428',
  ),
  'form-content' => 
  array (
    0 => 'Block_6087805295f6ca92421a6b8_99752179',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="card">
      <div class="card-header text-uppercase">
        <div class="card-title float-left">
           <?php echo $_smarty_tpl->tpl_vars['advertising']->value['id'];?>
: <?php echo $_smarty_tpl->tpl_vars['advertising']->value['name'];?>

        </div>
        <div class="cart-buttons float-right button-group">
          <button type="button" form="detail-form" class="btn btn-success" name="save-detail"><i class="fa fa-save"></i> save</button>
          <?php if ($_smarty_tpl->tpl_vars['advertising']->value) {?>
          <button type="button" data-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('backend/advertisings/delete?a=').($_smarty_tpl->tpl_vars['advertising']->value['id'])),$_smarty_tpl ) );?>
" class="btn btn-danger" name="delete-detail"><i class="fa fa-trash"></i> delete</button>
          <?php }?>
          <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/advertisings/'),$_smarty_tpl ) );?>
" class="btn btn-info" ><i class="fa fa-undo"></i> back</a>
        </div>
      </div>
       <div class="card-body">
         <div class="detail-form-container">
           <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16319363485f6ca924219068_39129428', "detail-form-container", $this->tplIndex);
?>

         </div>
       </div>
     </div>
<?php
}
}
/* {/block "container-content"} */
/* {block "translations-content"} */
class Block_6686274295f6ca924292a32_61481198 extends Smarty_Internal_Block
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
                          <input type="hidden" name="advertising_id" value="<?php echo $_smarty_tpl->tpl_vars['advertising']->value['id'];?>
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
class Block_15330977895f6ca924291153_24880215 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'translations-modal' => 
  array (
    0 => 'Block_15330977895f6ca924291153_24880215',
  ),
  'translations-content' => 
  array (
    0 => 'Block_6686274295f6ca924292a32_61481198',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6686274295f6ca924292a32_61481198', "translations-content", $this->tplIndex);
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
