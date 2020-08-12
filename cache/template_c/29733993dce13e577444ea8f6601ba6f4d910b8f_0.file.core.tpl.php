<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-11 18:31:25
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\basics\core.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f32b9cdd7e4a9_91341632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29733993dce13e577444ea8f6601ba6f4d910b8f' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\basics\\core.tpl',
      1 => 1597144976,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f32b9cdd7e4a9_91341632 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16937310215f32b9cd996903_24047989', "container-content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12906476975f32b9cdd0f4f9_70218898', "modal-container");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9317530805f32b9cdd119e8_34695077', "js-container");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "backend/index/index.tpl");
}
/* {block "breadcrump"} */
class Block_16833126545f32b9cd997be5_43883113 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="col-sm-9">
      <h4 class="page-title">Core</h4>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">Basic settings</a></li>
        <li class="breadcrumb-item active" aria-current="page">Core</li>
      </ol>
    </div>
  <?php
}
}
/* {/block "breadcrump"} */
/* {block "table-name"} */
class Block_17809681945f32b9cd9997b0_34652558 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="card-header"><i class="fa fa-table"></i> Translations</div>
        <?php
}
}
/* {/block "table-name"} */
/* {block "table-head"} */
class Block_20697531225f32b9cd99a397_57758146 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>name</th>
                        <th>description</th>
                        <th>value</th>
                        <th>actions</th>
                    </tr>
                </thead>
              <?php
}
}
/* {/block "table-head"} */
/* {block "table-body"} */
class Block_20109730145f32b9cd99af26_70703404 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <tbody>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value['data'], 'item', false, 'id');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <tr>
                        <td>
                          <div class="form-group row">
                            <div class="col-sm-12" >
                              <?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>

                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="form-group row">
                            <div class="col-sm-12" >
                              <input type="text" form="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" readonly name="name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
">
                            </div>
                          </div>
                        </td>

                        <td class="table-description">
                          <div class="form-group row">
                            <div class="col-sm-12">
                              <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['item']->value['description'], ENT_QUOTES);?>

                              <input type="hidden" form="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="description" value="<?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['item']->value['description'], ENT_QUOTES);?>
">
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="form-group row">
                            <div class="col-sm-12" >
                              <?php $_smarty_tpl->_assignInScope('path', (("backend/basics/coreItems/").($_smarty_tpl->tpl_vars['item']->value['content_type'])).(".tpl"));?>
                              <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['path']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                            </div>
                          </div>
                        </td>
                        <td>
                          <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/core/save'),$_smarty_tpl ) );?>
" id='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
' method="post" data-ajaxsend='true'>
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                            <input type="hidden" name="content_type" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['content_type'];?>
">
                            <button type='submit' class="btn btn-success waves-effect waves-light m-1">save</button>
                          </form>
                        </td>
                    </tr>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
              <?php
}
}
/* {/block "table-body"} */
/* {block "table-block"} */
class Block_16866236925f32b9cd998f21_15547344 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="row w-100">
    <div class="col-lg-12">
      <div class="card">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17809681945f32b9cd9997b0_34652558', "table-name", $this->tplIndex);
?>

        <div class="card-body">
          <div class="table-responsive">
            <table id="default-datatable" class="table table-bordered">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20697531225f32b9cd99a397_57758146', "table-head", $this->tplIndex);
?>

              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20109730145f32b9cd99af26_70703404', "table-body", $this->tplIndex);
?>

            </table>
          </div>
        </div>
      </div>
    </div>
  </div><!-- End Row-->
  <div class="row">
    <div class="col-sm-12 col-md-7">
      <div class="dataTables_paginate paging_simple_numbers" id="default-datatable_paginate">
        <?php echo $_smarty_tpl->tpl_vars['items']->value['pagination'];?>

      </div>
    </div>
  </div>
  <?php
}
}
/* {/block "table-block"} */
/* {block "container-content"} */
class Block_16937310215f32b9cd996903_24047989 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container-content' => 
  array (
    0 => 'Block_16937310215f32b9cd996903_24047989',
  ),
  'breadcrump' => 
  array (
    0 => 'Block_16833126545f32b9cd997be5_43883113',
  ),
  'table-block' => 
  array (
    0 => 'Block_16866236925f32b9cd998f21_15547344',
  ),
  'table-name' => 
  array (
    0 => 'Block_17809681945f32b9cd9997b0_34652558',
  ),
  'table-head' => 
  array (
    0 => 'Block_20697531225f32b9cd99a397_57758146',
  ),
  'table-body' => 
  array (
    0 => 'Block_20109730145f32b9cd99af26_70703404',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row pt-2 pb-2">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16833126545f32b9cd997be5_43883113', "breadcrump", $this->tplIndex);
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16866236925f32b9cd998f21_15547344', "table-block", $this->tplIndex);
?>

</div>
<?php
}
}
/* {/block "container-content"} */
/* {block "gallery-modal"} */
class Block_5353032315f32b9cdd0fd96_65510830 extends Smarty_Internal_Block
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
/* {block "modal-container"} */
class Block_12906476975f32b9cdd0f4f9_70218898 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modal-container' => 
  array (
    0 => 'Block_12906476975f32b9cdd0f4f9_70218898',
  ),
  'gallery-modal' => 
  array (
    0 => 'Block_5353032315f32b9cdd0fd96_65510830',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5353032315f32b9cdd0fd96_65510830', "gallery-modal", $this->tplIndex);
?>


<?php
}
}
/* {/block "modal-container"} */
/* {block "js-container"} */
class Block_9317530805f32b9cdd119e8_34695077 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js-container' => 
  array (
    0 => 'Block_9317530805f32b9cdd119e8_34695077',
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
<!--Category Js-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_BACKEND']->value;?>
assets/js/jquery.categories.js"><?php echo '</script'; ?>
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

<?php echo '<script'; ?>
 type="text/javascript">
  $.subscribe('detail/gallery/imageAdded', function (plugin) {
    $('.detail-image-id-static').val($('.detail-image-id').val());
  })
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js-container"} */
}
