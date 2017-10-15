<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 18:46:00
         compiled from "modules\appagebuilder\views\templates\hook\ApProductTag.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2924159de4ac82c1162-27360374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c50281d7887ac8633139eb74972586f370aaf5d' => 
    array (
      0 => 'modules\\appagebuilder\\views\\templates\\hook\\ApProductTag.tpl',
      1 => 1507310270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2924159de4ac82c1162-27360374',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formAtts' => 0,
    'tag' => 0,
    'leolink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59de4ac837be05_27268032',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59de4ac837be05_27268032')) {function content_59de4ac837be05_27268032($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApProductTag.tpl -->
<div <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['form_id'])&&$_smarty_tpl->tpl_vars['formAtts']->value['form_id']) {?> id="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8');?>
"<?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['class'])) {?> class="block <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['class'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])&&$_smarty_tpl->tpl_vars['formAtts']->value['title']) {?>
        <h4 class="title_block"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['title'],'html','UTF-8');?>
</h4>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title'])&&$_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
        <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
    <?php }?>
    
	<p class="block_content">
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['tags'])&&$_smarty_tpl->tpl_vars['formAtts']->value['tags']) {?>
        <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formAtts']->value['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tag']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['tag']->iteration=0;
 $_smarty_tpl->tpl_vars['tag']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
 $_smarty_tpl->tpl_vars['tag']->iteration++;
 $_smarty_tpl->tpl_vars['tag']->index++;
 $_smarty_tpl->tpl_vars['tag']->first = $_smarty_tpl->tpl_vars['tag']->index === 0;
 $_smarty_tpl->tpl_vars['tag']->last = $_smarty_tpl->tpl_vars['tag']->iteration === $_smarty_tpl->tpl_vars['tag']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['first'] = $_smarty_tpl->tpl_vars['tag']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['tag']->last;
?>
            <a href="<?php ob_start();?><?php echo htmlspecialchars(urlencode($_smarty_tpl->tpl_vars['tag']->value['name']), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp1=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['leolink']->value->getPageLink('search',true,null,"tag=".$_tmp1),'html'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'More about','mod'=>'appagebuilder'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['tag']->value['name'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['class'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']) {?>last_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']) {?>first_item<?php } else { ?>item<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['tag']->value['name'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</a>
        <?php } ?>
    <?php } else { ?>
        <?php echo smartyTranslate(array('s'=>'No tags have been specified yet.','mod'=>'appagebuilder'),$_smarty_tpl);?>

    <?php }?>
	</p>
</div><?php }} ?>
