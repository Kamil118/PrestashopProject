<?php
/* Smarty version 3.1.39, created on 2021-10-31 16:36:39
  from '/var/www/html/themes/classic/templates/catalog/listing/search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617eb80720ff04_45824460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6147d384489739d61db5dc9ffee0943220b152d6' => 
    array (
      0 => '/var/www/html/themes/classic/templates/catalog/listing/search.tpl',
      1 => 1633363913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617eb80720ff04_45824460 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_460436892617eb80720c9d6_77636052', "error_content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block "error_content"} */
class Block_460436892617eb80720c9d6_77636052 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'error_content' => 
  array (
    0 => 'Block_460436892617eb80720c9d6_77636052',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No matches were found for your search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h4>
  <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please try other keywords to describe what you are looking for.','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
<?php
}
}
/* {/block "error_content"} */
}
