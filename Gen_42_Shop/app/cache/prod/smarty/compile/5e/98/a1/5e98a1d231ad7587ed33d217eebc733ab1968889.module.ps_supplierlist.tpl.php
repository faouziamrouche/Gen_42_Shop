<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 00:10:17
         compiled from "module:ps_supplierlist/views/templates/hook/ps_supplierlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3236759dd45498ba0a1-54636766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e98a1d231ad7587ed33d217eebc733ab1968889' => 
    array (
      0 => 'module:ps_supplierlist/views/templates/hook/ps_supplierlist.tpl',
      1 => 1507310277,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '3236759dd45498ba0a1-54636766',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_link_supplier' => 0,
    'page_link' => 0,
    'suppliers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59dd45498d09b7_25284264',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dd45498d09b7_25284264')) {function content_59dd45498d09b7_25284264($_smarty_tpl) {?>

<div id="search_filters_suppliers" class="block">
  <section class="facet">
    <h1 class="h6 facet-label title_block">
      <?php if ($_smarty_tpl->tpl_vars['display_link_supplier']->value) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_link']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Suppliers','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
"><?php }?>
        <?php echo smartyTranslate(array('s'=>'Suppliers','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>

      <?php if ($_smarty_tpl->tpl_vars['display_link_supplier']->value) {?></a><?php }?>
    </h1>
    <div class="block_content">
      <?php if ($_smarty_tpl->tpl_vars['suppliers']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("module:ps_supplierlist/views/templates/_partials/".((string)$_smarty_tpl->tpl_vars['supplier_display_type']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('suppliers'=>$_smarty_tpl->tpl_vars['suppliers']->value), 0);?>

      <?php } else { ?>
        <p><?php echo smartyTranslate(array('s'=>'No supplier','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</p>
      <?php }?>
    </div>
  </section>
</div>
<?php }} ?>
