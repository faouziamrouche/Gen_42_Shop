<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 00:25:21
         compiled from "modules\gmaps\views\templates\front\gmaps-footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2234159d55fd1c2b038-99580029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '222ed55f80dc50897beed360194fa03bdccd5970' => 
    array (
      0 => 'modules\\gmaps\\views\\templates\\front\\gmaps-footer.tpl',
      1 => 1487616650,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2234159d55fd1c2b038-99580029',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'psversion' => 0,
    'max' => 0,
    'min' => 0,
    'nbr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d55fd1c40c82_20861735',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d55fd1c40c82_20861735')) {function content_59d55fd1c40c82_20861735($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['psversion']->value>"1.6.0.0") {?>
	<section class="footer-block col-xs-12 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['max']->value, ENT_QUOTES, 'UTF-8');?>
" id="block_maps">
		<h4><?php echo smartyTranslate(array('s'=>'Our location','mod'=>'gmaps'),$_smarty_tpl);?>
</h4>
		<iframe src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['min']->value), ENT_QUOTES, 'UTF-8');?>
" width="100%" height="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['nbr']->value), ENT_QUOTES, 'UTF-8');?>
" frameborder="0" style="border:0" ></iframe>
	</section>
    <?php } else { ?>
    <section class="footer-block col-xs-12 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['max']->value, ENT_QUOTES, 'UTF-8');?>
" id="block_maps_c" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['max']->value, ENT_QUOTES, 'UTF-8');?>
">
		<h4><?php echo smartyTranslate(array('s'=>'Our location','mod'=>'gmaps'),$_smarty_tpl);?>
</h4>
		<iframe src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['min']->value, ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['max']->value), ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['nbr']->value), ENT_QUOTES, 'UTF-8');?>
" frameborder="0" style="border:0" ></iframe>
	</section>
    <?php }?><?php }} ?>
