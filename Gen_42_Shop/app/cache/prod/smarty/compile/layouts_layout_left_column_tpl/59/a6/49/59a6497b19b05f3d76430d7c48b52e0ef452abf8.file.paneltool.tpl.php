<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 00:10:18
         compiled from "C:\xampp\htdocs\gen42-finale\themes\ap_office\info\paneltool.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1741859dd454a80ad10-76143012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59a6497b19b05f3d76430d7c48b52e0ef452abf8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gen42-finale\\themes\\ap_office\\info\\paneltool.tpl',
      1 => 1507310277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1741859dd454a80ad10-76143012',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LEO_THEMENAME' => 0,
    'LEO_COOKIE_THEME' => 0,
    'skins' => 0,
    'header_styles' => 0,
    'theme_customizations' => 0,
    'sidebarmenu' => 0,
    'LEO_LAYOUT_MODE' => 0,
    'layout' => 0,
    'USE_FHEADER' => 0,
    'xmlselectors' => 0,
    'for' => 0,
    'items' => 0,
    'group' => 0,
    'apPageHelper' => 0,
    'item' => 0,
    'patterns' => 0,
    'pattern' => 0,
    'BACKGROUNDVALUE' => 0,
    'attachment' => 0,
    'position' => 0,
    'repeat' => 0,
    'i' => 0,
    'fonts' => 0,
    'font_item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59dd454a9c6ff7_01453806',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dd454a9c6ff7_01453806')) {function content_59dd454a9c6ff7_01453806($_smarty_tpl) {?><?php if (class_exists("LeoFrameworkHelper")) {?>
<?php $_smarty_tpl->tpl_vars['skins'] = new Smarty_variable(LeoFrameworkHelper::getSkins($_smarty_tpl->tpl_vars['LEO_THEMENAME']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars['header_styles'] = new Smarty_variable(LeoFrameworkHelper::getPanelConfigByTheme('header',$_smarty_tpl->tpl_vars['LEO_THEMENAME']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars['sidebarmenu'] = new Smarty_variable(LeoFrameworkHelper::getPanelConfigByTheme('sidebarmenu',$_smarty_tpl->tpl_vars['LEO_THEMENAME']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars['theme_customizations'] = new Smarty_variable(LeoFrameworkHelper::getLayoutSettingByTheme($_smarty_tpl->tpl_vars['LEO_THEMENAME']->value), null, 0);?>
<div id="leo-paneltool" class="hidden-md-down" data-cname="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LEO_COOKIE_THEME']->value, ENT_QUOTES, 'UTF-8');?>
">
	<?php if ($_smarty_tpl->tpl_vars['skins']->value||$_smarty_tpl->tpl_vars['header_styles']->value||$_smarty_tpl->tpl_vars['theme_customizations']->value||$_smarty_tpl->tpl_vars['sidebarmenu']->value) {?>
		<div class="paneltool themetool">
			<div class="panelbutton">
				<i class="fa fa-sliders"></i>
			</div>
			<div class="block-panelcontent">
				<div class="panelcontent">
					<div class="panelinner">
						<h4><?php echo smartyTranslate(array('s'=>'Panel Tool','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</h4>
						<!-- Theme layout mod section -->
						<?php if ($_smarty_tpl->tpl_vars['theme_customizations']->value&&isset($_smarty_tpl->tpl_vars['theme_customizations']->value['layout'])&&isset($_smarty_tpl->tpl_vars['theme_customizations']->value['layout']['layout_mode'])&&isset($_smarty_tpl->tpl_vars['theme_customizations']->value['layout']['layout_mode']['option'])) {?>
							<div class="group-input clearfix layout">
								<label class="col-sm-12 control-label"><span class="fa fa-desktop"></span><?php echo smartyTranslate(array('s'=>'Layout Mod','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</label>
								<div class="col-sm-12">
									<?php  $_smarty_tpl->tpl_vars['layout'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['layout']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['theme_customizations']->value['layout']['layout_mode']['option']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['layout']->key => $_smarty_tpl->tpl_vars['layout']->value) {
$_smarty_tpl->tpl_vars['layout']->_loop = true;
?>
										<span class="leo-dynamic-update-layout <?php if ($_smarty_tpl->tpl_vars['LEO_LAYOUT_MODE']->value==$_smarty_tpl->tpl_vars['layout']->value['id']) {?>current-layout-mod<?php }?>" data-layout-mod="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
											<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value['name'], ENT_QUOTES, 'UTF-8');?>

										</span>
									<?php } ?>
								</div>
							</div>
						<?php }?>
						<!-- Float Header -->
						<div class="group-input clearfix">
							<label class="col-sm-12 control-label"><span class="fa fa-credit-card"></span><?php echo smartyTranslate(array('s'=>'Float Header','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</label>
							<div class="col-sm-12">
								<div class="btn_enable_fheader">
									<span class="enable_fheader btn_yes <?php if ($_smarty_tpl->tpl_vars['USE_FHEADER']->value) {?>current<?php }?>" data-value="1">
										<span><?php echo smartyTranslate(array('s'=>'Yes','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</span>
									</span>
									<span class="enable_fheader btn_no <?php if (!$_smarty_tpl->tpl_vars['USE_FHEADER']->value) {?>current<?php }?>" data-value="0">
										<span><?php echo smartyTranslate(array('s'=>'No','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</span>
									</span>
								</div>
							</div>
						</div>
						<!-- Show Profile -->
					</div>
				</div>
			</div>
		</div>
	<?php }?>
	<!-- Live Theme Editor -->
	<div class="paneltool editortool">
		<div class="panelbutton">
			<i class="fa fa-adjust"></i>
		</div>
		<div class="panelcontent editortool">
			<div class="panelinner">
				<h4><?php echo smartyTranslate(array('s'=>'Live Theme Editor','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</h4>
				<?php $_smarty_tpl->tpl_vars['xmlselectors'] = new Smarty_variable(LeoFrameworkHelper::renderEdtiorThemeForm($_smarty_tpl->tpl_vars['LEO_THEMENAME']->value), null, 0);?>
				<?php $_smarty_tpl->tpl_vars['patterns'] = new Smarty_variable(LeoFrameworkHelper::getPattern($_smarty_tpl->tpl_vars['LEO_THEMENAME']->value), null, 0);?>
				<div class="clearfix" id="customize-body">
					<ul class="nav nav-tabs nav-pills" id="panelTab">
						<?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['for'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['xmlselectors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value) {
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['for']->value = $_smarty_tpl->tpl_vars['output']->key;
?>
							<li class="nav-item"><a class="nav-link" href="#tab-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['for']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['for']->value, ENT_QUOTES, 'UTF-8');?>
</a></li>
						<?php } ?>
					</ul>
					<div class="tab-content">
						<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['for'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['xmlselectors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value) {
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['for']->value = $_smarty_tpl->tpl_vars['items']->key;
?>
							<div class="tab-pane" id="tab-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['for']->value, ENT_QUOTES, 'UTF-8');?>
">
								<?php if (!empty($_smarty_tpl->tpl_vars['items']->value)) {?>
									<div class="accordion" id="accordion-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['for']->value, ENT_QUOTES, 'UTF-8');?>
">
										<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['group']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['group']->iteration++;
?>
											<div class="accordion-group card panel panel-default">
												<div class="accordion-heading card-header panel-heading">
													<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['for']->value, ENT_QUOTES, 'UTF-8');?>
" href="#collapse<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['match'], ENT_QUOTES, 'UTF-8');?>
">
														<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['header'], ENT_QUOTES, 'UTF-8');?>

													</a>
												</div>
												<div id="collapse<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['match'], ENT_QUOTES, 'UTF-8');?>
" class="accordion-body panel-collapse collapse<?php if ($_smarty_tpl->tpl_vars['group']->iteration==1) {?> in<?php }?>">
													<div class="accordion-inner card-block panel-body clearfix">
                                                                                                                <?php $_smarty_tpl->tpl_vars['fonts'] = new Smarty_variable($_smarty_tpl->tpl_vars['apPageHelper']->value->getFontFamily(), null, 0);?>
														<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['selector']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
															<?php if (isset($_smarty_tpl->tpl_vars['item']->value['type'])&&$_smarty_tpl->tpl_vars['item']->value['type']=="image") {?>
																<div class="form-group background-images cleafix">
																	<label><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['label'], ENT_QUOTES, 'UTF-8');?>
</label>
																	<input value="" type="hidden" name="customize[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['match'], ENT_QUOTES, 'UTF-8');?>
][]" data-match="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['match'], ENT_QUOTES, 'UTF-8');?>
" class="input-setting" data-selector="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['selector'], ENT_QUOTES, 'UTF-8');?>
" data-attrs="background-image">
																	<a class="clear-bg d-inline bg-success" href="#"><?php echo smartyTranslate(array('s'=>'Clear','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</a>
																	<div class="clearfix"></div>
																	<p><em style="font-size:10px"><?php echo smartyTranslate(array('s'=>'Those Images in folder YOURTHEME/assets/img/patterns/','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</em></p>
																	<div class="bi-wrapper clearfix">
																		<?php  $_smarty_tpl->tpl_vars['pattern'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pattern']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['patterns']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pattern']->key => $_smarty_tpl->tpl_vars['pattern']->value) {
$_smarty_tpl->tpl_vars['pattern']->_loop = true;
?>
																			<div style="background:url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pattern']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
') no-repeat center center;" class="pull-left" data-image="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pattern']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
" data-val="../../img/patterns/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pattern']->value['img_name'], ENT_QUOTES, 'UTF-8');?>
"></div>
																		<?php } ?>
																	</div>
																	<ul class="bg-config">
																		<li>
																			<div><?php echo smartyTranslate(array('s'=>'Attachment','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</div>
																			<select class="form-control" data-attrs="background-attachment" name="customize[body][]" data-selector="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['selector'], ENT_QUOTES, 'UTF-8');?>
" data-match="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['match'], ENT_QUOTES, 'UTF-8');?>
">
																				<option value=""><?php echo smartyTranslate(array('s'=>'Not set','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</option>
																				<?php  $_smarty_tpl->tpl_vars['attachment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attachment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['BACKGROUNDVALUE']->value['attachment']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attachment']->key => $_smarty_tpl->tpl_vars['attachment']->value) {
$_smarty_tpl->tpl_vars['attachment']->_loop = true;
?>
																					<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value, ENT_QUOTES, 'UTF-8');?>
</option>
																				<?php } ?>
																			</select>
																		</li>
																		<li>
																			<div><?php echo smartyTranslate(array('s'=>'Position','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</div>
																			<select class="form-control" data-attrs="background-position" name="customize[body][]" data-selector="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['selector'], ENT_QUOTES, 'UTF-8');?>
" data-match="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['match'], ENT_QUOTES, 'UTF-8');?>
">
																				<option value=""><?php echo smartyTranslate(array('s'=>'Not set','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</option>
																				<?php  $_smarty_tpl->tpl_vars['position'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['position']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['BACKGROUNDVALUE']->value['position']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['position']->key => $_smarty_tpl->tpl_vars['position']->value) {
$_smarty_tpl->tpl_vars['position']->_loop = true;
?>
																					<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</option>
																				<?php } ?>
																			</select>
																		</li>
																		<li>
																			<div><?php echo smartyTranslate(array('s'=>'Repeat','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</div>
																			<select class="form-control" data-attrs="background-repeat" name="customize[body][]" data-selector="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['selector'], ENT_QUOTES, 'UTF-8');?>
" data-match="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['match'], ENT_QUOTES, 'UTF-8');?>
">
																				<option value=""><?php echo smartyTranslate(array('s'=>'Not set','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</option>
																				<?php  $_smarty_tpl->tpl_vars['repeat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['repeat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['BACKGROUNDVALUE']->value['repeat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['repeat']->key => $_smarty_tpl->tpl_vars['repeat']->value) {
$_smarty_tpl->tpl_vars['repeat']->_loop = true;
?>
																					<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['repeat']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['repeat']->value, ENT_QUOTES, 'UTF-8');?>
</option>
																				<?php } ?>
																			</select>
																		</li>
																	</ul>
																</div>
															<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']=="fontsize") {?>
																<div class="form-group cleafix">
																	<label><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['label'], ENT_QUOTES, 'UTF-8');?>
</label>
																	<select class="form-control input-setting" name="customize[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['match'], ENT_QUOTES, 'UTF-8');?>
][]" data-match="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['match'], ENT_QUOTES, 'UTF-8');?>
"  data-selector="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['selector'], ENT_QUOTES, 'UTF-8');?>
" data-attrs="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['attrs'], ENT_QUOTES, 'UTF-8');?>
">
																		<option value=""><?php echo smartyTranslate(array('s'=>'Inherit','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</option>
																		<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 16+1 - (9) : 9-(16)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 9, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
																			<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8');?>
</option>
																		<?php }} ?>
																	</select>
																	<a href="#" class="clear-bg d-inline bg-success"><?php echo smartyTranslate(array('s'=>'Clear','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</a>
																</div>
                                                                                                                        <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']=="fontfamily") {?>
                                                                                                                            <div class="form-group cleafix">
                                                                                                                                <label><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['item']->value['label'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</label>
                                                                                                                                <select name="customize[<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['group']->value['match'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
][]" data-match="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['group']->value['match'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="input-setting" data-selector="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['item']->value['selector'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" data-attrs="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['item']->value['attrs'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
                                                                                                                                    <?php  $_smarty_tpl->tpl_vars['font_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['font_item']->_loop = false;
 $_smarty_tpl->tpl_vars['font_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fonts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['font_item']->key => $_smarty_tpl->tpl_vars['font_item']->value) {
$_smarty_tpl->tpl_vars['font_item']->_loop = true;
 $_smarty_tpl->tpl_vars['font_key']->value = $_smarty_tpl->tpl_vars['font_item']->key;
?>
                                                                                                                                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['font_item']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['font_item']->value['name']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['font_item']->value['name'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>&nbsp;<?php }?></option>
                                                                                                                                    <?php } ?>
                                                                                                                                </select>
                                                                                                                                <a href="#" class="clear-bg d-inline bg-success"><?php echo smartyTranslate(array('s'=>'Clear','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</a>
                                                                                                                            </div>
															<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']=="subtitle") {?>
																<div class="form-group cleafix">
																	<label class="subtitle"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['content'], ENT_QUOTES, 'UTF-8');?>
</label>	
																</div>
															<?php } else { ?>
																<div class="form-group cleafix">
																	<label><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['label'], ENT_QUOTES, 'UTF-8');?>
</label>
																	<input value="" size="10" name="customize[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['match'], ENT_QUOTES, 'UTF-8');?>
][]" data-match="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['match'], ENT_QUOTES, 'UTF-8');?>
" type="text" class="input-setting" data-selector="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['selector'], ENT_QUOTES, 'UTF-8');?>
" data-attrs="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['attrs'], ENT_QUOTES, 'UTF-8');?>
"><a href="#" class="clear-bg d-inline bg-success"><?php echo smartyTranslate(array('s'=>'Clear','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</a>
																</div>
															<?php }?>
														<?php } ?>
													</div>
												</div>
											</div>
										<?php } ?>
									</div>
								<?php }?>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<div class="panelbutton label-customize"></div>
	</div>
</div>
<?php }?><?php }} ?>
