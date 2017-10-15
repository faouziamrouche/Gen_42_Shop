<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 00:26:08
         compiled from "C:\xampp\htdocs\gen42-finale\admin259190zdv\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3012059d56000218f46-04194550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '644fd788812080808434468c24883a55ae57ee82' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gen42-finale\\admin259190zdv\\themes\\default\\template\\content.tpl',
      1 => 1507152296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3012059d56000218f46-04194550',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d5600021fba5_31724974',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d5600021fba5_31724974')) {function content_59d5600021fba5_31724974($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
