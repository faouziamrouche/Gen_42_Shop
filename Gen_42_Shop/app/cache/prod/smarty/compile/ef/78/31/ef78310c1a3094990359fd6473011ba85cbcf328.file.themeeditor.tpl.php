<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 18:17:31
         compiled from "C:\xampp\htdocs\gen42-finale\modules\appagebuilder\views\templates\admin\ap_page_builder_theme_editor\themeeditor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:344759de441b89b8e0-04388340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef78310c1a3094990359fd6473011ba85cbcf328' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gen42-finale\\modules\\appagebuilder\\views\\templates\\admin\\ap_page_builder_theme_editor\\themeeditor.tpl',
      1 => 1507310270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '344759de441b89b8e0-04388340',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'apPageHelper' => 0,
    'actionURL' => 0,
    'profiles_active' => 0,
    'backLink' => 0,
    'profiles' => 0,
    'profile' => 0,
    'imgLink' => 0,
    'xmlselectors' => 0,
    'for' => 0,
    'items' => 0,
    'group' => 0,
    'item' => 0,
    'patterns' => 0,
    'backgroundImageURL' => 0,
    'pattern' => 0,
    'backGroundValue' => 0,
    'attachment' => 0,
    'position' => 0,
    'repeat' => 0,
    'i' => 0,
    'fonts' => 0,
    'font_item' => 0,
    'siteURL' => 0,
    'customizeFolderURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59de441b9d5221_36129852',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59de441b9d5221_36129852')) {function content_59de441b9d5221_36129852($_smarty_tpl) {?>
<div id="livethemeeditor">
    <?php $_smarty_tpl->tpl_vars['fonts'] = new Smarty_variable($_smarty_tpl->tpl_vars['apPageHelper']->value->getFontFamily(), null, 0);?>
    <form  enctype="multipart/form-data" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['actionURL']->value,'html','UTF-8');?>
" id="form" method="post">
        <div id="leo-customize" class="leo-customize">
            <div class="btn-show"><?php echo smartyTranslate(array('s'=>'Hide','mod'=>'appagebuilder'),$_smarty_tpl);?>
 <span class="icon-wrench"></span></div>
            <div class="wrapper"><div id="customize-form">
                    <p>  
                        <?php if ($_smarty_tpl->tpl_vars['profiles_active']->value) {?>
                            <span class="badge">
                                <?php echo $_smarty_tpl->tpl_vars['profiles_active']->value;?>
 <?php echo smartyTranslate(array('s'=>'is active','mod'=>'appagebuilder'),$_smarty_tpl);?>

                            </span>
                            <?php } else { ?>
                                <?php echo smartyTranslate(array('s'=>'No pattern is active','mod'=>'appagebuilder'),$_smarty_tpl);?>

                            <?php }?>
                        <a class="label label-default pull-right" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['backLink']->value,'html','UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Back','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a>  
                    </p>        


                    <hr>
                    <div class="groups">
                        <div class="form-group clearfix">
                            <label><?php echo smartyTranslate(array('s'=>'Edit for','mod'=>'appagebuilder'),$_smarty_tpl);?>
</label> 
                            <select id="saved-files" name="saved_file" class="form-control" active="<?php echo $_smarty_tpl->tpl_vars['profiles_active']->value;?>
">
                                <option value="" data-active="0"><?php echo smartyTranslate(array('s'=>'create new','mod'=>'appagebuilder'),$_smarty_tpl);?>
</option>
                                <?php  $_smarty_tpl->tpl_vars['profile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['profile']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profiles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['profile']->key => $_smarty_tpl->tpl_vars['profile']->value) {
$_smarty_tpl->tpl_vars['profile']->_loop = true;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['profile']->value==$_smarty_tpl->tpl_vars['profiles_active']->value) {?>
                                        <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['profile']->value,'html','UTF-8');?>
" data-active="1"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['profile']->value,'html','UTF-8');?>
</option>
                                    <?php } else { ?>
                                        <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['profile']->value,'html','UTF-8');?>
" data-active="0"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['profile']->value,'html','UTF-8');?>
</option>
                                    <?php }?>
                                <?php } ?>
                            </select> 
                        </div>
                            
                        <div class="form-group clearfix">
                            <label><?php echo smartyTranslate(array('s'=>'Active Pattern','mod'=>'appagebuilder'),$_smarty_tpl);?>
</label>
                            <input type="radio" name="active" value="1">Yes<br>
                            <input type="radio" name="active" value="0">No<br>
                        </div>
                            
                        <div class="form-group clearfix">
                            <label class="show-for-notexisted pull-left"><?php echo smartyTranslate(array('s'=>'Or  Save New','mod'=>'appagebuilder'),$_smarty_tpl);?>
&nbsp;&nbsp;&nbsp;</label><label class="show-for-existed"><?php echo smartyTranslate(array('s'=>'And Rename File To','mod'=>'appagebuilder'),$_smarty_tpl);?>
</label>
                            <input type="text" name="newfile">
                        </div>
                            
                        <div class="buttons-group">
                            <input type="hidden" id="action-mode" name="action-mode">   
                            <a onclick="$('#action-mode').val('save-edit');
                                    $('#form').submit();" class="btn btn-primary btn-xs" href="#" type="submit"><?php echo smartyTranslate(array('s'=>'Submit','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a>
                            <a onclick="$('#action-mode').val('save-delete');
                                    $('#form').submit();" class="btn btn-danger btn-xs show-for-existed" href="#" type="submit"><?php echo smartyTranslate(array('s'=>'Delete','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a>
                        </div>
                            
                    <hr>
                        <div class="form-group clearfix">
                        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['imgLink']->value,'html','UTF-8');?>
" class="btn btn btn-default btn-xs" id="upload_pattern"><?php echo smartyTranslate(array('s'=>'Upload Image','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a>
                        </div>
                        <div class="clearfix" id="customize-body">
                            <ul id="myCustomTab" class="nav nav-tabs">
                                <?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['for'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['xmlselectors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value) {
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['for']->value = $_smarty_tpl->tpl_vars['output']->key;
?>
                                    <li><a href="#tab-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['for']->value,'html','UTF-8');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['for']->value,'html','UTF-8');?>
</a></li> 
                                    <?php } ?>  
                            </ul>
                            <div class="tab-content" > 
                                <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['for'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['xmlselectors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value) {
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['for']->value = $_smarty_tpl->tpl_vars['items']->key;
?>
                                    <div class="tab-pane" id="tab-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['for']->value,'html','UTF-8');?>
">

                                        <?php if (!empty($_smarty_tpl->tpl_vars['items']->value)) {?>
                                            <div class="accordion"  id="custom-accordion">
                                                <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
                                                    <div class="accordion-group panel panel-default">
                                                        <div class="accordion-heading panel-heading">
                                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#custom-accordion" href="#collapse<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['group']->value['match'],'html','UTF-8');?>
">
                                                                <?php echo $_smarty_tpl->tpl_vars['group']->value['header'];?>

                                                            </a>
                                                        </div>

                                                        <div id="collapse<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['group']->value['match'],'html','UTF-8');?>
" class="accordion-body collapse">
                                                            <div class="accordion-inner panel-body clearfix">
                                                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['selector']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>

                                                                    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['type'])&&$_smarty_tpl->tpl_vars['item']->value['type']=="image") {?> 
                                                                        <div class="form-group background-images cleafix"> 
                                                                            <label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['item']->value['label'],'html','UTF-8');?>
</label>
                                                                            <a class="clear-bg label label-success" href="#"><?php echo smartyTranslate(array('s'=>'Clear','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a>
                                                                            <input value="" type="hidden" name="customize[<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['group']->value['match'],'html','UTF-8');?>
][]" data-match="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['group']->value['match'],'html','UTF-8');?>
" class="input-setting" data-selector="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['item']->value['selector'],'html','UTF-8');?>
" data-attrs="background-image">

                                                                            <div class="clearfix"></div>
                                                                            <p><em style="font-size:10px"><?php echo smartyTranslate(array('s'=>'Those Images in folder YOURTHEME/img/patterns/','mod'=>'appagebuilder'),$_smarty_tpl);?>
</em></p>
                                                                            <div class="bi-wrapper clearfix">
                                                                                <?php  $_smarty_tpl->tpl_vars['pattern'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pattern']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['patterns']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pattern']->key => $_smarty_tpl->tpl_vars['pattern']->value) {
$_smarty_tpl->tpl_vars['pattern']->_loop = true;
?>
                                                                                    <div style="background:url('<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['backgroundImageURL']->value,'html','UTF-8');?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['pattern']->value,'html','UTF-8');?>
') no-repeat center center;" class="pull-left" data-image="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['backgroundImageURL']->value,'html','UTF-8');?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['pattern']->value,'html','UTF-8');?>
" data-val="../../../../assets/img/patterns/<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['pattern']->value,'html','UTF-8');?>
">

                                                                                    </div>
                                                                                <?php } ?>
                                                                            </div>
                                                                            <ul class="bg-config">
                                                                                <li>
                                                                                    <div><?php echo smartyTranslate(array('s'=>'Attachment','mod'=>'appagebuilder'),$_smarty_tpl);?>
</div>
                                                                                    <select data-attrs="background-attachment" name="customize[<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['group']->value['match'],'html','UTF-8');?>
][]" data-selector="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['item']->value['selector'],'html','UTF-8');?>
" data-match="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['group']->value['match'],'html','UTF-8');?>
">
                                                                                        <option value=""><?php echo smartyTranslate(array('s'=>'Not set','mod'=>'appagebuilder'),$_smarty_tpl);?>
</option>
                                                                                        <?php  $_smarty_tpl->tpl_vars['attachment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attachment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backGroundValue']->value['attachment']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attachment']->key => $_smarty_tpl->tpl_vars['attachment']->value) {
$_smarty_tpl->tpl_vars['attachment']->_loop = true;
?>
                                                                                            <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['attachment']->value,'html','UTF-8');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['attachment']->value,'html','UTF-8');?>
</option>
                                                                                        <?php } ?>
                                                                                    </select>
                                                                                </li>
                                                                                <li>
                                                                                    <div><?php echo smartyTranslate(array('s'=>'Position','mod'=>'appagebuilder'),$_smarty_tpl);?>
</div>
                                                                                    <select data-attrs="background-position" name="customize[<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['group']->value['match'],'html','UTF-8');?>
][]" data-selector="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['item']->value['selector'],'html','UTF-8');?>
" data-match="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['group']->value['match'],'html','UTF-8');?>
">
                                                                                        <option value=""><?php echo smartyTranslate(array('s'=>'Not set','mod'=>'appagebuilder'),$_smarty_tpl);?>
</option>
                                                                                        <?php  $_smarty_tpl->tpl_vars['position'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['position']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backGroundValue']->value['position']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['position']->key => $_smarty_tpl->tpl_vars['position']->value) {
$_smarty_tpl->tpl_vars['position']->_loop = true;
?>
                                                                                            <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['position']->value,'html','UTF-8');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['position']->value,'html','UTF-8');?>
</option>
                                                                                        <?php } ?>
                                                                                    </select>
                                                                                </li>
                                                                                <li>
                                                                                    <div><?php echo smartyTranslate(array('s'=>'Repeat','mod'=>'appagebuilder'),$_smarty_tpl);?>
</div>
                                                                                    <select data-attrs="background-repeat" name="customize[<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['group']->value['match'],'html','UTF-8');?>
][]" data-selector="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['item']->value['selector'],'html','UTF-8');?>
" data-match="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['group']->value['match'],'html','UTF-8');?>
">
                                                                                        <option value=""><?php echo smartyTranslate(array('s'=>'Not set','mod'=>'appagebuilder'),$_smarty_tpl);?>
</option>
                                                                                        <?php  $_smarty_tpl->tpl_vars['repeat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['repeat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backGroundValue']->value['repeat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['repeat']->key => $_smarty_tpl->tpl_vars['repeat']->value) {
$_smarty_tpl->tpl_vars['repeat']->_loop = true;
?>
                                                                                            <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['repeat']->value,'html','UTF-8');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['repeat']->value,'html','UTF-8');?>
</option>
                                                                                        <?php } ?>
                                                                                    </select>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']=="fontsize") {?>
                                                                        <div class="form-group cleafix">
                                                                            <label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['item']->value['label'],'html','UTF-8');?>
</label>
                                                                            <select name="customize[<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['group']->value['match'],'html','UTF-8');?>
][]" data-match="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['group']->value['match'],'html','UTF-8');?>
" type="text" class="input-setting" data-selector="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['item']->value['selector'],'html','UTF-8');?>
" data-attrs="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['item']->value['attrs'],'html','UTF-8');?>
">
                                                                                <option value="">Inherit</option>
                                                                                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 16+1 - (9) : 9-(16)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 9, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                                                                                    <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['i']->value,'html','UTF-8');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['i']->value,'html','UTF-8');?>
</option>
                                                                                <?php }} ?>
                                                                            </select>   <a href="#" class="clear-bg label label-success"><?php echo smartyTranslate(array('s'=>'Clear','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a>
                                                                        </div>
                                                                    <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']=="fontfamily") {?>
                                                                        <div class="form-group cleafix">
                                                                            <label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['item']->value['label'],'html','UTF-8');?>
</label>
                                                                            <select name="customize[<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['group']->value['match'],'html','UTF-8');?>
][]" data-match="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['group']->value['match'],'html','UTF-8');?>
" type="text" class="input-setting" data-selector="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['item']->value['selector'],'html','UTF-8');?>
" data-attrs="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['item']->value['attrs'],'html','UTF-8');?>
">
                                                                                <?php  $_smarty_tpl->tpl_vars['font_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['font_item']->_loop = false;
 $_smarty_tpl->tpl_vars['font_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fonts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['font_item']->key => $_smarty_tpl->tpl_vars['font_item']->value) {
$_smarty_tpl->tpl_vars['font_item']->_loop = true;
 $_smarty_tpl->tpl_vars['font_key']->value = $_smarty_tpl->tpl_vars['font_item']->key;
?>
                                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['font_item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['font_item']->value['name'];?>
</option>
                                                                                <?php } ?>
                                                                            </select>
                                                                            <a href="#" class="clear-bg label label-success"><?php echo smartyTranslate(array('s'=>'Clear','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a>
                                                                        </div>
                                                                    <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']=="subtitle") {?>
                                                                        <div class="form-group cleafix">
                                                                            <label class="subtitle"><strong><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</strong></label>
                                                                            <br />
                                                                        </div>
                                                                    <?php } else { ?>
                                                                        <div class="form-group cleafix">
                                                                            <label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['item']->value['label'],'html','UTF-8');?>
</label>
                                                                            <input value="" size="10" name="customize[<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['group']->value['match'],'html','UTF-8');?>
][]" data-match="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['group']->value['match'],'html','UTF-8');?>
" type="text" class="input-setting" data-selector="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['item']->value['selector'],'html','UTF-8');?>
" data-attrs="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['item']->value['attrs'],'html','UTF-8');?>
"><a href="#" class="clear-bg label label-success"><?php echo smartyTranslate(array('s'=>'Clear','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a>
                                                                        </div>
                                                                    <?php }?>


                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>              
                                                <?php } ?>
                                            </div>
                                        <?php }?>
                                    </div>
                                <?php } ?>
                            </div>      
                        </div>    
                    </div>
                </div></div></div>
    </form>
    <div id="main-preview">
        <iframe src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['siteURL']->value,'html','UTF-8');?>
" ></iframe> 
    </div>
</div>
        <script>
        var customizeFolderURL = '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['customizeFolderURL']->value,'html','UTF-8');?>
';
        </script><?php }} ?>
