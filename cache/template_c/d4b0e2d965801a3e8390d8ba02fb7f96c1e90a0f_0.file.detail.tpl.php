<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-09 11:58:33
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\emotions\detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f06ce29c985b8_62856293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4b0e2d965801a3e8390d8ba02fb7f96c1e90a0f' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\emotions\\detail.tpl',
      1 => 1594281511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:backend/emotions/components.tpl' => 1,
  ),
),false)) {
function content_5f06ce29c985b8_62856293 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13388972975f06ce29c75c20_83911511', "css-container");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6767406335f06ce29c78836_42737746', "container-content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14451646675f06ce29c924c5_99084266', "modal-container");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10347827945f06ce29c963f0_65461359', "js-container");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "backend/index/index.tpl");
}
/* {block "css-container"} */
class Block_13388972975f06ce29c75c20_83911511 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css-container' => 
  array (
    0 => 'Block_13388972975f06ce29c75c20_83911511',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet"/>
  <link href="assets/plugins/inputtags/css/bootstrap-tagsinput.css" rel="stylesheet" />
  <link href="assets/plugins/switchery/css/switchery.min.css" rel="stylesheet">
  <!-- Dropzone css -->
  <link href="assets/plugins/dropzone/css/dropzone.css" rel="stylesheet" type="text/css">
  <!--multi select-->
  <link href="assets/plugins/jquery-multi-select/multi-select.css" rel="stylesheet" type="text/css">
  <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php
}
}
/* {/block "css-container"} */
/* {block "breadcrump"} */
class Block_17579451395f06ce29c798d6_54927782 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="col-sm-9">
          <h4 class="page-title">Emotions</h4>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Emotions</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail</li>
          </ol>
        </div>
      <?php
}
}
/* {/block "breadcrump"} */
/* {block "buttons"} */
class Block_15703333555f06ce29c7a551_85372934 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


      <?php
}
}
/* {/block "buttons"} */
/* {block "table-list"} */
class Block_863813685f06ce29c790b2_17365137 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row pt-2 pb-2">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17579451395f06ce29c798d6_54927782', "breadcrump", $this->tplIndex);
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15703333555f06ce29c7a551_85372934', "buttons", $this->tplIndex);
?>

    </div>
  <?php
}
}
/* {/block "table-list"} */
/* {block "emotion-content"} */
class Block_20721582475f06ce29c7b3f7_79723362 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="row">
    <div class="col-md-4 col-sm-6">
      <div class="card">
       <div class="card-header text-uppercase">
         <div class="card-title d-inline"><?php echo $_smarty_tpl->tpl_vars['emotion']->value['name'];?>
</div>
       </div>
       <div class="card-body">
         <div class="">
           <form class="emotion-detail" id="detail-form" data-ajaxsend=true action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/emotions/save'),$_smarty_tpl ) );?>
" method="post">
             <?php if ($_smarty_tpl->tpl_vars['emotion']->value) {?>
               <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['emotion']->value['id'];?>
">
             <?php }?>
             <div class="row">
               <div class="col-12">
                 <div class="form-group row">
                   <label class="col-12 col-form-label">name</label>
                   <div class="col-12">
                     <input type="text" name="name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['emotion']->value['name'];?>
">
                   </div>
                 </div>
               </div>
               <div class="col-12">
                 <div class="form-group row">
                   <label class="col-12 col-form-label">row height</label>
                   <div class="col-12">
                     <input type="number" name="row_height" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['emotion']->value['row_height'];?>
">
                   </div>
                 </div>
               </div>
               <div class="col-4">
                 <div class="form-group row">
                   <label class="col-12 col-form-label">Activity</label>
                   <div class="col-12">
                     <input type="checkbox" name="active" class="js-switch" data-color="#14abef" <?php if ($_smarty_tpl->tpl_vars['emotion']->value['active']) {?>checked<?php }?>>
                   </div>
                 </div>
               </div>
               <div class="col-4">
                 <div class="form-group row">
                   <label class="col-12 col-form-label">full screen</label>
                   <div class="col-12">
                     <input type="checkbox" name="full_screen" class="js-switch" data-color="#14abef" <?php if ($_smarty_tpl->tpl_vars['emotion']->value['full_screen']) {?>checked<?php }?>>
                   </div>
                 </div>
               </div>
               <div class="col-12">
                 <div class="form-group row">
                   <label class="col-12 col-form-label">Class List (with prabel)</label>
                   <div class="col-12">
                     <input type="text" name="class" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['emotion']->value['class'];?>
">
                   </div>
                 </div>
               </div>
               <div class="col-12">
                 <div class="form-group row">
                   <label class="col-12 col-form-label">Sort id</label>
                   <div class="col-12">
                     <input type="number" name="sort_id" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['emotion']->value['sort_id'];?>
">
                   </div>
                 </div>
               </div>
               <div class="col-12">
                 <div class="form-group row">
                   <label class="col-12 col-form-label">actions</label>
                   <div class="col-12">
                     <button type="submit" class="btn btn-success" name="save-detail">Save</button>
                     <button type="button" data-deleteDetail="true" class="btn btn-danger pull-right" name="delete-detail">Delete</button>
                   </div>
                 </div>
               </div>
             </div>
           </form>
         </div>
       </div>
      </div>
    </div>
    <div class="col-md-8 col-sm-6">
      <div class="card">
        <div class="card-header text-uppercase">
          <div class="card-title d-inline">Components</div>
        </div>
        <div class="card-body" data-content='true'>
          <?php $_smarty_tpl->_subTemplateRender("file:backend/emotions/components.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
		  </div>
    </div>
  </div>
  <?php
}
}
/* {/block "emotion-content"} */
/* {block "container-content"} */
class Block_6767406335f06ce29c78836_42737746 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container-content' => 
  array (
    0 => 'Block_6767406335f06ce29c78836_42737746',
  ),
  'table-list' => 
  array (
    0 => 'Block_863813685f06ce29c790b2_17365137',
  ),
  'breadcrump' => 
  array (
    0 => 'Block_17579451395f06ce29c798d6_54927782',
  ),
  'buttons' => 
  array (
    0 => 'Block_15703333555f06ce29c7a551_85372934',
  ),
  'emotion-content' => 
  array (
    0 => 'Block_20721582475f06ce29c7b3f7_79723362',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_863813685f06ce29c790b2_17365137', "table-list", $this->tplIndex);
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20721582475f06ce29c7b3f7_79723362', "emotion-content", $this->tplIndex);
?>

<?php
}
}
/* {/block "container-content"} */
/* {block "gallery-modal"} */
class Block_18879056125f06ce29c92e09_26889418 extends Smarty_Internal_Block
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
/* {block "component-modal"} */
class Block_20405386185f06ce29c945c2_81435889 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="modal fade component-modal">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Component</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="contaiener" data-content="true" data-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/emotions/componentDetail'),$_smarty_tpl ) );?>
">

          </div>
        </div>
        <div class="modal-footer">
          <form class="addImage" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>"backend/emotions/componentsave"),$_smarty_tpl ) );?>
" data-ajaxsend='true' id="component-form" method="post">
            <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php
}
}
/* {/block "component-modal"} */
/* {block "modal-container"} */
class Block_14451646675f06ce29c924c5_99084266 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modal-container' => 
  array (
    0 => 'Block_14451646675f06ce29c924c5_99084266',
  ),
  'gallery-modal' => 
  array (
    0 => 'Block_18879056125f06ce29c92e09_26889418',
  ),
  'component-modal' => 
  array (
    0 => 'Block_20405386185f06ce29c945c2_81435889',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18879056125f06ce29c92e09_26889418', "gallery-modal", $this->tplIndex);
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20405386185f06ce29c945c2_81435889', "component-modal", $this->tplIndex);
?>

<?php
}
}
/* {/block "modal-container"} */
/* {block "js-container"} */
class Block_10347827945f06ce29c963f0_65461359 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js-container' => 
  array (
    0 => 'Block_10347827945f06ce29c963f0_65461359',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

  <!--Multi Select Js-->
  <?php echo '<script'; ?>
 src="assets/plugins/jquery-multi-select/jquery.multi-select.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="assets/plugins/jquery-multi-select/jquery.quicksearch.js"><?php echo '</script'; ?>
>
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
  <!--emotion Js-->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_BACKEND']->value;?>
assets/js/jquery.categories.js"><?php echo '</script'; ?>
>
  <!--Emotions Js-->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_BACKEND']->value;?>
assets/js/jquery.emotions.js"><?php echo '</script'; ?>
>
  <!--Switchery Js-->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_BACKEND']->value;?>
assets/plugins/switchery/js/switchery.min.js"><?php echo '</script'; ?>
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
