<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-18 17:05:40
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\users\detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f3be0348aebf8_61667413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f2a172cb8be349a13b7a5c306ff6996936ac0a1' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\users\\detail.tpl',
      1 => 1597759534,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3be0348aebf8_61667413 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20943648245f3be034885cc7_62002445', "container-content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "backend/orders/detail.tpl");
}
/* {block "user-detail-table-head"} */
class Block_19448254745f3be034899e13_49356915 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                           <thead>
                               <tr>
                                   <th>ID</th>
                                   <th>price</th>
                                   <th>delivery</th>
                                   <th>bonus_price</th>
                                   <th>total_price</th>
                                   <th>order_status</th>
                                   <th>delivery_status</th>
                                   <th>Action</th>
                               </tr>
                           </thead>
                         <?php
}
}
/* {/block "user-detail-table-head"} */
/* {block "user-detail-table-body"} */
class Block_14592469025f3be03489aea3_74722889 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                           <tbody>
                             <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value['orders']['data'], 'order');
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
?>
                               <tr>
                                   <td><?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
</td>
                                   <td><?php echo $_smarty_tpl->tpl_vars['order']->value['product_total'];?>
 <?php echo $_smarty_tpl->tpl_vars['currentCur']->value['symbol'];?>
</td>
                                   <td><?php echo $_smarty_tpl->tpl_vars['order']->value['delivery_price'];?>
 <?php echo $_smarty_tpl->tpl_vars['currentCur']->value['symbol'];?>
</td>
                                   <td><?php echo $_smarty_tpl->tpl_vars['order']->value['bonus_price'];?>
 <?php echo $_smarty_tpl->tpl_vars['currentCur']->value['symbol'];?>
</td>
                                   <td><?php echo $_smarty_tpl->tpl_vars['order']->value['total_price'];?>
 <?php echo $_smarty_tpl->tpl_vars['currentCur']->value['symbol'];?>
</td>
                                   <td><?php echo $_smarty_tpl->tpl_vars['order']->value['os_name'];?>
</td>
                                   <td><?php echo $_smarty_tpl->tpl_vars['order']->value['ds_name'];?>
</td>
                                   <td>
                                     <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('backend/orders/detail?o=').($_smarty_tpl->tpl_vars['order']->value['id'])),$_smarty_tpl ) );?>
" class="btn btn-info waves-effect detail-button waves-light m-1"><i class="fa fa-pencil"></i></a>
                                   </td>
                               </tr>
                             <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                           </tbody>
                         <?php
}
}
/* {/block "user-detail-table-body"} */
/* {block "form-content"} */
class Block_5498669915f3be034891bb3_75185934 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                 <div class="row">
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">Name</label>
                       <div class="col-sm-10">
                         <input type="text" name="name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>readonly<?php }?>>
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">lastname</label>
                       <div class="col-sm-10">
                         <input type="text" name="lastname" <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>readonly<?php }?> class="form-control" value=" <?php echo $_smarty_tpl->tpl_vars['user']->value['lastname'];?>
">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">email</label>
                       <div class="col-sm-10">
                         <input type="text" name="email" <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>readonly<?php }?> class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">phone</label>
                       <div class="col-sm-10">
                         <input type="text" name="phone" <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>readonly<?php }?> class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>
">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">specific_id</label>
                       <div class="col-sm-10">
                         <input type="text" name="specific_id" <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>readonly<?php }?> class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['specific_id'];?>
">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">guest</label>
                       <div class="col-sm-10">
                         <input type="text" name="guest" <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>readonly<?php }?> class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['guest'];?>
">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">confirmed</label>
                       <div class="col-sm-10">
                         <input type="text" name="confirmed" <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>readonly<?php }?> class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['confirmed'];?>
">
                       </div>
                     </div>
                   </div>
                   <div class="col-12 col-lg-6 col-xl-6">
                     <div class="form-group row">
                       <label class="col-sm-2 col-form-label">gender</label>
                       <div class="col-sm-10">
                         <input type="text" name="gender" <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>readonly<?php }?> class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['gender'];?>
">
                       </div>
                     </div>
                   </div>


                   <div class="col-12">
                     <div class="table-head">
                       <div class="table-title d-inline-block">
                         user orders
                       </div>
                     </div>
                     <div class="table-responsive">
                       <table id="default-datatable" class="table table-busered">
                         <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19448254745f3be034899e13_49356915', "user-detail-table-head", $this->tplIndex);
?>

                         <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14592469025f3be03489aea3_74722889', "user-detail-table-body", $this->tplIndex);
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
class Block_13216541285f3be034890235_35628365 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

             <form class="detail-form" id="detail-form" data-detail="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/users/save'),$_smarty_tpl ) );?>
" method="post" data-ajaxsend="true">
               <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5498669915f3be034891bb3_75185934', "form-content", $this->tplIndex);
?>

               <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">
             </form>
           <?php
}
}
/* {/block "detail-form-container"} */
/* {block "container-content"} */
class Block_20943648245f3be034885cc7_62002445 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container-content' => 
  array (
    0 => 'Block_20943648245f3be034885cc7_62002445',
  ),
  'detail-form-container' => 
  array (
    0 => 'Block_13216541285f3be034890235_35628365',
  ),
  'form-content' => 
  array (
    0 => 'Block_5498669915f3be034891bb3_75185934',
  ),
  'user-detail-table-head' => 
  array (
    0 => 'Block_19448254745f3be034899e13_49356915',
  ),
  'user-detail-table-body' => 
  array (
    0 => 'Block_14592469025f3be03489aea3_74722889',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="card">
      <div class="card-header text-uppercase">
        <div class="card-title float-left">
           <?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
: <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['lastname'];?>

        </div>
        <div class="cart-buttons float-right button-group">
          <button type="button" form="detail-form" class="btn btn-success" name="save-detail"><i class="fa fa-save"></i> save</button>
          <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
          <button type="button" data-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/users/delete'),$_smarty_tpl ) );?>
" data-name="o" data-id="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" class="btn btn-danger" name="delete-detail"><i class="fa fa-trash"></i> delete</button>
          <?php }?>
          <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/users/'),$_smarty_tpl ) );?>
" class="btn btn-info" ><i class="fa fa-undo"></i> back</a>
        </div>
      </div>
       <div class="card-body">
         <div class="detail-form-container">
           <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13216541285f3be034890235_35628365', "detail-form-container", $this->tplIndex);
?>

         </div>
       </div>
     </div>
<?php
}
}
/* {/block "container-content"} */
}
