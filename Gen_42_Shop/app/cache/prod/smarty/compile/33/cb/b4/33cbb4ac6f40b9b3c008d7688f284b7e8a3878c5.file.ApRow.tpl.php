<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 18:45:58
         compiled from "modules\appagebuilder\views\templates\hook\ApRow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1760959de4ac64efbf0-47657546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33cbb4ac6f40b9b3c008d7688f284b7e8a3878c5' => 
    array (
      0 => 'modules\\appagebuilder\\views\\templates\\hook\\ApRow.tpl',
      1 => 1507310270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1760959de4ac64efbf0-47657546',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formAtts' => 0,
    'apContent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59de4ac6603cb8_85712018',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59de4ac6603cb8_85712018')) {function content_59de4ac6603cb8_85712018($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['container'])&&$_smarty_tpl->tpl_vars['formAtts']->value['container']) {?>
<div class="wrapper" <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bg_config'])&&$_smarty_tpl->tpl_vars['formAtts']->value['bg_config']=="fullwidth"&&isset($_smarty_tpl->tpl_vars['formAtts']->value['bg_data'])&&$_smarty_tpl->tpl_vars['formAtts']->value['bg_data']) {?>style="background:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['bg_data'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
     <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['parallax'])&&$_smarty_tpl->tpl_vars['formAtts']->value['parallax']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['parallax'], ENT_QUOTES, 'UTF-8');?>
<?php }?>>
	 <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bg_config'])&&$_smarty_tpl->tpl_vars['formAtts']->value['bg_config']=="fullwidth") {?>
        <?php $_smarty_tpl->createLocalArrayVariable('formAtts', null, 0);
$_smarty_tpl->tpl_vars['formAtts']->value['bg_data'] = '';?>
        <?php $_smarty_tpl->createLocalArrayVariable('formAtts', null, 0);
$_smarty_tpl->tpl_vars['formAtts']->value['parallax'] = '';?>
    <?php }?>
<div class="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['container'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
<?php }?>
    <div<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['id'])&&$_smarty_tpl->tpl_vars['formAtts']->value['id']) {?> id="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
        class="<?php echo htmlspecialchars(isset($_smarty_tpl->tpl_vars['formAtts']->value['class']) ? $_smarty_tpl->tpl_vars['formAtts']->value['class'] : $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape('','html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars(isset($_smarty_tpl->tpl_vars['formAtts']->value['animation'])&&$_smarty_tpl->tpl_vars['formAtts']->value['animation']!='none' ? ' has-animation' : '', ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['bg_class'], ENT_QUOTES, 'UTF-8');?>
"
	<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['animation'])&&$_smarty_tpl->tpl_vars['formAtts']->value['animation']!='none') {?> data-animation="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['animation'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['animation_delay']!='') {?> data-animation-delay="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['animation_delay'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" <?php }?><?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bg_data'])&&$_smarty_tpl->tpl_vars['formAtts']->value['bg_data']) {?>data-bg="<?php echo $_smarty_tpl->tpl_vars['formAtts']->value['bg_data'];?>
"<?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['parallax'])&&$_smarty_tpl->tpl_vars['formAtts']->value['parallax']) {?><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['parallax'];?>
<?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['css_style'])&&$_smarty_tpl->tpl_vars['formAtts']->value['css_style']) {?><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['css_style'];?>
<?php }?>
        >
        <?php echo $_smarty_tpl->tpl_vars['formAtts']->value['bg_video'];?>

        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])&&$_smarty_tpl->tpl_vars['formAtts']->value['title']) {?>
        <h4 class="title_block"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['title'];?>
</h4>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title'])&&$_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
            <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['content_html'])) {?>
            <?php echo $_smarty_tpl->tpl_vars['formAtts']->value['content_html'];?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>

        <?php }?>
    </div>
<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['container'])&&$_smarty_tpl->tpl_vars['formAtts']->value['container']) {?>
</div>
</div>
<?php }?><?php }} ?>
