<?php
<<<<<<< HEAD
/* Smarty version 3.1.39, created on 2021-10-31 16:37:01
=======
/* Smarty version 3.1.39, created on 2021-10-21 11:59:03
>>>>>>> origin/main
  from '/var/www/html/themes/classic/templates/catalog/_partials/product-details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< HEAD
  'unifunc' => 'content_617eb81d3bf1c2_29648399',
=======
  'unifunc' => 'content_617147f7caf8a5_77547914',
>>>>>>> origin/main
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d73d956a780e5374f925a63183a4e01548393a2' => 
    array (
      0 => '/var/www/html/themes/classic/templates/catalog/_partials/product-details.tpl',
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
function content_617eb81d3bf1c2_29648399 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_617147f7caf8a5_77547914 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> origin/main
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="js-product-details tab-pane fade<?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> in active<?php }?>"
     id="product-details"
     data-product="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['embedded_attributes'] )), ENT_QUOTES, 'UTF-8');?>
"
     role="tabpanel"
  >
  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2050137155617eb81d388e15_41994178', 'product_reference');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_568652710617147f7c982a0_06316915', 'product_reference');
>>>>>>> origin/main
?>


  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2034363592617eb81d3979e4_95169838', 'product_quantities');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1711901284617147f7ca01f5_09217510', 'product_quantities');
>>>>>>> origin/main
?>


  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_339507715617eb81d3a2f18_86014397', 'product_availability_date');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1617584199617147f7ca3ca6_82025677', 'product_availability_date');
>>>>>>> origin/main
?>


  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_914442404617eb81d3a8035_08657917', 'product_out_of_stock');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1759035394617147f7ca5999_34475312', 'product_out_of_stock');
>>>>>>> origin/main
?>


  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1403392864617eb81d3a97d2_42961349', 'product_features');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1745470404617147f7ca67a1_48745902', 'product_features');
>>>>>>> origin/main
?>


    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1685819210617eb81d3b2571_35577255', 'product_specific_references');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1022289267617147f7caa667_15367212', 'product_specific_references');
>>>>>>> origin/main
?>


  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84896400617eb81d3b9ac6_89086987', 'product_condition');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1049169148617147f7cad344_58054353', 'product_condition');
>>>>>>> origin/main
?>

</div>
<?php }
/* {block 'product_reference'} */
<<<<<<< HEAD
class Block_2050137155617eb81d388e15_41994178 extends Smarty_Internal_Block
=======
class Block_568652710617147f7c982a0_06316915 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'product_reference' => 
  array (
<<<<<<< HEAD
    0 => 'Block_2050137155617eb81d388e15_41994178',
=======
    0 => 'Block_568652710617147f7c982a0_06316915',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['product_manufacturer']->value->id))) {?>
      <div class="product-manufacturer">
        <?php if ((isset($_smarty_tpl->tpl_vars['manufacturer_image_url']->value))) {?>
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
">
            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer_image_url']->value, ENT_QUOTES, 'UTF-8');?>
" class="img img-thumbnail manufacturer-logo" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
" loading="lazy" width="98" height="50">
          </a>
        <?php } else { ?>
          <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brand','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</label>
          <span>
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
</a>
          </span>
        <?php }?>
      </div>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['reference_to_display'])) && $_smarty_tpl->tpl_vars['product']->value['reference_to_display'] != '') {?>
      <div class="product-reference">
        <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 </label>
        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference_to_display'], ENT_QUOTES, 'UTF-8');?>
</span>
      </div>
    <?php }?>
  <?php
}
}
/* {/block 'product_reference'} */
/* {block 'product_quantities'} */
<<<<<<< HEAD
class Block_2034363592617eb81d3979e4_95169838 extends Smarty_Internal_Block
=======
class Block_1711901284617147f7ca01f5_09217510 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'product_quantities' => 
  array (
<<<<<<< HEAD
    0 => 'Block_2034363592617eb81d3979e4_95169838',
=======
    0 => 'Block_1711901284617147f7ca01f5_09217510',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['product']->value['show_quantities']) {?>
      <div class="product-quantities">
        <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In stock','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</label>
        <span data-stock="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
" data-allow-oosp="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['allow_oosp'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity_label'], ENT_QUOTES, 'UTF-8');?>
</span>
      </div>
    <?php }?>
  <?php
}
}
/* {/block 'product_quantities'} */
/* {block 'product_availability_date'} */
<<<<<<< HEAD
class Block_339507715617eb81d3a2f18_86014397 extends Smarty_Internal_Block
=======
class Block_1617584199617147f7ca3ca6_82025677 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'product_availability_date' => 
  array (
<<<<<<< HEAD
    0 => 'Block_339507715617eb81d3a2f18_86014397',
=======
    0 => 'Block_1617584199617147f7ca3ca6_82025677',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['product']->value['availability_date']) {?>
      <div class="product-availability-date">
        <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability date:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 </label>
        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_date'], ENT_QUOTES, 'UTF-8');?>
</span>
      </div>
    <?php }?>
  <?php
}
}
/* {/block 'product_availability_date'} */
/* {block 'product_out_of_stock'} */
<<<<<<< HEAD
class Block_914442404617eb81d3a8035_08657917 extends Smarty_Internal_Block
=======
class Block_1759035394617147f7ca5999_34475312 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'product_out_of_stock' => 
  array (
<<<<<<< HEAD
    0 => 'Block_914442404617eb81d3a8035_08657917',
=======
    0 => 'Block_1759035394617147f7ca5999_34475312',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="product-out-of-stock">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'actionProductOutOfStock','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

    </div>
  <?php
}
}
/* {/block 'product_out_of_stock'} */
/* {block 'product_features'} */
<<<<<<< HEAD
class Block_1403392864617eb81d3a97d2_42961349 extends Smarty_Internal_Block
=======
class Block_1745470404617147f7ca67a1_48745902 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'product_features' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1403392864617eb81d3a97d2_42961349',
=======
    0 => 'Block_1745470404617147f7ca67a1_48745902',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['product']->value['grouped_features']) {?>
      <section class="product-features">
        <p class="h6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Data sheet','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
        <dl class="data-sheet">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['grouped_features'], 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
            <dt class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8');?>
</dt>
            <dd class="value"><?php echo nl2br(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['feature']->value['value'],'htmlall' )));?>
</dd>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </dl>
      </section>
    <?php }?>
  <?php
}
}
/* {/block 'product_features'} */
/* {block 'product_specific_references'} */
<<<<<<< HEAD
class Block_1685819210617eb81d3b2571_35577255 extends Smarty_Internal_Block
=======
class Block_1022289267617147f7caa667_15367212 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'product_specific_references' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1685819210617eb81d3b2571_35577255',
=======
    0 => 'Block_1022289267617147f7caa667_15367212',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['specific_references'])) {?>
      <section class="product-features">
        <p class="h6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Specific References','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
          <dl class="data-sheet">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['specific_references'], 'reference', false, 'key');
$_smarty_tpl->tpl_vars['reference']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['reference']->value) {
$_smarty_tpl->tpl_vars['reference']->do_else = false;
?>
              <dt class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
</dt>
              <dd class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reference']->value, ENT_QUOTES, 'UTF-8');?>
</dd>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </dl>
      </section>
    <?php }?>
  <?php
}
}
/* {/block 'product_specific_references'} */
/* {block 'product_condition'} */
<<<<<<< HEAD
class Block_84896400617eb81d3b9ac6_89086987 extends Smarty_Internal_Block
=======
class Block_1049169148617147f7cad344_58054353 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'product_condition' => 
  array (
<<<<<<< HEAD
    0 => 'Block_84896400617eb81d3b9ac6_89086987',
=======
    0 => 'Block_1049169148617147f7cad344_58054353',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['product']->value['condition']) {?>
      <div class="product-condition">
        <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Condition','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 </label>
        <link href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['condition']['schema_url'], ENT_QUOTES, 'UTF-8');?>
"/>
        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['condition']['label'], ENT_QUOTES, 'UTF-8');?>
</span>
      </div>
    <?php }?>
  <?php
}
}
/* {/block 'product_condition'} */
}
