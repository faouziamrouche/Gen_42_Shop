<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 18:46:00
         compiled from "modules\appagebuilder\views\templates\hook\ApBlockLink.tpl" */ ?>
<?php /*%%SmartyHeaderCode:256059de4ac811bad3-17168742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f5fdbf56f5f858fd7bb221c5d0a9163c4e302b2' => 
    array (
      0 => 'modules\\appagebuilder\\views\\templates\\hook\\ApBlockLink.tpl',
      1 => 1507310270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '256059de4ac811bad3-17168742',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formAtts' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59de4ac825a102_88913463',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59de4ac825a102_88913463')) {function content_59de4ac825a102_88913463($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApBlockLink -->
<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error'])&&$_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error']) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_error'])&&$_smarty_tpl->tpl_vars['formAtts']->value['lib_error']) {?>
        <div class="alert alert-warning leo-lib-error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['lib_error'], ENT_QUOTES, 'UTF-8');?>
</div>
    <?php }?>
<?php } else { ?>
    <?php if (!isset($_smarty_tpl->tpl_vars['formAtts']->value['accordion_type'])||$_smarty_tpl->tpl_vars['formAtts']->value['accordion_type']=='full') {?>
        <div class="block ApLink <?php echo htmlspecialchars(isset($_smarty_tpl->tpl_vars['formAtts']->value['class']) ? $_smarty_tpl->tpl_vars['formAtts']->value['class'] : $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape('','html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
            <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])&&!empty($_smarty_tpl->tpl_vars['formAtts']->value['title'])) {?>
                <h4 class="title_block">
                    <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>

                </h4>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title'])&&$_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
                <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
            <?php }?>

            <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['links'])&&count($_smarty_tpl->tpl_vars['formAtts']->value['links'])>0) {?>
                <ul>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formAtts']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['title']&&$_smarty_tpl->tpl_vars['item']->value['link']) {?>
                        <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['link'], ENT_QUOTES, 'UTF-8');?>
" target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['target_type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['item']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</a></li>
                    <?php }?>
                <?php } ?>
                </ul>
            <?php }?>
        </div>
    <?php } elseif (isset($_smarty_tpl->tpl_vars['formAtts']->value['accordion_type'])&&($_smarty_tpl->tpl_vars['formAtts']->value['accordion_type']=='accordion'||$_smarty_tpl->tpl_vars['formAtts']->value['accordion_type']=='accordion_small_screen')) {?>
        <div class="block block-toggler ApLink <?php echo htmlspecialchars(isset($_smarty_tpl->tpl_vars['formAtts']->value['class']) ? $_smarty_tpl->tpl_vars['formAtts']->value['class'] : $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape('','html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['accordion_type']=='accordion_small_screen') {?> accordion_small_screen<?php }?>">
            <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])&&!empty($_smarty_tpl->tpl_vars['formAtts']->value['title'])) {?>
                <div class="title clearfix" data-target="#footer-link-<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" data-toggle="collapse">
                    <h4 class="title_block">
	                <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>

                    </h4>
                    <span class="float-xs-right">
                      <span class="navbar-toggler collapse-icons">
                        <i class="material-icons add">&#xE313;</i>
                        <i class="material-icons remove">&#xE316;</i>
                      </span>
                    </span>
                </div>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title'])&&$_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
                <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['links'])&&count($_smarty_tpl->tpl_vars['formAtts']->value['links'])>0) {?>
                <ul class="collapse" id="footer-link-<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formAtts']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['title']&&$_smarty_tpl->tpl_vars['item']->value['link']) {?>
                            <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['link'], ENT_QUOTES, 'UTF-8');?>
" target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['target_type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['item']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</a></li>
                        <?php }?>
                    <?php } ?>
                </ul>
            <?php }?>
        </div>
    <?php }?>
<?php }?><?php }} ?>
