<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 00:25:21
         compiled from "module:ps_customersignin/ps_customersignin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2634659d55fd17bece1-08174061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5f8f570180f74d1dbdd1a1d2af0445e90a6650c' => 
    array (
      0 => 'module:ps_customersignin/ps_customersignin.tpl',
      1 => 1507154861,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '2634659d55fd17bece1-08174061',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged' => 0,
    'logout_url' => 0,
    'my_account_url' => 0,
    'customerName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d55fd17d08a1_03400826',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d55fd17d08a1_03400826')) {function content_59d55fd17d08a1_03400826($_smarty_tpl) {?><!-- begin C:\xampp\htdocs\gen42-finale/themes/wt_omartsimple/modules/ps_customersignin/ps_customersignin.tpl --><div id="desktop_user_info">
  <div class="user-info">
    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
      <a
        class="logout"
        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
"
        rel="nofollow"
      >
        <i class="material-icons">&#xE7FF;</i>
        <?php echo smartyTranslate(array('s'=>'Sign out','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

      </a>
      <a
        class="account"
        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
        title="<?php echo smartyTranslate(array('s'=>'View my customer account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
"
        rel="nofollow"
      >
        <i class="material-icons logged">&#xE7FF;</i>
        <span class=""><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>
</span>
      </a>
    <?php } else { ?>
      <a
        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
        title="<?php echo smartyTranslate(array('s'=>'Log in to your customer account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>
"
        rel="nofollow"
      >
        <i class="material-icons">&#xE7FF;</i>
        <span class=""><?php echo smartyTranslate(array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</span>
      </a>
    <?php }?>
  </div>
</div><!-- end C:\xampp\htdocs\gen42-finale/themes/wt_omartsimple/modules/ps_customersignin/ps_customersignin.tpl --><?php }} ?>
