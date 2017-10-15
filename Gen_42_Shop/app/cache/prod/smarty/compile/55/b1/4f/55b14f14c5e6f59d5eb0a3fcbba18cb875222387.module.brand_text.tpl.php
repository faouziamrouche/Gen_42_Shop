<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 00:10:17
         compiled from "module:ps_brandlist/views/templates/_partials/brand_text.tpl" */ ?>
<?php /*%%SmartyHeaderCode:418659dd4549a5fcc3-43221555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55b14f14c5e6f59d5eb0a3fcbba18cb875222387' => 
    array (
      0 => 'module:ps_brandlist/views/templates/_partials/brand_text.tpl',
      1 => 1507310277,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '418659dd4549a5fcc3-43221555',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'brands' => 0,
    'text_list_nb' => 0,
    'brand' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59dd4549a7cdf9_35000228',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dd4549a7cdf9_35000228')) {function content_59dd4549a7cdf9_35000228($_smarty_tpl) {?>

<ul class="list-group">
  <?php  $_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['brand_list']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->key => $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['brand_list']['iteration']++;
?>
    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['brand_list']['iteration']<=$_smarty_tpl->tpl_vars['text_list_nb']->value) {?>
      <li class="facet-label">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['link'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>

        </a>
      </li>
    <?php }?>
  <?php } ?>
</ul>
<?php }} ?>
