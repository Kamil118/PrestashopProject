<?php
<<<<<<< HEAD
/* Smarty version 3.1.39, created on 2021-10-31 16:37:12
=======
/* Smarty version 3.1.39, created on 2021-10-21 11:59:07
>>>>>>> origin/main
  from '/var/www/html/themes/classic/templates/checkout/cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< HEAD
  'unifunc' => 'content_617eb828e41924_84576878',
=======
  'unifunc' => 'content_617147fbd80fa8_98994783',
>>>>>>> origin/main
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '963fbf36d49b2cf92eca1e7a8a17a4faa849409a' => 
    array (
      0 => '/var/www/html/themes/classic/templates/checkout/cart.tpl',
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
    'file:checkout/_partials/cart-detailed.tpl' => 1,
    'file:checkout/_partials/cart-detailed-totals.tpl' => 1,
    'file:checkout/_partials/cart-detailed-actions.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_617eb828e41924_84576878 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_617147fbd80fa8_98994783 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> origin/main
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1842218482617eb828e373b1_86653891', 'content');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1793975242617147fbd77e70_59446675', 'content');
>>>>>>> origin/main
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'cart_overview'} */
<<<<<<< HEAD
class Block_1421997690617eb828e388f2_62411451 extends Smarty_Internal_Block
=======
class Block_1877175967617147fbd78e06_07051382 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
          <?php
}
}
/* {/block 'cart_overview'} */
/* {block 'continue_shopping'} */
<<<<<<< HEAD
class Block_1566933303617eb828e39c45_67758961 extends Smarty_Internal_Block
=======
class Block_560833792617147fbd7a688_45426605 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <a class="label" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
            <i class="material-icons">chevron_left</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue shopping','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </a>
        <?php
}
}
/* {/block 'continue_shopping'} */
/* {block 'hook_shopping_cart_footer'} */
<<<<<<< HEAD
class Block_1890411740617eb828e3c477_02294106 extends Smarty_Internal_Block
=======
class Block_782310864617147fbd7be02_07628501 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCartFooter'),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'hook_shopping_cart_footer'} */
/* {block 'hook_shopping_cart'} */
<<<<<<< HEAD
class Block_154110278617eb828e3db38_48621554 extends Smarty_Internal_Block
=======
class Block_1202012367617147fbd7d468_79246248 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCart'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_shopping_cart'} */
/* {block 'cart_totals'} */
<<<<<<< HEAD
class Block_503879061617eb828e3e734_66450236 extends Smarty_Internal_Block
=======
class Block_406114916617147fbd7e391_15378308 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed-totals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
            <?php
}
}
/* {/block 'cart_totals'} */
/* {block 'cart_actions'} */
<<<<<<< HEAD
class Block_1358951702617eb828e3f844_93149371 extends Smarty_Internal_Block
=======
class Block_1732874753617147fbd7f138_13138292 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed-actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
            <?php
}
}
/* {/block 'cart_actions'} */
/* {block 'cart_summary'} */
<<<<<<< HEAD
class Block_2136284609617eb828e3d666_86021024 extends Smarty_Internal_Block
=======
class Block_359377330617147fbd7cf40_84456922 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div class="card cart-summary">

            <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154110278617eb828e3db38_48621554', 'hook_shopping_cart', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1202012367617147fbd7d468_79246248', 'hook_shopping_cart', $this->tplIndex);
>>>>>>> origin/main
?>


            <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_503879061617eb828e3e734_66450236', 'cart_totals', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_406114916617147fbd7e391_15378308', 'cart_totals', $this->tplIndex);
>>>>>>> origin/main
?>


            <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1358951702617eb828e3f844_93149371', 'cart_actions', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1732874753617147fbd7f138_13138292', 'cart_actions', $this->tplIndex);
>>>>>>> origin/main
?>


          </div>
        <?php
}
}
/* {/block 'cart_summary'} */
/* {block 'hook_reassurance'} */
<<<<<<< HEAD
class Block_1026526505617eb828e40968_31527359 extends Smarty_Internal_Block
=======
class Block_2044718871617147fbd80138_69528631 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'hook_reassurance'} */
/* {block 'content'} */
<<<<<<< HEAD
class Block_1842218482617eb828e373b1_86653891 extends Smarty_Internal_Block
=======
class Block_1793975242617147fbd77e70_59446675 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'content' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1842218482617eb828e373b1_86653891',
  ),
  'cart_overview' => 
  array (
    0 => 'Block_1421997690617eb828e388f2_62411451',
  ),
  'continue_shopping' => 
  array (
    0 => 'Block_1566933303617eb828e39c45_67758961',
  ),
  'hook_shopping_cart_footer' => 
  array (
    0 => 'Block_1890411740617eb828e3c477_02294106',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_2136284609617eb828e3d666_86021024',
  ),
  'hook_shopping_cart' => 
  array (
    0 => 'Block_154110278617eb828e3db38_48621554',
  ),
  'cart_totals' => 
  array (
    0 => 'Block_503879061617eb828e3e734_66450236',
  ),
  'cart_actions' => 
  array (
    0 => 'Block_1358951702617eb828e3f844_93149371',
  ),
  'hook_reassurance' => 
  array (
    0 => 'Block_1026526505617eb828e40968_31527359',
=======
    0 => 'Block_1793975242617147fbd77e70_59446675',
  ),
  'cart_overview' => 
  array (
    0 => 'Block_1877175967617147fbd78e06_07051382',
  ),
  'continue_shopping' => 
  array (
    0 => 'Block_560833792617147fbd7a688_45426605',
  ),
  'hook_shopping_cart_footer' => 
  array (
    0 => 'Block_782310864617147fbd7be02_07628501',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_359377330617147fbd7cf40_84456922',
  ),
  'hook_shopping_cart' => 
  array (
    0 => 'Block_1202012367617147fbd7d468_79246248',
  ),
  'cart_totals' => 
  array (
    0 => 'Block_406114916617147fbd7e391_15378308',
  ),
  'cart_actions' => 
  array (
    0 => 'Block_1732874753617147fbd7f138_13138292',
  ),
  'hook_reassurance' => 
  array (
    0 => 'Block_2044718871617147fbd80138_69528631',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">
    <div class="cart-grid row">

      <!-- Left Block: cart product informations & shpping -->
      <div class="cart-grid-body col-xs-12 col-lg-8">

        <!-- cart products detailed -->
        <div class="card cart-container">
          <div class="card-block">
            <h1 class="h1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shopping Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h1>
          </div>
          <hr class="separator">
          <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1421997690617eb828e388f2_62411451', 'cart_overview', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1877175967617147fbd78e06_07051382', 'cart_overview', $this->tplIndex);
>>>>>>> origin/main
?>

        </div>

        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1566933303617eb828e39c45_67758961', 'continue_shopping', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_560833792617147fbd7a688_45426605', 'continue_shopping', $this->tplIndex);
>>>>>>> origin/main
?>


        <!-- shipping informations -->
        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1890411740617eb828e3c477_02294106', 'hook_shopping_cart_footer', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_782310864617147fbd7be02_07628501', 'hook_shopping_cart_footer', $this->tplIndex);
>>>>>>> origin/main
?>

      </div>

      <!-- Right Block: cart subtotal & cart total -->
      <div class="cart-grid-right col-xs-12 col-lg-4">

        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2136284609617eb828e3d666_86021024', 'cart_summary', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_359377330617147fbd7cf40_84456922', 'cart_summary', $this->tplIndex);
>>>>>>> origin/main
?>


        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1026526505617eb828e40968_31527359', 'hook_reassurance', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2044718871617147fbd80138_69528631', 'hook_reassurance', $this->tplIndex);
>>>>>>> origin/main
?>


      </div>

    </div>
  </section>
<?php
}
}
/* {/block 'content'} */
}
