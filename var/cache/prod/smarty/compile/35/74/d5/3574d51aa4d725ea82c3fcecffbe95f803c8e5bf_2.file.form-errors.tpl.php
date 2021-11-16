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
  'unifunc' => 'content_617eb82f917807_32985735',
=======
  'unifunc' => 'content_617147fe387796_94744380',
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
function content_617eb82f917807_32985735 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_617147fe387796_94744380 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> origin/main
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_888647621617eb82f914860_96292806', 'form_errors');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_328158218617147fe385d37_26780879', 'form_errors');
>>>>>>> origin/main
?>

  </div>
<?php }
}
/* {block 'form_errors'} */
<<<<<<< HEAD
class Block_888647621617eb82f914860_96292806 extends Smarty_Internal_Block
=======
class Block_328158218617147fe385d37_26780879 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'form_errors' => 
  array (
<<<<<<< HEAD
    0 => 'Block_888647621617eb82f914860_96292806',
=======
    0 => 'Block_328158218617147fe385d37_26780879',
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
