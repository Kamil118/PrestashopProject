<?php
<<<<<<< HEAD
/* Smarty version 3.1.39, created on 2021-10-31 16:37:19
=======
/* Smarty version 3.1.39, created on 2021-10-21 11:59:10
>>>>>>> origin/main
  from '/var/www/html/themes/classic/templates/_partials/form-errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< HEAD
  'unifunc' => 'content_617eb82f59d992_66983891',
=======
  'unifunc' => 'content_617147fe3416e7_08888372',
>>>>>>> origin/main
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3574d51aa4d725ea82c3fcecffbe95f803c8e5bf' => 
    array (
      0 => '/var/www/html/themes/classic/templates/_partials/form-errors.tpl',
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
function content_617eb82f59d992_66983891 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_617147fe3416e7_08888372 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> origin/main
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1505395257617eb82f59a019_33002218', 'form_errors');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1523914884617147fe33f6a0_40061729', 'form_errors');
>>>>>>> origin/main
?>

  </div>
<?php }
}
/* {block 'form_errors'} */
<<<<<<< HEAD
class Block_1505395257617eb82f59a019_33002218 extends Smarty_Internal_Block
=======
class Block_1523914884617147fe33f6a0_40061729 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'form_errors' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1505395257617eb82f59a019_33002218',
=======
    0 => 'Block_1523914884617147fe33f6a0_40061729',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
          <li class="alert alert-danger"><?php echo nl2br($_smarty_tpl->tpl_vars['error']->value);?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php
}
}
/* {/block 'form_errors'} */
}
