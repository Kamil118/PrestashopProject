<?php
<<<<<<< HEAD
/* Smarty version 3.1.39, created on 2021-10-31 16:37:00
=======
/* Smarty version 3.1.39, created on 2021-10-21 11:59:03
>>>>>>> origin/main
  from '/var/www/html/themes/classic/templates/catalog/_partials/product-discounts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< HEAD
  'unifunc' => 'content_617eb81cc7e8e6_33350360',
=======
  'unifunc' => 'content_617147f7b6e167_83443200',
>>>>>>> origin/main
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e373c382706aae820980662c2804914ca578f329' => 
    array (
      0 => '/var/www/html/themes/classic/templates/catalog/_partials/product-discounts.tpl',
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
function content_617eb81cc7e8e6_33350360 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_617147f7b6e167_83443200 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> origin/main
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section class="product-discounts js-product-discounts">
  <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity_discounts']) {?>
    <p class="h6 product-discounts-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Volume discounts','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2042124392617eb81cc77794_64477561', 'product_discount_table');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_754117061617147f7b68f21_92611557', 'product_discount_table');
>>>>>>> origin/main
?>

  <?php }?>
</section>
<?php }
/* {block 'product_discount_table'} */
<<<<<<< HEAD
class Block_2042124392617eb81cc77794_64477561 extends Smarty_Internal_Block
=======
class Block_754117061617147f7b68f21_92611557 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'product_discount_table' => 
  array (
<<<<<<< HEAD
    0 => 'Block_2042124392617eb81cc77794_64477561',
=======
    0 => 'Block_754117061617147f7b68f21_92611557',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <table class="table-product-discounts">
        <thead>
        <tr>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</th>
          <th><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['configuration']->value['quantity_discount']['label'], ENT_QUOTES, 'UTF-8');?>
</th>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You Save','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</th>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['quantity_discounts'], 'quantity_discount', false, NULL, 'quantity_discounts', array (
));
$_smarty_tpl->tpl_vars['quantity_discount']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['quantity_discount']->value) {
$_smarty_tpl->tpl_vars['quantity_discount']->do_else = false;
?>
          <tr data-discount-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_type'], ENT_QUOTES, 'UTF-8');?>
" data-discount="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value'], ENT_QUOTES, 'UTF-8');?>
" data-discount-quantity="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['quantity_discount']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
">
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['quantity_discount']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['quantity_discount']->value['discount'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['quantity_discount']->value['save'], ENT_QUOTES, 'UTF-8');?>
</td>
          </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
      </table>
    <?php
}
}
/* {/block 'product_discount_table'} */
}
