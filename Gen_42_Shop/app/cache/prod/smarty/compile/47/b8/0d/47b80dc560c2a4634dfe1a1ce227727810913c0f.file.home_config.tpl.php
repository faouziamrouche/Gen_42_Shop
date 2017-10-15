<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 01:07:56
         compiled from "C:\xampp\htdocs\gen42-finale\modules\digitaleo\views\templates\admin\home_config.tpl" */ ?>
<?php /*%%SmartyHeaderCode:481459dd52cc7d56a8-02050667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47b80dc560c2a4634dfe1a1ce227727810913c0f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gen42-finale\\modules\\digitaleo\\views\\templates\\admin\\home_config.tpl',
      1 => 1507455302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '481459dd52cc7d56a8-02050667',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_dir' => 0,
    'iso_lang' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59dd52cc84e420_38686645',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dd52cc84e420_38686645')) {function content_59dd52cc84e420_38686645($_smarty_tpl) {?>
<div class="presentation_digitaleo">
    <div class="logo_digitaleo">
        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8');?>
/views/img/logo-Digitaleo-white-200x44.png" alt="Logo Digitaleo">
    </div>
    <div class="home_desc">
        <strong><?php echo smartyTranslate(array('s'=>'Communicate easily','mod'=>'digitaleo'),$_smarty_tpl);?>
</strong> <?php echo smartyTranslate(array('s'=>'with SMS and Email with your customers and','mod'=>'digitaleo'),$_smarty_tpl);?>
 <strong><?php echo smartyTranslate(array('s'=>'boost your business','mod'=>'digitaleo'),$_smarty_tpl);?>
</strong> <?php echo smartyTranslate(array('s'=>'with','mod'=>'digitaleo'),$_smarty_tpl);?>
 <strong><?php echo smartyTranslate(array('s'=>'Digitaleo','mod'=>'digitaleo'),$_smarty_tpl);?>
</strong> <?php echo smartyTranslate(array('s'=>'and PrestaShop!','mod'=>'digitaleo'),$_smarty_tpl);?>

    </div>
    <div id="player">
        <div id="player_vid" class="lang_<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['iso_lang']->value,'htmlall','UTF-8');?>
"></div>
        <iframe id="video" width="489" height="275" src="<?php if ($_smarty_tpl->tpl_vars['iso_lang']->value=='es') {?>https://www.youtube.com/embed/dNMRUSH5YmQ<?php } else { ?>https://www.youtube.com/embed/7FUrtdehqqk<?php }?>?rel=0&amp;controls=1&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="digitaleo_advantages">
        <div class="dgo_adv">
            <strong><?php echo smartyTranslate(array('s'=>'Synchronize your PrestaShop customers','mod'=>'digitaleo'),$_smarty_tpl);?>
</strong> <?php echo smartyTranslate(array('s'=>'with your Digitaleo account.','mod'=>'digitaleo'),$_smarty_tpl);?>

        </div>
        <div class="dgo_adv">
            <strong><?php echo smartyTranslate(array('s'=>'Automatically','mod'=>'digitaleo'),$_smarty_tpl);?>
</strong> <?php echo smartyTranslate(array('s'=>'send','mod'=>'digitaleo'),$_smarty_tpl);?>
 <strong><?php echo smartyTranslate(array('s'=>'emails','mod'=>'digitaleo'),$_smarty_tpl);?>
</strong> <?php echo smartyTranslate(array('s'=>'and','mod'=>'digitaleo'),$_smarty_tpl);?>
 <strong><?php echo smartyTranslate(array('s'=>'SMS','mod'=>'digitaleo'),$_smarty_tpl);?>
</strong> <?php echo smartyTranslate(array('s'=>'based on customer events','mod'=>'digitaleo'),$_smarty_tpl);?>
<br/><br/><?php echo smartyTranslate(array('s'=>'(order confirmation, validation of payment, etc.).','mod'=>'digitaleo'),$_smarty_tpl);?>

        </div>
        <div class="dgo_adv">
            <?php echo smartyTranslate(array('s'=>'Quickly launch','mod'=>'digitaleo'),$_smarty_tpl);?>
 <strong><?php echo smartyTranslate(array('s'=>'commercial operations','mod'=>'digitaleo'),$_smarty_tpl);?>
</strong> <?php echo smartyTranslate(array('s'=>'SMS and Emails ','mod'=>'digitaleo'),$_smarty_tpl);?>
 <strong><?php echo smartyTranslate(array('s'=>'already ready for use.','mod'=>'digitaleo'),$_smarty_tpl);?>
</strong>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="fonctionnalites fonctionnalites_auth">
        <h2><?php echo smartyTranslate(array('s'=>'Discover also all the features that Digitaleo offers','mod'=>'digitaleo'),$_smarty_tpl);?>
 :</h2>
        <div class="col-3">
            <p><?php echo smartyTranslate(array('s'=>'Time saving','mod'=>'digitaleo'),$_smarty_tpl);?>
</p>
            <div class="icons">
                <div class="pacc"><i class="material-icons">&#xE8E5;</i><span><?php echo smartyTranslate(array('s'=>'PACC','mod'=>'digitaleo'),$_smarty_tpl);?>
</span></div>
                <div class="leo"><i class="material-icons">&#xE916;</i><span><?php echo smartyTranslate(array('s'=>'Léo','mod'=>'digitaleo'),$_smarty_tpl);?>
</span></div>
            </div>
        </div>
        <div class="col-6">
            <p><?php echo smartyTranslate(array('s'=>'Easy and inexpensive visibility','mod'=>'digitaleo'),$_smarty_tpl);?>
</p>
            <div class="icons">
                <div class="sms"><i class="material-icons">&#xE324;</i><span><?php echo smartyTranslate(array('s'=>'SMS','mod'=>'digitaleo'),$_smarty_tpl);?>
</span></div>
                <div class="email"><i class="material-icons">&#xE158;</i><span><?php echo smartyTranslate(array('s'=>'Email','mod'=>'digitaleo'),$_smarty_tpl);?>
</span></div>
                <div class="mini_site"><i class="material-icons">&#xE321;</i><span><?php echo smartyTranslate(array('s'=>'Mini mobile site','mod'=>'digitaleo'),$_smarty_tpl);?>
</span></div>
                <div class="msg_repondeur"><i class="material-icons">&#xE0D9;</i><span><?php echo smartyTranslate(array('s'=>'Message answering machine','mod'=>'digitaleo'),$_smarty_tpl);?>
</span></div>
            </div>
        </div>
        <div class="col-3">
            <p><?php echo smartyTranslate(array('s'=>'Customer Management','mod'=>'digitaleo'),$_smarty_tpl);?>
</p>
            <div class="icons">
                <div class="import_locations"><i class="material-icons">&#xE7F0;</i><span><?php echo smartyTranslate(array('s'=>'Import and rent','mod'=>'digitaleo'),$_smarty_tpl);?>
</span></div>
                <div class="collecte_donnees"><i class="material-icons">&#xE331;</i><span><?php echo smartyTranslate(array('s'=>'Data gathering','mod'=>'digitaleo'),$_smarty_tpl);?>
</span></div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="lien_site">
            <a href="https://app.digitaleo.com/" title="Accéder à Digitaleo" target="_blank"><?php echo smartyTranslate(array('s'=>'Go to Digitaleo','mod'=>'digitaleo'),$_smarty_tpl);?>
</a>
        </div>
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['action']->value=='createTrialAccount') {?>
    <?php echo $_smarty_tpl->getSubTemplate ("./trialAccount.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['action']->value=='checkcode') {?>
    <?php echo $_smarty_tpl->getSubTemplate ("./checkcode.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("./authentification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>
