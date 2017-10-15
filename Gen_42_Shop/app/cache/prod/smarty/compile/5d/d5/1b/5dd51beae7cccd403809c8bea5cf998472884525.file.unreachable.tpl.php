<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 00:31:52
         compiled from "C:\xampp\htdocs\gen42-finale\themes\ap_office\templates\checkout\_partials\steps\unreachable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2301459dd4a58afadd2-78212941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5dd51beae7cccd403809c8bea5cf998472884525' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gen42-finale\\themes\\ap_office\\templates\\checkout\\_partials\\steps\\unreachable.tpl',
      1 => 1507310278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2301459dd4a58afadd2-78212941',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'identifier' => 0,
    'position' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59dd4a58b09e67_86270782',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dd4a58b09e67_86270782')) {function content_59dd4a58b09e67_86270782($_smarty_tpl) {?>

  <section class="checkout-step -unreachable" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
">
    <h1 class="step-title h3">
      <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    </h1>
  </section>

<?php }} ?>
