<?php
<<<<<<< HEAD
/* Smarty version 3.1.39, created on 2021-10-31 16:37:19
=======
/* Smarty version 3.1.39, created on 2021-10-21 11:59:10
>>>>>>> origin/main
  from '/var/www/html/themes/classic/templates/checkout/_partials/login-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< HEAD
  'unifunc' => 'content_617eb82f93b290_01263106',
=======
  'unifunc' => 'content_617147fe3aa657_01991492',
>>>>>>> origin/main
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc9c3be80588f979676c8b571da1497d83e007e3' => 
    array (
      0 => '/var/www/html/themes/classic/templates/checkout/_partials/login-form.tpl',
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
function content_617eb82f93b290_01263106 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_617147fe3aa657_01991492 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> origin/main
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1422839758617eb82f93a4e6_05065234', 'form_buttons');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1914439942617147fe3a9945_54987578', 'form_buttons');
>>>>>>> origin/main
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/_partials/login-form.tpl');
}
/* {block 'form_buttons'} */
<<<<<<< HEAD
class Block_1422839758617eb82f93a4e6_05065234 extends Smarty_Internal_Block
=======
class Block_1914439942617147fe3a9945_54987578 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'form_buttons' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1422839758617eb82f93a4e6_05065234',
=======
    0 => 'Block_1914439942617147fe3a9945_54987578',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <button
    class="continue btn btn-primary float-xs-right"
    name="continue"
    data-link-action="sign-in"
    type="submit"
    value="1"
  >
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

  </button>
<?php
}
}
/* {/block 'form_buttons'} */
}
