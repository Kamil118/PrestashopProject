<?php
<<<<<<< HEAD
/* Smarty version 3.1.39, created on 2021-10-31 16:37:19
=======
/* Smarty version 3.1.39, created on 2021-10-21 11:59:10
>>>>>>> origin/main
  from '/var/www/html/themes/classic/templates/customer/_partials/customer-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< HEAD
  'unifunc' => 'content_617eb82f3ee8c8_80567909',
=======
  'unifunc' => 'content_617147fe33a724_33957499',
>>>>>>> origin/main
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f35bc1326337e968f299ac8a34f2ec7a2db1c12' => 
    array (
      0 => '/var/www/html/themes/classic/templates/customer/_partials/customer-form.tpl',
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
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_617eb82f3ee8c8_80567909 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_920866307617eb82f3e5bb3_46714303', 'customer_form');
=======
function content_617147fe33a724_33957499 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1972588658617147fe333af1_71736887', 'customer_form');
>>>>>>> origin/main
?>

<?php }
/* {block 'customer_form_errors'} */
<<<<<<< HEAD
class Block_1292201235617eb82f3e6303_07071258 extends Smarty_Internal_Block
=======
class Block_1535100995617147fe334062_56685270 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
?>
  <?php
}
}
/* {/block 'customer_form_errors'} */
/* {block 'customer_form_actionurl'} */
<<<<<<< HEAD
class Block_1674712144617eb82f3e7c31_20307554 extends Smarty_Internal_Block
=======
class Block_1213828277617147fe3351d2_60178870 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'customer_form_actionurl'} */
/* {block "form_field"} */
<<<<<<< HEAD
class Block_1484817456617eb82f3ea219_77634816 extends Smarty_Internal_Block
=======
class Block_452683661617147fe337298_21256875 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block "form_field"} */
/* {block "form_fields"} */
<<<<<<< HEAD
class Block_1086439227617eb82f3e8ac7_08740555 extends Smarty_Internal_Block
=======
class Block_75399946617147fe335ea3_00503615 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1484817456617eb82f3ea219_77634816', "form_field", $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_452683661617147fe337298_21256875', "form_field", $this->tplIndex);
>>>>>>> origin/main
?>

      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php echo $_smarty_tpl->tpl_vars['hook_create_account_form']->value;?>

    <?php
}
}
/* {/block "form_fields"} */
/* {block "form_buttons"} */
<<<<<<< HEAD
class Block_1833379614617eb82f3ed1d9_53543065 extends Smarty_Internal_Block
=======
class Block_1893995954617147fe3395a3_64147210 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <button class="btn btn-primary form-control-submit float-xs-right" data-link-action="save-customer" type="submit">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

        </button>
      <?php
}
}
/* {/block "form_buttons"} */
/* {block 'customer_form_footer'} */
<<<<<<< HEAD
class Block_1902910275617eb82f3eca01_73264979 extends Smarty_Internal_Block
=======
class Block_2000682887617147fe338fa6_42387294 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <footer class="form-footer clearfix">
      <input type="hidden" name="submitCreate" value="1">
      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1833379614617eb82f3ed1d9_53543065', "form_buttons", $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1893995954617147fe3395a3_64147210', "form_buttons", $this->tplIndex);
>>>>>>> origin/main
?>

    </footer>
  <?php
}
}
/* {/block 'customer_form_footer'} */
/* {block 'customer_form'} */
<<<<<<< HEAD
class Block_920866307617eb82f3e5bb3_46714303 extends Smarty_Internal_Block
=======
class Block_1972588658617147fe333af1_71736887 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'customer_form' => 
  array (
<<<<<<< HEAD
    0 => 'Block_920866307617eb82f3e5bb3_46714303',
  ),
  'customer_form_errors' => 
  array (
    0 => 'Block_1292201235617eb82f3e6303_07071258',
  ),
  'customer_form_actionurl' => 
  array (
    0 => 'Block_1674712144617eb82f3e7c31_20307554',
  ),
  'form_fields' => 
  array (
    0 => 'Block_1086439227617eb82f3e8ac7_08740555',
  ),
  'form_field' => 
  array (
    0 => 'Block_1484817456617eb82f3ea219_77634816',
  ),
  'customer_form_footer' => 
  array (
    0 => 'Block_1902910275617eb82f3eca01_73264979',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_1833379614617eb82f3ed1d9_53543065',
=======
    0 => 'Block_1972588658617147fe333af1_71736887',
  ),
  'customer_form_errors' => 
  array (
    0 => 'Block_1535100995617147fe334062_56685270',
  ),
  'customer_form_actionurl' => 
  array (
    0 => 'Block_1213828277617147fe3351d2_60178870',
  ),
  'form_fields' => 
  array (
    0 => 'Block_75399946617147fe335ea3_00503615',
  ),
  'form_field' => 
  array (
    0 => 'Block_452683661617147fe337298_21256875',
  ),
  'customer_form_footer' => 
  array (
    0 => 'Block_2000682887617147fe338fa6_42387294',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_1893995954617147fe3395a3_64147210',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1292201235617eb82f3e6303_07071258', 'customer_form_errors', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1535100995617147fe334062_56685270', 'customer_form_errors', $this->tplIndex);
>>>>>>> origin/main
?>


<form action="<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1674712144617eb82f3e7c31_20307554', 'customer_form_actionurl', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1213828277617147fe3351d2_60178870', 'customer_form_actionurl', $this->tplIndex);
>>>>>>> origin/main
?>
" id="customer-form" class="js-customer-form" method="post">
  <div>
    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1086439227617eb82f3e8ac7_08740555', "form_fields", $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75399946617147fe335ea3_00503615', "form_fields", $this->tplIndex);
>>>>>>> origin/main
?>

  </div>

  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1902910275617eb82f3eca01_73264979', 'customer_form_footer', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2000682887617147fe338fa6_42387294', 'customer_form_footer', $this->tplIndex);
>>>>>>> origin/main
?>


</form>
<?php
}
}
/* {/block 'customer_form'} */
}
