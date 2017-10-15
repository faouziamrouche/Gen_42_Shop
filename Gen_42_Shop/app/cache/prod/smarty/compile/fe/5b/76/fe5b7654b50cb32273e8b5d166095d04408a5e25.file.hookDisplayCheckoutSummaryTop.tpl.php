<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 00:31:53
         compiled from "modules\ps_legalcompliance\views\templates\hook\hookDisplayCheckoutSummaryTop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1394559dd4a594bdcc6-16440654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe5b7654b50cb32273e8b5d166095d04408a5e25' => 
    array (
      0 => 'modules\\ps_legalcompliance\\views\\templates\\hook\\hookDisplayCheckoutSummaryTop.tpl',
      1 => 1507309543,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1394559dd4a594bdcc6-16440654',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link_shopping_cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59dd4a594c6747_10943316',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dd4a594c6747_10943316')) {function content_59dd4a594c6747_10943316($_smarty_tpl) {?>

 <h5 class="aeuc_scart"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_shopping_cart']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'My shopping cart','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl);?>
</a></h5>
<?php }} ?>
