<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 18:45:58
         compiled from "modules\leobootstrapmenu\views\widgets\widget_sub_categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2125959de4ac6d3e429-63933991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c478713bc7725cbb86752a2cb64376c5243924a' => 
    array (
      0 => 'modules\\leobootstrapmenu\\views\\widgets\\widget_sub_categories.tpl',
      1 => 1507310272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2125959de4ac6d3e429-63933991',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'subcategories' => 0,
    'widget_heading' => 0,
    'cat' => 0,
    'link' => 0,
    'subcategory' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59de4ac6d97671_55206325',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59de4ac6d97671_55206325')) {function content_59de4ac6d97671_55206325($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['subcategories']->value)) {?>
<div class="widget-subcategories">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<div class="widget-heading">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8');?>

	</div>
	<?php }?>
	<div class="widget-inner">
		<?php if ($_smarty_tpl->tpl_vars['cat']->value->id_category!='') {?>
			<div class="menu-title">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['cat']->value->id_category,$_smarty_tpl->tpl_vars['cat']->value->link_rewrite),'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['cat']->value->name,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="img">
					<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['cat']->value->name,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 
				</a>
			</div>
			<ul>
				<?php  $_smarty_tpl->tpl_vars['subcategory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subcategory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subcategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->key => $_smarty_tpl->tpl_vars['subcategory']->value) {
$_smarty_tpl->tpl_vars['subcategory']->_loop = true;
?>
					<li class="clearfix">
						<a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']),'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['subcategory']->value['name'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="img">
							<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['subcategory']->value['name'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 
						</a>
					</li>
				<?php } ?>

			</ul>
		<?php } else { ?>
			<div class="alert alert-warning">
				<?php echo smartyTranslate(array('s'=>'The ID category does not exist','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>

			</div>
		<?php }?>
	</div>
</div>
<?php }?> <?php }} ?>
