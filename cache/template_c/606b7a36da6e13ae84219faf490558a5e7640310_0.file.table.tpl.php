<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-28 17:42:56
  from 'C:\Users\User\OSPanel\domains\torq\public\backend\reviews\table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4917f08fbfc1_87814368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '606b7a36da6e13ae84219faf490558a5e7640310' => 
    array (
      0 => 'C:\\Users\\User\\OSPanel\\domains\\torq\\public\\backend\\reviews\\table.tpl',
      1 => 1598625253,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4917f08fbfc1_87814368 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="list-group list-group-flush">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reviews']->value['data'], 'review', false, 'key');
$_smarty_tpl->tpl_vars['review']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['review']->value) {
$_smarty_tpl->tpl_vars['review']->do_else = false;
?>
    <li class="list-group-item bg-transparent">
      <div class="media align-items-center">
        <img src="<?php echo $_smarty_tpl->tpl_vars['review']->value['product']['images'][0]['thumbnails'][0]['thumb_path'];?>
|" alt="user avatar" class="customer-img rounded-circle">
        <div class="media-body ml-3">
          <h6 class="mb-0"><?php echo $_smarty_tpl->tpl_vars['review']->value['product']['name'];?>
<small class="ml-4"><?php echo $_smarty_tpl->tpl_vars['review']->value['added_in'];?>
</small></h6>
          <div class=" d-flex justify-content-between mr-3">
            <p class="mb-0 small-font"><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>("backend/users/detail?u=").($_smarty_tpl->tpl_vars['review']->value['user_id'])),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['review']->value['user']['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['review']->value['user']['lastname'];?>
</a>: <?php echo $_smarty_tpl->tpl_vars['review']->value['comment'];?>
</p>
            <?php if ($_smarty_tpl->tpl_vars['review']->value['active'] == 0) {?>
              <form class="form-group" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('url'=>"backend/reviews/save"),$_smarty_tpl ) );?>
" data-ajaxsend="true" method="post">
                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['review']->value['id'];?>
">
                <input type="hidden" name="comment" value="<?php echo $_smarty_tpl->tpl_vars['review']->value['comment'];?>
">
                <input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['review']->value['user_id'];?>
">
                <input type="hidden" name="rating" value="<?php echo $_smarty_tpl->tpl_vars['review']->value['rating_count'];?>
">
                <input type="hidden" name="article_id" value="<?php echo $_smarty_tpl->tpl_vars['review']->value['article_id'];?>
">
                <input type="hidden" name="active" value="1">
                <button type="submit" class="btn btn-success" name="button">Submit</button>
              </form>
            <?php }?>
          </div>
        </div>
        <div class="star">
          <?php $_smarty_tpl->_assignInScope('lightStarsCount', 5-$_smarty_tpl->tpl_vars['review']->value['rating_count']);?>
          <?php echo str_repeat('<i class="zmdi zmdi-star"></i>',$_smarty_tpl->tpl_vars['review']->value['rating_count']);?>

          <?php echo str_repeat('<i class="zmdi zmdi-star text-light"></i>',$_smarty_tpl->tpl_vars['lightStarsCount']->value);?>

        </div>
      </div>
    </li>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
 </ul>
<?php }
}
