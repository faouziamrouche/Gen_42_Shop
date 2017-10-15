<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 18:45:57
         compiled from "modules\leobootstrapmenu\views\templates\hook\javascript_parameter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179959de4ac5353f21-93389807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7badd9c6c70f2d96d1e73c289a2e2da8365eab83' => 
    array (
      0 => 'modules\\leobootstrapmenu\\views\\templates\\hook\\javascript_parameter.tpl',
      1 => 1507310272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179959de4ac5353f21-93389807',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'current_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59de4ac53bbde0_32729783',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59de4ac53bbde0_32729783')) {function content_59de4ac53bbde0_32729783($_smarty_tpl) {?>
<script type="text/javascript">
	
	var FancyboxI18nClose = "<?php echo smartyTranslate(array('s'=>'Close','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
";
	var FancyboxI18nNext = "<?php echo smartyTranslate(array('s'=>'Next','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
";
	var FancyboxI18nPrev = "<?php echo smartyTranslate(array('s'=>'Previous','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
";
	var current_link = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_link']->value, ENT_QUOTES, 'UTF-8');?>
";		
	var currentURL = window.location;
	currentURL = String(currentURL);
	currentURL = currentURL.replace("https://","").replace("http://","").replace("www.","").replace( /#\w*/, "" );
	current_link = current_link.replace("https://","").replace("http://","").replace("www.","");
	var text_warning_select_txt = "<?php echo smartyTranslate(array('s'=>'Please select One to remove?','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
";
	var text_confirm_remove_txt = "<?php echo smartyTranslate(array('s'=>'Are you sure to remove footer row?','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
";
	var close_bt_txt = "<?php echo smartyTranslate(array('s'=>'Close','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
";
	var list_menu = [];
	var list_menu_tmp = {};
	var list_tab = [];
	var isHomeMenu = 0;
	
</script><?php }} ?>
