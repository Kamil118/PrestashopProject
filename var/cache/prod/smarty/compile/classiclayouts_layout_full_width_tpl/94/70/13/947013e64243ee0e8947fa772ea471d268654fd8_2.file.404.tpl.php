<?php
<<<<<<< HEAD
/* Smarty version 3.1.39, created on 2021-10-31 15:32:24
=======
/* Smarty version 3.1.39, created on 2021-10-21 12:08:24
>>>>>>> origin/main
  from '/var/www/html/themes/classic/templates/errors/404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< HEAD
  'unifunc' => 'content_617ea8f835f899_56776041',
=======
  'unifunc' => 'content_61714a2899bbe3_07667614',
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
function content_617ea8f835f899_56776041 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_61714a2899bbe3_07667614 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> origin/main
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_287884490617ea8f8358958_67985709', "breadcrumb");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210036778961714a28992a43_16658836', "breadcrumb");
>>>>>>> origin/main
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80191141617ea8f8359490_44825657', 'page_title');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22533724161714a28993c31_74975803', 'page_title');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_776100980617ea8f835dfe2_23499403', 'page_content_container');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171293271761714a289993f6_81935519', 'page_content_container');
>>>>>>> origin/main
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block "breadcrumb"} */
<<<<<<< HEAD
class Block_287884490617ea8f8358958_67985709 extends Smarty_Internal_Block
=======
class Block_210036778961714a28992a43_16658836 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
<<<<<<< HEAD
    0 => 'Block_287884490617ea8f8358958_67985709',
=======
    0 => 'Block_210036778961714a28992a43_16658836',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "breadcrumb"} */
/* {block 'page_title'} */
<<<<<<< HEAD
class Block_80191141617ea8f8359490_44825657 extends Smarty_Internal_Block
=======
class Block_22533724161714a28993c31_74975803 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'page_title' => 
  array (
<<<<<<< HEAD
    0 => 'Block_80191141617ea8f8359490_44825657',
=======
    0 => 'Block_22533724161714a28993c31_74975803',
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
class Block_776100980617ea8f835dfe2_23499403 extends Smarty_Internal_Block
=======
class Block_171293271761714a289993f6_81935519 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'page_content_container' => 
  array (
<<<<<<< HEAD
    0 => 'Block_776100980617ea8f835dfe2_23499403',
=======
    0 => 'Block_171293271761714a289993f6_81935519',
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
