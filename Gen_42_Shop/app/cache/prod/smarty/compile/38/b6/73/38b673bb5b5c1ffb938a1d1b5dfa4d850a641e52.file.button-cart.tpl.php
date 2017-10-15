<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 15:13:09
         compiled from "C:\xampp\htdocs\gen42-finale\themes\wt_omartsimple\templates\catalog\_partials\customize\button-cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2534759d62fe5674035-38203868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38b673bb5b5c1ffb938a1d1b5dfa4d850a641e52' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gen42-finale\\themes\\wt_omartsimple\\templates\\catalog\\_partials\\customize\\button-cart.tpl',
      1 => 1507154861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2534759d62fe5674035-38203868',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'configuration' => 0,
    'urls' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d62fe5681422_71626699',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d62fe5681422_71626699')) {function content_59d62fe5681422_71626699($_smarty_tpl) {?>

<div class="product-add-to-cart">
  <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
    
		  
		  <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
               
				<div class="product-quantity" style="display:none;">
				 <input type="hidden" name="token" value="798061f062ce6afdfe51b0274b69019c">
                <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
                <input type="hidden" name="id_customization" value="0" id="product_customization_id">
                <input type="hidden" name="qty" id="quantity_wanted" value="1" class="input-group"  min="1"  />
				</div>
                 <a href="javascript:void(0);" class="button ajax_add_to_cart_button add-to-cart btn-default" data-button-action="add-to-cart">
					<span><?php echo smartyTranslate(array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</span>
					
				  </a>

            </form>
    
  <?php }?>
</div>
<?php }} ?>
