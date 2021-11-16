<?php
/* Smarty version 3.1.39, created on 2021-10-31 15:22:24
  from '/var/www/html/admin_/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617ea6a06249d7_29717324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '535c18be8315c324420f353a3b4a08964a6bb556' => 
    array (
      0 => '/var/www/html/admin_/themes/new-theme/template/content.tpl',
      1 => 1633363913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617ea6a06249d7_29717324 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
