<?php
<<<<<<< HEAD
/* Smarty version 3.1.39, created on 2021-10-31 15:21:44
=======
/* Smarty version 3.1.39, created on 2021-10-21 12:22:28
>>>>>>> origin/main
  from '/var/www/html/themes/classic/templates/layouts/layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< HEAD
  'unifunc' => 'content_617ea678362aa9_35814139',
=======
  'unifunc' => 'content_61714d7426f7b9_96182075',
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
function content_617ea678362aa9_35814139 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_61714d7426f7b9_96182075 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1878641973617ea6783510c8_97471130', 'head');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19037874161714d7425eb17_97076085', 'head');
>>>>>>> origin/main
?>

  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
">

    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1489556376617ea678353031_76264824', 'hook_after_body_opening_tag');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36037654261714d74260c88_58439080', 'hook_after_body_opening_tag');
>>>>>>> origin/main
?>


    <main>
      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_725140326617ea678353c77_42769759', 'product_activation');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162151785861714d74261ba5_80741209', 'product_activation');
>>>>>>> origin/main
?>


      <header id="header">
        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200077423617ea6783561f1_35422635', 'header');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25838789461714d74262851_76596167', 'header');
>>>>>>> origin/main
?>

      </header>

      <section id="wrapper">
        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1576995084617ea678357051_82827751', 'notifications');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171605285761714d74263465_51135772', 'notifications');
>>>>>>> origin/main
?>


        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>

        <div class="container">
          <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1307960736617ea6783584d3_45173799', 'breadcrumb');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83674840261714d74264737_72625962', 'breadcrumb');
>>>>>>> origin/main
?>


          <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_631039771617ea678359262_28237307', "left_column");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2480867161714d742657f9_79494685', "left_column");
>>>>>>> origin/main
?>


          <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1166188327617ea67835b695_03038842', "content_wrapper");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36182215561714d74267d87_28446105', "content_wrapper");
>>>>>>> origin/main
?>


          <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1137664430617ea67835d3b9_30654539', "right_column");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29071989861714d7426a0c6_48091387', "right_column");
>>>>>>> origin/main
?>

        </div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );?>

      </section>

      <footer id="footer" class="js-footer">
        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_669447727617ea67835fbc1_41921490', "footer");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_611963361714d7426c6c8_74233476', "footer");
>>>>>>> origin/main
?>

      </footer>

    </main>

    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1134793266617ea678360939_29279641', 'javascript_bottom');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118960440961714d7426d6a7_92818318', 'javascript_bottom');
>>>>>>> origin/main
?>


    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_648747221617ea678361db4_51725687', 'hook_before_body_closing_tag');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78852493261714d7426e8d9_49372613', 'hook_before_body_closing_tag');
>>>>>>> origin/main
?>

  </body>

</html>
<?php }
/* {block 'head'} */
<<<<<<< HEAD
class Block_1878641973617ea6783510c8_97471130 extends Smarty_Internal_Block
=======
class Block_19037874161714d7425eb17_97076085 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'head' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1878641973617ea6783510c8_97471130',
=======
    0 => 'Block_19037874161714d7425eb17_97076085',
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
class Block_1489556376617ea678353031_76264824 extends Smarty_Internal_Block
=======
class Block_36037654261714d74260c88_58439080 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1489556376617ea678353031_76264824',
=======
    0 => 'Block_36037654261714d74260c88_58439080',
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
class Block_725140326617ea678353c77_42769759 extends Smarty_Internal_Block
=======
class Block_162151785861714d74261ba5_80741209 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'product_activation' => 
  array (
<<<<<<< HEAD
    0 => 'Block_725140326617ea678353c77_42769759',
=======
    0 => 'Block_162151785861714d74261ba5_80741209',
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
class Block_200077423617ea6783561f1_35422635 extends Smarty_Internal_Block
=======
class Block_25838789461714d74262851_76596167 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'header' => 
  array (
<<<<<<< HEAD
    0 => 'Block_200077423617ea6783561f1_35422635',
=======
    0 => 'Block_25838789461714d74262851_76596167',
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
class Block_1576995084617ea678357051_82827751 extends Smarty_Internal_Block
=======
class Block_171605285761714d74263465_51135772 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'notifications' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1576995084617ea678357051_82827751',
=======
    0 => 'Block_171605285761714d74263465_51135772',
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
class Block_1307960736617ea6783584d3_45173799 extends Smarty_Internal_Block
=======
class Block_83674840261714d74264737_72625962 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1307960736617ea6783584d3_45173799',
=======
    0 => 'Block_83674840261714d74264737_72625962',
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
class Block_631039771617ea678359262_28237307 extends Smarty_Internal_Block
=======
class Block_2480867161714d742657f9_79494685 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'left_column' => 
  array (
<<<<<<< HEAD
    0 => 'Block_631039771617ea678359262_28237307',
=======
    0 => 'Block_2480867161714d742657f9_79494685',
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
class Block_1790099248617ea67835c212_37427975 extends Smarty_Internal_Block
=======
class Block_56723839461714d74268979_23124006 extends Smarty_Internal_Block
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
class Block_1166188327617ea67835b695_03038842 extends Smarty_Internal_Block
=======
class Block_36182215561714d74267d87_28446105 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1166188327617ea67835b695_03038842',
  ),
  'content' => 
  array (
    0 => 'Block_1790099248617ea67835c212_37427975',
=======
    0 => 'Block_36182215561714d74267d87_28446105',
  ),
  'content' => 
  array (
    0 => 'Block_56723839461714d74268979_23124006',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="content-wrapper" class="js-content-wrapper left-column right-column col-sm-4 col-md-6">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

              <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1790099248617ea67835c212_37427975', "content", $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56723839461714d74268979_23124006', "content", $this->tplIndex);
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
class Block_1137664430617ea67835d3b9_30654539 extends Smarty_Internal_Block
=======
class Block_29071989861714d7426a0c6_48091387 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'right_column' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1137664430617ea67835d3b9_30654539',
=======
    0 => 'Block_29071989861714d7426a0c6_48091387',
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
class Block_669447727617ea67835fbc1_41921490 extends Smarty_Internal_Block
=======
class Block_611963361714d7426c6c8_74233476 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'footer' => 
  array (
<<<<<<< HEAD
    0 => 'Block_669447727617ea67835fbc1_41921490',
=======
    0 => 'Block_611963361714d7426c6c8_74233476',
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
class Block_1134793266617ea678360939_29279641 extends Smarty_Internal_Block
=======
class Block_118960440961714d7426d6a7_92818318 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1134793266617ea678360939_29279641',
=======
    0 => 'Block_118960440961714d7426d6a7_92818318',
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
class Block_648747221617ea678361db4_51725687 extends Smarty_Internal_Block
=======
class Block_78852493261714d7426e8d9_49372613 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
<<<<<<< HEAD
    0 => 'Block_648747221617ea678361db4_51725687',
=======
    0 => 'Block_78852493261714d7426e8d9_49372613',
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
