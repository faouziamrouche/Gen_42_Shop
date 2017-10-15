<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 15:14:41
         compiled from "module:wtpagetitle/views/templates/hook/wtpagetitle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2153759d63041d97e17-61575380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3872ca5585bf40a710de72c1c55fd7778da72dd1' => 
    array (
      0 => 'module:wtpagetitle/views/templates/hook/wtpagetitle.tpl',
      1 => 1507154857,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '2153759d63041d97e17-61575380',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d63041d9ea25_66965044',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d63041d9ea25_66965044')) {function content_59d63041d9ea25_66965044($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['page_title']->value!='') {?>
	<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['page_title']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>

<?php }?><?php }} ?>
