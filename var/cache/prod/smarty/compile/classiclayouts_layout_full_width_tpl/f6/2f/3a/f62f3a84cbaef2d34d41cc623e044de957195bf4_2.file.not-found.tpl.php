<?php
<<<<<<< HEAD
/* Smarty version 3.1.39, created on 2021-10-31 15:32:24
=======
/* Smarty version 3.1.39, created on 2021-10-21 12:08:24
>>>>>>> origin/main
  from '/var/www/html/themes/classic/templates/errors/not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< HEAD
  'unifunc' => 'content_617ea8f8409438_86010577',
=======
  'unifunc' => 'content_61714a28af8132_34940091',
>>>>>>> origin/main
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f62f3a84cbaef2d34d41cc623e044de957195bf4' => 
    array (
      0 => '/var/www/html/themes/classic/templates/errors/not-found.tpl',
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
  ),
),false)) {
<<<<<<< HEAD
function content_617ea8f8409438_86010577 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_61714a28af8132_34940091 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> origin/main
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-not-found">
  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2003891808617ea8f8403d77_95065102', 'page_content');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152455646061714a28af22c8_70916046', 'page_content');
>>>>>>> origin/main
?>

</section>
<?php }
/* {block "error_content"} */
<<<<<<< HEAD
class Block_1768760832617ea8f84044f8_80082374 extends Smarty_Internal_Block
=======
class Block_210259393661714a28af2b60_64183466 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ((isset($_smarty_tpl->tpl_vars['errorContent']->value))) {?>
        <?php echo $_smarty_tpl->tpl_vars['errorContent']->value;?>

      <?php } else { ?>
        <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This page could not be found','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Try to search our catalog, you may find what you are looking for!','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>
      <?php }?>
    <?php
}
}
/* {/block "error_content"} */
/* {block 'search'} */
<<<<<<< HEAD
class Block_482845380617ea8f84073e0_63202932 extends Smarty_Internal_Block
=======
class Block_169256075161714a28af5dd0_84118572 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'search'} */
/* {block 'hook_not_found'} */
<<<<<<< HEAD
class Block_63368158617ea8f8408688_92725929 extends Smarty_Internal_Block
=======
class Block_146512379861714a28af6fa0_42167733 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_not_found'} */
/* {block 'page_content'} */
<<<<<<< HEAD
class Block_2003891808617ea8f8403d77_95065102 extends Smarty_Internal_Block
=======
class Block_152455646061714a28af22c8_70916046 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'page_content' => 
  array (
<<<<<<< HEAD
    0 => 'Block_2003891808617ea8f8403d77_95065102',
  ),
  'error_content' => 
  array (
    0 => 'Block_1768760832617ea8f84044f8_80082374',
  ),
  'search' => 
  array (
    0 => 'Block_482845380617ea8f84073e0_63202932',
  ),
  'hook_not_found' => 
  array (
    0 => 'Block_63368158617ea8f8408688_92725929',
=======
    0 => 'Block_152455646061714a28af22c8_70916046',
  ),
  'error_content' => 
  array (
    0 => 'Block_210259393661714a28af2b60_64183466',
  ),
  'search' => 
  array (
    0 => 'Block_169256075161714a28af5dd0_84118572',
  ),
  'hook_not_found' => 
  array (
    0 => 'Block_146512379861714a28af6fa0_42167733',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1768760832617ea8f84044f8_80082374', "error_content", $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210259393661714a28af2b60_64183466', "error_content", $this->tplIndex);
>>>>>>> origin/main
?>


    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_482845380617ea8f84073e0_63202932', 'search', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169256075161714a28af5dd0_84118572', 'search', $this->tplIndex);
>>>>>>> origin/main
?>


    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63368158617ea8f8408688_92725929', 'hook_not_found', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146512379861714a28af6fa0_42167733', 'hook_not_found', $this->tplIndex);
>>>>>>> origin/main
?>

  <?php
}
}
/* {/block 'page_content'} */
}
