<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 00:28:51
         compiled from "C:\xampp\htdocs\gen42-finale\admin158xtsx7w\themes\default\template\helpers\list\list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2308359dd49a3eb1795-75281418%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a0f6b7a3f622d024cf7e4a46e1498eee981b13a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gen42-finale\\admin158xtsx7w\\themes\\default\\template\\helpers\\list\\list_action_view.tpl',
      1 => 1507309526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2308359dd49a3eb1795-75281418',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59dd49a3ec0ef6_48137497',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dd49a3ec0ef6_48137497')) {function content_59dd49a3ec0ef6_48137497($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
