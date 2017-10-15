<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 00:31:24
         compiled from "C:\xampp\htdocs\gen42-finale\themes\ap_office\templates\checkout\_partials\cart-summary-items-subtotal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:504059dd4a3c6e29a7-70383246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35f6e8819125f6aae72d64c49c76b1af4850cf99' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gen42-finale\\themes\\ap_office\\templates\\checkout\\_partials\\cart-summary-items-subtotal.tpl',
      1 => 1507310278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '504059dd4a3c6e29a7-70383246',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59dd4a3c72fea3_54703502',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dd4a3c72fea3_54703502')) {function content_59dd4a3c72fea3_54703502($_smarty_tpl) {?>

  <div class="card-block cart-summary-line cart-summary-items-subtotal clearfix" id="items-subtotal">
    <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['summary_string'], ENT_QUOTES, 'UTF-8');?>
</span>
    <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['amount'], ENT_QUOTES, 'UTF-8');?>
</span>
  </div>

<?php }} ?>
