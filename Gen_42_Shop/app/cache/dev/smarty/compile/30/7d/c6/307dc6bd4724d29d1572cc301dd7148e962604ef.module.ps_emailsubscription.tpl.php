<?php /* Smarty version Smarty-3.1.19, created on 2017-10-05 00:25:21
         compiled from "module:ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3035259d55fd1b1f586-74381242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl',
      1 => 1507154861,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '3035259d55fd1b1f586-74381242',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'urls' => 0,
    'value' => 0,
    'conditions' => 0,
    'msg' => 0,
    'nw_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d55fd1b38fb8_96452178',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d55fd1b38fb8_96452178')) {function content_59d55fd1b38fb8_96452178($_smarty_tpl) {?><!-- begin C:\xampp\htdocs\gen42-finale/themes/wt_omartsimple/modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl -->

<h1>Our Newsletter</h1>
<div class="block_newsletter col-md-12 col-sm-12">
  <div class="row">
   <div class="out-block-newletter">
  <h3><?php echo smartyTranslate(array('s'=>'Receive Email Updates','d'=>'Shop.Theme'),$_smarty_tpl);?>
</h3>
    <p><?php echo smartyTranslate(array('s'=>'Get our latest news and special sales','d'=>'Shop.Theme'),$_smarty_tpl);?>
</p>
    <div class="col-xs-12">
      <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
#footer" method="post">
        <div class="row">
          <div class="col-xs-12">
            
            <input
              class="btn btn-primary pull-xs-right hidden-sm-up"
              name="submitNewsletter"
              type="submit"
              value="<?php echo smartyTranslate(array('s'=>'OK','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
"
            >
            <div class="input-wrapper">
              <input
                name="email"
                type="text"
                value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                placeholder="<?php echo smartyTranslate(array('s'=>'Your email address','d'=>'Shop.Forms.Labels'),$_smarty_tpl);?>
"
              >
			  <input
              class="btn btn-primary pull-xs-right hidden-xs-down"
              name="submitNewsletter"
              type="submit"
              value="<?php echo smartyTranslate(array('s'=>'Subscribe','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
"
            >
            </div>
			
            <input type="hidden" name="action" value="0">
            <div class="clearfix"></div>
          </div>
          <div class="col-xs-12">
              <?php if ($_smarty_tpl->tpl_vars['conditions']->value) {?>
                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['conditions']->value, ENT_QUOTES, 'UTF-8');?>
</p>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
                <p class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>

                </p>
              <?php }?>
          </div>
        </div>
      </form>
    </div>
  </div>
    </div>
</div>
<!-- end C:\xampp\htdocs\gen42-finale/themes/wt_omartsimple/modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl --><?php }} ?>
