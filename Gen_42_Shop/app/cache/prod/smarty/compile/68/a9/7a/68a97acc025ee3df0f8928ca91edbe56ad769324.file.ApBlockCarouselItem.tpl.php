<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 18:45:59
         compiled from "C:\xampp\htdocs\gen42-finale\modules\appagebuilder\views\templates\hook\\ApBlockCarouselItem.tpl" */ ?>
<?php /*%%SmartyHeaderCode:627559de4ac7d94660-56068897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68a97acc025ee3df0f8928ca91edbe56ad769324' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gen42-finale\\modules\\appagebuilder\\views\\templates\\hook\\\\ApBlockCarouselItem.tpl',
      1 => 1507310270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '627559de4ac7d94660-56068897',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formAtts' => 0,
    'carouselName' => 0,
    'NumCount' => 0,
    'itemsperpage' => 0,
    'Num' => 0,
    'sliders' => 0,
    'nbItemsPerLine' => 0,
    'scolumn' => 0,
    'slider' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59de4ac8067624_67610195',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59de4ac8067624_67610195')) {function content_59de4ac8067624_67610195($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApBlockCarouselItem -->
<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])&&$_smarty_tpl->tpl_vars['formAtts']->value['title']) {?>
	<h4 class="title_block"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</h4>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title'])&&$_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
    <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
<?php }?>
<div class="block_content">
<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['descript'])) {?>
	<div><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['descript'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</div>
<?php }?>
<div data-ride="carousel" class="carousel slide" id="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['carouselName']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
	<?php $_smarty_tpl->tpl_vars['NumCount'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['formAtts']->value['slides']), null, 0);?>
	<?php if ($_smarty_tpl->tpl_vars['NumCount']->value>$_smarty_tpl->tpl_vars['itemsperpage']->value) {?>
		<div class="direction">
			<a class="carousel-control left" href="#<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['carouselName']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" data-slide="prev">
				<span class="icon-prev hidden-xs" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control right" href="#<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['carouselName']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" data-slide="next">
				<span class="icon-next" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	<?php }?>
	<div class="carousel-inner">
	<?php $_smarty_tpl->tpl_vars['Num'] = new Smarty_variable(array_chunk($_smarty_tpl->tpl_vars['formAtts']->value['slides'],$_smarty_tpl->tpl_vars['itemsperpage']->value), null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['sliders'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sliders']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Num']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['sliders']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['sliders']->key => $_smarty_tpl->tpl_vars['sliders']->value) {
$_smarty_tpl->tpl_vars['sliders']->_loop = true;
 $_smarty_tpl->tpl_vars['sliders']->index++;
 $_smarty_tpl->tpl_vars['sliders']->first = $_smarty_tpl->tpl_vars['sliders']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['val']['first'] = $_smarty_tpl->tpl_vars['sliders']->first;
?>
		<div class="carousel-item <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['val']['first']) {?>active<?php }?>">
			<?php  $_smarty_tpl->tpl_vars['slider'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slider']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sliders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['slider']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['slider']->iteration=0;
 $_smarty_tpl->tpl_vars['slider']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sliders"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['slider']->key => $_smarty_tpl->tpl_vars['slider']->value) {
$_smarty_tpl->tpl_vars['slider']->_loop = true;
 $_smarty_tpl->tpl_vars['slider']->iteration++;
 $_smarty_tpl->tpl_vars['slider']->index++;
 $_smarty_tpl->tpl_vars['slider']->first = $_smarty_tpl->tpl_vars['slider']->index === 0;
 $_smarty_tpl->tpl_vars['slider']->last = $_smarty_tpl->tpl_vars['slider']->iteration === $_smarty_tpl->tpl_vars['slider']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sliders"]['first'] = $_smarty_tpl->tpl_vars['slider']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sliders"]['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sliders"]['last'] = $_smarty_tpl->tpl_vars['slider']->last;
?>
				<?php if ($_smarty_tpl->tpl_vars['nbItemsPerLine']->value==1||$_smarty_tpl->getVariable('smarty')->value['foreach']['sliders']['first']||$_smarty_tpl->getVariable('smarty')->value['foreach']['sliders']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value==1) {?>
					<div class="row">
				<?php }?>
				<div class="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['scolumn']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
					<?php if ($_smarty_tpl->tpl_vars['slider']->value['link']) {?>
					<a title="<?php echo smartyTranslate(array('s'=>'%s','sprintf'=>array($_smarty_tpl->tpl_vars['slider']->value['title']),'mod'=>'appagebuilder'),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['is_open']) {?>target="_blank"<?php }?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['link'], ENT_QUOTES, 'UTF-8');?>
">
					<?php }?>
					
					<?php if (isset($_smarty_tpl->tpl_vars['slider']->value['image'])&&!empty($_smarty_tpl->tpl_vars['slider']->value['image'])) {?>
						<img class="img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slider']->value['image'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" alt="<?php if (isset($_smarty_tpl->tpl_vars['slider']->value['title'])) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slider']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>"/>
					<?php }?>
					<?php if (isset($_smarty_tpl->tpl_vars['slider']->value['title'])&&!empty($_smarty_tpl->tpl_vars['slider']->value['title'])) {?>
						<div class="title"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slider']->value['title'],'html','UTF-8');?>
</div>
					<?php }?>
					<?php if (isset($_smarty_tpl->tpl_vars['slider']->value['descript'])&&!empty($_smarty_tpl->tpl_vars['slider']->value['descript'])) {?>
						<div class="descript"><?php echo $_smarty_tpl->tpl_vars['slider']->value['descript'];?>
</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['slider']->value['link']) {?>
					</a>
					<?php }?>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['nbItemsPerLine']->value==1||$_smarty_tpl->getVariable('smarty')->value['foreach']['sliders']['last']||$_smarty_tpl->getVariable('smarty')->value['foreach']['sliders']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value==0) {?>
					</div>
				<?php }?>
			<?php } ?>
		</div>
	<?php } ?>
</div>
</div>
</div>
<?php }} ?>
