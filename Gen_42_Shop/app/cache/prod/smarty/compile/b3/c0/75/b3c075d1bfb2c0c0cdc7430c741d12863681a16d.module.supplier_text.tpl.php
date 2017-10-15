<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 00:10:17
         compiled from "module:ps_supplierlist/views/templates/_partials/supplier_text.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2239659dd454992a4b4-62936023%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3c075d1bfb2c0c0cdc7430c741d12863681a16d' => 
    array (
      0 => 'module:ps_supplierlist/views/templates/_partials/supplier_text.tpl',
      1 => 1507310277,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '2239659dd454992a4b4-62936023',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'suppliers' => 0,
    'text_list_nb' => 0,
    'supplier' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59dd4549943e64_59251945',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dd4549943e64_59251945')) {function content_59dd4549943e64_59251945($_smarty_tpl) {?>

<ul class="list-group">
  <?php  $_smarty_tpl->tpl_vars['supplier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['supplier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['suppliers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['supplier_list']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['supplier']->key => $_smarty_tpl->tpl_vars['supplier']->value) {
$_smarty_tpl->tpl_vars['supplier']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['supplier_list']['iteration']++;
?>
    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['supplier_list']['iteration']<=$_smarty_tpl->tpl_vars['text_list_nb']->value) {?>
      <li class="facet-label list-group-item">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['link'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['name'], ENT_QUOTES, 'UTF-8');?>

        </a>
      </li>
    <?php }?>
  <?php } ?>
</ul>
<?php }} ?>
