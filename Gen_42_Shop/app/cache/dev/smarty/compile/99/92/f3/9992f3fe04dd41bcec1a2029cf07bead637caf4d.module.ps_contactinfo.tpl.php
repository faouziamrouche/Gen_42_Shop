<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 00:25:21
         compiled from "module:ps_contactinfo/ps_contactinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:295359d55fd1b4c3a7-76265871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9992f3fe04dd41bcec1a2029cf07bead637caf4d' => 
    array (
      0 => 'module:ps_contactinfo/ps_contactinfo.tpl',
      1 => 1507154861,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '295359d55fd1b4c3a7-76265871',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contact_infos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d55fd1b71c16_68780650',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d55fd1b71c16_68780650')) {function content_59d55fd1b71c16_68780650($_smarty_tpl) {?><!-- begin C:\xampp\htdocs\gen42-finale/themes/wt_omartsimple/modules/ps_contactinfo/ps_contactinfo.tpl -->

<div class="block-contact col-md-4 links wrapper">
    <h4 class="h3 hidden-sm-down"><?php echo smartyTranslate(array('s'=>'Store information','d'=>'Shop.Theme'),$_smarty_tpl);?>
</h4>
	<div class="title clearfix hidden-md-up collapsed" data-target="#footer_sub_menu_contact" data-toggle="collapse" aria-expanded="false">
        <span class="h3"><?php echo smartyTranslate(array('s'=>'Store information','d'=>'Shop.Theme'),$_smarty_tpl);?>
</span>
        <span class="pull-xs-right">
          <span class="navbar-toggler collapse-icons">
            <i class="material-icons add"></i>
            <i class="material-icons remove"></i>
          </span>
        </span>
      </div>
	  <ul id="footer_sub_menu_contact" class="collapse" aria-expanded="false">
		<li> <i class="icon-map-marker"></i>
		<?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['address1'];?>

		
		</li>
      <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
       <li>
	   <i class="icon-phone"></i>
        
        <?php echo smartyTranslate(array('s'=>'Call us now: [1]%phone%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme'),$_smarty_tpl);?>

		</li>
      <?php }?>
	  
      <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['fax']) {?>
       <li>
        
        <?php echo smartyTranslate(array('s'=>'Fax: [1]%fax%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%fax%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['fax']),'d'=>'Shop.Theme'),$_smarty_tpl);?>

		</li>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email']) {?>
       <li>
	   <i class="icon-envelope-alt"></i>
        
        <?php echo smartyTranslate(array('s'=>'Email us: [1]%email%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%email%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['email']),'d'=>'Shop.Theme'),$_smarty_tpl);?>

		</li>
      <?php }?>
	  </ul>
  
</div><!-- end C:\xampp\htdocs\gen42-finale/themes/wt_omartsimple/modules/ps_contactinfo/ps_contactinfo.tpl --><?php }} ?>
