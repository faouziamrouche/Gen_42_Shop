<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 18:45:52
         compiled from "C:\xampp\htdocs\gen42-finale\themes\ap_office\modules\appagebuilder\views\templates\hook\letter-blog\ApBlog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1591659de4ac0e9b032-15603543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '841024d9bdc7211fd6e3d84cf37cbb5cb7ff1fda' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gen42-finale\\themes\\ap_office\\modules\\appagebuilder\\views\\templates\\hook\\letter-blog\\ApBlog.tpl',
      1 => 1507310277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1591659de4ac0e9b032-15603543',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formAtts' => 0,
    'apLiveEdit' => 0,
    'products' => 0,
    'leo_helper' => 0,
    'leo_include_file' => 0,
    'apLiveEditEnd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59de4ac10196e2_56987795',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59de4ac10196e2_56987795')) {function content_59de4ac10196e2_56987795($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApBlog -->
<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error'])&&$_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error']) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_error'])&&$_smarty_tpl->tpl_vars['formAtts']->value['lib_error']) {?>
        <div class="alert alert-warning leo-lib-error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['lib_error'], ENT_QUOTES, 'UTF-8');?>
</div>
    <?php }?>
<?php } else { ?>

    <div id="blog-<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="block latest-blogs exclusive appagebuilder <?php echo htmlspecialchars(isset($_smarty_tpl->tpl_vars['formAtts']->value['class']) ? $_smarty_tpl->tpl_vars['formAtts']->value['class'] : $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape('','html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>

        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])&&!empty($_smarty_tpl->tpl_vars['formAtts']->value['title'])) {?>
        <h4 class="title_block">
            <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(rtrim($_smarty_tpl->tpl_vars['formAtts']->value['title']),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>

        </h4>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title'])&&$_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
            <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
        <?php }?>
        <div class="block_content">	
                <?php if (!empty($_smarty_tpl->tpl_vars['products']->value)) {?>
                    <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['carousel_type']=='boostrap') {?>
                    <?php $_smarty_tpl->tpl_vars['leo_include_file'] = new Smarty_variable($_smarty_tpl->tpl_vars['leo_helper']->value->getTplTemplate('BlogCarousel.tpl',$_smarty_tpl->tpl_vars['formAtts']->value['override_folder']), null, 0);?>
                    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['leo_include_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars['leo_include_file'] = new Smarty_variable($_smarty_tpl->tpl_vars['leo_helper']->value->getTplTemplate('BlogOwlCarousel.tpl',$_smarty_tpl->tpl_vars['formAtts']->value['override_folder']), null, 0);?>
                    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['leo_include_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php }?>
                <?php } else { ?>
                    <p class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No blog at this time.','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</p>	
                <?php }?>
        </div>
        <?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>

    </div>

    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_show'])&&$_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_show']) {?>
            <a class="pull-right" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['leo_blog_helper']->getFontBlogLink(), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'View All','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'View All','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a>
    <?php }?>
<?php }?><?php }} ?>
