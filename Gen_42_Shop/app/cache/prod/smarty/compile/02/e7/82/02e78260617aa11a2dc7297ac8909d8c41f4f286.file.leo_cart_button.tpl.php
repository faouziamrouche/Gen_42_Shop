<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 18:45:51
         compiled from "C:\xampp\htdocs\gen42-finale\themes\ap_office\modules\leofeature\views\templates\hook\leo_cart_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1414159de4abfe30d25-45444929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02e78260617aa11a2dc7297ac8909d8c41f4f286' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gen42-finale\\themes\\ap_office\\modules\\leofeature\\views\\templates\\hook\\leo_cart_button.tpl',
      1 => 1507310277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1414159de4abfe30d25-45444929',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link_cart' => 0,
    'static_token' => 0,
    'leo_cart_product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59de4abfe7b2e3_83970040',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59de4abfe7b2e3_83970040')) {function content_59de4abfe7b2e3_83970040($_smarty_tpl) {?>

<div class="button-container cart">
	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_cart']->value, ENT_QUOTES, 'UTF-8');?>
" method="post">
		<input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_cart_product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
" class="quantity_product quantity_product_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_cart_product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" name="quantity_product">
		<input type="hidden" value="<?php if (isset($_smarty_tpl->tpl_vars['leo_cart_product']->value['product_attribute_minimal_quantity'])&&$_smarty_tpl->tpl_vars['leo_cart_product']->value['product_attribute_minimal_quantity']>$_smarty_tpl->tpl_vars['leo_cart_product']->value['minimal_quantity']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_cart_product']->value['product_attribute_minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_cart_product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
<?php }?>" class="minimal_quantity minimal_quantity_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_cart_product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" name="minimal_quantity">
		<input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_cart_product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" class="id_product_attribute id_product_attribute_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_cart_product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" name="id_product_attribute">
		<input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_cart_product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" class="id_product" name="id_product">
		<input type="hidden" name="id_customization" value="<?php if ($_smarty_tpl->tpl_vars['leo_cart_product']->value['id_customization']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_cart_product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
<?php }?>" class="product_customization_id">
			
		<input type="hidden" class="input-group form-control qty qty_product qty_product_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_cart_product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" name="qty" value="<?php if (isset($_smarty_tpl->tpl_vars['leo_cart_product']->value['wishlist_quantity'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_cart_product']->value['wishlist_quantity'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['leo_cart_product']->value['product_attribute_minimal_quantity']&&$_smarty_tpl->tpl_vars['leo_cart_product']->value['product_attribute_minimal_quantity']>$_smarty_tpl->tpl_vars['leo_cart_product']->value['minimal_quantity']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_cart_product']->value['product_attribute_minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_cart_product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
<?php }?><?php }?>" data-min="<?php if ($_smarty_tpl->tpl_vars['leo_cart_product']->value['product_attribute_minimal_quantity']&&$_smarty_tpl->tpl_vars['leo_cart_product']->value['product_attribute_minimal_quantity']>$_smarty_tpl->tpl_vars['leo_cart_product']->value['minimal_quantity']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_cart_product']->value['product_attribute_minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_cart_product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
<?php }?>">
		  <button class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_cart_product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
<?php if (!$_smarty_tpl->tpl_vars['leo_cart_product']->value['add_to_cart_url']) {?> disabled<?php }?>" data-button-action="add-to-cart" type="submit">
			<span class="leo-loading cssload-speeding-wheel"></span>
			<span class="leo-bt-cart-content">
				<i class="fa fa-shopping-cart"></i>
				<?php echo smartyTranslate(array('s'=>'Add to Cart','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

			</span>
		</button>
		
	</form>
</div>

<?php }} ?>
