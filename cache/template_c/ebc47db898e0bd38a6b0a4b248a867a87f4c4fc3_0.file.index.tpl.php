<?php
<<<<<<< HEAD
/* Smarty version 3.1.34-dev-7, created on 2020-06-19 19:49:43
=======
/* Smarty version 3.1.34-dev-7, created on 2020-06-18 16:19:59
>>>>>>> 9c528796045298e312d170bb87dc8efb900ca855
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\users\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
<<<<<<< HEAD
  'unifunc' => 'content_5eecde97b51905_67292929',
=======
  'unifunc' => 'content_5eeb69ff5f5676_82418912',
>>>>>>> 9c528796045298e312d170bb87dc8efb900ca855
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebc47db898e0bd38a6b0a4b248a867a87f4c4fc3' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\users\\index.tpl',
<<<<<<< HEAD
      1 => 1592581492,
=======
      1 => 1589271716,
>>>>>>> 9c528796045298e312d170bb87dc8efb900ca855
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:backend/users/table.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_5eecde97b51905_67292929 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5eeb69ff5f5676_82418912 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 9c528796045298e312d170bb87dc8efb900ca855
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10299968715eecde97b4a329_71458848', "container-content");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3584617845eeb69ff572f40_32353865', "container-content");
>>>>>>> 9c528796045298e312d170bb87dc8efb900ca855
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "backend/index/index.tpl");
}
/* {block "breadcrump"} */
<<<<<<< HEAD
class Block_17135134535eecde97b4b763_76901642 extends Smarty_Internal_Block
=======
class Block_8500885925eeb69ff5745e1_63552935 extends Smarty_Internal_Block
>>>>>>> 9c528796045298e312d170bb87dc8efb900ca855
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="col-sm-9">
          <h4 class="page-title">User Overview</h4>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Users</a></li>
            <li class="breadcrumb-item active" aria-current="page">Overview</li>
          </ol>
        </div>
      <?php
}
}
/* {/block "breadcrump"} */
/* {block "buttons"} */
<<<<<<< HEAD
class Block_12800781475eecde97b4c640_69562798 extends Smarty_Internal_Block
=======
class Block_4376491215eeb69ff5760d9_69653697 extends Smarty_Internal_Block
>>>>>>> 9c528796045298e312d170bb87dc8efb900ca855
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
              <a href="javaScript:void();" class="dropdown-item">Action</a>
              <a href="javaScript:void();" class="dropdown-item">Another action</a>
              <a href="javaScript:void();" class="dropdown-item">Something else here</a>
              <div class="dropdown-divider"></div>
              <a href="javaScript:void();" class="dropdown-item">Separated link</a>
            </div>
          </div>
        </div>
      <?php
}
}
/* {/block "buttons"} */
/* {block "table-list"} */
<<<<<<< HEAD
class Block_15761830335eecde97b4ae03_36349954 extends Smarty_Internal_Block
=======
class Block_18651812955eeb69ff573c27_02433627 extends Smarty_Internal_Block
>>>>>>> 9c528796045298e312d170bb87dc8efb900ca855
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row pt-2 pb-2">
      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17135134535eecde97b4b763_76901642', "breadcrump", $this->tplIndex);
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12800781475eecde97b4c640_69562798', "buttons", $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8500885925eeb69ff5745e1_63552935', "breadcrump", $this->tplIndex);
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4376491215eeb69ff5760d9_69653697', "buttons", $this->tplIndex);
>>>>>>> 9c528796045298e312d170bb87dc8efb900ca855
?>

    </div>
  <?php
}
}
/* {/block "table-list"} */
/* {block "table-block"} */
<<<<<<< HEAD
class Block_8231025565eecde97b4d7d0_03432958 extends Smarty_Internal_Block
=======
class Block_17677887615eeb69ff577328_90055039 extends Smarty_Internal_Block
>>>>>>> 9c528796045298e312d170bb87dc8efb900ca855
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<<<<<<< HEAD
    <div class="list-container" data-content='true'>
      <?php $_smarty_tpl->_subTemplateRender("file:backend/users/table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
=======
    <?php $_smarty_tpl->_subTemplateRender("file:backend/users/table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
>>>>>>> 9c528796045298e312d170bb87dc8efb900ca855
  <?php
}
}
/* {/block "table-block"} */
/* {block "container-content"} */
<<<<<<< HEAD
class Block_10299968715eecde97b4a329_71458848 extends Smarty_Internal_Block
=======
class Block_3584617845eeb69ff572f40_32353865 extends Smarty_Internal_Block
>>>>>>> 9c528796045298e312d170bb87dc8efb900ca855
{
public $subBlocks = array (
  'container-content' => 
  array (
<<<<<<< HEAD
    0 => 'Block_10299968715eecde97b4a329_71458848',
  ),
  'table-list' => 
  array (
    0 => 'Block_15761830335eecde97b4ae03_36349954',
  ),
  'breadcrump' => 
  array (
    0 => 'Block_17135134535eecde97b4b763_76901642',
  ),
  'buttons' => 
  array (
    0 => 'Block_12800781475eecde97b4c640_69562798',
  ),
  'table-block' => 
  array (
    0 => 'Block_8231025565eecde97b4d7d0_03432958',
=======
    0 => 'Block_3584617845eeb69ff572f40_32353865',
  ),
  'table-list' => 
  array (
    0 => 'Block_18651812955eeb69ff573c27_02433627',
  ),
  'breadcrump' => 
  array (
    0 => 'Block_8500885925eeb69ff5745e1_63552935',
  ),
  'buttons' => 
  array (
    0 => 'Block_4376491215eeb69ff5760d9_69653697',
  ),
  'table-block' => 
  array (
    0 => 'Block_17677887615eeb69ff577328_90055039',
>>>>>>> 9c528796045298e312d170bb87dc8efb900ca855
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15761830335eecde97b4ae03_36349954', "table-list", $this->tplIndex);
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8231025565eecde97b4d7d0_03432958', "table-block", $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18651812955eeb69ff573c27_02433627', "table-list", $this->tplIndex);
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17677887615eeb69ff577328_90055039', "table-block", $this->tplIndex);
>>>>>>> 9c528796045298e312d170bb87dc8efb900ca855
?>

<?php
}
}
/* {/block "container-content"} */
}
