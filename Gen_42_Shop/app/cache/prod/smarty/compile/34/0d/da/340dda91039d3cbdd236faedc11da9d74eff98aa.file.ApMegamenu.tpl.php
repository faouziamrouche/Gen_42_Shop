<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 18:45:59
         compiled from "modules\appagebuilder\views\templates\hook\ApMegamenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:535159de4ac7bda6d3-85371925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '340dda91039d3cbdd236faedc11da9d74eff98aa' => 
    array (
      0 => 'modules\\appagebuilder\\views\\templates\\hook\\ApMegamenu.tpl',
      1 => 1507310270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '535159de4ac7bda6d3-85371925',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formAtts' => 0,
    'content_megamenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59de4ac7c3c2e3_94563174',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59de4ac7c3c2e3_94563174')) {function content_59de4ac7c3c2e3_94563174($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApSlideShow -->
<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error'])&&$_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error']) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_error'])&&$_smarty_tpl->tpl_vars['formAtts']->value['lib_error']) {?>
        <div class="alert alert-warning leo-lib-error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['lib_error'], ENT_QUOTES, 'UTF-8');?>
</div>
    <?php }?>
<?php } else { ?>
<div id="memgamenu-<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="ApMegamenu">
	<?php if (isset($_smarty_tpl->tpl_vars['content_megamenu']->value)) {?>
		<?php echo $_smarty_tpl->tpl_vars['content_megamenu']->value;?>

	<?php }?>
</div>
<?php }?><?php }} ?>
