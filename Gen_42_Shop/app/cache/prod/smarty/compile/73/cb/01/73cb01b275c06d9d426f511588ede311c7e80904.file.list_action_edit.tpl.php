<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 00:30:37
         compiled from "C:\xampp\htdocs\gen42-finale\admin158xtsx7w\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2886159dd4a0db5b113-63864317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73cb01b275c06d9d426f511588ede311c7e80904' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gen42-finale\\admin158xtsx7w\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1507309526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2886159dd4a0db5b113-63864317',
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
  'unifunc' => 'content_59dd4a0db65149_88428934',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dd4a0db65149_88428934')) {function content_59dd4a0db65149_88428934($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
