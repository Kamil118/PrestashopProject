<?php
<<<<<<< HEAD
/* Smarty version 3.1.39, created on 2021-10-31 16:29:32
=======
/* Smarty version 3.1.39, created on 2021-10-21 12:10:14
>>>>>>> origin/main
  from 'module:psshoppingcartpsshoppingc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< HEAD
  'unifunc' => 'content_617eb65ce34e31_67271952',
=======
  'unifunc' => 'content_61714a961ad8c5_93134410',
>>>>>>> origin/main
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35655e6409b6198f29dd6e732ef9598dec599880' => 
    array (
      0 => 'module:psshoppingcartpsshoppingc',
<<<<<<< HEAD
      1 => 1633363913,
=======
      1 => 1634813142,
>>>>>>> origin/main
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_617eb65ce34e31_67271952 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_61714a961ad8c5_93134410 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> origin/main
?><!-- begin /var/www/html/themes/classic/modules/ps_shoppingcart/ps_shoppingcart.tpl --><div id="_desktop_cart">
  <div class="blockcart cart-preview <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>active<?php } else { ?>inactive<?php }?>" data-refresh-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refresh_url']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="header">
      <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>
        <a rel="nofollow" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shopping cart link containing %nbProducts% product(s)','sprintf'=>array('%nbProducts%'=>$_smarty_tpl->tpl_vars['cart']->value['products_count']),'d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
">
      <?php }?>
        <i class="material-icons shopping-cart" aria-hidden="true">shopping_cart</i>
        <span class="hidden-sm-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
        <span class="cart-products-count">(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
)</span>
      <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>
        </a>
      <?php }?>
    </div>
  </div>
</div>
<!-- end /var/www/html/themes/classic/modules/ps_shoppingcart/ps_shoppingcart.tpl --><?php }
}
