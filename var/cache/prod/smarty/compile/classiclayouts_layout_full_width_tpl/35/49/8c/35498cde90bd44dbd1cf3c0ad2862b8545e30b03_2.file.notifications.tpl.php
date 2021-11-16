<?php
<<<<<<< HEAD
/* Smarty version 3.1.39, created on 2021-10-31 15:21:44
=======
/* Smarty version 3.1.39, created on 2021-10-21 12:22:28
>>>>>>> origin/main
  from '/var/www/html/themes/classic/templates/_partials/notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< HEAD
  'unifunc' => 'content_617ea6784ce122_92145600',
=======
  'unifunc' => 'content_61714d74448b81_58450525',
>>>>>>> origin/main
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35498cde90bd44dbd1cf3c0ad2862b8545e30b03' => 
    array (
      0 => '/var/www/html/themes/classic/templates/_partials/notifications.tpl',
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
function content_617ea6784ce122_92145600 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_61714d74448b81_58450525 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> origin/main
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['notifications']->value))) {?>
<aside id="notifications">
  <div class="container">
    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {?>
      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_485190244617ea6784c3406_98648859', 'notifications_error');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203784761714d74438a66_96470064', 'notifications_error');
>>>>>>> origin/main
?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1914808175617ea6784c6380_72167449', 'notifications_warning');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150596817861714d7443d459_17033947', 'notifications_warning');
>>>>>>> origin/main
?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136401076617ea6784c9171_58338184', 'notifications_success');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106190144461714d744409f6_61976506', 'notifications_success');
>>>>>>> origin/main
?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1157921863617ea6784cc086_18023977', 'notifications_info');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11417939361714d744450f4_69289583', 'notifications_info');
>>>>>>> origin/main
?>

    <?php }?>
  </div>
</aside>
<?php }
}
/* {block 'notifications_error'} */
<<<<<<< HEAD
class Block_485190244617ea6784c3406_98648859 extends Smarty_Internal_Block
=======
class Block_203784761714d74438a66_96470064 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'notifications_error' => 
  array (
<<<<<<< HEAD
    0 => 'Block_485190244617ea6784c3406_98648859',
=======
    0 => 'Block_203784761714d74438a66_96470064',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <article class="alert alert-danger" role="alert" data-alert="danger">
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['error'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        </article>
      <?php
}
}
/* {/block 'notifications_error'} */
/* {block 'notifications_warning'} */
<<<<<<< HEAD
class Block_1914808175617ea6784c6380_72167449 extends Smarty_Internal_Block
=======
class Block_150596817861714d7443d459_17033947 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'notifications_warning' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1914808175617ea6784c6380_72167449',
=======
    0 => 'Block_150596817861714d7443d459_17033947',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <article class="alert alert-warning" role="alert" data-alert="warning">
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['warning'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        </article>
      <?php
}
}
/* {/block 'notifications_warning'} */
/* {block 'notifications_success'} */
<<<<<<< HEAD
class Block_136401076617ea6784c9171_58338184 extends Smarty_Internal_Block
=======
class Block_106190144461714d744409f6_61976506 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'notifications_success' => 
  array (
<<<<<<< HEAD
    0 => 'Block_136401076617ea6784c9171_58338184',
=======
    0 => 'Block_106190144461714d744409f6_61976506',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <article class="alert alert-success" role="alert" data-alert="success">
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['success'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        </article>
      <?php
}
}
/* {/block 'notifications_success'} */
/* {block 'notifications_info'} */
<<<<<<< HEAD
class Block_1157921863617ea6784cc086_18023977 extends Smarty_Internal_Block
=======
class Block_11417939361714d744450f4_69289583 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'notifications_info' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1157921863617ea6784cc086_18023977',
=======
    0 => 'Block_11417939361714d744450f4_69289583',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <article class="alert alert-info" role="alert" data-alert="info">
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['info'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        </article>
      <?php
}
}
/* {/block 'notifications_info'} */
}
