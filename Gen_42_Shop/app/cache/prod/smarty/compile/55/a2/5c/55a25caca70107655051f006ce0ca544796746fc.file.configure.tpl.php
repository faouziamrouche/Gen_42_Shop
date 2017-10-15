<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 00:16:47
         compiled from "C:\xampp\htdocs\gen42-finale\modules\leobootstrapmenu\views\templates\admin\configure.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1458359dd46cfa35720-62763391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55a25caca70107655051f006ce0ca544796746fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gen42-finale\\modules\\leobootstrapmenu\\views\\templates\\admin\\configure.tpl',
      1 => 1507310272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1458359dd46cfa35720-62763391',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'html' => 0,
    'successful' => 0,
    'live_editor_url' => 0,
    'current_group_title' => 0,
    'current_group_type' => 0,
    'admin_widget_link' => 0,
    'tree' => 0,
    'helper_form' => 0,
    'addnew' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59dd46cfa57098_34815693',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dd46cfa57098_34815693')) {function content_59dd46cfa57098_34815693($_smarty_tpl) {?>
<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

<?php if ($_smarty_tpl->tpl_vars['successful']->value==1) {?>
	<div class="bootstrap">
		<div class="alert alert-success megamenu-alert">
			<button data-dismiss="alert" class="close" type="button">×</button>
			<?php echo smartyTranslate(array('s'=>'Successfully','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>

		</div>
	</div>
<?php }?>
<div class="col-lg-12"> 
	<div class="" style="float: right">
		<div class="pull-right">
			<a href="<?php echo $_smarty_tpl->tpl_vars['live_editor_url']->value;?>
" class="btn btn-danger"><?php echo smartyTranslate(array('s'=>'Live Edit Tools','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</a>
               <?php echo smartyTranslate(array('s'=>'To Make Rich Content For Megamenu','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>

		</div>
	</div>
</div>
 
<div class="tab-content row">
	<div class="tab-pane active" id="megamenu">
	
		<div class="col-md-4">
			<div class="panel panel-default">
				<h3 class="panel-title"><?php echo smartyTranslate(array('s'=>'Tree Megamenu Management - Group: ','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['current_group_title']->value;?>
<?php echo smartyTranslate(array('s'=>' - Type: ','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['current_group_type']->value;?>
</h3>
				<div class="panel-content"><?php echo smartyTranslate(array('s'=>'To sort orders or update parent-child, you drap and drop expected menu.','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>

					<hr>
					<p>
						<input type="button" value="<?php echo smartyTranslate(array('s'=>'New Menu Item','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
" id="addcategory" data-loading-text="<?php echo smartyTranslate(array('s'=>'Processing ...','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
" class="btn btn-danger" name="addcategory">
						<a href="<?php echo $_smarty_tpl->tpl_vars['admin_widget_link']->value;?>
" class="leo-modal-action btn btn-modeal btn-success btn-info"><?php echo smartyTranslate(array('s'=>'List Widget','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</a>
					</p>
					<hr>										
					<?php echo $_smarty_tpl->tpl_vars['tree']->value;?>

				</div>
			</div>
		</div>
		<div class="col-md-8">
			<?php echo $_smarty_tpl->tpl_vars['helper_form']->value;?>

		</div>
		<script type="text/javascript">
			var addnew ="<?php echo $_smarty_tpl->tpl_vars['addnew']->value;?>
"; 
			var action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
";
			$("#content").PavMegaMenuList({
				action:action,
				addnew:addnew
			});
		</script>
	</div>
</div>
<script>
	$('#myTab a[href="#profile"]').tab('show');
</script><?php }} ?>
