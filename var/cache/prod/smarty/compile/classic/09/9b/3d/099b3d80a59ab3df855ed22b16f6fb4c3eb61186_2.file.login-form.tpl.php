<?php
<<<<<<< HEAD
/* Smarty version 3.1.39, created on 2021-10-31 16:37:19
=======
/* Smarty version 3.1.39, created on 2021-10-21 11:59:10
>>>>>>> origin/main
  from '/var/www/html/themes/classic/templates/customer/_partials/login-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< HEAD
  'unifunc' => 'content_617eb82f94ef14_37830230',
=======
  'unifunc' => 'content_617147fe3b42f8_37324955',
>>>>>>> origin/main
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '099b3d80a59ab3df855ed22b16f6fb4c3eb61186' => 
    array (
      0 => '/var/www/html/themes/classic/templates/customer/_partials/login-form.tpl',
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
function content_617eb82f94ef14_37830230 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1733067727617eb82f946194_24854316', 'login_form');
=======
function content_617147fe3b42f8_37324955 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33908081617147fe3ad896_59038931', 'login_form');
>>>>>>> origin/main
?>

<?php }
/* {block 'login_form_errors'} */
<<<<<<< HEAD
class Block_1046075094617eb82f946a64_36290507 extends Smarty_Internal_Block
=======
class Block_439759076617147fe3adda1_05470695 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
?>
  <?php
}
}
/* {/block 'login_form_errors'} */
/* {block 'login_form_actionurl'} */
<<<<<<< HEAD
class Block_2037367295617eb82f948a29_93464024 extends Smarty_Internal_Block
=======
class Block_1468190323617147fe3aef04_72421805 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'login_form_actionurl'} */
/* {block 'form_field'} */
<<<<<<< HEAD
class Block_1789246455617eb82f94b710_30919123 extends Smarty_Internal_Block
=======
class Block_1351549049617147fe3b0b83_97313047 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

          <?php
}
}
/* {/block 'form_field'} */
/* {block 'login_form_fields'} */
<<<<<<< HEAD
class Block_1772090369617eb82f949bf2_60527183 extends Smarty_Internal_Block
=======
class Block_1223868646617147fe3af7a7_91412227 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1789246455617eb82f94b710_30919123', 'form_field', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1351549049617147fe3b0b83_97313047', 'form_field', $this->tplIndex);
>>>>>>> origin/main
?>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php
}
}
/* {/block 'login_form_fields'} */
/* {block 'form_buttons'} */
<<<<<<< HEAD
class Block_463316254617eb82f94dce0_91919947 extends Smarty_Internal_Block
=======
class Block_198476942617147fe3b2e64_77756789 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <button id="submit-login" class="btn btn-primary" data-link-action="sign-in" type="submit" class="form-control-submit">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </button>
        <?php
}
}
/* {/block 'form_buttons'} */
/* {block 'login_form_footer'} */
<<<<<<< HEAD
class Block_225903480617eb82f94d873_83268288 extends Smarty_Internal_Block
=======
class Block_854184076617147fe3b2a01_37098642 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="form-footer text-sm-center clearfix">
        <input type="hidden" name="submitLogin" value="1">
        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_463316254617eb82f94dce0_91919947', 'form_buttons', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198476942617147fe3b2e64_77756789', 'form_buttons', $this->tplIndex);
>>>>>>> origin/main
?>

      </footer>
    <?php
}
}
/* {/block 'login_form_footer'} */
/* {block 'login_form'} */
<<<<<<< HEAD
class Block_1733067727617eb82f946194_24854316 extends Smarty_Internal_Block
=======
class Block_33908081617147fe3ad896_59038931 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'login_form' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1733067727617eb82f946194_24854316',
  ),
  'login_form_errors' => 
  array (
    0 => 'Block_1046075094617eb82f946a64_36290507',
  ),
  'login_form_actionurl' => 
  array (
    0 => 'Block_2037367295617eb82f948a29_93464024',
  ),
  'login_form_fields' => 
  array (
    0 => 'Block_1772090369617eb82f949bf2_60527183',
  ),
  'form_field' => 
  array (
    0 => 'Block_1789246455617eb82f94b710_30919123',
  ),
  'login_form_footer' => 
  array (
    0 => 'Block_225903480617eb82f94d873_83268288',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_463316254617eb82f94dce0_91919947',
=======
    0 => 'Block_33908081617147fe3ad896_59038931',
  ),
  'login_form_errors' => 
  array (
    0 => 'Block_439759076617147fe3adda1_05470695',
  ),
  'login_form_actionurl' => 
  array (
    0 => 'Block_1468190323617147fe3aef04_72421805',
  ),
  'login_form_fields' => 
  array (
    0 => 'Block_1223868646617147fe3af7a7_91412227',
  ),
  'form_field' => 
  array (
    0 => 'Block_1351549049617147fe3b0b83_97313047',
  ),
  'login_form_footer' => 
  array (
    0 => 'Block_854184076617147fe3b2a01_37098642',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_198476942617147fe3b2e64_77756789',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1046075094617eb82f946a64_36290507', 'login_form_errors', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_439759076617147fe3adda1_05470695', 'login_form_errors', $this->tplIndex);
>>>>>>> origin/main
?>


  <form id="login-form" action="<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2037367295617eb82f948a29_93464024', 'login_form_actionurl', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1468190323617147fe3aef04_72421805', 'login_form_actionurl', $this->tplIndex);
>>>>>>> origin/main
?>
" method="post">

    <div>
      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1772090369617eb82f949bf2_60527183', 'login_form_fields', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1223868646617147fe3af7a7_91412227', 'login_form_fields', $this->tplIndex);
>>>>>>> origin/main
?>

      <div class="forgot-password">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['password'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

        </a>
      </div>
    </div>

    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_225903480617eb82f94d873_83268288', 'login_form_footer', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_854184076617147fe3b2a01_37098642', 'login_form_footer', $this->tplIndex);
>>>>>>> origin/main
?>


  </form>
<?php
}
}
/* {/block 'login_form'} */
}
