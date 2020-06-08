<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-08 10:33:57
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\basics\translations.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edde9e5d38cb2_42115222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '365d517efdb055cd41c000b85d601154b7aa4eb6' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\basics\\translations.tpl',
      1 => 1591601634,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edde9e5d38cb2_42115222 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19580052455edde9e5d0a337_22523645', "container-content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8304962155edde9e5d28dd5_28941539', "modal-container");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13142028045edde9e5d33625_91706641', "js-container");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "backend/index/index.tpl");
}
/* {block "breadcrump"} */
class Block_15929838525edde9e5d0bc09_15554016 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="col-sm-9">
          <h4 class="page-title">Translations</h4>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Basic settings</a></li>
            <li class="breadcrumb-item active" aria-current="page">Translations</li>
          </ol>
        </div>
      <?php
}
}
/* {/block "breadcrump"} */
/* {block "buttons"} */
class Block_18100720065edde9e5d0d032_81891660 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="col-sm-3">
          <div class="btn-group float-sm-right">
            <button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Setting</button>
            <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
              <span class="caret"></span>
            </button>
            <div class="dropdown-menu">
              <a href="javaScript:void();" class="dropdown-item">
                <button type="button"
                        class="btn btn-success"
                        name="translator"
                        data-toggle="modal"
                        data-target=".translator-modal">
                  <span>NEW Translation</span>
                </button>
              </a>
            </div>
          </div>
        </div>
      <?php
}
}
/* {/block "buttons"} */
/* {block "table-list"} */
class Block_5846742115edde9e5d0b245_13503293 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row pt-2 pb-2">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15929838525edde9e5d0bc09_15554016', "breadcrump", $this->tplIndex);
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18100720065edde9e5d0d032_81891660', "buttons", $this->tplIndex);
?>

    </div>
  <?php
}
}
/* {/block "table-list"} */
/* {block "table-name"} */
class Block_13945372025edde9e5d0ec72_37719006 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="card-header"><i class="fa fa-table"></i> Translations</div>
        <?php
}
}
/* {/block "table-name"} */
/* {block "table-head"} */
class Block_14909289765edde9e5d0f961_80154379 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Selector</th>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                          <th><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['language']->value['short_code'];?>
</th>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <th>actions</th>
                    </tr>
                </thead>
              <?php
}
}
/* {/block "table-head"} */
/* {block "table-body"} */
class Block_16351570855edde9e5d1cd43_96864708 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <tbody>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['translations']->value['data'], 'translate', false, 'selector');
$_smarty_tpl->tpl_vars['translate']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['selector']->value => $_smarty_tpl->tpl_vars['translate']->value) {
$_smarty_tpl->tpl_vars['translate']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['translate']->value['id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['selector']->value;?>
</td>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                        <?php $_smarty_tpl->_assignInScope('lang', $_smarty_tpl->tpl_vars['language']->value['short_code']);?>
                        <td>
                          <div class="form-group row">
                            <div class="col-sm-12" >
                              <textarea readonly name="tranaslate[<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
]" form='<?php echo $_smarty_tpl->tpl_vars['selector']->value;?>
' class="form-control description" rows=5><?php echo $_smarty_tpl->tpl_vars['translate']->value[$_smarty_tpl->tpl_vars['lang']->value]['translate'];?>
</textarea>
                            </div>
                          </div>
                        </td>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <td>
                          <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/translations/save'),$_smarty_tpl ) );?>
" id='<?php echo $_smarty_tpl->tpl_vars['selector']->value;?>
' method="post">
                            <input type="hidden" name="selector" value="<?php echo $_smarty_tpl->tpl_vars['selector']->value;?>
">
                            <button type='submit' class="btn btn-info waves-effect waves-light m-1">save</button>
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
class Block_10621716445edde9e5d0e1d9_71884631 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13945372025edde9e5d0ec72_37719006', "table-name", $this->tplIndex);
?>

        <div class="card-body">
          <div class="table-responsive">
            <table id="default-datatable" class="table table-bordered">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14909289765edde9e5d0f961_80154379', "table-head", $this->tplIndex);
?>

              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16351570855edde9e5d1cd43_96864708', "table-body", $this->tplIndex);
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
        <?php echo $_smarty_tpl->tpl_vars['transitions']->value['pagination'];?>

      </div>
    </div>
  </div>

  <?php
}
}
/* {/block "table-block"} */
/* {block "container-content"} */
class Block_19580052455edde9e5d0a337_22523645 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container-content' => 
  array (
    0 => 'Block_19580052455edde9e5d0a337_22523645',
  ),
  'table-list' => 
  array (
    0 => 'Block_5846742115edde9e5d0b245_13503293',
  ),
  'breadcrump' => 
  array (
    0 => 'Block_15929838525edde9e5d0bc09_15554016',
  ),
  'buttons' => 
  array (
    0 => 'Block_18100720065edde9e5d0d032_81891660',
  ),
  'table-block' => 
  array (
    0 => 'Block_10621716445edde9e5d0e1d9_71884631',
  ),
  'table-name' => 
  array (
    0 => 'Block_13945372025edde9e5d0ec72_37719006',
  ),
  'table-head' => 
  array (
    0 => 'Block_14909289765edde9e5d0f961_80154379',
  ),
  'table-body' => 
  array (
    0 => 'Block_16351570855edde9e5d1cd43_96864708',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5846742115edde9e5d0b245_13503293', "table-list", $this->tplIndex);
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10621716445edde9e5d0e1d9_71884631', "table-block", $this->tplIndex);
?>

<?php
}
}
/* {/block "container-content"} */
/* {block "table-head"} */
class Block_19512097315edde9e5d2a169_03427862 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Selector</th>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                          <th><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['language']->value['short_code'];?>
</th>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <th>actions</th>
                    </tr>
                </thead>
              <?php
}
}
/* {/block "table-head"} */
/* {block "table-body"} */
class Block_14704006395edde9e5d2ce34_30975515 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <tbody>
                    <tr>
                        <td>ID</td>
                        <td><input type="text" name="selector" class="form-control" value=""></td>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                        <?php $_smarty_tpl->_assignInScope('lang', $_smarty_tpl->tpl_vars['language']->value['short_code']);?>
                        <td>
                          <div class="form-group row">
                            <div class="col-sm-12" >
                              <textarea name="tranaslate[<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
]" form='newTranslation' class="form-control" rows=5></textarea>
                            </div>
                          </div>
                        </td>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <td>
                          <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>'backend/translations/save'),$_smarty_tpl ) );?>
" id='newTranslation' method="post">
                            <button type='submit' class="btn btn-info waves-effect waves-light m-1">save</button>
                          </form>
                        </td>
                    </tr>
                </tbody>
              <?php
}
}
/* {/block "table-body"} */
/* {block "translator-modal"} */
class Block_14479469475edde9e5d29725_59508969 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="modal fade translator-modal">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">New Translation</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="table-responsive">
            <table class="table table-bordered">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19512097315edde9e5d2a169_03427862', "table-head", $this->tplIndex);
?>

              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14704006395edde9e5d2ce34_30975515', "table-body", $this->tplIndex);
?>

            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
}
}
/* {/block "translator-modal"} */
/* {block "modal-container"} */
class Block_8304962155edde9e5d28dd5_28941539 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modal-container' => 
  array (
    0 => 'Block_8304962155edde9e5d28dd5_28941539',
  ),
  'translator-modal' => 
  array (
    0 => 'Block_14479469475edde9e5d29725_59508969',
  ),
  'table-head' => 
  array (
    0 => 'Block_19512097315edde9e5d2a169_03427862',
  ),
  'table-body' => 
  array (
    0 => 'Block_14704006395edde9e5d2ce34_30975515',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14479469475edde9e5d29725_59508969', "translator-modal", $this->tplIndex);
?>

<?php
}
}
/* {/block "modal-container"} */
/* {block "js-container"} */
class Block_13142028045edde9e5d33625_91706641 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js-container' => 
  array (
    0 => 'Block_13142028045edde9e5d33625_91706641',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

  <!-- ckeditor -->
  <?php echo '<script'; ?>
 type="text/javascript">
    $('.description').dblclick(function (event) {
      event.stopImmediatePropagation();
      $(this).prop('readonly', false);
    })
    $(document).click(function(event) {
      if (!$(event.target).hasClass( "description" ) ) {
        $('.description').prop('readonly', true);
      }
    })
  <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js-container"} */
}
