<?php
<<<<<<< HEAD
/* Smarty version 3.1.39, created on 2021-10-31 16:37:00
=======
/* Smarty version 3.1.39, created on 2021-10-21 11:59:03
>>>>>>> origin/main
  from '/var/www/html/themes/classic/templates/catalog/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< HEAD
  'unifunc' => 'content_617eb81c421196_46460418',
=======
  'unifunc' => 'content_617147f7a8c115_41307144',
>>>>>>> origin/main
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0c87b6774cac1c4ce1100c05ffe034a732a8d25' => 
    array (
      0 => '/var/www/html/themes/classic/templates/catalog/product.tpl',
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
    'file:_partials/microdata/product-jsonld.tpl' => 1,
    'file:catalog/_partials/product-flags.tpl' => 1,
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
    'file:catalog/_partials/product-additional-info.tpl' => 1,
    'file:catalog/_partials/product-details.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
    'file:catalog/_partials/product-images-modal.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_617eb81c421196_46460418 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_617147f7a8c115_41307144 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> origin/main
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1086065688617eb81c3e9212_66278382', 'head');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1703769632617147f7a55ea1_94420008', 'head');
>>>>>>> origin/main
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1048330180617eb81c3efc33_83897175', 'head_microdata_special');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1219743839617147f7a5d864_53262216', 'head_microdata_special');
>>>>>>> origin/main
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1401197162617eb81c3f1060_19893957', 'content');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_571449408617147f7a5ee85_81752840', 'content');
>>>>>>> origin/main
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head'} */
<<<<<<< HEAD
class Block_1086065688617eb81c3e9212_66278382 extends Smarty_Internal_Block
=======
class Block_1703769632617147f7a55ea1_94420008 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'head' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1086065688617eb81c3e9212_66278382',
=======
    0 => 'Block_1703769632617147f7a55ea1_94420008',
>>>>>>> origin/main
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta property="og:type" content="product">
  <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
    <meta property="product:pretax_price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_tax_exc'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:pretax_price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['weight'])) && ($_smarty_tpl->tpl_vars['product']->value['weight'] != 0)) {?>
  <meta property="product:weight:value" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:weight:units" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight_unit'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }
}
}
/* {/block 'head'} */
/* {block 'head_microdata_special'} */
<<<<<<< HEAD
class Block_1048330180617eb81c3efc33_83897175 extends Smarty_Internal_Block
=======
class Block_1219743839617147f7a5d864_53262216 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'head_microdata_special' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1048330180617eb81c3efc33_83897175',
=======
    0 => 'Block_1219743839617147f7a5d864_53262216',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:_partials/microdata/product-jsonld.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'head_microdata_special'} */
/* {block 'product_cover_thumbnails'} */
<<<<<<< HEAD
class Block_1541667303617eb81c3f2a23_71063623 extends Smarty_Internal_Block
=======
class Block_955860932617147f7a605f7_75041966 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
              <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'page_content'} */
<<<<<<< HEAD
class Block_1221129068617eb81c3f1f01_78488035 extends Smarty_Internal_Block
=======
class Block_1858020424617147f7a5fd58_81392123 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-flags.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

              <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1541667303617eb81c3f2a23_71063623', 'product_cover_thumbnails', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_955860932617147f7a605f7_75041966', 'product_cover_thumbnails', $this->tplIndex);
>>>>>>> origin/main
?>

              <div class="scroll-box-arrows">
                <i class="material-icons left">&#xE314;</i>
                <i class="material-icons right">&#xE315;</i>
              </div>

            <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
<<<<<<< HEAD
class Block_1378454101617eb81c3f1ab4_74876001 extends Smarty_Internal_Block
=======
class Block_352927825617147f7a5f907_43085872 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <section class="page-content" id="content">
            <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1221129068617eb81c3f1f01_78488035', 'page_content', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1858020424617147f7a5fd58_81392123', 'page_content', $this->tplIndex);
>>>>>>> origin/main
?>

          </section>
        <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_title'} */
<<<<<<< HEAD
class Block_1525278022617eb81c3f58a7_00242912 extends Smarty_Internal_Block
=======
class Block_1191947374617147f7a62317_35461990 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
<<<<<<< HEAD
class Block_412795457617eb81c3f5078_00765724 extends Smarty_Internal_Block
=======
class Block_1869037683617147f7a61ba5_77310970 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <h1 class="h1"><?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1525278022617eb81c3f58a7_00242912', 'page_title', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1191947374617147f7a62317_35461990', 'page_title', $this->tplIndex);
>>>>>>> origin/main
?>
</h1>
            <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
<<<<<<< HEAD
class Block_54668277617eb81c3f4512_89356543 extends Smarty_Internal_Block
=======
class Block_1611347727617147f7a61758_00693817 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_412795457617eb81c3f5078_00765724', 'page_header', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1869037683617147f7a61ba5_77310970', 'page_header', $this->tplIndex);
>>>>>>> origin/main
?>

          <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_prices'} */
<<<<<<< HEAD
class Block_508618957617eb81c3f74a3_36558445 extends Smarty_Internal_Block
=======
class Block_1075874134617147f7a63688_84338429 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php
}
}
/* {/block 'product_prices'} */
/* {block 'product_description_short'} */
<<<<<<< HEAD
class Block_291868820617eb81c3f8121_99406206 extends Smarty_Internal_Block
=======
class Block_199764101617147f7a64218_61838355 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div id="product-description-short-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product-description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
            <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_customization'} */
<<<<<<< HEAD
class Block_1971049372617eb81c3fa9f6_37809307 extends Smarty_Internal_Block
=======
class Block_977585038617147f7a666f6_63660130 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?>
              <?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_variants'} */
<<<<<<< HEAD
class Block_1740528778617eb81c3feff6_08362491 extends Smarty_Internal_Block
=======
class Block_2125276083617147f7a6a224_42485052 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature'} */
<<<<<<< HEAD
class Block_420285080617eb81c402589_78634664 extends Smarty_Internal_Block
=======
class Block_1659156465617147f7a6e7e4_77635094 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value,'showPackProductsPrice'=>$_smarty_tpl->tpl_vars['product']->value['show_price']), 0, true);
?>
                          <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
<<<<<<< HEAD
class Block_1660032991617eb81c3ffbf9_09474469 extends Smarty_Internal_Block
=======
class Block_282782360617147f7a6ae31_20152059 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ($_smarty_tpl->tpl_vars['packItems']->value) {?>
                      <section class="product-pack">
                        <p class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
$_smarty_tpl->tpl_vars['product_pack']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
$_smarty_tpl->tpl_vars['product_pack']->do_else = false;
?>
                          <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_420285080617eb81c402589_78634664', 'product_miniature', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1659156465617147f7a6e7e4_77635094', 'product_miniature', $this->tplIndex);
>>>>>>> origin/main
?>

                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </section>
                    <?php }?>
                  <?php
}
}
/* {/block 'product_pack'} */
/* {block 'product_discounts'} */
<<<<<<< HEAD
class Block_170760402617eb81c404122_55042429 extends Smarty_Internal_Block
=======
class Block_1391969247617147f7a70842_73077307 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php
}
}
/* {/block 'product_discounts'} */
/* {block 'product_add_to_cart'} */
<<<<<<< HEAD
class Block_504322238617eb81c404cb3_75048276 extends Smarty_Internal_Block
=======
class Block_590149632617147f7a713f3_89676618 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_additional_info'} */
<<<<<<< HEAD
class Block_86299243617eb81c405801_23983709 extends Smarty_Internal_Block
=======
class Block_1665950710617147f7a72164_80023550 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-additional-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php
}
}
/* {/block 'product_additional_info'} */
/* {block 'product_refresh'} */
<<<<<<< HEAD
class Block_1146871793617eb81c406782_04880294 extends Smarty_Internal_Block
=======
class Block_1889210920617147f7a72db0_05964916 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
<<<<<<< HEAD
class Block_1756155951617eb81c3fd2d4_76918879 extends Smarty_Internal_Block
=======
class Block_405853564617147f7a68543_77724417 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
                  <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                  <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
                  <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id" class="js-product-customization-id">

                  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1740528778617eb81c3feff6_08362491', 'product_variants', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2125276083617147f7a6a224_42485052', 'product_variants', $this->tplIndex);
>>>>>>> origin/main
?>


                  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1660032991617eb81c3ffbf9_09474469', 'product_pack', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_282782360617147f7a6ae31_20152059', 'product_pack', $this->tplIndex);
>>>>>>> origin/main
?>


                  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170760402617eb81c404122_55042429', 'product_discounts', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1391969247617147f7a70842_73077307', 'product_discounts', $this->tplIndex);
>>>>>>> origin/main
?>


                  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_504322238617eb81c404cb3_75048276', 'product_add_to_cart', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_590149632617147f7a713f3_89676618', 'product_add_to_cart', $this->tplIndex);
>>>>>>> origin/main
?>


                  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86299243617eb81c405801_23983709', 'product_additional_info', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1665950710617147f7a72164_80023550', 'product_additional_info', $this->tplIndex);
>>>>>>> origin/main
?>


                                    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1146871793617eb81c406782_04880294', 'product_refresh', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1889210920617147f7a72db0_05964916', 'product_refresh', $this->tplIndex);
>>>>>>> origin/main
?>

                </form>
              <?php
}
}
/* {/block 'product_buy'} */
/* {block 'hook_display_reassurance'} */
<<<<<<< HEAD
class Block_863379874617eb81c407377_32309733 extends Smarty_Internal_Block
=======
class Block_1266615016617147f7a73843_43718868 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_display_reassurance'} */
/* {block 'product_description'} */
<<<<<<< HEAD
class Block_388918510617eb81c40f2a0_86751084 extends Smarty_Internal_Block
=======
class Block_179316955617147f7a7b355_13130683 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                     <div class="product-description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</div>
                   <?php
}
}
/* {/block 'product_description'} */
/* {block 'product_details'} */
<<<<<<< HEAD
class Block_2057540902617eb81c4100e1_92939002 extends Smarty_Internal_Block
=======
class Block_1721925527617147f7a7c186_67433111 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                   <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-details.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                 <?php
}
}
/* {/block 'product_details'} */
/* {block 'product_attachments'} */
<<<<<<< HEAD
class Block_968198402617eb81c410c86_18386957 extends Smarty_Internal_Block
=======
class Block_561514332617147f7a7cd33_98606079 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                   <?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
                    <div class="tab-pane fade in" id="attachments" role="tabpanel">
                       <section class="product-attachments">
                         <p class="h5 text-uppercase"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</p>
                         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attachments'], 'attachment');
$_smarty_tpl->tpl_vars['attachment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attachment']->value) {
$_smarty_tpl->tpl_vars['attachment']->do_else = false;
?>
                           <div class="attachment">
                             <h4><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></h4>
                             <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['description'], ENT_QUOTES, 'UTF-8');?>
</p>
                             <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
">
                               <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['file_size_formatted'], ENT_QUOTES, 'UTF-8');?>
)
                             </a>
                           </div>
                         <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                       </section>
                     </div>
                   <?php }?>
                 <?php
}
}
/* {/block 'product_attachments'} */
/* {block 'product_tabs'} */
<<<<<<< HEAD
class Block_30369553617eb81c408266_78406461 extends Smarty_Internal_Block
=======
class Block_13285738617147f7a746e7_55086206 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div class="tabs">
                <ul class="nav nav-tabs" role="tablist">
                  <?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?>
                    <li class="nav-item">
                       <a
                         class="nav-link<?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> active js-product-nav-active<?php }?>"
                         data-toggle="tab"
                         href="#description"
                         role="tab"
                         aria-controls="description"
                         <?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> aria-selected="true"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
                    </li>
                  <?php }?>
                  <li class="nav-item">
                    <a
                      class="nav-link<?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> active js-product-nav-active<?php }?>"
                      data-toggle="tab"
                      href="#product-details"
                      role="tab"
                      aria-controls="product-details"
                      <?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> aria-selected="true"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Details','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
                  </li>
                  <?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        data-toggle="tab"
                        href="#attachments"
                        role="tab"
                        aria-controls="attachments"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attachments','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
                    </li>
                  <?php }?>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
$_smarty_tpl->tpl_vars['extra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
$_smarty_tpl->tpl_vars['extra']->do_else = false;
?>
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        data-toggle="tab"
                        href="#extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
"
                        role="tab"
                        aria-controls="extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
                    </li>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>

                <div class="tab-content" id="tab-content">
                 <div class="tab-pane fade in<?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> active js-product-tab-active<?php }?>" id="description" role="tabpanel">
                   <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_388918510617eb81c40f2a0_86751084', 'product_description', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179316955617147f7a7b355_13130683', 'product_description', $this->tplIndex);
>>>>>>> origin/main
?>

                 </div>

                 <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2057540902617eb81c4100e1_92939002', 'product_details', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1721925527617147f7a7c186_67433111', 'product_details', $this->tplIndex);
>>>>>>> origin/main
?>


                 <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_968198402617eb81c410c86_18386957', 'product_attachments', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_561514332617147f7a7cd33_98606079', 'product_attachments', $this->tplIndex);
>>>>>>> origin/main
?>


                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
$_smarty_tpl->tpl_vars['extra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
$_smarty_tpl->tpl_vars['extra']->do_else = false;
?>
                 <div class="tab-pane fade in <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value['attr']['class'], ENT_QUOTES, 'UTF-8');?>
" id="extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
" role="tabpanel" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extra']->value['attr'], 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
"<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>
                   <?php echo $_smarty_tpl->tpl_vars['extra']->value['content'];?>

                 </div>
                 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </div>
            </div>
          <?php
}
}
/* {/block 'product_tabs'} */
/* {block 'product_miniature'} */
<<<<<<< HEAD
class Block_1885005588617eb81c41ca35_82855102 extends Smarty_Internal_Block
=======
class Block_239764061617147f7a87969_49090837 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value,'position'=>$_smarty_tpl->tpl_vars['position']->value), 0, true);
?>
              <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories'} */
<<<<<<< HEAD
class Block_428456611617eb81c41ae57_71780138 extends Smarty_Internal_Block
=======
class Block_2057311066617147f7a85e28_00991720 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
        <section class="product-accessories clearfix">
          <p class="h5 text-uppercase"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You might also like','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
          <div class="products">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory', false, 'position');
$_smarty_tpl->tpl_vars['product_accessory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['product_accessory']->value) {
$_smarty_tpl->tpl_vars['product_accessory']->do_else = false;
?>
              <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1885005588617eb81c41ca35_82855102', 'product_miniature', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_239764061617147f7a87969_49090837', 'product_miniature', $this->tplIndex);
>>>>>>> origin/main
?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </div>
        </section>
      <?php }?>
    <?php
}
}
/* {/block 'product_accessories'} */
/* {block 'product_footer'} */
<<<<<<< HEAD
class Block_1690937554617eb81c41e417_55906803 extends Smarty_Internal_Block
=======
class Block_1925635769617147f7a89345_71526615 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'product_footer'} */
/* {block 'product_images_modal'} */
<<<<<<< HEAD
class Block_741463925617eb81c41f2c9_58215058 extends Smarty_Internal_Block
=======
class Block_689855953617147f7a8a235_11639088 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_footer'} */
<<<<<<< HEAD
class Block_2020372861617eb81c420269_29643421 extends Smarty_Internal_Block
=======
class Block_1834835682617147f7a8b1f0_47761788 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
<<<<<<< HEAD
class Block_1264813546617eb81c41fe25_01935895 extends Smarty_Internal_Block
=======
class Block_1870539482617147f7a8ada4_80729796 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2020372861617eb81c420269_29643421', 'page_footer', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1834835682617147f7a8b1f0_47761788', 'page_footer', $this->tplIndex);
>>>>>>> origin/main
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
<<<<<<< HEAD
class Block_1401197162617eb81c3f1060_19893957 extends Smarty_Internal_Block
=======
class Block_571449408617147f7a5ee85_81752840 extends Smarty_Internal_Block
>>>>>>> origin/main
{
public $subBlocks = array (
  'content' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1401197162617eb81c3f1060_19893957',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1378454101617eb81c3f1ab4_74876001',
  ),
  'page_content' => 
  array (
    0 => 'Block_1221129068617eb81c3f1f01_78488035',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_1541667303617eb81c3f2a23_71063623',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_54668277617eb81c3f4512_89356543',
  ),
  'page_header' => 
  array (
    0 => 'Block_412795457617eb81c3f5078_00765724',
  ),
  'page_title' => 
  array (
    0 => 'Block_1525278022617eb81c3f58a7_00242912',
  ),
  'product_prices' => 
  array (
    0 => 'Block_508618957617eb81c3f74a3_36558445',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_291868820617eb81c3f8121_99406206',
  ),
  'product_customization' => 
  array (
    0 => 'Block_1971049372617eb81c3fa9f6_37809307',
  ),
  'product_buy' => 
  array (
    0 => 'Block_1756155951617eb81c3fd2d4_76918879',
  ),
  'product_variants' => 
  array (
    0 => 'Block_1740528778617eb81c3feff6_08362491',
  ),
  'product_pack' => 
  array (
    0 => 'Block_1660032991617eb81c3ffbf9_09474469',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_420285080617eb81c402589_78634664',
    1 => 'Block_1885005588617eb81c41ca35_82855102',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_170760402617eb81c404122_55042429',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_504322238617eb81c404cb3_75048276',
  ),
  'product_additional_info' => 
  array (
    0 => 'Block_86299243617eb81c405801_23983709',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_1146871793617eb81c406782_04880294',
  ),
  'hook_display_reassurance' => 
  array (
    0 => 'Block_863379874617eb81c407377_32309733',
  ),
  'product_tabs' => 
  array (
    0 => 'Block_30369553617eb81c408266_78406461',
  ),
  'product_description' => 
  array (
    0 => 'Block_388918510617eb81c40f2a0_86751084',
  ),
  'product_details' => 
  array (
    0 => 'Block_2057540902617eb81c4100e1_92939002',
  ),
  'product_attachments' => 
  array (
    0 => 'Block_968198402617eb81c410c86_18386957',
  ),
  'product_accessories' => 
  array (
    0 => 'Block_428456611617eb81c41ae57_71780138',
  ),
  'product_footer' => 
  array (
    0 => 'Block_1690937554617eb81c41e417_55906803',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_741463925617eb81c41f2c9_58215058',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1264813546617eb81c41fe25_01935895',
  ),
  'page_footer' => 
  array (
    0 => 'Block_2020372861617eb81c420269_29643421',
=======
    0 => 'Block_571449408617147f7a5ee85_81752840',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_352927825617147f7a5f907_43085872',
  ),
  'page_content' => 
  array (
    0 => 'Block_1858020424617147f7a5fd58_81392123',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_955860932617147f7a605f7_75041966',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_1611347727617147f7a61758_00693817',
  ),
  'page_header' => 
  array (
    0 => 'Block_1869037683617147f7a61ba5_77310970',
  ),
  'page_title' => 
  array (
    0 => 'Block_1191947374617147f7a62317_35461990',
  ),
  'product_prices' => 
  array (
    0 => 'Block_1075874134617147f7a63688_84338429',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_199764101617147f7a64218_61838355',
  ),
  'product_customization' => 
  array (
    0 => 'Block_977585038617147f7a666f6_63660130',
  ),
  'product_buy' => 
  array (
    0 => 'Block_405853564617147f7a68543_77724417',
  ),
  'product_variants' => 
  array (
    0 => 'Block_2125276083617147f7a6a224_42485052',
  ),
  'product_pack' => 
  array (
    0 => 'Block_282782360617147f7a6ae31_20152059',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_1659156465617147f7a6e7e4_77635094',
    1 => 'Block_239764061617147f7a87969_49090837',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_1391969247617147f7a70842_73077307',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_590149632617147f7a713f3_89676618',
  ),
  'product_additional_info' => 
  array (
    0 => 'Block_1665950710617147f7a72164_80023550',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_1889210920617147f7a72db0_05964916',
  ),
  'hook_display_reassurance' => 
  array (
    0 => 'Block_1266615016617147f7a73843_43718868',
  ),
  'product_tabs' => 
  array (
    0 => 'Block_13285738617147f7a746e7_55086206',
  ),
  'product_description' => 
  array (
    0 => 'Block_179316955617147f7a7b355_13130683',
  ),
  'product_details' => 
  array (
    0 => 'Block_1721925527617147f7a7c186_67433111',
  ),
  'product_attachments' => 
  array (
    0 => 'Block_561514332617147f7a7cd33_98606079',
  ),
  'product_accessories' => 
  array (
    0 => 'Block_2057311066617147f7a85e28_00991720',
  ),
  'product_footer' => 
  array (
    0 => 'Block_1925635769617147f7a89345_71526615',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_689855953617147f7a8a235_11639088',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1870539482617147f7a8ada4_80729796',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1834835682617147f7a8b1f0_47761788',
>>>>>>> origin/main
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">
    <meta content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">

    <div class="row product-container js-product-container">
      <div class="col-md-6">
        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1378454101617eb81c3f1ab4_74876001', 'page_content_container', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_352927825617147f7a5f907_43085872', 'page_content_container', $this->tplIndex);
>>>>>>> origin/main
?>

        </div>
        <div class="col-md-6">
          <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54668277617eb81c3f4512_89356543', 'page_header_container', $this->tplIndex);
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_508618957617eb81c3f74a3_36558445', 'product_prices', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1611347727617147f7a61758_00693817', 'page_header_container', $this->tplIndex);
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1075874134617147f7a63688_84338429', 'product_prices', $this->tplIndex);
>>>>>>> origin/main
?>


          <div class="product-information">
            <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_291868820617eb81c3f8121_99406206', 'product_description_short', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199764101617147f7a64218_61838355', 'product_description_short', $this->tplIndex);
>>>>>>> origin/main
?>


            <?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
              <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1971049372617eb81c3fa9f6_37809307', 'product_customization', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_977585038617147f7a666f6_63660130', 'product_customization', $this->tplIndex);
>>>>>>> origin/main
?>

            <?php }?>

            <div class="product-actions js-product-actions">
              <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1756155951617eb81c3fd2d4_76918879', 'product_buy', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_405853564617147f7a68543_77724417', 'product_buy', $this->tplIndex);
>>>>>>> origin/main
?>


            </div>

            <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_863379874617eb81c407377_32309733', 'hook_display_reassurance', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1266615016617147f7a73843_43718868', 'hook_display_reassurance', $this->tplIndex);
>>>>>>> origin/main
?>


            <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30369553617eb81c408266_78406461', 'product_tabs', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13285738617147f7a746e7_55086206', 'product_tabs', $this->tplIndex);
>>>>>>> origin/main
?>

        </div>
      </div>
    </div>

    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_428456611617eb81c41ae57_71780138', 'product_accessories', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2057311066617147f7a85e28_00991720', 'product_accessories', $this->tplIndex);
>>>>>>> origin/main
?>


    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1690937554617eb81c41e417_55906803', 'product_footer', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1925635769617147f7a89345_71526615', 'product_footer', $this->tplIndex);
>>>>>>> origin/main
?>


    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_741463925617eb81c41f2c9_58215058', 'product_images_modal', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_689855953617147f7a8a235_11639088', 'product_images_modal', $this->tplIndex);
>>>>>>> origin/main
?>


    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1264813546617eb81c41fe25_01935895', 'page_footer_container', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1870539482617147f7a8ada4_80729796', 'page_footer_container', $this->tplIndex);
>>>>>>> origin/main
?>

  </section>

<?php
}
}
/* {/block 'content'} */
}
