<?php
<<<<<<< HEAD
/* Smarty version 3.1.39, created on 2021-10-31 16:37:47
=======
/* Smarty version 3.1.39, created on 2021-10-21 12:01:35
>>>>>>> origin/main
  from '/var/www/html/themes/classic/templates/checkout/_partials/address-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< HEAD
  'unifunc' => 'content_617eb84b8219b7_22781486',
=======
  'unifunc' => 'content_6171488f1f5003_65302299',
>>>>>>> origin/main
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a452bce3c118a0dd54bdb83e8cf33c4b0e7dee6e' => 
    array (
      0 => '/var/www/html/themes/classic/templates/checkout/_partials/address-form.tpl',
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
function content_617eb84b8219b7_22781486 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_6171488f1f5003_65302299 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> origin/main
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188245443617eb84b8072d8_49407208', 'form_field');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17511223426171488f1e0db5_04983866', 'form_field');
>>>>>>> origin/main
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_862110369617eb84b80bd35_56697142', "address_form_url");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18603611206171488f1e52b4_00675340', "address_form_url");
>>>>>>> origin/main
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1257421753617eb84b80f8f4_02044995', 'form_fields');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15539538716171488f1e8b20_87957236', 'form_fields');
>>>>>>> origin/main
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2012409568617eb84b814a93_18792264', 'form_buttons');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210878576171488f1ec836_49674622', 'form_buttons');
>>>>>>> origin/main
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/_partials/address-form.tpl');
}
/* {block 'form_field'} */
<<<<<<< HEAD
class Block_188245443617eb84b8072d8_49407208 extends Smarty_Internal_Block
=======
class Block_17511223426171488f1e0db5_04983866 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'form_field' => 
  array (
<<<<<<< HEAD
    0 => 'Block_188245443617eb84b8072d8_49407208',
=======
    0 => 'Block_17511223426171488f1e0db5_04983866',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['field']->value['name'] == "alias" && $_smarty_tpl->tpl_vars['customer']->value['is_guest']) {?>
      <?php } else { ?>
    <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

  <?php }
}
}
/* {/block 'form_field'} */
/* {block "address_form_url"} */
<<<<<<< HEAD
class Block_862110369617eb84b80bd35_56697142 extends Smarty_Internal_Block
=======
class Block_18603611206171488f1e52b4_00675340 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'address_form_url' => 
  array (
<<<<<<< HEAD
    0 => 'Block_862110369617eb84b80bd35_56697142',
=======
    0 => 'Block_18603611206171488f1e52b4_00675340',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form
      method="POST"
      action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'order','params'=>array('id_address'=>$_smarty_tpl->tpl_vars['id_address']->value)),$_smarty_tpl ) );?>
"
      data-id-address="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_address']->value, ENT_QUOTES, 'UTF-8');?>
"
      data-refresh-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'order','params'=>array('ajax'=>1,'action'=>'addressForm')),$_smarty_tpl ) );?>
"
    >
<?php
}
}
/* {/block "address_form_url"} */
/* {block 'form_fields'} */
<<<<<<< HEAD
class Block_1257421753617eb84b80f8f4_02044995 extends Smarty_Internal_Block
=======
class Block_15539538716171488f1e8b20_87957236 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'form_fields' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1257421753617eb84b80f8f4_02044995',
=======
    0 => 'Block_15539538716171488f1e8b20_87957236',
>>>>>>> origin/main
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <input type="hidden" name="saveAddress" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
">
  <?php if ($_smarty_tpl->tpl_vars['type']->value === "delivery") {?>
    <div class="form-group row">
      <div class="col-md-9 col-md-offset-3">
        <input name = "use_same_address" id="use_same_address" type = "checkbox" value = "1" <?php if ($_smarty_tpl->tpl_vars['use_same_address']->value) {?> checked <?php }?>>
        <label for="use_same_address"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use this address for invoice too','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</label>
      </div>
    </div>
  <?php }
}
}
/* {/block 'form_fields'} */
/* {block 'form_buttons'} */
<<<<<<< HEAD
class Block_2012409568617eb84b814a93_18792264 extends Smarty_Internal_Block
=======
class Block_210878576171488f1ec836_49674622 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'form_buttons' => 
  array (
<<<<<<< HEAD
    0 => 'Block_2012409568617eb84b814a93_18792264',
=======
    0 => 'Block_210878576171488f1ec836_49674622',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if (!$_smarty_tpl->tpl_vars['form_has_continue_button']->value) {?>
    <button type="submit" class="btn btn-primary float-xs-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button>
    <a class="js-cancel-address cancel-address float-xs-right" href="<?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'order','params'=>array('cancelAddress'=>$_prefixVariable1)),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
  <?php } else { ?>
    <form>
      <button type="submit" class="continue btn btn-primary float-xs-right" name="confirm-addresses" value="1">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

      </button>
      <?php if (count($_smarty_tpl->tpl_vars['customer']->value['addresses']) > 0) {?>
        <a class="js-cancel-address cancel-address float-xs-right" href="<?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');
$_prefixVariable2 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'order','params'=>array('cancelAddress'=>$_prefixVariable2)),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
      <?php }?>
    </form>
  <?php }
}
}
/* {/block 'form_buttons'} */
}
