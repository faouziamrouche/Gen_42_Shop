<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 01:23:36
         compiled from "module:leofeature/views/templates/front/modal_review.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2401959dd5678abdee3-50659253%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c97d14dae98843460109eb96ea181e11eba6e1d9' => 
    array (
      0 => 'module:leofeature/views/templates/front/modal_review.tpl',
      1 => 1507310272,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '2401959dd5678abdee3-50659253',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_modal_review' => 0,
    'productcomment_cover_image' => 0,
    'criterions' => 0,
    'criterion' => 0,
    'allow_guests' => 0,
    'is_logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59dd5678b7b607_20676466',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dd5678b7b607_20676466')) {function content_59dd5678b7b607_20676466($_smarty_tpl) {?>
<div class="modal leo-modal leo-modal-review fade" tabindex="-1" role="dialog" aria-hidden="true">
	<!--
	<div class="vertical-alignment-helper">
	-->
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
			<h4 class="modal-title h2 text-xs-center">
							
				<?php echo smartyTranslate(array('s'=>'Write a review','mod'=>'leofeature'),$_smarty_tpl);?>
		
			</h4>
				
		  </div>
		  
		  <div class="modal-body">
			<div class="row">
				<?php if (isset($_smarty_tpl->tpl_vars['product_modal_review']->value)&&$_smarty_tpl->tpl_vars['product_modal_review']->value) {?>
					<div class="product-info clearfix  col-xs-12 col-sm-6">
						<img class="img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productcomment_cover_image']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product_modal_review']->value->name,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" />
						<div class="product_desc">
							<p class="product_name">
								<strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_modal_review']->value->name, ENT_QUOTES, 'UTF-8');?>
</strong>
							</p>
							<?php echo $_smarty_tpl->tpl_vars['product_modal_review']->value->description_short;?>

						</div>
					</div>
				<?php }?>
				<div class="new_review_form_content col-xs-12 col-sm-6">					
					<?php if (count($_smarty_tpl->tpl_vars['criterions']->value)>0) {?>
						<ul id="criterions_list">
						<?php  $_smarty_tpl->tpl_vars['criterion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['criterion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['criterions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['criterion']->key => $_smarty_tpl->tpl_vars['criterion']->value) {
$_smarty_tpl->tpl_vars['criterion']->_loop = true;
?>
							<li>
								<label><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['criterion']->value['name'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
:</label>
								<div class="star_content">
									<input class="star not_uniform" type="radio" name="criterion[<?php echo htmlspecialchars(round($_smarty_tpl->tpl_vars['criterion']->value['id_product_review_criterion']), ENT_QUOTES, 'UTF-8');?>
]" value="1" />
									<input class="star not_uniform" type="radio" name="criterion[<?php echo htmlspecialchars(round($_smarty_tpl->tpl_vars['criterion']->value['id_product_review_criterion']), ENT_QUOTES, 'UTF-8');?>
]" value="2" />
									<input class="star not_uniform" type="radio" name="criterion[<?php echo htmlspecialchars(round($_smarty_tpl->tpl_vars['criterion']->value['id_product_review_criterion']), ENT_QUOTES, 'UTF-8');?>
]" value="3" />
									<input class="star not_uniform" type="radio" name="criterion[<?php echo htmlspecialchars(round($_smarty_tpl->tpl_vars['criterion']->value['id_product_review_criterion']), ENT_QUOTES, 'UTF-8');?>
]" value="4" checked="checked" />
									<input class="star not_uniform" type="radio" name="criterion[<?php echo htmlspecialchars(round($_smarty_tpl->tpl_vars['criterion']->value['id_product_review_criterion']), ENT_QUOTES, 'UTF-8');?>
]" value="5" />
								</div>
								<div class="clearfix"></div>
							</li>
						<?php } ?>
						</ul>
					<?php }?>				
					<form class="form-new-review" action="#" method="post">
						<div class="form-group">
						  <label class="form-control-label" for="new_review_title"><?php echo smartyTranslate(array('s'=>'Title','mod'=>'leofeature'),$_smarty_tpl);?>
 <sup class="required">*</sup></label>
						  <input type="text" class="form-control" id="new_review_title" required="" name="new_review_title">					  
						</div>
						<div class="form-group">
						  <label class="form-control-label" for="new_review_content"><?php echo smartyTranslate(array('s'=>'Comment','mod'=>'leofeature'),$_smarty_tpl);?>
 <sup class="required">*</sup></label>
						  <textarea type="text" class="form-control" id="new_review_content" required="" name="new_review_content"></textarea>				  
						</div>
						<?php if ($_smarty_tpl->tpl_vars['allow_guests']->value==true&&!$_smarty_tpl->tpl_vars['is_logged']->value) {?>
							<div class="form-group">
							  <label class="form-control-label" for="new_review_customer_name"><?php echo smartyTranslate(array('s'=>'Your name','mod'=>'leofeature'),$_smarty_tpl);?>
 <sup class="required">*</sup></label>
							  <input type="text" class="form-control" id="new_review_customer_name" required="" name="new_review_customer_name">					  
							</div>
						<?php }?>
						<div class="form-group">
							<label class="form-control-label"><sup>*</sup> <?php echo smartyTranslate(array('s'=>'Required fields','mod'=>'leofeature'),$_smarty_tpl);?>
</label>
						<input id="id_product_review" name="id_product_review" type="hidden" value='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_modal_review']->value->id, ENT_QUOTES, 'UTF-8');?>
' />
						</div>
						<button class="btn btn-primary form-control-submit leo-fake-button pull-xs-right" type="submit">
						  
						</button>
					</form>
				</div>
			</div>
		  </div>
		  <div class="modal-footer">
			
			<button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo smartyTranslate(array('s'=>'Close','mod'=>'leofeature'),$_smarty_tpl);?>
</button>
			<button type="button" class="leo-modal-review-bt btn btn-primary">
				
				<span class="leo-modal-review-loading cssload-speeding-wheel"></span>
				<span class="leo-modal-review-bt-text">
					<?php echo smartyTranslate(array('s'=>'Submit','mod'=>'leofeature'),$_smarty_tpl);?>

				</span>
			</button>
			
		  </div>
		  
		</div>
	  </div>
	<!--
	</div>
	-->
</div><?php }} ?>
