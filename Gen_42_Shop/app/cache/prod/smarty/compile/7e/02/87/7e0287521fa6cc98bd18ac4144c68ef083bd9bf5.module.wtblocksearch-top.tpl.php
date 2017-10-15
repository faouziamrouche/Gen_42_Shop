<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 15:14:41
         compiled from "module:wtblocksearch/views/templates/hook/wtblocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:411159d63041ae40b0-95162922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e0287521fa6cc98bd18ac4144c68ef083bd9bf5' => 
    array (
      0 => 'module:wtblocksearch/views/templates/hook/wtblocksearch-top.tpl',
      1 => 1507154861,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '411159d63041ae40b0-95162922',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hook_mobile' => 0,
    'link' => 0,
    'search_query' => 0,
    'search_controller_url' => 0,
    'base_ssl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d63041b0f933_48895804',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d63041b0f933_48895804')) {function content_59d63041b0f933_48895804($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['hook_mobile']->value)) {?>
<div class="input_search" data-role="fieldcontain">
	<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',true),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" id="searchbox">
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query" type="search" id="search_query_top" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search entire store...','mod'=>'wtblocksearch'),$_smarty_tpl);?>
" value="<?php echo htmlspecialchars(stripslashes($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['search_query']->value,'html','UTF-8')), ENT_QUOTES, 'UTF-8');?>
" />
	</form>
</div>
<?php } else { ?>
<!-- Block search module TOP -->

<div id="search_block_top" class="col-sm-8">
	<form id="searchbox" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
       
		<input type="hidden" name="controller" value="search">
		
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
        
		<input class="search_query form-control" type="text" id="search_query_top" name="s" placeholder="<?php echo smartyTranslate(array('s'=>'Search entire store...','d'=>'Modules.WTbBockSearch'),$_smarty_tpl);?>
" value="<?php echo htmlspecialchars(stripslashes($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['search_query']->value,'htmlall','UTF-8')), ENT_QUOTES, 'UTF-8');?>
" />
		
		<div id="wt_url_ajax_search" style="display:none">
		<input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['base_ssl']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
/controller_ajax_search.php" class="url_ajax" />
		</div>
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span><?php echo smartyTranslate(array('s'=>'Search','d'=>'Modules.WTbBockSearch'),$_smarty_tpl);?>
</span>
		</button>
	</form>
	
</div>
<?php }?>

<script type="text/javascript">
var limit_character = "<p class='limit'><?php echo smartyTranslate(array('s'=>'Number of characters at least are 3','d'=>'Modules.WTbBockSearch'),$_smarty_tpl);?>
</p>";
var close_text = "<?php echo smartyTranslate(array('s'=>'close','d'=>'Modules.WTbBockSearch'),$_smarty_tpl);?>
";
</script>
<!-- /Block search module TOP -->
<?php }} ?>
