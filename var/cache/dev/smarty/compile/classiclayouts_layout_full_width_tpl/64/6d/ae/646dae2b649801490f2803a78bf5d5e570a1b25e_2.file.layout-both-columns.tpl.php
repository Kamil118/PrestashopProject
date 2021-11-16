<?php
<<<<<<< HEAD
/* Smarty version 3.1.39, created on 2021-10-31 16:29:32
=======
/* Smarty version 3.1.39, created on 2021-10-21 12:10:14
>>>>>>> origin/main
  from '/var/www/html/themes/classic/templates/layouts/layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< HEAD
  'unifunc' => 'content_617eb65ca3c8f1_76042671',
=======
  'unifunc' => 'content_61714a96093475_90356489',
>>>>>>> origin/main
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '646dae2b649801490f2803a78bf5d5e570a1b25e' => 
    array (
      0 => '/var/www/html/themes/classic/templates/layouts/layout-both-columns.tpl',
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
    'file:_partials/head.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_617eb65ca3c8f1_76042671 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_61714a96093475_90356489 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> origin/main
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['locale'], ENT_QUOTES, 'UTF-8');?>
">

  <head>
    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_977738001617eb65ca28b70_41944857', 'head');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48983767761714a96076f62_29320223', 'head');
>>>>>>> origin/main
?>

  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
">

    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_632858107617eb65ca2b222_26107222', 'hook_after_body_opening_tag');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_124774152961714a9607a543_04377609', 'hook_after_body_opening_tag');
>>>>>>> origin/main
?>


    <main>
      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1702750579617eb65ca2c316_42191745', 'product_activation');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73942808461714a9607b879_69895784', 'product_activation');
>>>>>>> origin/main
?>


      <header id="header">
        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1732835798617eb65ca2d251_46162660', 'header');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129966729161714a9607ced4_00629069', 'header');
>>>>>>> origin/main
?>

      </header>

      <section id="wrapper">
        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2021565743617eb65ca2e4a8_00708505', 'notifications');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34285311261714a9607e122_21640798', 'notifications');
>>>>>>> origin/main
?>


        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>

        <div class="container">
          <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19973291617eb65ca2fbf5_75646776', 'breadcrumb');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7176020161714a9607fc72_66916243', 'breadcrumb');
>>>>>>> origin/main
?>


          <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_880318230617eb65ca30e12_35620712', "left_column");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210912700061714a96081330_16119546', "left_column");
>>>>>>> origin/main
?>


          <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1364251378617eb65ca33c83_26255554', "content_wrapper");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117949014061714a96084ac8_15792131', "content_wrapper");
>>>>>>> origin/main
?>


          <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1544387210617eb65ca365d4_45891570', "right_column");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164196924861714a96088440_14893742', "right_column");
>>>>>>> origin/main
?>

        </div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );?>

      </section>

      <footer id="footer" class="js-footer">
        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1052193376617eb65ca39246_33719990', "footer");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23191246961714a9608d880_59581959', "footer");
>>>>>>> origin/main
?>

      </footer>

    </main>

    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_970392694617eb65ca3a325_14590412', 'javascript_bottom');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185628101861714a9608eea9_80490214', 'javascript_bottom');
>>>>>>> origin/main
?>


    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_46847557617eb65ca3b867_14266207', 'hook_before_body_closing_tag');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74991511361714a960918b8_29772532', 'hook_before_body_closing_tag');
>>>>>>> origin/main
?>

  </body>

</html>
<?php }
/* {block 'head'} */
<<<<<<< HEAD
class Block_977738001617eb65ca28b70_41944857 extends Smarty_Internal_Block
=======
class Block_48983767761714a96076f62_29320223 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'head' => 
  array (
<<<<<<< HEAD
    0 => 'Block_977738001617eb65ca28b70_41944857',
=======
    0 => 'Block_48983767761714a96076f62_29320223',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'head'} */
/* {block 'hook_after_body_opening_tag'} */
<<<<<<< HEAD
class Block_632858107617eb65ca2b222_26107222 extends Smarty_Internal_Block
=======
class Block_124774152961714a9607a543_04377609 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
<<<<<<< HEAD
    0 => 'Block_632858107617eb65ca2b222_26107222',
=======
    0 => 'Block_124774152961714a9607a543_04377609',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'product_activation'} */
<<<<<<< HEAD
class Block_1702750579617eb65ca2c316_42191745 extends Smarty_Internal_Block
=======
class Block_73942808461714a9607b879_69895784 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'product_activation' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1702750579617eb65ca2c316_42191745',
=======
    0 => 'Block_73942808461714a9607b879_69895784',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
<<<<<<< HEAD
class Block_1732835798617eb65ca2d251_46162660 extends Smarty_Internal_Block
=======
class Block_129966729161714a9607ced4_00629069 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'header' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1732835798617eb65ca2d251_46162660',
=======
    0 => 'Block_129966729161714a9607ced4_00629069',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'header'} */
/* {block 'notifications'} */
<<<<<<< HEAD
class Block_2021565743617eb65ca2e4a8_00708505 extends Smarty_Internal_Block
=======
class Block_34285311261714a9607e122_21640798 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'notifications' => 
  array (
<<<<<<< HEAD
    0 => 'Block_2021565743617eb65ca2e4a8_00708505',
=======
    0 => 'Block_34285311261714a9607e122_21640798',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'notifications'} */
/* {block 'breadcrumb'} */
<<<<<<< HEAD
class Block_19973291617eb65ca2fbf5_75646776 extends Smarty_Internal_Block
=======
class Block_7176020161714a9607fc72_66916243 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
<<<<<<< HEAD
    0 => 'Block_19973291617eb65ca2fbf5_75646776',
=======
    0 => 'Block_7176020161714a9607fc72_66916243',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php
}
}
/* {/block 'breadcrumb'} */
/* {block "left_column"} */
<<<<<<< HEAD
class Block_880318230617eb65ca30e12_35620712 extends Smarty_Internal_Block
=======
class Block_210912700061714a96081330_16119546 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'left_column' => 
  array (
<<<<<<< HEAD
    0 => 'Block_880318230617eb65ca30e12_35620712',
=======
    0 => 'Block_210912700061714a96081330_16119546',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="left-column" class="col-xs-12 col-sm-4 col-md-3">
              <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct'),$_smarty_tpl ) );?>

              <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

              <?php }?>
            </div>
          <?php
}
}
/* {/block "left_column"} */
/* {block "content"} */
<<<<<<< HEAD
class Block_1374901509617eb65ca34c61_64712150 extends Smarty_Internal_Block
=======
class Block_145846303561714a96085ca9_43905593 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <p>Hello world! This is HTML5 Boilerplate.</p>
              <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
<<<<<<< HEAD
class Block_1364251378617eb65ca33c83_26255554 extends Smarty_Internal_Block
=======
class Block_117949014061714a96084ac8_15792131 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1364251378617eb65ca33c83_26255554',
  ),
  'content' => 
  array (
    0 => 'Block_1374901509617eb65ca34c61_64712150',
=======
    0 => 'Block_117949014061714a96084ac8_15792131',
  ),
  'content' => 
  array (
    0 => 'Block_145846303561714a96085ca9_43905593',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="content-wrapper" class="js-content-wrapper left-column right-column col-sm-4 col-md-6">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

              <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1374901509617eb65ca34c61_64712150', "content", $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145846303561714a96085ca9_43905593', "content", $this->tplIndex);
>>>>>>> origin/main
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

            </div>
          <?php
}
}
/* {/block "content_wrapper"} */
/* {block "right_column"} */
<<<<<<< HEAD
class Block_1544387210617eb65ca365d4_45891570 extends Smarty_Internal_Block
=======
class Block_164196924861714a96088440_14893742 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'right_column' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1544387210617eb65ca365d4_45891570',
=======
    0 => 'Block_164196924861714a96088440_14893742',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="right-column" class="col-xs-12 col-sm-4 col-md-3">
              <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct'),$_smarty_tpl ) );?>

              <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>

              <?php }?>
            </div>
          <?php
}
}
/* {/block "right_column"} */
/* {block "footer"} */
<<<<<<< HEAD
class Block_1052193376617eb65ca39246_33719990 extends Smarty_Internal_Block
=======
class Block_23191246961714a9608d880_59581959 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'footer' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1052193376617eb65ca39246_33719990',
=======
    0 => 'Block_23191246961714a9608d880_59581959',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block "footer"} */
/* {block 'javascript_bottom'} */
<<<<<<< HEAD
class Block_970392694617eb65ca3a325_14590412 extends Smarty_Internal_Block
=======
class Block_185628101861714a9608eea9_80490214 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
<<<<<<< HEAD
    0 => 'Block_970392694617eb65ca3a325_14590412',
=======
    0 => 'Block_185628101861714a9608eea9_80490214',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>
    <?php
}
}
/* {/block 'javascript_bottom'} */
/* {block 'hook_before_body_closing_tag'} */
<<<<<<< HEAD
class Block_46847557617eb65ca3b867_14266207 extends Smarty_Internal_Block
=======
class Block_74991511361714a960918b8_29772532 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
<<<<<<< HEAD
    0 => 'Block_46847557617eb65ca3b867_14266207',
=======
    0 => 'Block_74991511361714a960918b8_29772532',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_before_body_closing_tag'} */
}
