<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 01:23:33
         compiled from "modules\ps_legalcompliance\views\templates\hook\hookDisplayProductPriceBlock_price.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1610159dd5675a11b99-54507031%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ec610da22040e7c3fc179bb696a0423a0d0f6b5' => 
    array (
      0 => 'modules\\ps_legalcompliance\\views\\templates\\hook\\hookDisplayProductPriceBlock_price.tpl',
      1 => 1507309543,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1610159dd5675a11b99-54507031',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'smartyVars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59dd5675a6d0f6_66200292',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dd5675a6d0f6_66200292')) {function content_59dd5675a6d0f6_66200292($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['smartyVars']->value)) {?>
    
    <?php if (isset($_smarty_tpl->tpl_vars['smartyVars']->value['ship'])&&isset($_smarty_tpl->tpl_vars['smartyVars']->value['ship']['link_ship_pay'])&&isset($_smarty_tpl->tpl_vars['smartyVars']->value['ship']['ship_str_i18n'])) {?>
        <span class="aeuc_shipping_label">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['smartyVars']->value['ship']['link_ship_pay'], ENT_QUOTES, 'UTF-8');?>
" class="iframe">
                <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['smartyVars']->value['ship']['ship_str_i18n'],'htmlall'), ENT_QUOTES, 'UTF-8');?>

            </a>
        </span>
    <?php }?>
<?php }?>
<?php }} ?>
