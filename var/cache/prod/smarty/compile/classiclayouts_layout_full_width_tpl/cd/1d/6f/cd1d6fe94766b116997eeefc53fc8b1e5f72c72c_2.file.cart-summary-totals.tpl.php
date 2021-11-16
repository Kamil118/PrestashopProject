<?php
<<<<<<< HEAD
/* Smarty version 3.1.39, created on 2021-10-31 16:37:13
=======
/* Smarty version 3.1.39, created on 2021-10-21 11:59:07
>>>>>>> origin/main
  from '/var/www/html/themes/classic/templates/checkout/_partials/cart-summary-totals.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< HEAD
  'unifunc' => 'content_617eb829368f99_87032684',
=======
  'unifunc' => 'content_617147fbe48030_67610691',
>>>>>>> origin/main
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd1d6fe94766b116997eeefc53fc8b1e5f72c72c' => 
    array (
      0 => '/var/www/html/themes/classic/templates/checkout/_partials/cart-summary-totals.tpl',
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
function content_617eb829368f99_87032684 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_617147fbe48030_67610691 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> origin/main
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="card-block cart-summary-totals js-cart-summary-totals">

  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8528982617eb82935e6c6_33656985', 'cart_summary_total');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_753414738617147fbe3ee97_31039672', 'cart_summary_total');
>>>>>>> origin/main
?>


  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1980559716617eb8293664f8_79383462', 'cart_summary_tax');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1628940720617147fbe457a4_86845547', 'cart_summary_tax');
>>>>>>> origin/main
?>


</div>
<?php }
/* {block 'cart_summary_total'} */
<<<<<<< HEAD
class Block_8528982617eb82935e6c6_33656985 extends Smarty_Internal_Block
=======
class Block_753414738617147fbe3ee97_31039672 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'cart_summary_total' => 
  array (
<<<<<<< HEAD
    0 => 'Block_8528982617eb82935e6c6_33656985',
=======
    0 => 'Block_753414738617147fbe3ee97_31039672',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['display_prices_tax_incl'] && $_smarty_tpl->tpl_vars['configuration']->value['taxes_enabled']) {?>
      <div class="cart-summary-line">
        <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['label'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['labels']['tax_short'], ENT_QUOTES, 'UTF-8');?>
</span>
        <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
      </div>
      <div class="cart-summary-line cart-total">
        <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total_including_tax']['label'], ENT_QUOTES, 'UTF-8');?>
</span>
        <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total_including_tax']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
      </div>
    <?php } else { ?>
      <div class="cart-summary-line cart-total">
        <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['label'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['configuration']->value['taxes_enabled']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['labels']['tax_short'], ENT_QUOTES, 'UTF-8');
}?></span>
        <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
      </div>
    <?php }?>
  <?php
}
}
/* {/block 'cart_summary_total'} */
/* {block 'cart_summary_tax'} */
<<<<<<< HEAD
class Block_1980559716617eb8293664f8_79383462 extends Smarty_Internal_Block
=======
class Block_1628940720617147fbe457a4_86845547 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'cart_summary_tax' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1980559716617eb8293664f8_79383462',
=======
    0 => 'Block_1628940720617147fbe457a4_86845547',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']) {?>
      <div class="cart-summary-line">
        <span class="label sub"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%label%:','sprintf'=>array('%label%'=>$_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['label']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
        <span class="value sub"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
      </div>
    <?php }?>
  <?php
}
}
/* {/block 'cart_summary_tax'} */
}
