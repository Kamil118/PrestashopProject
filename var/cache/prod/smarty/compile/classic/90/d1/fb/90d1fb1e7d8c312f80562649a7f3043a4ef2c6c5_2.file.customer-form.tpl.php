<?php
<<<<<<< HEAD
/* Smarty version 3.1.39, created on 2021-10-31 16:37:19
=======
/* Smarty version 3.1.39, created on 2021-10-21 11:59:10
>>>>>>> origin/main
  from '/var/www/html/themes/classic/templates/checkout/_partials/customer-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< HEAD
  'unifunc' => 'content_617eb82f195d37_13843143',
=======
  'unifunc' => 'content_617147fe3303c4_93551043',
>>>>>>> origin/main
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90d1fb1e7d8c312f80562649a7f3043a4ef2c6c5' => 
    array (
      0 => '/var/www/html/themes/classic/templates/checkout/_partials/customer-form.tpl',
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
function content_617eb82f195d37_13843143 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_617147fe3303c4_93551043 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> origin/main
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_950622921617eb82f1911a7_40248946', "form_field");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_611446506617147fe32b716_40399697', "form_field");
>>>>>>> origin/main
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_924643195617eb82f194dc2_01376316', "form_buttons");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1489905303617147fe32f7a2_50555666', "form_buttons");
>>>>>>> origin/main
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "customer/_partials/customer-form.tpl");
}
/* {block "form_field"} */
<<<<<<< HEAD
class Block_950622921617eb82f1911a7_40248946 extends Smarty_Internal_Block
=======
class Block_611446506617147fe32b716_40399697 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'form_field' => 
  array (
<<<<<<< HEAD
    0 => 'Block_950622921617eb82f1911a7_40248946',
=======
    0 => 'Block_611446506617147fe32b716_40399697',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['field']->value['name'] === 'password' && $_smarty_tpl->tpl_vars['guest_allowed']->value) {?>
      <p class="form-informations">
        <span class="font-weight-bold form-informations-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create an account','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span> <span class="font-italic form-informations-option"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(optional)','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
        <br>
        <span class="text-muted form-informations-subtitle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'And save time on your next order!','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
      </p>
      <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

  <?php } else { ?>
    <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

  <?php }
}
}
/* {/block "form_field"} */
/* {block "form_buttons"} */
<<<<<<< HEAD
class Block_924643195617eb82f194dc2_01376316 extends Smarty_Internal_Block
=======
class Block_1489905303617147fe32f7a2_50555666 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'form_buttons' => 
  array (
<<<<<<< HEAD
    0 => 'Block_924643195617eb82f194dc2_01376316',
=======
    0 => 'Block_1489905303617147fe32f7a2_50555666',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <button
      class="continue btn btn-primary float-xs-right"
      name="continue"
      data-link-action="register-new-customer"
      type="submit"
      value="1"
    >
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

    </button>
<?php
}
}
/* {/block "form_buttons"} */
}
