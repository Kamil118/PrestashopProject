<?php
<<<<<<< HEAD
/* Smarty version 3.1.39, created on 2021-10-31 15:21:44
=======
/* Smarty version 3.1.39, created on 2021-10-21 12:22:28
>>>>>>> origin/main
  from '/var/www/html/themes/classic/templates/layouts/layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< HEAD
  'unifunc' => 'content_617ea67834d073_25329436',
=======
  'unifunc' => 'content_61714d74258684_40996866',
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
function content_617ea67834d073_25329436 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_61714d74258684_40996866 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> origin/main
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_699480655617ea67834a082_62694614', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1928818613617ea67834ab17_58900470', 'right_column');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141978559761714d74254d29_47985581', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169267362261714d74255954_51486553', 'right_column');
>>>>>>> origin/main
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1367488674617ea67834b209_17337167', 'content_wrapper');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_167169988561714d742561e8_40878655', 'content_wrapper');
>>>>>>> origin/main
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
<<<<<<< HEAD
class Block_699480655617ea67834a082_62694614 extends Smarty_Internal_Block
=======
class Block_141978559761714d74254d29_47985581 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'left_column' => 
  array (
<<<<<<< HEAD
    0 => 'Block_699480655617ea67834a082_62694614',
=======
    0 => 'Block_141978559761714d74254d29_47985581',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'right_column'} */
<<<<<<< HEAD
class Block_1928818613617ea67834ab17_58900470 extends Smarty_Internal_Block
=======
class Block_169267362261714d74255954_51486553 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'right_column' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1928818613617ea67834ab17_58900470',
=======
    0 => 'Block_169267362261714d74255954_51486553',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
<<<<<<< HEAD
class Block_1803942138617ea67834c104_34550073 extends Smarty_Internal_Block
=======
class Block_135850196661714d74257578_21775264 extends Smarty_Internal_Block
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
class Block_1367488674617ea67834b209_17337167 extends Smarty_Internal_Block
=======
class Block_167169988561714d742561e8_40878655 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1367488674617ea67834b209_17337167',
  ),
  'content' => 
  array (
    0 => 'Block_1803942138617ea67834c104_34550073',
=======
    0 => 'Block_167169988561714d742561e8_40878655',
  ),
  'content' => 
  array (
    0 => 'Block_135850196661714d74257578_21775264',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" class="js-content-wrapper">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1803942138617ea67834c104_34550073', 'content', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135850196661714d74257578_21775264', 'content', $this->tplIndex);
>>>>>>> origin/main
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
