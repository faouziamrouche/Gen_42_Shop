<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 01:23:33
         compiled from "modules\ps_legalcompliance\views\templates\hook\hookDisplayProductPriceBlock_after_price.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1580259dd5675a83c60-81575952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ffe547f8965eb8be275c3f847c2033560e94dbf' => 
    array (
      0 => 'modules\\ps_legalcompliance\\views\\templates\\hook\\hookDisplayProductPriceBlock_after_price.tpl',
      1 => 1507309543,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1580259dd5675a83c60-81575952',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'smartyVars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59dd5675aa3ad3_58781499',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dd5675aa3ad3_58781499')) {function content_59dd5675aa3ad3_58781499($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['smartyVars']->value)) {?>
    
    <?php if (isset($_smarty_tpl->tpl_vars['smartyVars']->value['after_price'])&&isset($_smarty_tpl->tpl_vars['smartyVars']->value['after_price']['delivery_str_i18n'])) {?>
        <span class="aeuc_delivery_label">
            <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['smartyVars']->value['after_price']['delivery_str_i18n'],'htmlall'), ENT_QUOTES, 'UTF-8');?>

        </span>
    <?php }?>
<?php }?>
<?php }} ?>
