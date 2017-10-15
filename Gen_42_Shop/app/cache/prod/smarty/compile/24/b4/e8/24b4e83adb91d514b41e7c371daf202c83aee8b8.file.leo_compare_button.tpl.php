<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 18:45:51
         compiled from "C:\xampp\htdocs\gen42-finale\themes\ap_office\modules\leofeature\views\templates\hook\leo_compare_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2882059de4abfdecf39-10571735%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24b4e83adb91d514b41e7c371daf202c83aee8b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gen42-finale\\themes\\ap_office\\modules\\leofeature\\views\\templates\\hook\\leo_compare_button.tpl',
      1 => 1507310277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2882059de4abfdecf39-10571735',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'added' => 0,
    'leo_compare_id_product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59de4abfdfaaf9_35074855',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59de4abfdfaaf9_35074855')) {function content_59de4abfdfaaf9_35074855($_smarty_tpl) {?>
<div class="compare">
	<a class="leo-compare-button btn-product btn<?php if ($_smarty_tpl->tpl_vars['added']->value) {?> added<?php }?>" href="#" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_compare_id_product']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['added']->value) {?><?php echo smartyTranslate(array('s'=>'Remove from Compare','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Add to Compare','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
<?php }?>">
	<span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
	<span class="leo-compare-bt-content">
		<i class="fa fa-files-o" aria-hidden="true"></i>
	</span>
</a>
</div>


<?php }} ?>
