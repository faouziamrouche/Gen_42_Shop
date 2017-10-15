<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 18:45:51
         compiled from "C:\xampp\htdocs\gen42-finale\themes\ap_office\modules\leofeature\views\templates\hook\leo_wishlist_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2787959de4abfd8f5b1-43190382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efa6beae35e5033118bdc916529aa77ffdb95989' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gen42-finale\\themes\\ap_office\\modules\\leofeature\\views\\templates\\hook\\leo_wishlist_button.tpl',
      1 => 1507310277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2787959de4abfd8f5b1-43190382',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wishlists' => 0,
    'added_wishlist' => 0,
    'id_wishlist' => 0,
    'leo_wishlist_id_product' => 0,
    'leo_wishlist_id_product_attribute' => 0,
    'wishlists_item' => 0,
    'wishlists_added' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59de4abfdd1380_51527295',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59de4abfdd1380_51527295')) {function content_59de4abfdd1380_51527295($_smarty_tpl) {?>
<div class="wishlist">
<?php if (isset($_smarty_tpl->tpl_vars['wishlists']->value)&&count($_smarty_tpl->tpl_vars['wishlists']->value)>1) {?>
	
	<div class="dropdown leo-wishlist-button-dropdown">
	  <button class="leo-wishlist-button btn-product dropdown-toggle show-list btn<?php if ($_smarty_tpl->tpl_vars['added_wishlist']->value) {?> added<?php }?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-id-wishlist="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_wishlist']->value, ENT_QUOTES, 'UTF-8');?>
" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_wishlist_id_product']->value, ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_wishlist_id_product_attribute']->value, ENT_QUOTES, 'UTF-8');?>
">
			<span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
			<span class="leo-wishlist-bt-content">
				<i class="fa fa-heart" aria-hidden="true"></i>
			</span>
	  </button>
	  <div class="dropdown-menu leo-list-wishlist leo-list-wishlist-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_wishlist_id_product']->value, ENT_QUOTES, 'UTF-8');?>
">
		
		<?php  $_smarty_tpl->tpl_vars['wishlists_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wishlists_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wishlists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wishlists_item']->key => $_smarty_tpl->tpl_vars['wishlists_item']->value) {
$_smarty_tpl->tpl_vars['wishlists_item']->_loop = true;
?>
			<a href="#" class="dropdown-item list-group-item list-group-item-action wishlist-item<?php if (in_array($_smarty_tpl->tpl_vars['wishlists_item']->value['id_wishlist'],$_smarty_tpl->tpl_vars['wishlists_added']->value)) {?> added <?php }?>" data-id-wishlist="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlists_item']->value['id_wishlist'], ENT_QUOTES, 'UTF-8');?>
" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_wishlist_id_product']->value, ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_wishlist_id_product_attribute']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php if (in_array($_smarty_tpl->tpl_vars['wishlists_item']->value['id_wishlist'],$_smarty_tpl->tpl_vars['wishlists_added']->value)) {?><?php echo smartyTranslate(array('s'=>'Remove from Wishlist','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Add to Wishlist','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlists_item']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>			
		<?php } ?>
	  </div>
	</div>
<?php } else { ?>
	<a class="leo-wishlist-button btn-product btn<?php if ($_smarty_tpl->tpl_vars['added_wishlist']->value) {?> added<?php }?>" href="#" data-id-wishlist="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_wishlist']->value, ENT_QUOTES, 'UTF-8');?>
" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_wishlist_id_product']->value, ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_wishlist_id_product_attribute']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['added_wishlist']->value) {?><?php echo smartyTranslate(array('s'=>'Remove from Wishlist','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Add to Wishlist','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
<?php }?>">
		<span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
		<span class="leo-wishlist-bt-content">
			<i class="fa fa-heart" aria-hidden="true"></i>
		</span>
	</a>
<?php }?>
</div>

<?php }} ?>
