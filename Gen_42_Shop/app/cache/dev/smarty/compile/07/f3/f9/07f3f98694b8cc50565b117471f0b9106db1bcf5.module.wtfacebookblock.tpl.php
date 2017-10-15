<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 00:25:21
         compiled from "module:wtfacebookblock/views/templates/hook/wtfacebookblock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2758059d55fd1c0cc05-51480767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07f3f98694b8cc50565b117471f0b9106db1bcf5' => 
    array (
      0 => 'module:wtfacebookblock/views/templates/hook/wtfacebookblock.tpl',
      1 => 1507154857,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '2758059d55fd1c0cc05-51480767',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d55fd1c17ba6_48106657',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d55fd1c17ba6_48106657')) {function content_59d55fd1c17ba6_48106657($_smarty_tpl) {?><!-- begin C:\xampp\htdocs\gen42-finale/modules/wtfacebookblock/views/templates/hook/wtfacebookblock.tpl -->
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="footer-block-facebook" class="block-contact col-md-4 links wrapper">
<h3 class="h3 hidden-sm-down"><?php echo smartyTranslate(array('s'=>'Facebook','d'=>'Modules.WTFacebookBlock'),$_smarty_tpl);?>
</h3>
	<div class="title clearfix hidden-md-up collapsed" data-target="#facebook_block" data-toggle="collapse" aria-expanded="false">
        <span class="h3"><?php echo smartyTranslate(array('s'=>'Facebook','d'=>'Modules.WTFacebookBlock'),$_smarty_tpl);?>
</span>
        <span class="pull-xs-right">
          <span class="navbar-toggler collapse-icons">
            <i class="material-icons add"></i>
            <i class="material-icons remove"></i>
          </span>
        </span>
      </div>
<div id="fb-root"></div>
<div id="facebook_block" class="collapse" aria-expanded="false">
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['facebookurl']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
</div>
<?php }?>
<!-- end C:\xampp\htdocs\gen42-finale/modules/wtfacebookblock/views/templates/hook/wtfacebookblock.tpl --><?php }} ?>
