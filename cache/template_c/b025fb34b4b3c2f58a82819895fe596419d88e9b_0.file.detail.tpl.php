<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-18 16:46:45
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\orders\detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eeb70451d1c80_79020447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b025fb34b4b3c2f58a82819895fe596419d88e9b' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\orders\\detail.tpl',
      1 => 1592487736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eeb70451d1c80_79020447 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3271246465eeb70451907d0_66257326', "css-container");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5068508675eeb7045193ab9_97718916', "container-content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13960696905eeb70451cfee8_55650547', "js-container");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "backend/orders/index.tpl");
}
/* {block "css-container"} */
class Block_3271246465eeb70451907d0_66257326 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css-container' => 
  array (
    0 => 'Block_3271246465eeb70451907d0_66257326',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet"/>
  <link href="assets/plugins/inputtags/css/bootstrap-tagsinput.css" rel="stylesheet" />
  <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php
}
}
/* {/block "css-container"} */
/* {block "order-detail-table-head"} */
class Block_12956695935eeb70451c4b02_14281051 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                           <thead>
                               <tr>
                                   <th>ID</th>
                                   <th>Name</th>
                                   <th>Price</th>
                                   <th>discount</th>
                                   <th>quantity</th>
                                   <th>total</th>
                                   <th>Action</th>
                               </tr>
                           </thead>
                         <?php
}
}
/* {/block "order-detail-table-head"} */
/* {block "order-detail-table-body"} */
class Block_11286815515eeb70451c5975_33134632 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                           <tbody>
                             <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order']->value['details'], 'article');
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>
                               <tr>
                                   <td><?php echo $_smarty_tpl->tpl_vars['article']->value['article_id'];?>
</td>
                                   <td><?php echo $_smarty_tpl->tpl_vars['article']->value['name'];?>
</td>
                                   <td><?php echo $_smarty_tpl->tpl_vars['article']->value['price'];?>
</td>
                                   <td><?php echo $_smarty_tpl->tpl_vars['article']->value['mainDetail']['discount'];?>
</td>
                                   <td><?php echo $_smarty_tpl->tpl_vars['article']->value['quantity'];?>
 <?php echo $_smarty_tpl->tpl_vars['article']->value['mainDetail']['unit_params']['name'];?>
</td>
                                   <td><?php echo $_smarty_tpl->tpl_vars['article']->value['total'];?>
</td>
                                   <td>
                                     <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('backend/orders/articleDetail?a=').($_smarty_tpl->tpl_vars['article']->value['id'])),$_smarty_tpl ) );?>
" class="btn btn-info waves-effect waves-light m-1"><i class="fa fa-pencil"></i></a>
                                     <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('backend/articles/deleteDetail?a=').($_smarty_tpl->tpl_vars['article']->value['id'])),$_smarty_tpl ) );?>
" class="btn btn-danger waves-effect waves-light m-1"><i class="fa fa-trash"></i></a>
                                   </td>
                               </tr>
                             <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                           </tbody>
                         <?php
}
}
/* {/block "order-detail-table-body"} */
/* {block "form-content"} */
class Block_10979217905eeb70451a4818_40927088 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                 <div class="row">
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">Name</label>
                       <div class="col-sm-10">
                         <input type="text" name="name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value['lastname'];?>
" <?php if ($_smarty_tpl->tpl_vars['order']->value) {?>disabled<?php }?>>
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">Price</label>
                       <div class="col-sm-10">
                         <input type="number" name="product_price" <?php if ($_smarty_tpl->tpl_vars['order']->value) {?>disabled<?php }?> class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['product_total'];?>
">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">Order number</label>
                       <div class="col-sm-10">
                         <input type="text" name="order_id" <?php if ($_smarty_tpl->tpl_vars['order']->value) {?>disabled<?php }?> class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">delivery price</label>
                       <div class="col-sm-10">
                         <input type="number" name="delivery_price" <?php if ($_smarty_tpl->tpl_vars['order']->value) {?>disabled<?php }?> class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['delivery_price'];?>
">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">payment Method</label>
                       <div class="col-sm-10">
                         <select class="form-control" name='payment_method' <?php if ($_smarty_tpl->tpl_vars['order']->value) {?>disabled<?php }?> >
                           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paymentMethods']->value, 'method');
$_smarty_tpl->tpl_vars['method']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['method']->value) {
$_smarty_tpl->tpl_vars['method']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['method']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['method']->value['id'] == $_smarty_tpl->tpl_vars['order']->value['payment_method']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['method']->value['name'];?>
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
                       <label class="col-sm-2 col-form-label">Total</label>
                       <div class="col-sm-10">
                         <input type="number" name='total_price' <?php if ($_smarty_tpl->tpl_vars['order']->value) {?>disabled<?php }?> class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['total_price'];?>
">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">buy date</label>
                       <div class="col-sm-10">
                         <input type="date" name='buy_date' <?php if ($_smarty_tpl->tpl_vars['order']->value) {?>disabled<?php }?> class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['buy_date'];?>
">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">delivery date</label>
                       <div class="col-sm-10">
                         <input type="date" name='delivery_date' class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['delivery_date'];?>
">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">order status</label>
                       <div class="col-sm-10">
                         <select class="form-control" name='order_status'>
                           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orderStatuses']->value, 'status');
$_smarty_tpl->tpl_vars['status']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['status']->value) {
$_smarty_tpl->tpl_vars['status']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['status']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['status']->value['id'] == $_smarty_tpl->tpl_vars['order']->value['order_status']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['status']->value['name'];?>
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
                       <label class="col-sm-2 col-form-label">delivery status</label>
                       <div class="col-sm-10">
                         <select class="form-control" name='delivery_status'>
                           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['deliveryStatuses']->value, 'status');
$_smarty_tpl->tpl_vars['status']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['status']->value) {
$_smarty_tpl->tpl_vars['status']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['status']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['status']->value['id'] == $_smarty_tpl->tpl_vars['order']->value['delivery_status']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['status']->value['name'];?>
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
                       <label class="col-sm-2 col-form-label">address</label>
                       <div class="col-sm-10">
                         <textarea name="name" readonly class="form-control"><?php echo $_smarty_tpl->tpl_vars['order']->value['address']['city_info']['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value['address']['address'];?>
</textarea>
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">notes</label>
                       <div class="col-sm-10">
                         <textarea name="name" readonly class="form-control"><?php echo $_smarty_tpl->tpl_vars['order']->value['address']['notes'];?>
</textarea>
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-12 col-xl-12">
                     <div class="form-group row">
                       <label class="col-sm-1 col-form-label">phone</label>
                       <div class="col-sm-11">
                         <input name="name" readonly class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['address']['phone'];?>
">
                       </div>
                     </div>
                   </div>
                   <div class="col-12">
                     <div class="table-head">
                       <div class="table-title d-inline-block">
                         ORDER DETAILS
                       </div>
                       <div class="button-group pull-right">
                         <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/orders/articleDetail'),$_smarty_tpl ) );?>
" class="btn btn-info waves-effect waves-light m-1"><i class="fa fa-plus"></i> NEW</a>
                       </div>
                     </div>
                     <div class="table-responsive">
                       <table id="default-datatable" class="table table-bordered">
                         <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12956695935eeb70451c4b02_14281051', "order-detail-table-head", $this->tplIndex);
?>

                         <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11286815515eeb70451c5975_33134632', "order-detail-table-body", $this->tplIndex);
?>

                       </table>
                     </div>
                   </div>
                 </div>
               <?php
}
}
/* {/block "form-content"} */
/* {block "detail-form-container"} */
class Block_8555204285eeb70451a2e13_10816484 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

             <form class="detail-form" id="detail-form" data-detail="<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/orders/save'),$_smarty_tpl ) );?>
" method="post" data-ajaxsend="true">
               <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10979217905eeb70451a4818_40927088', "form-content", $this->tplIndex);
?>

               <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
">
             </form>
           <?php
}
}
/* {/block "detail-form-container"} */
/* {block "container-content"} */
class Block_5068508675eeb7045193ab9_97718916 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container-content' => 
  array (
    0 => 'Block_5068508675eeb7045193ab9_97718916',
  ),
  'detail-form-container' => 
  array (
    0 => 'Block_8555204285eeb70451a2e13_10816484',
  ),
  'form-content' => 
  array (
    0 => 'Block_10979217905eeb70451a4818_40927088',
  ),
  'order-detail-table-head' => 
  array (
    0 => 'Block_12956695935eeb70451c4b02_14281051',
  ),
  'order-detail-table-body' => 
  array (
    0 => 'Block_11286815515eeb70451c5975_33134632',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="card">
      <div class="card-header text-uppercase">
        <div class="card-title float-left">
           <?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
: <?php echo $_smarty_tpl->tpl_vars['order']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value['lastname'];?>

        </div>
        <div class="cart-buttons float-right button-group">
          <button type="button" form="detail-form" class="btn btn-success" name="save-detail"><i class="fa fa-save"></i> save</button>
          <?php if ($_smarty_tpl->tpl_vars['order']->value) {?>
          <button type="button" data-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('backend/orders/delete?o=').($_smarty_tpl->tpl_vars['order']->value['id'])),$_smarty_tpl ) );?>
" class="btn btn-danger" name="delete-detail"><i class="fa fa-trash"></i> delete</button>
          <?php }?>
          <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/orders/'),$_smarty_tpl ) );?>
" class="btn btn-info" ><i class="fa fa-undo"></i> back</a>
        </div>
      </div>
       <div class="card-body">
         <div class="detail-form-container">
           <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8555204285eeb70451a2e13_10816484', "detail-form-container", $this->tplIndex);
?>

         </div>
       </div>
     </div>
<?php
}
}
/* {/block "container-content"} */
/* {block "js-container"} */
class Block_13960696905eeb70451cfee8_55650547 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js-container' => 
  array (
    0 => 'Block_13960696905eeb70451cfee8_55650547',
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
