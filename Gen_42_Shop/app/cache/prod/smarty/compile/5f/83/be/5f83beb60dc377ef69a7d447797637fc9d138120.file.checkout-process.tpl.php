<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 14:42:54
         compiled from "C:\xampp\htdocs\gen42-finale\themes\wt_omartsimple\templates\checkout\checkout-process.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3268159d628ce511e50-83122743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f83beb60dc377ef69a7d447797637fc9d138120' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gen42-finale\\themes\\wt_omartsimple\\templates\\checkout\\checkout-process.tpl',
      1 => 1507154861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3268159d628ce511e50-83122743',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'steps' => 0,
    'step' => 0,
    'index' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d628ce51d250_70683148',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d628ce51d250_70683148')) {function content_59d628ce51d250_70683148($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars["step"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["step"]->_loop = false;
 $_smarty_tpl->tpl_vars["index"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['steps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["step"]->key => $_smarty_tpl->tpl_vars["step"]->value) {
$_smarty_tpl->tpl_vars["step"]->_loop = true;
 $_smarty_tpl->tpl_vars["index"]->value = $_smarty_tpl->tpl_vars["step"]->key;
?>
  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0][0]->smartyRender(array('identifier'=>$_smarty_tpl->tpl_vars['step']->value['identifier'],'position'=>($_smarty_tpl->tpl_vars['index']->value+1),'ui'=>$_smarty_tpl->tpl_vars['step']->value['ui']),$_smarty_tpl);?>

<?php } ?>
<?php }} ?>
