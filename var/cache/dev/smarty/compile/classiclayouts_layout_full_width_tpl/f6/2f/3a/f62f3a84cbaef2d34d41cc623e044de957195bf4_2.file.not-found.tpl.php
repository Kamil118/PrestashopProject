<?php
<<<<<<< HEAD
/* Smarty version 3.1.39, created on 2021-10-31 16:29:34
=======
/* Smarty version 3.1.39, created on 2021-10-21 12:10:14
>>>>>>> origin/main
  from '/var/www/html/themes/classic/templates/errors/not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< HEAD
  'unifunc' => 'content_617eb65e2c1046_93886429',
=======
  'unifunc' => 'content_61714a962cf6e7_73218496',
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
function content_617eb65e2c1046_93886429 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_61714a962cf6e7_73218496 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> origin/main
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-not-found">
  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_349697406617eb65e2b8ef0_05171131', 'page_content');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105465969861714a962c8115_16216657', 'page_content');
>>>>>>> origin/main
?>

</section>
<?php }
/* {block "error_content"} */
<<<<<<< HEAD
class Block_1624428715617eb65e2b9980_85200591 extends Smarty_Internal_Block
=======
class Block_41319621261714a962c8976_14496969 extends Smarty_Internal_Block
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
class Block_589218219617eb65e2bcfa1_84482413 extends Smarty_Internal_Block
=======
class Block_6392143461714a962cc016_83641978 extends Smarty_Internal_Block
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
class Block_147992299617eb65e2be9f4_65357363 extends Smarty_Internal_Block
=======
class Block_170193382961714a962cda76_37470951 extends Smarty_Internal_Block
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
class Block_349697406617eb65e2b8ef0_05171131 extends Smarty_Internal_Block
=======
class Block_105465969861714a962c8115_16216657 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'page_content' => 
  array (
<<<<<<< HEAD
    0 => 'Block_349697406617eb65e2b8ef0_05171131',
  ),
  'error_content' => 
  array (
    0 => 'Block_1624428715617eb65e2b9980_85200591',
  ),
  'search' => 
  array (
    0 => 'Block_589218219617eb65e2bcfa1_84482413',
  ),
  'hook_not_found' => 
  array (
    0 => 'Block_147992299617eb65e2be9f4_65357363',
=======
    0 => 'Block_105465969861714a962c8115_16216657',
  ),
  'error_content' => 
  array (
    0 => 'Block_41319621261714a962c8976_14496969',
  ),
  'search' => 
  array (
    0 => 'Block_6392143461714a962cc016_83641978',
  ),
  'hook_not_found' => 
  array (
    0 => 'Block_170193382961714a962cda76_37470951',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1624428715617eb65e2b9980_85200591', "error_content", $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41319621261714a962c8976_14496969', "error_content", $this->tplIndex);
>>>>>>> origin/main
?>


    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_589218219617eb65e2bcfa1_84482413', 'search', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6392143461714a962cc016_83641978', 'search', $this->tplIndex);
>>>>>>> origin/main
?>


    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147992299617eb65e2be9f4_65357363', 'hook_not_found', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170193382961714a962cda76_37470951', 'hook_not_found', $this->tplIndex);
>>>>>>> origin/main
?>

  <?php
}
}
/* {/block 'page_content'} */
}
