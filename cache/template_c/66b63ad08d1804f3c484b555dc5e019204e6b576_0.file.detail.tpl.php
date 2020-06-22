<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-19 12:18:22
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\blog\detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eec74ce929877_63264700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66b63ad08d1804f3c484b555dc5e019204e6b576' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\blog\\detail.tpl',
      1 => 1592554700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eec74ce929877_63264700 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19106500345eec74ce8fd218_75195808', "container-content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "backend/articles/detail.tpl");
}
/* {block "form-content"} */
class Block_20153830255eec74ce90e315_73442114 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                 <div class="row">
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">Name</label>
                       <div class="col-sm-10">
                         <input type="text" name="name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['blog']->value['name'];?>
">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">author</label>
                       <div class="col-sm-10">
                         <input type="text" name="author" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['blog']->value['author'];?>
">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">active</label>
                       <div class="col-sm-10">
                         <select class="form-control" name='active'>
                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['blog']->value['active']) {?>selected<?php }?>>yes</option>
                            <option value="0" <?php if (!$_smarty_tpl->tpl_vars['blog']->value['active']) {?>selected<?php }?>>no</option>
                         </select>
                       </div>
                     </div>
                   </div>
                   <div class="col-12">
                     <div class="form-group row">
                       <label class="col-sm-1 col-form-label">Description</label>
                       <div class="col-sm-11">
                         <textarea name="description" class="form-control">
                           <?php echo $_smarty_tpl->tpl_vars['blog']->value['description'];?>

                         </textarea>
                       </div>
                     </div>
                   </div>
                   <div class="col-12">
                     <div class="form-group row">
                       <label class="col-sm-1 col-form-label">category</label>
                       <div class="col-sm-11">
                         <select class="form-control" name="category_id">
                           <option value="">Select Category</option>
                           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['category']->value['id'] == $_smarty_tpl->tpl_vars['blog']->value['category_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
: <?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</option>
                           <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                         </select>
                       </div>
                     </div>
                   </div>

                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">created in</label>
                       <div class="col-sm-10">
                          <input type="date" name='created_date' class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['blog']->value['created_date'];?>
"/>
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">changed in</label>
                       <div class="col-sm-10">
                          <input type="date" name='change_dated' class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['blog']->value['changed_date'];?>
"/>
                       </div>
                     </div>
                   </div>
                   <div class="col-12">
                     <div class="form-group row">
                       <label class="col-sm-1 col-form-label">Images</label>
                       <div class="col-sm-11">
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
                            <?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['blog']->value['image']);?>
                            <?php if (!$_smarty_tpl->tpl_vars['image']->value) {?>
                              <div class="image-container">
                              </div>
                            <?php }?>
                             <div class="image-container">
                               <button type="button" name="deleteImage" class="btn btn-danger deleteImage" data-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/blog/deleteImage'),$_smarty_tpl ) );?>
" data-blog="<?php echo $_smarty_tpl->tpl_vars['blog']->value['id'];?>
"><i class="ti-close"></i></button>
                               <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value['path'];?>
" class="detail-image" >
                               <input type="hidden" name="media_id" class="detail-image-id" value="<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
">
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
class Block_15383556885eec74ce90c7d2_69881023 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

             <form class="detail-form" id="detail-form" data-detail="<?php echo $_smarty_tpl->tpl_vars['blog']->value['id'];?>
" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/blog/save'),$_smarty_tpl ) );?>
" method="post" data-ajaxsend="true">
               <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20153830255eec74ce90e315_73442114', "form-content", $this->tplIndex);
?>

               <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['blog']->value['id'];?>
">
             </form>
           <?php
}
}
/* {/block "detail-form-container"} */
/* {block "container-content"} */
class Block_19106500345eec74ce8fd218_75195808 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container-content' => 
  array (
    0 => 'Block_19106500345eec74ce8fd218_75195808',
  ),
  'detail-form-container' => 
  array (
    0 => 'Block_15383556885eec74ce90c7d2_69881023',
  ),
  'form-content' => 
  array (
    0 => 'Block_20153830255eec74ce90e315_73442114',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="card">
      <div class="card-header text-uppercase">
        <div class="card-title float-left">
           <?php echo $_smarty_tpl->tpl_vars['blog']->value['id'];?>
: <?php echo $_smarty_tpl->tpl_vars['blog']->value['name'];?>

        </div>
        <div class="cart-buttons float-right button-group">
          <button type="button" form="detail-form" class="btn btn-success" name="save-detail"><i class="fa fa-save"></i> save</button>
          <?php if ($_smarty_tpl->tpl_vars['blog']->value) {?>
          <button type="button" data-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('backend/blog/delete?a=').($_smarty_tpl->tpl_vars['blog']->value['id'])),$_smarty_tpl ) );?>
" class="btn btn-danger" name="delete-detail"><i class="fa fa-trash"></i> delete</button>
          <?php }?>
          <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/blog/'),$_smarty_tpl ) );?>
" class="btn btn-info" ><i class="fa fa-undo"></i> back</a>
        </div>
      </div>
       <div class="card-body">
         <div class="detail-form-container">
           <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15383556885eec74ce90c7d2_69881023', "detail-form-container", $this->tplIndex);
?>

         </div>
       </div>
     </div>
<?php
}
}
/* {/block "container-content"} */
}
