<?php
<<<<<<< HEAD
/* Smarty version 3.1.39, created on 2021-10-31 16:29:32
=======
/* Smarty version 3.1.39, created on 2021-10-21 12:10:14
>>>>>>> origin/main
  from '/var/www/html/themes/classic/templates/layouts/layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< HEAD
  'unifunc' => 'content_617eb65c9cd599_79786617',
=======
  'unifunc' => 'content_61714a96070935_91283179',
>>>>>>> origin/main
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02c6cbd3fcdd96a222f269838561be6cad12ac30' => 
    array (
      0 => '/var/www/html/themes/classic/templates/layouts/layout-full-width.tpl',
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
function content_617eb65c9cd599_79786617 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_61714a96070935_91283179 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> origin/main
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_804860967617eb65c9c71a8_12047817', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2138369794617eb65c9c8223_38582769', 'right_column');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150383371661714a9606bbe4_33962936', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36652752161714a9606c7b1_14427477', 'right_column');
>>>>>>> origin/main
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2069323479617eb65c9c8fd3_83881979', 'content_wrapper');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4355578761714a9606d535_93973823', 'content_wrapper');
>>>>>>> origin/main
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
<<<<<<< HEAD
class Block_804860967617eb65c9c71a8_12047817 extends Smarty_Internal_Block
=======
class Block_150383371661714a9606bbe4_33962936 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'left_column' => 
  array (
<<<<<<< HEAD
    0 => 'Block_804860967617eb65c9c71a8_12047817',
=======
    0 => 'Block_150383371661714a9606bbe4_33962936',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'right_column'} */
<<<<<<< HEAD
class Block_2138369794617eb65c9c8223_38582769 extends Smarty_Internal_Block
=======
class Block_36652752161714a9606c7b1_14427477 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'right_column' => 
  array (
<<<<<<< HEAD
    0 => 'Block_2138369794617eb65c9c8223_38582769',
=======
    0 => 'Block_36652752161714a9606c7b1_14427477',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
<<<<<<< HEAD
class Block_1197011880617eb65c9cb588_54886785 extends Smarty_Internal_Block
=======
class Block_191820795361714a9606ed33_92703733 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
<<<<<<< HEAD
class Block_2069323479617eb65c9c8fd3_83881979 extends Smarty_Internal_Block
=======
class Block_4355578761714a9606d535_93973823 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
<<<<<<< HEAD
    0 => 'Block_2069323479617eb65c9c8fd3_83881979',
  ),
  'content' => 
  array (
    0 => 'Block_1197011880617eb65c9cb588_54886785',
=======
    0 => 'Block_4355578761714a9606d535_93973823',
  ),
  'content' => 
  array (
    0 => 'Block_191820795361714a9606ed33_92703733',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" class="js-content-wrapper">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1197011880617eb65c9cb588_54886785', 'content', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191820795361714a9606ed33_92703733', 'content', $this->tplIndex);
>>>>>>> origin/main
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
