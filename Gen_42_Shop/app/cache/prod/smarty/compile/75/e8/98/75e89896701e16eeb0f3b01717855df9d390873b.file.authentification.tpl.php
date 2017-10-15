<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 01:07:56
         compiled from "C:\xampp\htdocs\gen42-finale\modules\digitaleo\views\templates\admin\authentification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3019159dd52cc889800-73450403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75e89896701e16eeb0f3b01717855df9d390873b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gen42-finale\\modules\\digitaleo\\views\\templates\\admin\\authentification.tpl',
      1 => 1507455302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3019159dd52cc889800-73450403',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59dd52cc904820_95059064',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dd52cc904820_95059064')) {function content_59dd52cc904820_95059064($_smarty_tpl) {?>
<div class="auth_digitaleo">
    <form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_SERVER['REQUEST_URI'],'htmlall','UTF-8');?>
" method="post">
            <div class="dgo_title_blue">
            <strong><?php echo smartyTranslate(array('s'=>'Sign in','mod'=>'digitaleo'),$_smarty_tpl);?>
</strong><br/>
            <?php echo smartyTranslate(array('s'=>'with your account Digitaleo','mod'=>'digitaleo'),$_smarty_tpl);?>

            </div>
            <p>
                <input name="email" id="email" type="text" placeholder="<?php echo smartyTranslate(array('s'=>'E-mail','mod'=>'digitaleo'),$_smarty_tpl);?>
">
            </p>
            <p>
                <input name="password" id="password" type="password" placeholder="<?php echo smartyTranslate(array('s'=>'Password','mod'=>'digitaleo'),$_smarty_tpl);?>
">
            </p>
            <p>
                <input id="module_form_submit_btn" value="<?php echo smartyTranslate(array('s'=>'Sign in','mod'=>'digitaleo'),$_smarty_tpl);?>
" name="submitAuth" class="btn btn_orange" type="submit">
            </p>
            <br><br>
            <p style="text-align:center;">
                <div class="dgo_title_blue"><?php echo smartyTranslate(array('s'=>'No Digitaleo account?','mod'=>'digitaleo'),$_smarty_tpl);?>
</div>
                <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['url_config']->value,'htmlall','UTF-8');?>
&action=createTrialAccount" class="btn btn_orange"><?php echo smartyTranslate(array('s'=>'Try for free','mod'=>'digitaleo'),$_smarty_tpl);?>
</a><br><br>
                <?php echo smartyTranslate(array('s'=>'Up to 100 SMS and 10 000 Emails available for 15-day free trial with no obligation!','mod'=>'digitaleo'),$_smarty_tpl);?>
<br>
            </p>
    </form>
</div>
<?php }} ?>
