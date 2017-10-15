<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 18:45:58
         compiled from "modules\appagebuilder\views\templates\hook\ApModule.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2682959de4ac625d0a9-95868131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90e9a7fc99de0e1c91f608fbfc6c99f5031738e7' => 
    array (
      0 => 'modules\\appagebuilder\\views\\templates\\hook\\ApModule.tpl',
      1 => 1507310270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2682959de4ac625d0a9-95868131',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'apLiveEdit' => 0,
    'apContent' => 0,
    'apLiveEditEnd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59de4ac6278ad9_26395058',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59de4ac6278ad9_26395058')) {function content_59de4ac6278ad9_26395058($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApModule -->
<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>

<?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>

<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>
<?php }} ?>
