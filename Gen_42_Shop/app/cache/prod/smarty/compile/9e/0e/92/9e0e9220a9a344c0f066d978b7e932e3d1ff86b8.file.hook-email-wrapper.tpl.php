<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 00:05:55
         compiled from "modules\ps_legalcompliance\views\templates\hook\hook-email-wrapper.tpl" */ ?>
<?php /*%%SmartyHeaderCode:941159dd4443c52215-70833134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e0e9220a9a344c0f066d978b7e932e3d1ff86b8' => 
    array (
      0 => 'modules\\ps_legalcompliance\\views\\templates\\hook\\hook-email-wrapper.tpl',
      1 => 1507309543,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '941159dd4443c52215-70833134',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_contents' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59dd4443c6f6c9_84867933',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dd4443c6f6c9_84867933')) {function content_59dd4443c6f6c9_84867933($_smarty_tpl) {?>

<div style="background-color:#fff;width:650px;font-family:Open-sans,sans-serif;color:#555454;font-size:13px;line-height:18px;margin:auto">
    <table style="width:100%;margin-top:10px">
        <tbody>
            <?php  $_smarty_tpl->tpl_vars['content'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cms_contents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content']->key => $_smarty_tpl->tpl_vars['content']->value) {
$_smarty_tpl->tpl_vars['content']->_loop = true;
?>
            <tr>
                <td style="width:20px;padding:7px 0">&nbsp;</td>
                <td style="padding:7px 0">
                    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                </td>
                <td style="width:20px;padding:7px 0">&nbsp;</td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div><?php }} ?>
