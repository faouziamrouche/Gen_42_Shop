<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 15:14:41
         compiled from "modules\wtcustomhtml\views\templates\hook\wtcustomhtml_displaynav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:548859d63041a25fe1-62978490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71d20c30f4a8e82bfdc63da875a5daa147274965' => 
    array (
      0 => 'modules\\wtcustomhtml\\views\\templates\\hook\\wtcustomhtml_displaynav.tpl',
      1 => 1507154857,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '548859d63041a25fe1-62978490',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'block_list' => 0,
    'block' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d63041a38030_15474792',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d63041a38030_15474792')) {function content_59d63041a38030_15474792($_smarty_tpl) {?>

<!-- Static Block module -->
<?php  $_smarty_tpl->tpl_vars['block'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['block']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['block']->key => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->_loop = true;
?>
	<?php if (isset($_smarty_tpl->tpl_vars['block']->value['content'])) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['block']->value['content'],'quotes','UTF-8');?>

	<?php }?>
<?php } ?>
<!-- /Static block module --><?php }} ?>
