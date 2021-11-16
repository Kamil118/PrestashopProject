<?php
<<<<<<< HEAD
/* Smarty version 3.1.39, created on 2021-10-31 16:29:34
=======
/* Smarty version 3.1.39, created on 2021-10-21 12:10:14
>>>>>>> origin/main
  from '/var/www/html/themes/classic/templates/errors/404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< HEAD
  'unifunc' => 'content_617eb65e16c788_08484696',
=======
  'unifunc' => 'content_61714a960533b5_84544439',
>>>>>>> origin/main
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '947013e64243ee0e8947fa772ea471d268654fd8' => 
    array (
      0 => '/var/www/html/themes/classic/templates/errors/404.tpl',
<<<<<<< HEAD
      1 => 1633363913,
=======
      1 => 1634813142,
>>>>>>> origin/main
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_617eb65e16c788_08484696 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_61714a960533b5_84544439 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> origin/main
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_388210416617eb65e165b51_87832004', "breadcrumb");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186921132561714a9604d606_54411208', "breadcrumb");
>>>>>>> origin/main
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211333025617eb65e1667f9_49564291', 'page_title');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128175294761714a9604e4d9_78348327', 'page_title');
>>>>>>> origin/main
?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "errorContent", null);?>
  <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products available yet','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h4>
  <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Stay tuned! More products will be shown here as they are added.','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1774453856617eb65e16aaa1_70050060', 'page_content_container');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147288563461714a96051ff3_07396331', 'page_content_container');
>>>>>>> origin/main
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block "breadcrumb"} */
<<<<<<< HEAD
class Block_388210416617eb65e165b51_87832004 extends Smarty_Internal_Block
=======
class Block_186921132561714a9604d606_54411208 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
<<<<<<< HEAD
    0 => 'Block_388210416617eb65e165b51_87832004',
=======
    0 => 'Block_186921132561714a9604d606_54411208',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "breadcrumb"} */
/* {block 'page_title'} */
<<<<<<< HEAD
class Block_211333025617eb65e1667f9_49564291 extends Smarty_Internal_Block
=======
class Block_128175294761714a9604e4d9_78348327 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'page_title' => 
  array (
<<<<<<< HEAD
    0 => 'Block_211333025617eb65e1667f9_49564291',
=======
    0 => 'Block_128175294761714a9604e4d9_78348327',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['title'], ENT_QUOTES, 'UTF-8');?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content_container'} */
<<<<<<< HEAD
class Block_1774453856617eb65e16aaa1_70050060 extends Smarty_Internal_Block
=======
class Block_147288563461714a96051ff3_07396331 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'page_content_container' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1774453856617eb65e16aaa1_70050060',
=======
    0 => 'Block_147288563461714a96051ff3_07396331',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errorContent'=>$_smarty_tpl->tpl_vars['errorContent']->value), 0, false);
}
}
/* {/block 'page_content_container'} */
}
