<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-22 19:06:26
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\advertisings\table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef0c8f2160b89_55470010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2b2106833a7554fd8b64a2475acb63a3ebb12c6' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\advertisings\\table.tpl',
      1 => 1592838379,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef0c8f2160b89_55470010 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20670850985ef0c8f213f926_04955923', "table-name");
?>

      <div class="card-body">
        <div class="table-responsive">
          <table id="default-datatable" class="table table-bordered">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11302753315ef0c8f21414a1_30211479', "table-head");
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10504183015ef0c8f21422d4_04273810', "table-body");
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
      <?php echo $_smarty_tpl->tpl_vars['advertisings']->value['pagination'];?>

    </div>
  </div>
</div>
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "backend/articles/table.tpl");
}
/* {block "table-name"} */
class Block_20670850985ef0c8f213f926_04955923 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'table-name' => 
  array (
    0 => 'Block_20670850985ef0c8f213f926_04955923',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="card-header"><i class="fa fa-table"></i> Article List</div>
      <?php
}
}
/* {/block "table-name"} */
/* {block "table-head"} */
class Block_11302753315ef0c8f21414a1_30211479 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'table-head' => 
  array (
    0 => 'Block_11302753315ef0c8f21414a1_30211479',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>description</th>
                      <th>url</th>
                      <th>Action</th>
                  </tr>
              </thead>
            <?php
}
}
/* {/block "table-head"} */
/* {block "table-body"} */
class Block_10504183015ef0c8f21422d4_04273810 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'table-body' => 
  array (
    0 => 'Block_10504183015ef0c8f21422d4_04273810',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\User\\OSPanel\\domains\\torq\\engine\\Library\\smarty-master\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>

              <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['advertisings']->value['data'], 'advertising');
$_smarty_tpl->tpl_vars['advertising']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['advertising']->value) {
$_smarty_tpl->tpl_vars['advertising']->do_else = false;
?>
                  <tr>
                      <td><?php echo $_smarty_tpl->tpl_vars['advertising']->value['id'];?>
</td>
                      <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['advertising']->value['name']);?>
</td>
                      <td><?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['advertising']->value['description']), ENT_QUOTES, 'UTF-8', true);?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['advertising']->value['url'];?>
</td>
                      <td>
                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('backend/advertisings/detail?advertising=').($_smarty_tpl->tpl_vars['advertising']->value['id'])),$_smarty_tpl ) );?>
" class="btn btn-info waves-effect waves-light m-1"><i class="fa fa-pencil"></i></a>
                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>('backend/advertisings/delete?advertising=').($_smarty_tpl->tpl_vars['advertising']->value['id'])),$_smarty_tpl ) );?>
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
/* {/block "table-body"} */
}
