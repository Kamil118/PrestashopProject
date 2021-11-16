<?php
<<<<<<< HEAD
/* Smarty version 3.1.39, created on 2021-10-31 16:37:19
=======
/* Smarty version 3.1.39, created on 2021-10-21 11:59:10
>>>>>>> origin/main
  from '/var/www/html/themes/classic/templates/_partials/form-fields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< HEAD
  'unifunc' => 'content_617eb82f8ffc76_08586202',
=======
  'unifunc' => 'content_617147fe37f146_62071997',
>>>>>>> origin/main
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6643335c805730b50c6feed79678955d88f920d0' => 
    array (
      0 => '/var/www/html/themes/classic/templates/_partials/form-fields.tpl',
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
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_617eb82f8ffc76_08586202 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_617147fe37f146_62071997 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> origin/main
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'hidden') {?>

  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1573167090617eb82f783b15_98597185', 'form_field_item_hidden');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1262915133617147fe3451c6_35455762', 'form_field_item_hidden');
>>>>>>> origin/main
?>


<?php } else { ?>

  <div class="form-group row <?php if (!empty($_smarty_tpl->tpl_vars['field']->value['errors'])) {?>has-error<?php }?>">
    <label class="col-md-3 form-control-label<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required<?php }?>" for="field-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
      <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] !== 'checkbox') {?>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>

      <?php }?>
    </label>
    <div class="col-md-6<?php if (($_smarty_tpl->tpl_vars['field']->value['type'] === 'radio-buttons')) {?> form-control-valign<?php }?>">

      <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] === 'select') {?>

        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1280519369617eb82f78ec95_39781234', 'form_field_item_select');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_923092276617147fe34aa55_54175141', 'form_field_item_select');
>>>>>>> origin/main
?>


      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'countrySelect') {?>

        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1250118604617eb82f7971a7_99712100', 'form_field_item_country');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1135161308617147fe34fd75_20932784', 'form_field_item_country');
>>>>>>> origin/main
?>


      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'radio-buttons') {?>

        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1299055248617eb82f79c3a2_01415877', 'form_field_item_radio');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1364149327617147fe354a96_94136213', 'form_field_item_radio');
>>>>>>> origin/main
?>


      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'checkbox') {?>

        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2003371197617eb82f7a14b8_58148805', 'form_field_item_checkbox');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_656871994617147fe359b59_39668291', 'form_field_item_checkbox');
>>>>>>> origin/main
?>


      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'date') {?>

        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_687646151617eb82f7a4575_91440890', 'form_field_item_date');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1200083977617147fe35cb36_60303766', 'form_field_item_date');
>>>>>>> origin/main
?>


      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'birthday') {?>

        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36511867617eb82f7a93b2_68879309', 'form_field_item_birthday');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_499131602617147fe361429_83548977', 'form_field_item_birthday');
>>>>>>> origin/main
?>


      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'password') {?>

        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101267173617eb82f8ef967_06420555', 'form_field_item_password');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22230442617147fe36aa29_90468463', 'form_field_item_password');
>>>>>>> origin/main
?>


      <?php } else { ?>

        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1862156591617eb82f8f4e51_45483897', 'form_field_item_other');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_912134247617147fe3700c6_99389215', 'form_field_item_other');
>>>>>>> origin/main
?>


      <?php }?>

      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1580160142617eb82f8fbe39_69454278', 'form_field_errors');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2127087857617147fe37b277_81840954', 'form_field_errors');
>>>>>>> origin/main
?>


    </div>

    <div class="col-md-3 form-control-comment">
      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1288889038617eb82f8fd1e5_65978379', 'form_field_comment');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1146453362617147fe37c2f6_55105820', 'form_field_comment');
>>>>>>> origin/main
?>

    </div>
  </div>

<?php }
}
/* {block 'form_field_item_hidden'} */
<<<<<<< HEAD
class Block_1573167090617eb82f783b15_98597185 extends Smarty_Internal_Block
=======
class Block_1262915133617147fe3451c6_35455762 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'form_field_item_hidden' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1573167090617eb82f783b15_98597185',
=======
    0 => 'Block_1262915133617147fe3451c6_35455762',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8');?>
">
  <?php
}
}
/* {/block 'form_field_item_hidden'} */
/* {block 'form_field_item_select'} */
<<<<<<< HEAD
class Block_1280519369617eb82f78ec95_39781234 extends Smarty_Internal_Block
=======
class Block_923092276617147fe34aa55_54175141 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'form_field_item_select' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1280519369617eb82f78ec95_39781234',
=======
    0 => 'Block_923092276617147fe34aa55_54175141',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <select id="field-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="form-control form-control-select" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>>
            <option value disabled selected><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please choose','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['availableValues'], 'label', false, 'value');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?>
              <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['field']->value['value']) {?> selected <?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </select>
        <?php
}
}
/* {/block 'form_field_item_select'} */
/* {block 'form_field_item_country'} */
<<<<<<< HEAD
class Block_1250118604617eb82f7971a7_99712100 extends Smarty_Internal_Block
=======
class Block_1135161308617147fe34fd75_20932784 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'form_field_item_country' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1250118604617eb82f7971a7_99712100',
=======
    0 => 'Block_1135161308617147fe34fd75_20932784',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <select
            id="field-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
            class="form-control form-control-select js-country"
            name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
            <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
          >
            <option value disabled selected><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please choose','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['availableValues'], 'label', false, 'value');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?>
              <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['field']->value['value']) {?> selected <?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </select>
        <?php
}
}
/* {/block 'form_field_item_country'} */
/* {block 'form_field_item_radio'} */
<<<<<<< HEAD
class Block_1299055248617eb82f79c3a2_01415877 extends Smarty_Internal_Block
=======
class Block_1364149327617147fe354a96_94136213 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'form_field_item_radio' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1299055248617eb82f79c3a2_01415877',
=======
    0 => 'Block_1364149327617147fe354a96_94136213',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['availableValues'], 'label', false, 'value');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?>
            <label class="radio-inline" for="field-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
">
              <span class="custom-radio">
                <input
                  name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                  id="field-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                  type="radio"
                  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                  <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['field']->value['value']) {?> checked <?php }?>
                >
                <span></span>
              </span>
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8');?>

            </label>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
}
/* {/block 'form_field_item_radio'} */
/* {block 'form_field_item_checkbox'} */
<<<<<<< HEAD
class Block_2003371197617eb82f7a14b8_58148805 extends Smarty_Internal_Block
=======
class Block_656871994617147fe359b59_39668291 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'form_field_item_checkbox' => 
  array (
<<<<<<< HEAD
    0 => 'Block_2003371197617eb82f7a14b8_58148805',
=======
    0 => 'Block_656871994617147fe359b59_39668291',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <span class="custom-checkbox">
            <label>
              <input name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['field']->value['value']) {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>>
              <span><i class="material-icons rtl-no-flip checkbox-checked">&#xE5CA;</i></span>
              <?php echo $_smarty_tpl->tpl_vars['field']->value['label'];?>

            </label>
          </span>
        <?php
}
}
/* {/block 'form_field_item_checkbox'} */
/* {block 'form_field_item_date'} */
<<<<<<< HEAD
class Block_687646151617eb82f7a4575_91440890 extends Smarty_Internal_Block
=======
class Block_1200083977617147fe35cb36_60303766 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'form_field_item_date' => 
  array (
<<<<<<< HEAD
    0 => 'Block_687646151617eb82f7a4575_91440890',
=======
    0 => 'Block_1200083977617147fe35cb36_60303766',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <input id="field-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="form-control" type="date" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8');?>
"<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder']))) {?> placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
          <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['comment']))) {?>
            <span class="form-control-comment">
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['availableValues']['comment'], ENT_QUOTES, 'UTF-8');?>

            </span>
          <?php }?>
        <?php
}
}
/* {/block 'form_field_item_date'} */
/* {block 'form_field_item_birthday'} */
<<<<<<< HEAD
class Block_36511867617eb82f7a93b2_68879309 extends Smarty_Internal_Block
=======
class Block_499131602617147fe361429_83548977 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'form_field_item_birthday' => 
  array (
<<<<<<< HEAD
    0 => 'Block_36511867617eb82f7a93b2_68879309',
=======
    0 => 'Block_499131602617147fe361429_83548977',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/function.html_select_date.php','function'=>'smarty_function_html_select_date',),));
?>

          <div class="js-parent-focus">
            <?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');
$_prefixVariable2 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- day --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );
$_prefixVariable3 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- month --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );
$_prefixVariable4 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- year --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );
$_prefixVariable5 = ob_get_clean();
ob_start();
echo htmlspecialchars(date('Y'), ENT_QUOTES, 'UTF-8');
$_prefixVariable6 = ob_get_clean();
ob_start();
echo htmlspecialchars(date('Y'), ENT_QUOTES, 'UTF-8');
$_prefixVariable7 = ob_get_clean();
echo smarty_function_html_select_date(array('field_order'=>'DMY','time'=>$_prefixVariable1,'field_array'=>$_prefixVariable2,'prefix'=>false,'reverse_years'=>true,'field_separator'=>'<br>','day_extra'=>'class="form-control form-control-select"','month_extra'=>'class="form-control form-control-select"','year_extra'=>'class="form-control form-control-select"','day_empty'=>$_prefixVariable3,'month_empty'=>$_prefixVariable4,'year_empty'=>$_prefixVariable5,'start_year'=>$_prefixVariable6-100,'end_year'=>$_prefixVariable7),$_smarty_tpl);?>

          </div>
        <?php
}
}
/* {/block 'form_field_item_birthday'} */
/* {block 'form_field_item_password'} */
<<<<<<< HEAD
class Block_101267173617eb82f8ef967_06420555 extends Smarty_Internal_Block
=======
class Block_22230442617147fe36aa29_90468463 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'form_field_item_password' => 
  array (
<<<<<<< HEAD
    0 => 'Block_101267173617eb82f8ef967_06420555',
=======
    0 => 'Block_22230442617147fe36aa29_90468463',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div class="input-group js-parent-focus">
            <input
              id="field-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
              class="form-control js-child-focus js-visible-password"
              name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
              title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'At least 5 characters long','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
"
              aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Password input of at least 5 characters','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
"
              type="password"
              <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete']) {?>autocomplete="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
              value=""
              pattern=".{5,}"
              <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
            >
            <span class="input-group-btn">
              <button
                class="btn"
                type="button"
                data-action="show-password"
                data-text-show="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
                data-text-hide="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hide','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
              >
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

              </button>
            </span>
          </div>
        <?php
}
}
/* {/block 'form_field_item_password'} */
/* {block 'form_field_item_other'} */
<<<<<<< HEAD
class Block_1862156591617eb82f8f4e51_45483897 extends Smarty_Internal_Block
=======
class Block_912134247617147fe3700c6_99389215 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'form_field_item_other' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1862156591617eb82f8f4e51_45483897',
=======
    0 => 'Block_912134247617147fe3700c6_99389215',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <input
            id="field-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
            class="form-control"
            name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
            type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['type'], ENT_QUOTES, 'UTF-8');?>
"
            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8');?>
"
            <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete']) {?>autocomplete="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder']))) {?>placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['maxLength']) {?>maxlength="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['maxLength'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
          >
          <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['comment']))) {?>
            <span class="form-control-comment">
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['availableValues']['comment'], ENT_QUOTES, 'UTF-8');?>

            </span>
          <?php }?>
        <?php
}
}
/* {/block 'form_field_item_other'} */
/* {block 'form_field_errors'} */
<<<<<<< HEAD
class Block_1580160142617eb82f8fbe39_69454278 extends Smarty_Internal_Block
=======
class Block_2127087857617147fe37b277_81840954 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'form_field_errors' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1580160142617eb82f8fbe39_69454278',
=======
    0 => 'Block_2127087857617147fe37b277_81840954',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['field']->value['errors']), 0, false);
?>
      <?php
}
}
/* {/block 'form_field_errors'} */
/* {block 'form_field_comment'} */
<<<<<<< HEAD
class Block_1288889038617eb82f8fd1e5_65978379 extends Smarty_Internal_Block
=======
class Block_1146453362617147fe37c2f6_55105820 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'form_field_comment' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1288889038617eb82f8fd1e5_65978379',
=======
    0 => 'Block_1146453362617147fe37c2f6_55105820',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ((!$_smarty_tpl->tpl_vars['field']->value['required'] && !in_array($_smarty_tpl->tpl_vars['field']->value['type'],array('radio-buttons','checkbox')))) {?>
         <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Optional','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>

        <?php }?>
      <?php
}
}
/* {/block 'form_field_comment'} */
}
