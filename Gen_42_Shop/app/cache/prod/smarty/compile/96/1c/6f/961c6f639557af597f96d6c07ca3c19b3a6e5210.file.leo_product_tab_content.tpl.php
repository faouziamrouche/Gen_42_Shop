<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 01:23:33
         compiled from "modules\leofeature\views\templates\hook\leo_product_tab_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2601359dd5675e19d67-80965458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '961c6f639557af597f96d6c07ca3c19b3a6e5210' => 
    array (
      0 => 'modules\\leofeature\\views\\templates\\hook\\leo_product_tab_content.tpl',
      1 => 1507310272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2601359dd5675e19d67-80965458',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USE_PTABS' => 0,
    'reviews' => 0,
    'review' => 0,
    'customer' => 0,
    'allow_usefull_button' => 0,
    'allow_report_button' => 0,
    'too_early' => 0,
    'allow_guests' => 0,
    'id_product_tab_content' => 0,
    'link_product_tab_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59dd5675ea5ca7_72823873',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dd5675ea5ca7_72823873')) {function content_59dd5675ea5ca7_72823873($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['USE_PTABS']->value)&&$_smarty_tpl->tpl_vars['USE_PTABS']->value=='default') {?>
	
<?php } elseif (isset($_smarty_tpl->tpl_vars['USE_PTABS']->value)&&$_smarty_tpl->tpl_vars['USE_PTABS']->value=='accordion') {?>
	<div id="collapseleofeatureproductreview" class="collapse" role="tabpanel">
          <div class="card-block">
<?php } else { ?>
	<div class="tab-pane fade in" id="leo-product-show-review-content">	
<?php }?>

		<div id="product_reviews_block_tab">
			<?php if ($_smarty_tpl->tpl_vars['reviews']->value) {?>
				<?php  $_smarty_tpl->tpl_vars['review'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['review']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reviews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['review']->key => $_smarty_tpl->tpl_vars['review']->value) {
$_smarty_tpl->tpl_vars['review']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['review']->value['content']) {?>
					<div class="review" itemprop="review" itemscope itemtype="https://schema.org/Review">
						<div class="review-info row">
							<div class="review_author col-sm-3">
								<span><?php echo smartyTranslate(array('s'=>'Grade','mod'=>'leofeature'),$_smarty_tpl);?>
&nbsp;</span>
								<div class="star_content clearfix"  itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["i"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['name'] = "i";
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] = is_array($_loop=5) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total']);
?>
										<?php if ($_smarty_tpl->tpl_vars['review']->value['grade']<=$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']) {?>
											<div class="star"></div>
										<?php } else { ?>
											<div class="star star_on"></div>
										<?php }?>
									<?php endfor; endif; ?>
									<meta itemprop="worstRating" content = "0" />
									<meta itemprop="ratingValue" content = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['review']->value['grade'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" />
									<meta itemprop="bestRating" content = "5" />
								</div>
								<div class="review_author_infos">
									<strong itemprop="author"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['review']->value['customer_name'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</strong>
									<meta itemprop="datePublished" content="<?php echo htmlspecialchars(substr($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['review']->value['date_add'],'html','UTF-8'),0,10), ENT_QUOTES, 'UTF-8');?>
" />
									<em><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['review']->value['date_add'],'html','UTF-8'),'full'=>0),$_smarty_tpl);?>
</em>
								</div>
							</div>

							<div class="review_details col-sm-9">
								<p itemprop="name" class="title_block">
									<strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['title'], ENT_QUOTES, 'UTF-8');?>
</strong>
								</p>
								<p itemprop="reviewBody"><?php echo htmlspecialchars(nl2br($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['review']->value['content'],'html','UTF-8')), ENT_QUOTES, 'UTF-8');?>
</p>
								
							</div><!-- .review_details -->
						</div>
						
						<div class="review_button">
							<ul>
								<?php if ($_smarty_tpl->tpl_vars['review']->value['total_advice']>0) {?>
									<li>
										<?php echo smartyTranslate(array('s'=>'%1$d out of %2$d people found this review useful.','sprintf'=>array($_smarty_tpl->tpl_vars['review']->value['total_useful'],$_smarty_tpl->tpl_vars['review']->value['total_advice']),'mod'=>'leofeature'),$_smarty_tpl);?>

									</li>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['customer']->value['is_logged']) {?>
									<?php if (!$_smarty_tpl->tpl_vars['review']->value['customer_advice']&&$_smarty_tpl->tpl_vars['allow_usefull_button']->value) {?>
									<li>
										<?php echo smartyTranslate(array('s'=>'Was this review useful to you?','mod'=>'leofeature'),$_smarty_tpl);?>

										<button class="usefulness_btn btn btn-default button button-small" data-is-usefull="1" data-id-product-review="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['id_product_review'], ENT_QUOTES, 'UTF-8');?>
">
											<span><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'leofeature'),$_smarty_tpl);?>
</span>
										</button>
										<button class="usefulness_btn btn btn-default button button-small" data-is-usefull="0" data-id-product-review="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['id_product_review'], ENT_QUOTES, 'UTF-8');?>
">
											<span><?php echo smartyTranslate(array('s'=>'No','mod'=>'leofeature'),$_smarty_tpl);?>
</span>
										</button>
									</li>
									<?php }?>
									<?php if (!$_smarty_tpl->tpl_vars['review']->value['customer_report']&&$_smarty_tpl->tpl_vars['allow_report_button']->value) {?>
									<li>
										<a href="#" class="btn report_btn" data-id-product-review="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['id_product_review'], ENT_QUOTES, 'UTF-8');?>
">
											<?php echo smartyTranslate(array('s'=>'Report abuse','mod'=>'leofeature'),$_smarty_tpl);?>

										</a>
									</li>
									<?php }?>
								<?php }?>
							</ul>
						</div>
					</div> <!-- .review -->
					<?php }?>
				<?php } ?>
				<?php if ((!$_smarty_tpl->tpl_vars['too_early']->value&&($_smarty_tpl->tpl_vars['customer']->value['is_logged']||$_smarty_tpl->tpl_vars['allow_guests']->value))) {?>
					<a class="open-review-form" href="#" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_product_tab_content']->value, ENT_QUOTES, 'UTF-8');?>
" data-is-logged="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['is_logged'], ENT_QUOTES, 'UTF-8');?>
" data-product-link="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_product_tab_content']->value, ENT_QUOTES, 'UTF-8');?>
">
						<i class="material-icons">&#xE150;</i>
						<?php echo smartyTranslate(array('s'=>'Write a review','mod'=>'leofeature'),$_smarty_tpl);?>

					</a>
				<?php }?>
			<?php } else { ?>
				<?php if ((!$_smarty_tpl->tpl_vars['too_early']->value&&($_smarty_tpl->tpl_vars['customer']->value['is_logged']||$_smarty_tpl->tpl_vars['allow_guests']->value))) {?>
					<a class="open-review-form" href="#" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_product_tab_content']->value, ENT_QUOTES, 'UTF-8');?>
" data-is-logged="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['is_logged'], ENT_QUOTES, 'UTF-8');?>
" data-product-link="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_product_tab_content']->value, ENT_QUOTES, 'UTF-8');?>
">
						<i class="material-icons">&#xE150;</i>
						<?php echo smartyTranslate(array('s'=>'Be the first to write your review!','mod'=>'leofeature'),$_smarty_tpl);?>

					</a>			
				<?php } else { ?>
					<p class="align_center"><?php echo smartyTranslate(array('s'=>'No customer reviews for the moment.','mod'=>'leofeature'),$_smarty_tpl);?>
</p>
				<?php }?>
			<?php }?>
		</div> 
<?php if (isset($_smarty_tpl->tpl_vars['USE_PTABS']->value)&&$_smarty_tpl->tpl_vars['USE_PTABS']->value=='default') {?>
		
<?php } elseif (isset($_smarty_tpl->tpl_vars['USE_PTABS']->value)&&$_smarty_tpl->tpl_vars['USE_PTABS']->value=='accordion') {?>
		</div>
	</div>
<?php } else { ?>
	</div>	
<?php }?>
<?php }} ?>
