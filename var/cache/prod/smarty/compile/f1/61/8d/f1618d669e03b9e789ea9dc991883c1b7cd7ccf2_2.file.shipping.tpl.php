<?php
<<<<<<< HEAD
/* Smarty version 3.1.39, created on 2021-10-31 16:38:01
=======
/* Smarty version 3.1.39, created on 2021-10-21 12:01:58
>>>>>>> origin/main
  from '/var/www/html/themes/classic/templates/checkout/_partials/steps/shipping.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< HEAD
  'unifunc' => 'content_617eb859de62c3_44320919',
=======
  'unifunc' => 'content_617148a6e9c7d8_84542317',
>>>>>>> origin/main
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1618d669e03b9e789ea9dc991883c1b7cd7ccf2' => 
    array (
      0 => '/var/www/html/themes/classic/templates/checkout/_partials/steps/shipping.tpl',
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
function content_617eb859de62c3_44320919 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_617148a6e9c7d8_84542317 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> origin/main
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2113983446617eb859dd1e92_74110537', 'step_content');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_469049607617148a6e8b1a6_37755250', 'step_content');
>>>>>>> origin/main
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'checkout/_partials/steps/checkout-step.tpl');
}
/* {block 'delivery_options'} */
<<<<<<< HEAD
class Block_1710496600617eb859dd5f57_07438377 extends Smarty_Internal_Block
=======
class Block_1200822067617148a6e8d9c5_63746574 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="delivery-options">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['delivery_options']->value, 'carrier', false, 'carrier_id');
$_smarty_tpl->tpl_vars['carrier']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['carrier_id']->value => $_smarty_tpl->tpl_vars['carrier']->value) {
$_smarty_tpl->tpl_vars['carrier']->do_else = false;
?>
                  <div class="row delivery-option js-delivery-option">
                    <div class="col-sm-1">
                      <span class="custom-radio float-xs-left">
                        <input type="radio" name="delivery_option[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_address']->value, ENT_QUOTES, 'UTF-8');?>
]" id="delivery_option_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['id'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['delivery_option']->value == $_smarty_tpl->tpl_vars['carrier_id']->value) {?> checked<?php }?>>
                        <span></span>
                      </span>
                    </div>
                    <label for="delivery_option_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="col-xs-9 col-sm-11 delivery-option-2">
                      <div class="row">
                        <div class="col-sm-5 col-xs-12">
                          <div class="row carrier<?php if ($_smarty_tpl->tpl_vars['carrier']->value['logo']) {?> carrier-hasLogo<?php }?>">
                            <?php if ($_smarty_tpl->tpl_vars['carrier']->value['logo']) {?>
                            <div class="col-xs-12 col-md-4 carrier-logo">
                                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['name'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy" />
                            </div>
                            <?php }?>
                            <div class="col-xs-12 carriere-name-container<?php if ($_smarty_tpl->tpl_vars['carrier']->value['logo']) {?> col-md-8<?php }?>">
                              <span class="h6 carrier-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                          <span class="carrier-delay"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['delay'], ENT_QUOTES, 'UTF-8');?>
</span>
                        </div>
                        <div class="col-sm-3 col-xs-12">
                          <span class="carrier-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
                        </div>
                      </div>
                    </label>
                  </div>
                  <div class="row carrier-extra-content js-carrier-extra-content"<?php if ($_smarty_tpl->tpl_vars['delivery_option']->value != $_smarty_tpl->tpl_vars['carrier_id']->value) {?> style="display:none;"<?php }?>>
                    <?php echo $_smarty_tpl->tpl_vars['carrier']->value['extraContent'];?>

                  </div>
                  <div class="clearfix"></div>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
          <?php
}
}
/* {/block 'delivery_options'} */
/* {block 'step_content'} */
<<<<<<< HEAD
class Block_2113983446617eb859dd1e92_74110537 extends Smarty_Internal_Block
=======
class Block_469049607617148a6e8b1a6_37755250 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'step_content' => 
  array (
<<<<<<< HEAD
    0 => 'Block_2113983446617eb859dd1e92_74110537',
  ),
  'delivery_options' => 
  array (
    0 => 'Block_1710496600617eb859dd5f57_07438377',
=======
    0 => 'Block_469049607617148a6e8b1a6_37755250',
  ),
  'delivery_options' => 
  array (
    0 => 'Block_1200822067617148a6e8d9c5_63746574',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="hook-display-before-carrier">
    <?php echo $_smarty_tpl->tpl_vars['hookDisplayBeforeCarrier']->value;?>

  </div>

  <div class="delivery-options-list">
    <?php if (count($_smarty_tpl->tpl_vars['delivery_options']->value)) {?>
      <form
        class="clearfix"
        id="js-delivery"
        data-url-update="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'order','params'=>array('ajax'=>1,'action'=>'selectDeliveryOption')),$_smarty_tpl ) );?>
"
        method="post"
      >
        <div class="form-fields">
          <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1710496600617eb859dd5f57_07438377', 'delivery_options', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1200822067617148a6e8d9c5_63746574', 'delivery_options', $this->tplIndex);
>>>>>>> origin/main
?>

          <div class="order-options">
            <div id="delivery">
              <label for="delivery_message"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you would like to add a comment about your order, please write it in the field below.','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</label>
              <textarea rows="2" cols="120" id="delivery_message" name="delivery_message"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_message']->value, ENT_QUOTES, 'UTF-8');?>
</textarea>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['recyclablePackAllowed']->value) {?>
              <span class="custom-checkbox">
                <input type="checkbox" id="input_recyclable" name="recyclable" value="1" <?php if ($_smarty_tpl->tpl_vars['recyclable']->value) {?> checked <?php }?>>
                <span><i class="material-icons rtl-no-flip checkbox-checked">&#xE5CA;</i></span>
                <label for="input_recyclable"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I would like to receive my order in recycled packaging.','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</label>
              </span>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['gift']->value['allowed']) {?>
              <span class="custom-checkbox">
                <input class="js-gift-checkbox" id="input_gift" name="gift" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['gift']->value['isGift']) {?>checked="checked"<?php }?>>
                <span><i class="material-icons rtl-no-flip checkbox-checked">&#xE5CA;</i></span>
                <label for="input_gift"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift']->value['label'], ENT_QUOTES, 'UTF-8');?>
</label >
              </span>

              <div id="gift" class="collapse<?php if ($_smarty_tpl->tpl_vars['gift']->value['isGift']) {?> in<?php }?>">
                <label for="gift_message"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you\'d like, you can add a note to the gift:','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</label>
                <textarea rows="2" cols="120" id="gift_message" name="gift_message"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift']->value['message'], ENT_QUOTES, 'UTF-8');?>
</textarea>
              </div>
            <?php }?>

          </div>
        </div>
        <button type="submit" class="continue btn btn-primary float-xs-right" name="confirmDeliveryOption" value="1">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

        </button>
      </form>
    <?php } else { ?>
      <p class="alert alert-danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unfortunately, there are no carriers available for your delivery address.','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</p>
    <?php }?>
  </div>

  <div id="hook-display-after-carrier">
    <?php echo $_smarty_tpl->tpl_vars['hookDisplayAfterCarrier']->value;?>

  </div>

  <div id="extra_carrier"></div>
<?php
}
}
/* {/block 'step_content'} */
}
