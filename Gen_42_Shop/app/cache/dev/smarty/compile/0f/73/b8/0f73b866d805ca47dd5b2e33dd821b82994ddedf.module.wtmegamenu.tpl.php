<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 00:25:21
         compiled from "module:wtmegamenu/views/templates/hook/wtmegamenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2783159d55fd193e5d1-17928487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f73b866d805ca47dd5b2e33dd821b82994ddedf' => 
    array (
      0 => 'module:wtmegamenu/views/templates/hook/wtmegamenu.tpl',
      1 => 1507154861,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '2783159d55fd193e5d1-17928487',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menus' => 0,
    'menu' => 0,
    'icon_path' => 0,
    'menu_row' => 0,
    'menu_col' => 0,
    'sub_menu_item' => 0,
    'product' => 0,
    'link' => 0,
    'restricted_country_mode' => 0,
    '_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d55fd1a54164_84023634',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d55fd1a54164_84023634')) {function content_59d55fd1a54164_84023634($_smarty_tpl) {?><!-- begin C:\xampp\htdocs\gen42-finale/themes/wt_omartsimple/modules/wtmegamenu/views/templates/hook/wtmegamenu.tpl -->

<!-- Module Megamenu-->
<div class="container_wt_megamenu">
<div class="container">
<div id="wt-menu-horizontal" class="wt-menu-horizontal clearfix">
<?php $_smarty_tpl->tpl_vars['id_lang'] = new Smarty_variable(Context::getContext()->language->id, null, 0);?>
	
	<div class="title-menu-mobile"><span><?php echo smartyTranslate(array('s'=>'Navigation','d'=>'Modules.WTMegamenu'),$_smarty_tpl);?>
</span></div>
	<ul class="menu-content">
		<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
			<?php if (isset($_smarty_tpl->tpl_vars['menu']->value['type'])&&$_smarty_tpl->tpl_vars['menu']->value['type']=='CAT'&&$_smarty_tpl->tpl_vars['menu']->value['dropdown']==1) {?>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['menu']->value['sub_menu'],'quotes','UTF-8');?>

			<?php } else { ?>
				<li class="level-1 <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['menu']->value['class'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php if (count($_smarty_tpl->tpl_vars['menu']->value['sub_menu'])>0) {?> parent<?php }?>">
					<?php if ($_smarty_tpl->tpl_vars['menu']->value['type_icon']==0&&$_smarty_tpl->tpl_vars['menu']->value['icon']!='') {?>
						<img class="img-icon" src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['icon_path']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['menu']->value['icon'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" alt=""/>
					<?php } elseif ($_smarty_tpl->tpl_vars['menu']->value['type_icon']==1&&$_smarty_tpl->tpl_vars['menu']->value['icon']!='') {?>
						<i class="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['menu']->value['icon'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"></i>
					<?php }?>
					<a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['menu']->value['link'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
					<span><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['menu']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
					<?php if ($_smarty_tpl->tpl_vars['menu']->value['subtitle']!='') {?><span class="menu-subtitle"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['menu']->value['subtitle'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
					</a>
					<span class="icon-drop-mobile"></span>
					<?php if (isset($_smarty_tpl->tpl_vars['menu']->value['sub_menu'])&&count($_smarty_tpl->tpl_vars['menu']->value['sub_menu'])>0) {?>
						<div class="wt-sub-menu menu-dropdown col-xs-12 <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['menu']->value['width_sub'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['menu']->value['align_sub'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
							<?php  $_smarty_tpl->tpl_vars['menu_row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu_row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value['sub_menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu_row']->key => $_smarty_tpl->tpl_vars['menu_row']->value) {
$_smarty_tpl->tpl_vars['menu_row']->_loop = true;
?>
								<div class="wt-menu-row row <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['menu_row']->value['class'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
									<?php if (isset($_smarty_tpl->tpl_vars['menu_row']->value['list_col'])&&count($_smarty_tpl->tpl_vars['menu_row']->value['list_col'])>0) {?>
										<?php  $_smarty_tpl->tpl_vars['menu_col'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu_col']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu_row']->value['list_col']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu_col']->key => $_smarty_tpl->tpl_vars['menu_col']->value) {
$_smarty_tpl->tpl_vars['menu_col']->_loop = true;
?>
											<div class="wt-menu-col col-xs-12 <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['menu_col']->value['width'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['menu_col']->value['class'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['menu']->value['type'],'quotes','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
												<?php if (count($_smarty_tpl->tpl_vars['menu_col']->value['list_menu_item'])>0) {?>
													<ul class="ul-column ">
													<?php  $_smarty_tpl->tpl_vars['sub_menu_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub_menu_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu_col']->value['list_menu_item']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub_menu_item']->key => $_smarty_tpl->tpl_vars['sub_menu_item']->value) {
$_smarty_tpl->tpl_vars['sub_menu_item']->_loop = true;
?>
														<li class="menu-item <?php if ($_smarty_tpl->tpl_vars['sub_menu_item']->value['type_item']==1) {?> item-header<?php } else { ?> item-line<?php }?> <?php if ($_smarty_tpl->tpl_vars['sub_menu_item']->value['type_link']==4) {?>product-block<?php }?>">
															<?php if ($_smarty_tpl->tpl_vars['sub_menu_item']->value['type_link']==4) {?>
																<?php $_smarty_tpl->tpl_vars['id_lang'] = new Smarty_variable(Context::getContext()->language->id, null, 0);?>
																<?php $_smarty_tpl->tpl_vars['id_lang'] = new Smarty_variable(Context::getContext()->language->id, null, 0);?>
																<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sub_menu_item']->value['product']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
																<div class="product-container clearfix">
																	<h3 class="product_-name">
																		<a class="product-name" href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['link'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" itemprop="url" >
																			<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],25,''),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>

																		</a>
																		
																	</h3>
																	<div class="product-image-container">
																		<a class="product_img_link" href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['link'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" itemprop="url">
																			<img class="replace-2x img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default'),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['legend'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>" title="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['legend'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>"  itemprop="image" />
																		</a>
																		<?php if (isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
																			<?php if (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']&&isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']>0) {?>
																					<p class="sale-bkg animated" href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['link'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
																								<span class="sale">
																								<?php if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction_type']=='percentage') {?>
																								-<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'],'quotes','UTF-8')*100, ENT_QUOTES, 'UTF-8');?>
%
																								<?php } else { ?>
																								-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_without_reduction']-floatval($_smarty_tpl->tpl_vars['product']->value['price']), ENT_QUOTES, 'UTF-8');?>

																								<?php }?>
																								</span>
																							</p>
																			<?php }?>
																			<?php }?>
																		
																	</div>
																	<div class="content_price product-price-and-shipping">
																	<?php if (isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
																		<span itemprop="price" class="price <?php if (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']>0) {?> special-price<?php }?>">												
																				<?php echo htmlspecialchars(Product::convertAndFormatPrice($_smarty_tpl->tpl_vars['product']->value['price']), ENT_QUOTES, 'UTF-8');?>


																				</span>
																		<?php if (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']&&isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']>0) {?>
																				<span class="old-price regular-price">
																				<?php echo htmlspecialchars(Product::convertAndFormatPrice($_smarty_tpl->tpl_vars['product']->value['price_without_reduction']), ENT_QUOTES, 'UTF-8');?>

																				</span>
																		<?php }?>
																			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl);?>

																			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"unit_price"),$_smarty_tpl);?>

																	<?php }?>
																</div>
																	
																</div>
																<?php } ?>
															<?php } elseif ($_smarty_tpl->tpl_vars['sub_menu_item']->value['type_link']==3) {?>
																<a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sub_menu_item']->value['link'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sub_menu_item']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</a>
																<div class="html-block">
																	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sub_menu_item']->value['text'],'quotes','UTF-8');?>

																</div>
															<?php } else { ?>
																<a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sub_menu_item']->value['link'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sub_menu_item']->value['title'],'html','UTF-8');?>
</a>
															<?php }?>
														</li>
													<?php } ?>
													</ul>
												<?php }?>
											</div>
										<?php } ?>
									<?php }?>
								</div>
							<?php } ?>
						</div>
					<?php }?>
				</li>
			<?php }?>
		<?php } ?>
	</ul>
	
	<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['_path']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
views/js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript">
	
		text_more = "<?php echo smartyTranslate(array('s'=>'More','d'=>'Modules.WTMegamenu'),$_smarty_tpl);?>
";
		numLiItem = $("#wt-menu-horizontal .menu-content li.level-1").length;
		nIpadHorizontal = 6;
		nIpadVertical = 5;
		function getHtmlHide(nIpad,numLiItem) 
			 {
				var htmlLiHide="";
				if($("#more_menu").length==0)
					for(var i=(nIpad+1);i<=numLiItem;i++)
						htmlLiHide+='<li>'+$('#wt-menu-horizontal ul.menu-content li.level-1:nth-child('+i+')').html()+'</li>';
				return htmlLiHide;
			}

		htmlLiH = getHtmlHide(nIpadHorizontal,numLiItem);
		htmlLiV = getHtmlHide(nIpadVertical,numLiItem);
		htmlMenu=$("#wt-menu-horizontal").html();
		
		$(window).load(function(){
		addMoreResponsive(nIpadHorizontal,nIpadVertical,htmlLiH,htmlLiV,htmlMenu);
		});
		$(window).resize(function(){
		addMoreResponsive(nIpadHorizontal,nIpadVertical,htmlLiH,htmlLiV,htmlMenu);
		});
	</script>
</div>
</div>
</div>
<!-- /Module Megamenu --><!-- end C:\xampp\htdocs\gen42-finale/themes/wt_omartsimple/modules/wtmegamenu/views/templates/hook/wtmegamenu.tpl --><?php }} ?>
