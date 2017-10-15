<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 00:31:24
         compiled from "modules\ps_legalcompliance\views\templates\hook\hookDisplayCartPriceBlock_shipping_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3147559dd4a3c69e952-03485717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdf77e10aa8e82c17c318c18b81a17d60264a731' => 
    array (
      0 => 'modules\\ps_legalcompliance\\views\\templates\\hook\\hookDisplayCartPriceBlock_shipping_details.tpl',
      1 => 1507309543,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3147559dd4a3c69e952-03485717',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59dd4a3c6af454_75375981',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dd4a3c6af454_75375981')) {function content_59dd4a3c6af454_75375981($_smarty_tpl) {?>

 <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value, ENT_QUOTES, 'UTF-8');?>
" target="_blank">
    <?php echo smartyTranslate(array('s'=>'(Under conditions)','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl);?>

 </a>
<?php }} ?>
