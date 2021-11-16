<?php
<<<<<<< HEAD
/* Smarty version 3.1.39, created on 2021-10-31 16:37:18
=======
/* Smarty version 3.1.39, created on 2021-10-21 11:59:10
>>>>>>> origin/main
  from '/var/www/html/themes/classic/templates/checkout/checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< HEAD
  'unifunc' => 'content_617eb82e4869a1_62795319',
=======
  'unifunc' => 'content_617147fe27e7c0_68965468',
>>>>>>> origin/main
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3482c5ca50dbb522387a33c89eb842a02047a38' => 
    array (
      0 => '/var/www/html/themes/classic/templates/checkout/checkout.tpl',
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
    'file:checkout/_partials/header.tpl' => 1,
    'file:checkout/_partials/cart-summary.tpl' => 1,
    'file:checkout/_partials/footer.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_617eb82e4869a1_62795319 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_617147fe27e7c0_68965468 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> origin/main
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1494579657617eb82e47ae99_68353002', 'header');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178146213617147fe2789b5_74137617', 'header');
>>>>>>> origin/main
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1045684469617eb82e47d257_66459437', 'content');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1518068455617147fe27a4f4_85233667', 'content');
>>>>>>> origin/main
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1897298592617eb82e485140_92089856', 'footer');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_728478111617147fe27dc73_76611554', 'footer');
>>>>>>> origin/main
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'header'} */
<<<<<<< HEAD
class Block_1494579657617eb82e47ae99_68353002 extends Smarty_Internal_Block
=======
class Block_178146213617147fe2789b5_74137617 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'header' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1494579657617eb82e47ae99_68353002',
=======
    0 => 'Block_178146213617147fe2789b5_74137617',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'header'} */
/* {block 'checkout_process'} */
<<<<<<< HEAD
class Block_103868612617eb82e47dfa1_04786953 extends Smarty_Internal_Block
=======
class Block_2062073913617147fe27a9a2_78628675 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'checkout/checkout-process.tpl','ui'=>$_smarty_tpl->tpl_vars['checkout_process']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'checkout_process'} */
/* {block 'cart_summary'} */
<<<<<<< HEAD
class Block_14030879617eb82e481781_47592080 extends Smarty_Internal_Block
=======
class Block_928418419617147fe27bc28_17333403 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
        <?php
}
}
/* {/block 'cart_summary'} */
/* {block 'content'} */
<<<<<<< HEAD
class Block_1045684469617eb82e47d257_66459437 extends Smarty_Internal_Block
=======
class Block_1518068455617147fe27a4f4_85233667 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'content' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1045684469617eb82e47d257_66459437',
  ),
  'checkout_process' => 
  array (
    0 => 'Block_103868612617eb82e47dfa1_04786953',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_14030879617eb82e481781_47592080',
=======
    0 => 'Block_1518068455617147fe27a4f4_85233667',
  ),
  'checkout_process' => 
  array (
    0 => 'Block_2062073913617147fe27a9a2_78628675',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_928418419617147fe27bc28_17333403',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="content">
    <div class="row">
      <div class="cart-grid-body col-xs-12 col-lg-8">
        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103868612617eb82e47dfa1_04786953', 'checkout_process', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2062073913617147fe27a9a2_78628675', 'checkout_process', $this->tplIndex);
>>>>>>> origin/main
?>

      </div>
      <div class="cart-grid-right col-xs-12 col-lg-4">
        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14030879617eb82e481781_47592080', 'cart_summary', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_928418419617147fe27bc28_17333403', 'cart_summary', $this->tplIndex);
>>>>>>> origin/main
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

      </div>
    </div>
  </section>
<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
<<<<<<< HEAD
class Block_1897298592617eb82e485140_92089856 extends Smarty_Internal_Block
=======
class Block_728478111617147fe27dc73_76611554 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'footer' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1897298592617eb82e485140_92089856',
=======
    0 => 'Block_728478111617147fe27dc73_76611554',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'footer'} */
}
