<?php
<<<<<<< HEAD
/* Smarty version 3.1.39, created on 2021-10-31 16:37:47
=======
/* Smarty version 3.1.39, created on 2021-10-21 12:01:35
>>>>>>> origin/main
  from '/var/www/html/themes/classic/templates/customer/_partials/address-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< HEAD
  'unifunc' => 'content_617eb84b972a38_58758168',
=======
  'unifunc' => 'content_6171488f209959_39288268',
>>>>>>> origin/main
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6acadfde3048f314075452a4c528c9faf062f60f' => 
    array (
      0 => '/var/www/html/themes/classic/templates/customer/_partials/address-form.tpl',
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
function content_617eb84b972a38_58758168 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_505663505617eb84b969ab8_23453827', "address_form");
=======
function content_6171488f209959_39288268 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_413087656171488f1fb3e7_11775214', "address_form");
>>>>>>> origin/main
?>

<?php }
/* {block "address_form_url"} */
<<<<<<< HEAD
class Block_2125121936617eb84b96ae93_93676682 extends Smarty_Internal_Block
=======
class Block_5027344796171488f1fd5b5_03069604 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form
      method="POST"
      action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'address','params'=>array('id_address'=>$_smarty_tpl->tpl_vars['id_address']->value)),$_smarty_tpl ) );?>
"
      data-id-address="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_address']->value, ENT_QUOTES, 'UTF-8');?>
"
      data-refresh-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'address','params'=>array('ajax'=>1,'action'=>'addressForm')),$_smarty_tpl ) );?>
"
    >
    <?php
}
}
/* {/block "address_form_url"} */
/* {block 'form_field'} */
<<<<<<< HEAD
class Block_1390688314617eb84b96f501_61309781 extends Smarty_Internal_Block
=======
class Block_8757711216171488f203fc6_40040521 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

              <?php
}
}
/* {/block 'form_field'} */
/* {block 'form_fields'} */
<<<<<<< HEAD
class Block_1791167924617eb84b96d731_93576196 extends Smarty_Internal_Block
=======
class Block_1610616176171488f2015d0_33100379 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1390688314617eb84b96f501_61309781', 'form_field', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8757711216171488f203fc6_40040521', 'form_field', $this->tplIndex);
>>>>>>> origin/main
?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php
}
}
/* {/block 'form_fields'} */
/* {block "address_form_fields"} */
<<<<<<< HEAD
class Block_1049999413617eb84b96d0c5_82902250 extends Smarty_Internal_Block
=======
class Block_18870587486171488f200e78_96307915 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <section class="form-fields">
          <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1791167924617eb84b96d731_93576196', 'form_fields', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1610616176171488f2015d0_33100379', 'form_fields', $this->tplIndex);
>>>>>>> origin/main
?>

        </section>
      <?php
}
}
/* {/block "address_form_fields"} */
/* {block 'form_buttons'} */
<<<<<<< HEAD
class Block_1085045953617eb84b971794_81455226 extends Smarty_Internal_Block
=======
class Block_7478063196171488f207054_22543926 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <button class="btn btn-primary form-control-submit float-xs-right" type="submit">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </button>
        <?php
}
}
/* {/block 'form_buttons'} */
/* {block "address_form_footer"} */
<<<<<<< HEAD
class Block_356935098617eb84b9710b4_06171289 extends Smarty_Internal_Block
=======
class Block_10853819506171488f2068d2_52743679 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="form-footer clearfix">
        <input type="hidden" name="submitAddress" value="1">
        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1085045953617eb84b971794_81455226', 'form_buttons', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7478063196171488f207054_22543926', 'form_buttons', $this->tplIndex);
>>>>>>> origin/main
?>

      </footer>
      <?php
}
}
/* {/block "address_form_footer"} */
/* {block "address_form"} */
<<<<<<< HEAD
class Block_505663505617eb84b969ab8_23453827 extends Smarty_Internal_Block
=======
class Block_413087656171488f1fb3e7_11775214 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'address_form' => 
  array (
<<<<<<< HEAD
    0 => 'Block_505663505617eb84b969ab8_23453827',
  ),
  'address_form_url' => 
  array (
    0 => 'Block_2125121936617eb84b96ae93_93676682',
  ),
  'address_form_fields' => 
  array (
    0 => 'Block_1049999413617eb84b96d0c5_82902250',
  ),
  'form_fields' => 
  array (
    0 => 'Block_1791167924617eb84b96d731_93576196',
  ),
  'form_field' => 
  array (
    0 => 'Block_1390688314617eb84b96f501_61309781',
  ),
  'address_form_footer' => 
  array (
    0 => 'Block_356935098617eb84b9710b4_06171289',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_1085045953617eb84b971794_81455226',
=======
    0 => 'Block_413087656171488f1fb3e7_11775214',
  ),
  'address_form_url' => 
  array (
    0 => 'Block_5027344796171488f1fd5b5_03069604',
  ),
  'address_form_fields' => 
  array (
    0 => 'Block_18870587486171488f200e78_96307915',
  ),
  'form_fields' => 
  array (
    0 => 'Block_1610616176171488f2015d0_33100379',
  ),
  'form_field' => 
  array (
    0 => 'Block_8757711216171488f203fc6_40040521',
  ),
  'address_form_footer' => 
  array (
    0 => 'Block_10853819506171488f2068d2_52743679',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_7478063196171488f207054_22543926',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="js-address-form">
    <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
?>

    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2125121936617eb84b96ae93_93676682', "address_form_url", $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5027344796171488f1fd5b5_03069604', "address_form_url", $this->tplIndex);
>>>>>>> origin/main
?>


      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1049999413617eb84b96d0c5_82902250', "address_form_fields", $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18870587486171488f200e78_96307915', "address_form_fields", $this->tplIndex);
>>>>>>> origin/main
?>


      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_356935098617eb84b9710b4_06171289', "address_form_footer", $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10853819506171488f2068d2_52743679', "address_form_footer", $this->tplIndex);
>>>>>>> origin/main
?>


    </form>
  </div>
<?php
}
}
/* {/block "address_form"} */
}
