<?php
<<<<<<< HEAD
/* Smarty version 3.1.39, created on 2021-10-31 15:21:44
=======
/* Smarty version 3.1.39, created on 2021-10-21 12:22:28
>>>>>>> origin/main
  from 'module:pssearchbarpssearchbar.tp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< HEAD
  'unifunc' => 'content_617ea6784b6b82_52160897',
=======
  'unifunc' => 'content_61714d74426e30_87726996',
>>>>>>> origin/main
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '110ec72aa9921d2c382ad628bdb2f0bc5105a617' => 
    array (
      0 => 'module:pssearchbarpssearchbar.tp',
<<<<<<< HEAD
      1 => 1624437321,
=======
      1 => 1634813142,
>>>>>>> origin/main
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_617ea6784b6b82_52160897 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_61714d74426e30_87726996 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> origin/main
?>
<div id="search_widget" class="search-widgets" data-search-controller-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
  <form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" name="controller" value="search">
    <i class="material-icons search" aria-hidden="true">search</i>
    <input type="text" name="s" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search our catalog','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
    <i class="material-icons clear" aria-hidden="true">clear</i>
  </form>
</div>
<?php }
}
