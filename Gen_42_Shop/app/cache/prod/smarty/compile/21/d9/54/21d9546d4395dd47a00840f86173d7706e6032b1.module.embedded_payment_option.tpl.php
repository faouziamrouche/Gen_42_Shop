<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 00:31:53
         compiled from "module:amzpayments/views/templates/hooks/embedded_payment_option.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1299559dd4a5939e786-54787590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21d9546d4395dd47a00840f86173d7706e6032b1' => 
    array (
      0 => 'module:amzpayments/views/templates/hooks/embedded_payment_option.tpl',
      1 => 1507454764,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '1299559dd4a5939e786-54787590',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this_hide_button' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59dd4a593aaad6_61681142',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dd4a593aaad6_61681142')) {function content_59dd4a593aaad6_61681142($_smarty_tpl) {?>

<div <?php if ($_smarty_tpl->tpl_vars['this_hide_button']->value) {?> style="display:none;"<?php }?>>
	<span id="pay_with_amazon_list_button"></span>	
	<p>
		<?php echo smartyTranslate(array('s'=>'To pay with Amazon, please click on the Amazon Payments button and log in with your credentials.','mod'=>'amzpayments'),$_smarty_tpl);?>

	</p>
</div>
<script type="text/javascript"> setInterval(checkForAmazonListButton(), 250); </script><?php }} ?>
