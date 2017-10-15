<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 00:25:19
         compiled from "module:wtproductfilter/views/templates/hook/wtproductfilter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:315559d55fcf5e86d3-48612444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd69b12f8a1e652764a63a2e73f73c673cf88d7b9' => 
    array (
      0 => 'module:wtproductfilter/views/templates/hook/wtproductfilter.tpl',
      1 => 1507154861,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '315559d55fcf5e86d3-48612444',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tabs' => 0,
    'path_ssl' => 0,
    'i' => 0,
    'name_module' => 0,
    'tab' => 0,
    'product' => 0,
    'link' => 0,
    'restricted_country_mode' => 0,
    'path_' => 0,
    'isMobile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d55fcf7d1d28_98854154',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d55fcf7d1d28_98854154')) {function content_59d55fcf7d1d28_98854154($_smarty_tpl) {?><!-- begin C:\xampp\htdocs\gen42-finale/themes/wt_omartsimple/modules/wtproductfilter/views/templates/hook/wtproductfilter.tpl -->


<?php if (count($_smarty_tpl->tpl_vars['tabs']->value)>0) {?>
<div class="wt_home_filter_product_tab col-xs-12 col-sm-12" id="wt_home_filter_product_tab_ssl" wt_base_ssl="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path_ssl']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">

<div id="tabs">
	<ul id="ul_tv_tab" class="title-tab">
		<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tab']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['tab']->iteration=0;
 $_smarty_tpl->tpl_vars['tab']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tabs']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->_loop = true;
 $_smarty_tpl->tpl_vars['tab']->iteration++;
 $_smarty_tpl->tpl_vars['tab']->index++;
 $_smarty_tpl->tpl_vars['tab']->first = $_smarty_tpl->tpl_vars['tab']->index === 0;
 $_smarty_tpl->tpl_vars['tab']->last = $_smarty_tpl->tpl_vars['tab']->iteration === $_smarty_tpl->tpl_vars['tab']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tabs']['first'] = $_smarty_tpl->tpl_vars['tab']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tabs']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tabs']['last'] = $_smarty_tpl->tpl_vars['tab']->last;
?>
			<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
			<li wt-name-module="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['name_module']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" type-tab="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['tab']->value['product_type'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" id-tab="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->getVariable('smarty')->value['foreach']['tabs']['iteration'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class=" <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['tabs']['first']) {?>first ui-tabs-selected ui-state-active<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['tabs']['last']) {?>last<?php }?> ">
				<a class="title_block" href="javascript:void(0)">
				<?php if (isset($_smarty_tpl->tpl_vars['tab']->value['title'])) {?>
				<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['tab']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>

				<?php } else { ?>
				<?php echo smartyTranslate(array('s'=>'not title','d'=>'Modules.WTProductsFilter'),$_smarty_tpl);?>

				<?php }?>
				</a>
			</li>
		<?php } ?>
	</ul>

	<div class="content-tab-product">
	<?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tab']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['tab']->iteration=0;
 $_smarty_tpl->tpl_vars['tab']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tabs']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->_loop = true;
 $_smarty_tpl->tpl_vars['tab']->iteration++;
 $_smarty_tpl->tpl_vars['tab']->index++;
 $_smarty_tpl->tpl_vars['tab']->first = $_smarty_tpl->tpl_vars['tab']->index === 0;
 $_smarty_tpl->tpl_vars['tab']->last = $_smarty_tpl->tpl_vars['tab']->iteration === $_smarty_tpl->tpl_vars['tab']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tabs']['first'] = $_smarty_tpl->tpl_vars['tab']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tabs']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tabs']['last'] = $_smarty_tpl->tpl_vars['tab']->last;
?>
		
	<div class="tabs-carousel" id="tabs-<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->getVariable('smarty')->value['foreach']['tabs']['iteration'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
		<?php if ($_smarty_tpl->tpl_vars['tab']->value['tab_product_list']->product_list&&count($_smarty_tpl->tpl_vars['tab']->value['tab_product_list']->product_list)>0) {?>
		<a id="prev<?php echo htmlspecialchars(intval($_smarty_tpl->getVariable('smarty')->value['foreach']['tabs']['iteration']), ENT_QUOTES, 'UTF-8');?>
" class="btn prev" href="#">&lt;</a>
		<a id="next<?php echo htmlspecialchars(intval($_smarty_tpl->getVariable('smarty')->value['foreach']['tabs']['iteration']), ENT_QUOTES, 'UTF-8');?>
" class="btn next" href="#">&gt;</a>
		<div class="cycleElementsContainer" id="cycle-<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->getVariable('smarty')->value['foreach']['tabs']['iteration'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
			<div id="elements-<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->getVariable('smarty')->value['foreach']['tabs']['iteration'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
				<div class="list_carousel responsive">
					<ul id="carousel<?php echo htmlspecialchars(intval($_smarty_tpl->getVariable('smarty')->value['foreach']['tabs']['iteration']), ENT_QUOTES, 'UTF-8');?>
" class="product-list">
					<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
					<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tab']->value['tab_product_list']->product_list; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['product_list']['first'] = $_smarty_tpl->tpl_vars['product']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['product_list']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
						<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
					<li class="ajax_block_product <?php if (intval($_smarty_tpl->getVariable('smarty')->value['foreach']['product_list']['first'])) {?>first_item<?php } elseif (intval($_smarty_tpl->getVariable('smarty')->value['foreach']['product_list']['last'])) {?>last_item<?php }?> js-product-miniature" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
">
					<div class="product-block wt_container_thumbnail" wt-name-module="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['name_module']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" id-tab="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->getVariable('smarty')->value['foreach']['tabs']['iteration'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" wt-data-id-product="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
">
						<h5 class="cat-name"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['category'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</h5>
						<h3 class="product-name"><a class="product-name" href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['link'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],50,'...')),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</a></h3>
						<div class="product-image-container">
									<div class="div-product-image">							
									<a class="product_image" href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['link'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['legend'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
										<img class="img-responsive wt-image" src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default'),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['legend'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" />
										<span class="overlay"></span>
									</a>
									<!--
									<?php if (isset($_smarty_tpl->tpl_vars['product']->value['new'])&&$_smarty_tpl->tpl_vars['product']->value['new']==1) {?>
									<span class="new-label"><span><?php echo smartyTranslate(array('s'=>'New','mod'=>'wtproductfilter'),$_smarty_tpl);?>
</span></span>
									<?php }?>-->									
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
									<div class="thumbs-content" id="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['name_module']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->getVariable('smarty')->value['foreach']['tabs']['iteration'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
-wt-thumbs-content-<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
"></div>
									</div>
						</div>
						<div>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductAttributes','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

									<div class="review">									
											<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

									</div>
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
							
						
						<div class="wt-button-container">
						<?php echo $_smarty_tpl->getSubTemplate ('catalog/_partials/customize/button-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

						<?php echo $_smarty_tpl->getSubTemplate ('catalog/_partials/customize/button-quickview.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

						</div>
						
					</div>
					</li>
					<?php } ?>
					</ul>
					<div class="cclearfix"></div>					
				</div>
		</div>
	</div>
	<?php } else { ?>
		<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'No product at this time','d'=>'Modules.WTProductsFilter'),$_smarty_tpl);?>
</p>
	<?php }?>
	</div>
	<?php } ?>
	
</div>
<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['path_']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
views/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript">
	$(window).load(function() {
		runSliderHometab();
	});

	$(window).resize(function() {
			runSliderHometab();
	});
	
	function runSliderHometab(){
	
	var item_hometab = 5;
		if(getWidthBrowser() > 1380)
		{	
			item_hometab = 4; 
		}
		else
		if(getWidthBrowser() > 1180)
		{	
			item_hometab = 4; 
		}
		else
		if(getWidthBrowser() > 991)
		{	
			item_hometab = 3; 
		}
		else
		if(getWidthBrowser() > 767)
		{	
			item_hometab = 2; 
		}		
		else
		if(getWidthBrowser() > 540)
		{	
			item_hometab = 2; 
		}
		else
		if(getWidthBrowser() > 340)
		{	
			item_hometab = 1; 
		}	
		
		/*
		if(getWidthBrowser() <=767){
			$('#tabs div.title_tab_hide_show').show();
			
		} else {		
			$('#tabs div.title_tab_hide_show').hide();
		}
		*/
		
			<?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tab']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['tab']->iteration=0;
 $_smarty_tpl->tpl_vars['tab']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tabs']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->_loop = true;
 $_smarty_tpl->tpl_vars['tab']->iteration++;
 $_smarty_tpl->tpl_vars['tab']->index++;
 $_smarty_tpl->tpl_vars['tab']->first = $_smarty_tpl->tpl_vars['tab']->index === 0;
 $_smarty_tpl->tpl_vars['tab']->last = $_smarty_tpl->tpl_vars['tab']->iteration === $_smarty_tpl->tpl_vars['tab']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tabs']['first'] = $_smarty_tpl->tpl_vars['tab']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tabs']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tabs']['last'] = $_smarty_tpl->tpl_vars['tab']->last;
?>
			$("#carousel<?php echo htmlspecialchars(intval($_smarty_tpl->getVariable('smarty')->value['foreach']['tabs']['iteration']), ENT_QUOTES, 'UTF-8');?>
 li:nth-child("+item_hometab+")").addClass("last_item");
			$('#carousel<?php echo htmlspecialchars(intval($_smarty_tpl->getVariable('smarty')->value['foreach']['tabs']['iteration']), ENT_QUOTES, 'UTF-8');?>
').carouFredSel({
				responsive: true,
				width: '100%',
				height: 'variable',
				onWindowResize: 'debounce',
				prev: '#prev<?php echo htmlspecialchars(intval($_smarty_tpl->getVariable('smarty')->value['foreach']['tabs']['iteration']), ENT_QUOTES, 'UTF-8');?>
',
				next: '#next<?php echo htmlspecialchars(intval($_smarty_tpl->getVariable('smarty')->value['foreach']['tabs']['iteration']), ENT_QUOTES, 'UTF-8');?>
',
				auto: false,
				swipe: {
					onTouch : true
				},
				items: {
					width:260,
					height: 'variable',
					visible: {
						min: 1,
						max: item_hometab
					}
				},
				scroll: {
					items:item_hometab,
					direction : 'left',    
					duration  : 700 ,  
					onBefore: function(data) { 
						
					},
					onAfter	: function(data) {
						var n=5;
						n=data.items.visible.length;
						$("#carousel<?php echo htmlspecialchars(intval($_smarty_tpl->getVariable('smarty')->value['foreach']['tabs']['iteration']), ENT_QUOTES, 'UTF-8');?>
 li").removeClass("first_item");
						$("#carousel<?php echo htmlspecialchars(intval($_smarty_tpl->getVariable('smarty')->value['foreach']['tabs']['iteration']), ENT_QUOTES, 'UTF-8');?>
 li:nth-child(1)").addClass("first_item");
				   }
				}
			});
			<?php if ($_smarty_tpl->tpl_vars['isMobile']->value==0) {?>
			<?php break 1?>
			<?php }?>
			<?php } ?>
	}
	

</script>
</div>
</div>
<?php }?>


<!-- end C:\xampp\htdocs\gen42-finale/themes/wt_omartsimple/modules/wtproductfilter/views/templates/hook/wtproductfilter.tpl --><?php }} ?>
