<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 18:45:58
         compiled from "module:ps_currencyselector/ps_currencyselector.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2574759de4ac6385a75-30495460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b97756c07f8c7dd53da6530f78f67ddd242f77c9' => 
    array (
      0 => 'module:ps_currencyselector/ps_currencyselector.tpl',
      1 => 1507310277,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '2574759de4ac6385a75-30495460',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currency' => 0,
    'current_currency' => 0,
    'currencies' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59de4ac63b66c2_79129958',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59de4ac63b66c2_79129958')) {function content_59de4ac63b66c2_79129958($_smarty_tpl) {?>

<div class="currency-selector dropdown js-dropdown popup-over">
  <a href="javascript:void(0)" data-toggle="dropdown" class="popup-title"  title="<?php echo smartyTranslate(array('s'=>'Currency','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
">
    <span class="hidden-xs-down"><?php echo smartyTranslate(array('s'=>'Currency:','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</span>
    <span class="_gray-darker"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
 </span>
    <i class="material-icons">&#xE5C5;</i>
  </a>
  <ul class="popup-content dropdown-menu">  
	<?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->_loop = true;
?>
	<li <?php if ($_smarty_tpl->tpl_vars['currency']->value['current']) {?> class="current" <?php }?>>
	  <a title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['name'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="dropdown-item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
 </a>
	</li>
	<?php } ?>
  </ul>
</div><?php }} ?>
