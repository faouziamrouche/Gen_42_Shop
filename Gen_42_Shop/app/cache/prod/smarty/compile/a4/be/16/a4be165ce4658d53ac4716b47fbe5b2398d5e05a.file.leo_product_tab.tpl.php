<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 01:23:33
         compiled from "modules\leofeature\views\templates\hook\leo_product_tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2366859dd5675deb3b1-84432705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4be165ce4658d53ac4716b47fbe5b2398d5e05a' => 
    array (
      0 => 'modules\\leofeature\\views\\templates\\hook\\leo_product_tab.tpl',
      1 => 1507310272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2366859dd5675deb3b1-84432705',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USE_PTABS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59dd5675e01606_73214901',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dd5675e01606_73214901')) {function content_59dd5675e01606_73214901($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['USE_PTABS']->value)&&$_smarty_tpl->tpl_vars['USE_PTABS']->value=='default') {?>
	<h4 class="title-info-product leo-product-show-review-title"><?php echo smartyTranslate(array('s'=>'Reviews','mod'=>'leofeature'),$_smarty_tpl);?>
</h4>
<?php } elseif (isset($_smarty_tpl->tpl_vars['USE_PTABS']->value)&&$_smarty_tpl->tpl_vars['USE_PTABS']->value=='accordion') {?>
	<div class="card-header" role="tab" id="headingleofeatureproductreview">
	  <h5 class="h5">
		<a class="collapsed leo-product-show-review-title leofeature-accordion" data-toggle="collapse" data-parent="#accordion" href="#collapseleofeatureproductreview" aria-expanded="false" aria-controls="collapseleofeatureproductreview">
		  <?php echo smartyTranslate(array('s'=>'Reviews','mod'=>'leofeature'),$_smarty_tpl);?>

		</a>
	 </h5>
  </div>
<?php } else { ?>
	<li class="nav-item">
	  <a class="nav-link leo-product-show-review-title" data-toggle="tab" href="#leo-product-show-review-content"><?php echo smartyTranslate(array('s'=>'Reviews','mod'=>'leofeature'),$_smarty_tpl);?>
</a>
	</li>
<?php }?>

<?php }} ?>
