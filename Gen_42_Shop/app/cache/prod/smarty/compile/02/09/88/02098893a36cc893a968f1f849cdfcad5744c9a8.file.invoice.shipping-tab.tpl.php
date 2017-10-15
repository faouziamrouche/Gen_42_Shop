<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 00:05:53
         compiled from "C:\xampp\htdocs\gen42-finale\pdf\\invoice.shipping-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1531659dd4441d6a095-90845678%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02098893a36cc893a968f1f849cdfcad5744c9a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gen42-finale\\pdf\\\\invoice.shipping-tab.tpl',
      1 => 1507309546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1531659dd4441d6a095-90845678',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'carrier' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59dd4441d711d9_23987463',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dd4441d711d9_23987463')) {function content_59dd4441d711d9_23987463($_smarty_tpl) {?>
<table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo smartyTranslate(array('s'=>'Carrier','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }} ?>
