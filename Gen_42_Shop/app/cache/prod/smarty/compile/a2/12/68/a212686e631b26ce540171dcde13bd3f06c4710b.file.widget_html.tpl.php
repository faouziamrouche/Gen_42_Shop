<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 18:45:58
         compiled from "modules\leobootstrapmenu\views\widgets\widget_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2608859de4ac6dbd2b7-10872599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a212686e631b26ce540171dcde13bd3f06c4710b' => 
    array (
      0 => 'modules\\leobootstrapmenu\\views\\widgets\\widget_html.tpl',
      1 => 1507310272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2608859de4ac6dbd2b7-10872599',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'html' => 0,
    'widget_heading' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59de4ac6de98c0_25945640',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59de4ac6de98c0_25945640')) {function content_59de4ac6de98c0_25945640($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<div class="menu-title">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8');?>

	</div>
	<?php }?>
	<div class="widget-inner">
		<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
