<?php
<<<<<<< HEAD
/* Smarty version 3.1.39, created on 2021-10-31 16:37:19
=======
/* Smarty version 3.1.39, created on 2021-10-21 11:59:10
>>>>>>> origin/main
  from '/var/www/html/themes/classic/templates/checkout/_partials/cart-summary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< HEAD
  'unifunc' => 'content_617eb82fd995e4_87660195',
=======
  'unifunc' => 'content_617147fe5d36d3_07250830',
>>>>>>> origin/main
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd172ace6b30573009cced4e086bcdd20578aa799' => 
    array (
      0 => '/var/www/html/themes/classic/templates/checkout/_partials/cart-summary.tpl',
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
    'file:checkout/_partials/cart-summary-top.tpl' => 1,
    'file:checkout/_partials/cart-summary-products.tpl' => 1,
    'file:checkout/_partials/cart-summary-subtotals.tpl' => 1,
    'file:checkout/_partials/cart-summary-totals.tpl' => 1,
    'file:checkout/_partials/cart-voucher.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_617eb82fd995e4_87660195 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_617147fe5d36d3_07250830 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> origin/main
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="js-checkout-summary" class="card js-cart" data-refresh-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
?ajax=1&action=refresh">
  <div class="card-block">
    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1325449754617eb82fd92e64_37756687', 'hook_checkout_summary_top');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1796141904617147fe5ce6f8_34476985', 'hook_checkout_summary_top');
>>>>>>> origin/main
?>


    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_594326761617eb82fd944c3_10379066', 'cart_summary_products');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1443471695617147fe5cf668_00092318', 'cart_summary_products');
>>>>>>> origin/main
?>


    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1001867764617eb82fd95d33_36178514', 'cart_summary_subtotals');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2092113802617147fe5d0409_14913482', 'cart_summary_subtotals');
>>>>>>> origin/main
?>

  </div>

  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147264332617eb82fd970b3_10039324', 'cart_summary_totals');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2116699877617147fe5d1159_66207230', 'cart_summary_totals');
>>>>>>> origin/main
?>


  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185757587617eb82fd983d3_05396991', 'cart_summary_voucher');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1430545148617147fe5d1e96_05928073', 'cart_summary_voucher');
>>>>>>> origin/main
?>


</section>
<?php }
/* {block 'hook_checkout_summary_top'} */
<<<<<<< HEAD
class Block_1325449754617eb82fd92e64_37756687 extends Smarty_Internal_Block
=======
class Block_1796141904617147fe5ce6f8_34476985 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'hook_checkout_summary_top' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1325449754617eb82fd92e64_37756687',
=======
    0 => 'Block_1796141904617147fe5ce6f8_34476985',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
    <?php
}
}
/* {/block 'hook_checkout_summary_top'} */
/* {block 'cart_summary_products'} */
<<<<<<< HEAD
class Block_594326761617eb82fd944c3_10379066 extends Smarty_Internal_Block
=======
class Block_1443471695617147fe5cf668_00092318 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'cart_summary_products' => 
  array (
<<<<<<< HEAD
    0 => 'Block_594326761617eb82fd944c3_10379066',
=======
    0 => 'Block_1443471695617147fe5cf668_00092318',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
    <?php
}
}
/* {/block 'cart_summary_products'} */
/* {block 'cart_summary_subtotals'} */
<<<<<<< HEAD
class Block_1001867764617eb82fd95d33_36178514 extends Smarty_Internal_Block
=======
class Block_2092113802617147fe5d0409_14913482 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'cart_summary_subtotals' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1001867764617eb82fd95d33_36178514',
=======
    0 => 'Block_2092113802617147fe5d0409_14913482',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-subtotals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
    <?php
}
}
/* {/block 'cart_summary_subtotals'} */
/* {block 'cart_summary_totals'} */
<<<<<<< HEAD
class Block_147264332617eb82fd970b3_10039324 extends Smarty_Internal_Block
=======
class Block_2116699877617147fe5d1159_66207230 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'cart_summary_totals' => 
  array (
<<<<<<< HEAD
    0 => 'Block_147264332617eb82fd970b3_10039324',
=======
    0 => 'Block_2116699877617147fe5d1159_66207230',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-totals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
  <?php
}
}
/* {/block 'cart_summary_totals'} */
/* {block 'cart_summary_voucher'} */
<<<<<<< HEAD
class Block_185757587617eb82fd983d3_05396991 extends Smarty_Internal_Block
=======
class Block_1430545148617147fe5d1e96_05928073 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'cart_summary_voucher' => 
  array (
<<<<<<< HEAD
    0 => 'Block_185757587617eb82fd983d3_05396991',
=======
    0 => 'Block_1430545148617147fe5d1e96_05928073',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-voucher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block 'cart_summary_voucher'} */
}
