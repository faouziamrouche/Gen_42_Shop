<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 15:13:09
         compiled from "module:wtslideshow/views/templates/hook/wtslideshow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1051659d62fe50b5f79-24646965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '417c66bf5da6af8c7fab64e615df60556b73fc44' => 
    array (
      0 => 'module:wtslideshow/views/templates/hook/wtslideshow.tpl',
      1 => 1507154858,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '1051659d62fe50b5f79-24646965',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'slier_option_arr' => 0,
    'width' => 0,
    'height' => 0,
    'wtslideshow_slides' => 0,
    'slide' => 0,
    'transition2d' => 0,
    'transition3d' => 0,
    'wtslideshow_path' => 0,
    'captionItem' => 0,
    'id_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d62fe53189d7_78260902',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d62fe53189d7_78260902')) {function content_59d62fe53189d7_78260902($_smarty_tpl) {?>

<!-- Module HomeSlider -->
<?php $_smarty_tpl->tpl_vars['id_lang'] = new Smarty_variable(Context::getContext()->language->id, null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['slier_option_arr']->value['fullwidth']=='true') {?>
	<?php $_smarty_tpl->tpl_vars['width'] = new Smarty_variable('100%', null, 0);?>
<div id="full-slider-wrapper">
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['width'] = new Smarty_variable(($_smarty_tpl->tpl_vars['slier_option_arr']->value['width']).('px'), null, 0);?>
<div id="slider-wrapper" class="">
<?php }?>
<?php $_smarty_tpl->tpl_vars['height'] = new Smarty_variable(($_smarty_tpl->tpl_vars['slier_option_arr']->value['height']).('px'), null, 0);?>
	<div id="layerslider" style="width:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['width']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
;height:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['height']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
;">
		<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wtslideshow_slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['slide']->value['transition3d']!='') {?>
			<?php $_smarty_tpl->tpl_vars['transition2d'] = new Smarty_variable('all', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['transition3d'] = new Smarty_variable($_smarty_tpl->tpl_vars['slide']->value['transition3d'], null, 0);?>
		<?php } else { ?>
			<?php $_smarty_tpl->tpl_vars['transition2d'] = new Smarty_variable($_smarty_tpl->tpl_vars['slide']->value['transition2d'], null, 0);?>
			<?php $_smarty_tpl->tpl_vars['transition3d'] = new Smarty_variable('', null, 0);?>
		<?php }?>
		<div class="ls-slide" data-ls="slidedelay:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slide']->value['slidedelay'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
;timeshift:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slide']->value['timeshift'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
;transition2d:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['transition2d']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
;transition3d:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['transition3d']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
			<img src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['wtslideshow_path']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
views/img/sliderimages/<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slide']->value['image'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="ls-bg" title ="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slide']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slide']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"/>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slide']->value['url'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="ls-link" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slide']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"></a>
			<?php  $_smarty_tpl->tpl_vars['captionItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['captionItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slide']->value['caption']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['captionItem']->key => $_smarty_tpl->tpl_vars['captionItem']->value) {
$_smarty_tpl->tpl_vars['captionItem']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['captionItem']->value['type']==3) {?>
					<?php if ($_smarty_tpl->tpl_vars['captionItem']->value['params']['typev']==1) {?>
						<div class="ls-l <?php if (isset($_smarty_tpl->tpl_vars['captionItem']->value['params']['style'])) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['params']['style'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['captionItem']->value['params']['class'])) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['params']['class'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>" style="top:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['params']['datay'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
px; left:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['params']['datax'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
px;" data-ls="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['paramstr'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
						<iframe src="http://player.vimeo.com/video/<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['capvideo'][$_smarty_tpl->tpl_vars['id_lang']->value],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['params']['widthv'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['params']['heightv'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"></iframe>
						</div>
					<?php } else { ?>
						<div class="ls-l <?php if (isset($_smarty_tpl->tpl_vars['captionItem']->value['params']['style'])) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['params']['style'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['captionItem']->value['params']['class'])) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['params']['class'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>" style="top:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['params']['datay'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
px; left:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['params']['datax'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
px;" data-ls="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['paramstr'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
						<iframe width="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['params']['widthv'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['params']['heightv'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" src="//www.youtube.com/embed/<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['capvideo'][$_smarty_tpl->tpl_vars['id_lang']->value],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" frameborder="0" allowfullscreen></iframe>
						</div>
					<?php }?>
					
				<?php } elseif ($_smarty_tpl->tpl_vars['captionItem']->value['type']==2) {?>
					<?php if (isset($_smarty_tpl->tpl_vars['captionItem']->value['link'][$_smarty_tpl->tpl_vars['id_lang']->value])&&$_smarty_tpl->tpl_vars['captionItem']->value['link'][$_smarty_tpl->tpl_vars['id_lang']->value]!='') {?>
						<a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['link'][$_smarty_tpl->tpl_vars['id_lang']->value],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" target="_blank" class="ls-l <?php if (isset($_smarty_tpl->tpl_vars['captionItem']->value['params']['style'])) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['params']['style'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['captionItem']->value['params']['class'])) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['params']['class'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>" style="top:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['params']['datay'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
px; left:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['params']['datax']), ENT_QUOTES, 'UTF-8');?>
px" data-ls="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['paramstr'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
							<img src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['wtslideshow_path']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
views/img/layers/<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['capimage'][$_smarty_tpl->tpl_vars['id_lang']->value],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"  alt=""/>
						</a>
					<?php } else { ?>
						<img class="ls-l <?php if (isset($_smarty_tpl->tpl_vars['captionItem']->value['params']['style'])) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['params']['style'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['captionItem']->value['params']['class'])) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['params']['class'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>" src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['wtslideshow_path']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
views/img/layers/<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['capimage'][$_smarty_tpl->tpl_vars['id_lang']->value],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="ls-l <?php if (isset($_smarty_tpl->tpl_vars['captionItem']->value['params']['style'])) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['params']['style'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['captionItem']->value['params']['class'])) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['params']['class'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>" style="top:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['params']['datay'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
px; left:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['params']['datax'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
px" data-ls="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['paramstr'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" alt=""/>
					<?php }?>
				<?php } else { ?>
					<?php if (isset($_smarty_tpl->tpl_vars['captionItem']->value['link'][$_smarty_tpl->tpl_vars['id_lang']->value])&&$_smarty_tpl->tpl_vars['captionItem']->value['link'][$_smarty_tpl->tpl_vars['id_lang']->value]!='') {?>
						<a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['link'][$_smarty_tpl->tpl_vars['id_lang']->value],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" target="_blank" class="ls-l <?php if (isset($_smarty_tpl->tpl_vars['captionItem']->value['params']['style'])) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['params']['style'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['captionItem']->value['params']['class'])) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['params']['class'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>" style="top:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['params']['datay'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
px; left:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['params']['datax'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
px" data-ls="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['paramstr'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
						<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['captext'][$_smarty_tpl->tpl_vars['id_lang']->value],'quotes','UTF-8'), ENT_QUOTES, 'UTF-8');?>

						</a>
					<?php } else { ?>
						<div class="ls-l <?php if (isset($_smarty_tpl->tpl_vars['captionItem']->value['params']['style'])) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['params']['style'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['captionItem']->value['params']['class'])) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['params']['class'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>" style="top:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['params']['datay'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
px; left:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['params']['datax'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
px" data-ls="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['paramstr'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
						<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['captionItem']->value['captext'][$_smarty_tpl->tpl_vars['id_lang']->value],'quotes','UTF-8'), ENT_QUOTES, 'UTF-8');?>

						</div>
					<?php }?>
				<?php }?>
			<?php } ?>
		
			<?php if ($_smarty_tpl->tpl_vars['slide']->value['thumbnail']) {?>
				<img src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['wtslideshow_path']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
views/img/thumbnails/<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slide']->value['thumbnail'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="ls-tn" alt="Slide thumbnail"/>
			<?php } else { ?>
				<img src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['wtslideshow_path']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
views/img/sliderimages/thumbnail_<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slide']->value['image'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="ls-tn" alt="Slide thumbnail"/>
			<?php }?>
		</div>
		<?php } ?>
	</div>
	<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['wtslideshow_path']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
views/js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['wtslideshow_path']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
views/js/layerslider.kreaturamedia.jquery.js"></script>
	<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['wtslideshow_path']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
views/js/layerslider.transitions.js"></script>
	
	<script type="text/javascript">
	$("#layerslider").layerSlider({
		responsive: <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['responsive'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
		responsiveUnder:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['responsiveUnder'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
		layersContainer:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['layersContainer'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
		autoStart:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['autoStart'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
		pauseOnHover:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['pauseOnHover'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
		firstSlide:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['firstSlide'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
		animateFirstSlide:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['animateFirstSlide'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
		forceLoopNum:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['forceLoopNum'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
		towWaySlideshow:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['towWaySlideshow'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
		randomSlideshow:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['randomSlideshow'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
		skin:"<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['skin'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
",
		loops:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['loops'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
		skinsPath: "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['wtslideshow_path']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['skinsPath'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
",
		globalBGColor: "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['globalBGColor'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
",
		globalBGImage: <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['globalBGImage'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
		navPrevNext: <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['navPrevNext'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
		navStartStop: <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['navStartStop'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
		navButtons: <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['navButtons'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
		hoverPrevNext: <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['hoverPrevNext'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
		hoverBottomNav:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['hoverBottomNav'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
		keybNav:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['keybNav'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
		touchNav:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['touchNav'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
		showBarTimer:<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['showBarTimer'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
		showCircleTimer: <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['showCircleTimer'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
		thumbnailNavigation: "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['thumbnailNavigation'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
",
		tnContainerWidth: "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['tnContainerWidth'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
",
		tnWidth: <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['tnWidth'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
		tnHeight: <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['tnHeight'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
		tnActiveOpacity: <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['tnActiveOpacity'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
		tnInactiveOpacity: <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['tnInactiveOpacity'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
		tnInactiveOpacity: <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['tnInactiveOpacity'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
		autoPlayVideos: <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['autoPlayVideos'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
		autoPauseSlideshow: "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['autoPauseSlideshow'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
",
		youtubePreview: "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['youtubePreview'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
",
		imgPreload: <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['imgPreload'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
		lazyLoad: <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['lazyLoad'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
		yourLogo: <?php if ($_smarty_tpl->tpl_vars['slier_option_arr']->value['yourLogo']=='false') {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['yourLogo'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>"<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['yourLogo'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"<?php }?>,
		yourLogoStyle: "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['yourLogoStyle'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
",
		yourLogoLink: <?php if ($_smarty_tpl->tpl_vars['slier_option_arr']->value['yourLogoLink']=='false') {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['yourLogoLink']), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>"<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['yourLogoLink'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"<?php }?>,
		yourLogoTarget: '<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slier_option_arr']->value['yourLogoTarget'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
'
	});
	</script>
</div>
<!-- /Module HomeSlider --><?php }} ?>
