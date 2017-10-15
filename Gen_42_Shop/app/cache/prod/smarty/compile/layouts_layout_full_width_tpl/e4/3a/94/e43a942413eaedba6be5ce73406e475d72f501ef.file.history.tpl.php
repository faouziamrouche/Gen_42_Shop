<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 00:06:01
         compiled from "C:\xampp\htdocs\gen42-finale\themes\ap_office\templates\customer\history.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2297459dd4449070c83-31175245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e43a942413eaedba6be5ce73406e475d72f501ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gen42-finale\\themes\\ap_office\\templates\\customer\\history.tpl',
      1 => 1507310279,
      2 => 'file',
    ),
    'b1565d9f86a62ec30ecfdfeaba9999ae11b96e06' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gen42-finale\\themes\\ap_office\\templates\\customer\\page.tpl',
      1 => 1507310279,
      2 => 'file',
    ),
    '1c82780e6045dcbe66151439c95f87827613271d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gen42-finale\\themes\\ap_office\\templates\\page.tpl',
      1 => 1507310279,
      2 => 'file',
    ),
    '7c737bef3ede057300ac363485b4c338afaaf4a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gen42-finale\\themes\\ap_office\\templates\\layouts\\layout-full-width.tpl',
      1 => 1507310279,
      2 => 'file',
    ),
    'e562b16af4382a7e2c33cbd86f34d2398f2dfa75' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gen42-finale\\themes\\ap_office\\templates\\layouts\\layout-both-columns.tpl',
      1 => 1507310279,
      2 => 'file',
    ),
    'afb36ab2abe224b4a59a2470b506c58b1d83faf7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gen42-finale\\themes\\ap_office\\templates\\layouts\\setting.tpl',
      1 => 1507310279,
      2 => 'file',
    ),
    '25d70bfe29223ab6da6e06c91928bcf355a9ad69' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gen42-finale\\themes\\ap_office\\templates\\_partials\\stylesheets.tpl',
      1 => 1507310279,
      2 => 'file',
    ),
    'e13ac5070fadfafc8c605bef55a61292083c79c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gen42-finale\\themes\\ap_office\\templates\\_partials\\javascript.tpl',
      1 => 1507310279,
      2 => 'file',
    ),
    '395cfb4d259649cdda46517188fde44730469abe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gen42-finale\\themes\\ap_office\\templates\\_partials\\head.tpl',
      1 => 1507310279,
      2 => 'file',
    ),
    'b7cd5c75747ba222d3ee56d2de60f74d6d54b3a2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gen42-finale\\themes\\ap_office\\templates\\catalog\\_partials\\product-activation.tpl',
      1 => 1507310277,
      2 => 'file',
    ),
    'bc6d48acbccbd844480f8a361b28e1f7be097c0f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gen42-finale\\themes\\ap_office\\templates\\_partials\\header.tpl',
      1 => 1507310279,
      2 => 'file',
    ),
    '8f5127f0b52a8eed99da4ee2d18f5f2e32ac9b83' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gen42-finale\\themes\\ap_office\\templates\\_partials\\notifications.tpl',
      1 => 1507310279,
      2 => 'file',
    ),
    '80227e2f77437f7dda1195e58818187c21cc0acd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gen42-finale\\themes\\ap_office\\templates\\_partials\\breadcrumb.tpl',
      1 => 1507310279,
      2 => 'file',
    ),
    '9bc2aad2d6d05482272bd624dda46796b5f76009' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gen42-finale\\themes\\ap_office\\templates\\customer\\_partials\\my-account-links.tpl',
      1 => 1507310279,
      2 => 'file',
    ),
    '05058648209a355a5be4aa6b8bd9e446149c1ad8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gen42-finale\\themes\\ap_office\\templates\\_partials\\footer.tpl',
      1 => 1507310279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2297459dd4449070c83-31175245',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout' => 0,
    'language' => 0,
    'IS_RTL' => 0,
    'LEO_DEFAULT_SKIN' => 0,
    'page' => 0,
    'LEO_LAYOUT_MODE' => 0,
    'USE_FHEADER' => 0,
    'fullwidth_hook' => 0,
    'LEO_PANELTOOL' => 0,
    'LEO_BACKTOP' => 0,
    'javascript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59dd444954e832_89655352',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dd444954e832_89655352')) {function content_59dd444954e832_89655352($_smarty_tpl) {?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
" <?php if (isset($_smarty_tpl->tpl_vars['IS_RTL']->value)&&$_smarty_tpl->tpl_vars['IS_RTL']->value) {?> dir="rtl" class="rtl<?php if (isset($_smarty_tpl->tpl_vars['LEO_DEFAULT_SKIN']->value)) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LEO_DEFAULT_SKIN']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" <?php } else { ?>
        class="<?php if (isset($_smarty_tpl->tpl_vars['LEO_DEFAULT_SKIN']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LEO_DEFAULT_SKIN']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>"
    <?php }?>>

  <head>
    
      <?php /*  Call merged included template "_partials/head.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2297459dd4449070c83-31175245');
content_59dd44490c9cb9_15247247($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/head.tpl" */?>
    
  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['classnames'][0][0]->smartyClassnames($_smarty_tpl->tpl_vars['page']->value['body_classes']), ENT_QUOTES, 'UTF-8');?>
<?php if (isset($_smarty_tpl->tpl_vars['LEO_LAYOUT_MODE']->value)) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LEO_LAYOUT_MODE']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['USE_FHEADER']->value)&&$_smarty_tpl->tpl_vars['USE_FHEADER']->value) {?> keep-header<?php }?>">

    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl);?>

    

    <main id="page">
      
        <?php /*  Call merged included template "catalog/_partials/product-activation.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2297459dd4449070c83-31175245');
content_59dd44492011d9_17485010($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/product-activation.tpl" */?>
      
      <header id="header">
        <div class="header-container">
          
            <?php /*  Call merged included template "_partials/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2297459dd4449070c83-31175245');
content_59dd444921d693_51352297($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/header.tpl" */?>
          
        </div>
      </header>
      
      <section id="wrapper">
       <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayWrapperTop"),$_smarty_tpl);?>

      <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayHome'])&&$_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayHome']==0) {?>
        <div class="container">
      <?php }?>
          
            <?php /*  Call merged included template "_partials/breadcrumb.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2297459dd4449070c83-31175245');
content_59dd44493068b8_87698162($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/breadcrumb.tpl" */?>
          
          <div class="row">
            

            
  <div id="content-wrapper" class="col-lg-12 col-xs-12">
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayContentWrapperTop"),$_smarty_tpl);?>

    

  <section id="main">

    
      
        <header class="page-header">
          <h1>
  <?php echo smartyTranslate(array('s'=>'Order history','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>

</h1>
        </header>
      
    

    
  <section id="content" class="page-content">
    
      
        <?php /*  Call merged included template "_partials/notifications.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2297459dd4449070c83-31175245');
content_59dd44492c4f90_54636563($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/notifications.tpl" */?>
      
    
    
  <h6><?php echo smartyTranslate(array('s'=>'Here are the orders you\'ve placed since your account was created.','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>
</h6>

  <?php if ($_smarty_tpl->tpl_vars['orders']->value) {?>
    <table class="table table-striped table-bordered table-labeled hidden-sm-down">
      <thead class="thead-default">
        <tr>
          <th><?php echo smartyTranslate(array('s'=>'Order reference','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</th>
          <th><?php echo smartyTranslate(array('s'=>'Date','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</th>
          <th><?php echo smartyTranslate(array('s'=>'Total price','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</th>
          <th class="hidden-md-down"><?php echo smartyTranslate(array('s'=>'Payment','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</th>
          <th class="hidden-md-down"><?php echo smartyTranslate(array('s'=>'Status','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</th>
          <th><?php echo smartyTranslate(array('s'=>'Invoice','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tbody>
        <?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
          <tr>
            <th scope="row"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['reference'], ENT_QUOTES, 'UTF-8');?>
</th>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['order_date'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td class="text-xs-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td class="hidden-md-down"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['payment'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td>
              <span
                class="label label-pill <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['history']['current']['contrast'], ENT_QUOTES, 'UTF-8');?>
"
                style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['history']['current']['color'], ENT_QUOTES, 'UTF-8');?>
"
              >
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['history']['current']['ostate_name'], ENT_QUOTES, 'UTF-8');?>

              </span>
            </td>
            <td class="text-sm-center hidden-md-down">
              <?php if ($_smarty_tpl->tpl_vars['order']->value['details']['invoice_url']) {?>
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['invoice_url'], ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons">&#xE415;</i></a>
              <?php } else { ?>
                -
              <?php }?>
            </td>
            <td class="text-sm-center order-actions">
              <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['details_url'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="view-order-details">
                <?php echo smartyTranslate(array('s'=>'Details','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>

              </a>
              <?php if ($_smarty_tpl->tpl_vars['order']->value['details']['reorder_url']) {?>
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['reorder_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Reorder','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</a>
              <?php }?>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

    <div class="orders hidden-md-up">
      <?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
        <div class="order">
          <div class="row">
            <div class="col-xs-10">
              <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['details_url'], ENT_QUOTES, 'UTF-8');?>
"><h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['reference'], ENT_QUOTES, 'UTF-8');?>
</h3></a>
              <div class="date"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['order_date'], ENT_QUOTES, 'UTF-8');?>
</div>
              <div class="total"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</div>
              <div class="status">
                <span
                  class="label label-pill <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['history']['current']['contrast'], ENT_QUOTES, 'UTF-8');?>
"
                  style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['history']['current']['color'], ENT_QUOTES, 'UTF-8');?>
"
                >
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['history']['current']['ostate_name'], ENT_QUOTES, 'UTF-8');?>

                </span>
              </div>
            </div>
            <div class="col-xs-2 text-xs-right">
                <div>
                  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['details_url'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="view-order-details" title="<?php echo smartyTranslate(array('s'=>'Details','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>
">
                    <i class="material-icons">&#xE8B6;</i>
                  </a>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['order']->value['details']['reorder_url']) {?>
                  <div>
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['reorder_url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Reorder','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
">
                      <i class="material-icons">&#xE863;</i>
                    </a>
                  </div>
                <?php }?>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>

  <?php }?>

  </section>


    
      <footer class="page-footer">
        
  
    <?php /*  Call merged included template "customer/_partials/my-account-links.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('customer/_partials/my-account-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2297459dd4449070c83-31175245');
content_59dd4449427908_99740222($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "customer/_partials/my-account-links.tpl" */?>
  

      </footer>
    

  </section>


    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayContentWrapperBottom"),$_smarty_tpl);?>

  </div>


            
          </div>
        <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayHome'])&&$_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayHome']==0) {?>
          </div>
        <?php }?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayWrapperBottom"),$_smarty_tpl);?>

      </section>

      <footer id="footer" class="footer-container">
        
          <?php /*  Call merged included template "_partials/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2297459dd4449070c83-31175245');
content_59dd444950d9b7_29510225($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/footer.tpl" */?>
        
        <?php if (isset($_smarty_tpl->tpl_vars['LEO_PANELTOOL']->value)&&$_smarty_tpl->tpl_vars['LEO_PANELTOOL']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./info/paneltool.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['LEO_BACKTOP']->value)&&$_smarty_tpl->tpl_vars['LEO_BACKTOP']->value) {?>
            <div id="back-top"><a href="#" class="fa fa-angle-double-up"></a></div>
        <?php }?>
      </footer>

    </main>

    
      <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, '2297459dd4449070c83-31175245');
content_59dd444918ef36_79700315($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>
    

    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl);?>

    
  </body>

</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 00:06:01
         compiled from "C:\xampp\htdocs\gen42-finale\themes\ap_office\templates\_partials\head.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59dd44490c9cb9_15247247')) {function content_59dd44490c9cb9_15247247($_smarty_tpl) {?>

  <meta charset="utf-8">


  <meta http-equiv="x-ua-compatible" content="ie=edge">



  <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
</title>
  <meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
  <meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');?>
">
  <?php if ($_smarty_tpl->tpl_vars['page']->value['meta']['robots']!=='index') {?>
    <meta name="robots" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['robots'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>



  <meta name="viewport" content="width=device-width, initial-scale=1">



  <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">


  <?php /*  Call merged included template "layouts/setting.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layouts/setting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2297459dd4449070c83-31175245');
content_59dd44490f5ff8_06170323($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "layouts/setting.tpl" */?>


  <?php /*  Call merged included template "_partials/stylesheets.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, '2297459dd4449070c83-31175245');
content_59dd4449132f54_57720282($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/stylesheets.tpl" */?>



<?php if (isset($_smarty_tpl->tpl_vars['LOAD_CSS_TYPE']->value)&&!$_smarty_tpl->tpl_vars['LOAD_CSS_TYPE']->value) {?>
   
    <?php if (isset($_smarty_tpl->tpl_vars['LEO_CSS']->value)) {?>
        <?php  $_smarty_tpl->tpl_vars['media'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['media']->_loop = false;
 $_smarty_tpl->tpl_vars['css_uri'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LEO_CSS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['media']->key => $_smarty_tpl->tpl_vars['media']->value) {
$_smarty_tpl->tpl_vars['media']->_loop = true;
 $_smarty_tpl->tpl_vars['css_uri']->value = $_smarty_tpl->tpl_vars['media']->key;
?>
          <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['css_uri']->value, ENT_QUOTES, 'UTF-8');?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['media']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <?php } ?>
    <?php }?>
    
    <?php if (isset($_smarty_tpl->tpl_vars['LEO_SKIN_CSS']->value)) {?>
        <?php  $_smarty_tpl->tpl_vars['linkCss'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['linkCss']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LEO_SKIN_CSS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['linkCss']->key => $_smarty_tpl->tpl_vars['linkCss']->value) {
$_smarty_tpl->tpl_vars['linkCss']->_loop = true;
?>
            <?php echo $_smarty_tpl->tpl_vars['linkCss']->value;?>

        <?php } ?>
    <?php }?>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['LAYOUT_WIDTH']->value)) {?>
    <?php echo $_smarty_tpl->tpl_vars['LAYOUT_WIDTH']->value;?>

<?php }?>


  <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, '2297459dd4449070c83-31175245');
content_59dd444918ef36_79700315($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>



  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>




<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 00:06:01
         compiled from "C:\xampp\htdocs\gen42-finale\themes\ap_office\templates\layouts\setting.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59dd44490f5ff8_06170323')) {function content_59dd44490f5ff8_06170323($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["ENABLE_RESPONSIVE"] = new Smarty_variable("1", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["ENABLE_RESPONSIVE"] = clone $_smarty_tpl->tpl_vars["ENABLE_RESPONSIVE"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["ENABLE_RESPONSIVE"] = clone $_smarty_tpl->tpl_vars["ENABLE_RESPONSIVE"];?>
<?php $_smarty_tpl->tpl_vars["LISTING_GRID_MODE"] = new Smarty_variable("grid", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["LISTING_GRID_MODE"] = clone $_smarty_tpl->tpl_vars["LISTING_GRID_MODE"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["LISTING_GRID_MODE"] = clone $_smarty_tpl->tpl_vars["LISTING_GRID_MODE"];?>
<?php $_smarty_tpl->tpl_vars["LISTING_PRODUCT_COLUMN_MODULE"] = new Smarty_variable("3", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["LISTING_PRODUCT_COLUMN_MODULE"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_COLUMN_MODULE"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["LISTING_PRODUCT_COLUMN_MODULE"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_COLUMN_MODULE"];?>
<?php $_smarty_tpl->tpl_vars["LISTING_PRODUCT_COLUMN"] = new Smarty_variable("3", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["LISTING_PRODUCT_COLUMN"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_COLUMN"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["LISTING_PRODUCT_COLUMN"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_COLUMN"];?>
<?php $_smarty_tpl->tpl_vars["LISTING_PRODUCT_LARGEDEVICE"] = new Smarty_variable("2", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["LISTING_PRODUCT_LARGEDEVICE"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_LARGEDEVICE"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["LISTING_PRODUCT_LARGEDEVICE"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_LARGEDEVICE"];?>
<?php $_smarty_tpl->tpl_vars["LISTING_PRODUCT_TABLET"] = new Smarty_variable("2", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["LISTING_PRODUCT_TABLET"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_TABLET"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["LISTING_PRODUCT_TABLET"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_TABLET"];?>
<?php $_smarty_tpl->tpl_vars["LISTING_PRODUCT_SMALLDEVICE"] = new Smarty_variable("2", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["LISTING_PRODUCT_SMALLDEVICE"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_SMALLDEVICE"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["LISTING_PRODUCT_SMALLDEVICE"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_SMALLDEVICE"];?>
<?php $_smarty_tpl->tpl_vars["LISTING_PRODUCT_EXTRASMALLDEVICE"] = new Smarty_variable("2", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["LISTING_PRODUCT_EXTRASMALLDEVICE"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_EXTRASMALLDEVICE"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["LISTING_PRODUCT_EXTRASMALLDEVICE"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_EXTRASMALLDEVICE"];?>
<?php $_smarty_tpl->tpl_vars["LISTING_PRODUCT_MOBILE"] = new Smarty_variable("1", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["LISTING_PRODUCT_MOBILE"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_MOBILE"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["LISTING_PRODUCT_MOBILE"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_MOBILE"];?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 00:06:01
         compiled from "C:\xampp\htdocs\gen42-finale\themes\ap_office\templates\_partials\stylesheets.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59dd4449132f54_57720282')) {function content_59dd4449132f54_57720282($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['media'], ENT_QUOTES, 'UTF-8');?>
">
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <style>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['content'], ENT_QUOTES, 'UTF-8');?>

  </style>
<?php } ?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 00:06:01
         compiled from "C:\xampp\htdocs\gen42-finale\themes\ap_office\templates\_partials\javascript.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59dd444918ef36_79700315')) {function content_59dd444918ef36_79700315($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['attribute'], ENT_QUOTES, 'UTF-8');?>
></script>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript">
    <?php echo $_smarty_tpl->tpl_vars['js']->value['content'];?>

  </script>
<?php } ?>

<?php if (isset($_smarty_tpl->tpl_vars['vars']->value)&&count($_smarty_tpl->tpl_vars['vars']->value)) {?>
  <script type="text/javascript">
    <?php  $_smarty_tpl->tpl_vars['var_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var_value']->_loop = false;
 $_smarty_tpl->tpl_vars['var_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['var_value']->key => $_smarty_tpl->tpl_vars['var_value']->value) {
$_smarty_tpl->tpl_vars['var_value']->_loop = true;
 $_smarty_tpl->tpl_vars['var_name']->value = $_smarty_tpl->tpl_vars['var_value']->key;
?>
    var <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
 = <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['var_value']->value);?>
;
    <?php } ?>
  </script>
<?php }?>
<script type="text/javascript">
	var choosefile_text = "<?php echo smartyTranslate(array('s'=>'Choose file','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
";
	var turnoff_popup_text = "<?php echo smartyTranslate(array('s'=>'Do not show this popup again','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
";

	var size_item_quickview = 95;
	var style_scroll_quickview = 'horizontal';
	
	var size_item_page = 95;
	var style_scroll_page = 'horizontal';
	
	var size_item_quickview_attr = 95;	
	var style_scroll_quickview_attr = 'horizontal';
	
	var size_item_popup = 189;
	var style_scroll_popup = 'vertical';
</script><?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 00:06:01
         compiled from "C:\xampp\htdocs\gen42-finale\themes\ap_office\templates\catalog\_partials\product-activation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59dd44492011d9_17485010')) {function content_59dd44492011d9_17485010($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['admin_notifications']) {?>
  <div class="alert alert-warning row" role="alert">
    <div class="container">
      <div class="row">
        <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['admin_notifications']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
          <div class="col-sm-12">
            <i class="material-icons float-xs-left">&#xE001;</i>
            <p class="alert-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value['message'], ENT_QUOTES, 'UTF-8');?>
</p>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 00:06:01
         compiled from "C:\xampp\htdocs\gen42-finale\themes\ap_office\templates\_partials\header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59dd444921d693_51352297')) {function content_59dd444921d693_51352297($_smarty_tpl) {?>

  <div class="header-banner">
    <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayBanner'])&&$_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayBanner']==0) {?>
      <div class="container">
      <?php }?>
        <div class="inner"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBanner'),$_smarty_tpl);?>
</div>
    <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayBanner'])&&$_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayBanner']==0) {?>
      </div>
      <?php }?>
  </div>



  <nav class="header-nav">
    <div class="topnav">
      <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav1'])&&$_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav1']==0) {?>
      <div class="container">
      <?php }?>
        <div class="inner"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNav1'),$_smarty_tpl);?>
</div>
      <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav1'])&&$_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav1']==0) {?>
      </div>
      <?php }?>
    </div>
    <div class="bottomnav">
      <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav2'])&&$_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav2']==0) {?>
        <div class="container">
      <?php }?>
        <div class="inner"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNav2'),$_smarty_tpl);?>
</div>
      <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav2'])&&$_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav2']==0) {?>
        </div>
      <?php }?>
    </div>
  </nav>



  <div class="header-top">
    <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayTop'])&&$_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayTop']==0) {?>
          <div class="container">
        <?php }?>
      <div class="inner"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayTop'),$_smarty_tpl);?>
</div>
        <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayTop'])&&$_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayTop']==0) {?>
          </div>
        <?php }?>
  </div>
  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNavFullWidth'),$_smarty_tpl);?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 00:06:01
         compiled from "C:\xampp\htdocs\gen42-finale\themes\ap_office\templates\_partials\notifications.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59dd44492c4f90_54636563')) {function content_59dd44492c4f90_54636563($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['notifications']->value)) {?>
<aside id="notifications">
  <div class="container">
    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {?>
      
        <article class="alert alert-danger" role="alert" data-alert="danger">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['error']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
      
        <article class="alert alert-warning" role="alert" data-alert="warning">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['warning']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
      
        <article class="alert alert-success" role="alert" data-alert="success">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['success']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
      
        <article class="alert alert-info" role="alert" data-alert="info">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>
  </div>
</aside>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 00:06:01
         compiled from "C:\xampp\htdocs\gen42-finale\themes\ap_office\templates\_partials\breadcrumb.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59dd44493068b8_87698162')) {function content_59dd44493068b8_87698162($_smarty_tpl) {?>

<nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb">
  <ul itemscope itemtype="http://schema.org/BreadcrumbList">
    <?php  $_smarty_tpl->tpl_vars['path'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['path']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumb']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['path']->key => $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']++;
?>
    
      <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
          <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
        </a>
        <meta itemprop="position" content="<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['breadcrumb']['iteration'], ENT_QUOTES, 'UTF-8');?>
">
      </li>
    
    <?php } ?>
  </ul>
  
  <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']=='category'&&$_smarty_tpl->tpl_vars['category']->value['image']['large']['url']!='') {?>
    <?php if ($_smarty_tpl->tpl_vars['category']->value['image']) {?>
      <div class="category-cover hidden-sm-down">
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" class="img-fluid" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');?>
">
      </div>
    <?php }?>
  <?php } else { ?>
    <?php if (isset($_smarty_tpl->tpl_vars['tpl_uri']->value)&&$_smarty_tpl->tpl_vars['tpl_uri']->value) {?>
      <div class="category-cover hidden-sm-down">
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tpl_uri']->value, ENT_QUOTES, 'UTF-8');?>
/assets/img/bg-breadcrumb.png" class="img-fluid" alt="Breadcrumb image">
      </div>
    <?php } else { ?>  
      <div class="image-breadcrumb"></div>
    <?php }?>
  <?php }?>
</nav><?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 00:06:01
         compiled from "C:\xampp\htdocs\gen42-finale\themes\ap_office\templates\customer\_partials\my-account-links.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59dd4449427908_99740222')) {function content_59dd4449427908_99740222($_smarty_tpl) {?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
" class="account-link btn">
    <i class="material-icons">&#xE5CB;</i>
    <span><?php echo smartyTranslate(array('s'=>'Back to your account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>
</span>
  </a>
  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
" class="account-link btn">
    <i class="material-icons">&#xE88A;</i>
    <span><?php echo smartyTranslate(array('s'=>'Home','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</span>
  </a>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 00:06:01
         compiled from "C:\xampp\htdocs\gen42-finale\themes\ap_office\templates\_partials\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59dd444950d9b7_29510225')) {function content_59dd444950d9b7_29510225($_smarty_tpl) {?>

  <div class="footer-top">
    <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooterBefore'])&&$_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooterBefore']==0) {?>
      <div class="container">
    <?php }?>
      <div class="inner"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterBefore'),$_smarty_tpl);?>
</div>
    <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooterBefore'])&&$_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooterBefore']==0) {?>
      </div>
    <?php }?>
  </div>


  <div class="footer-center">
    <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooter'])&&$_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooter']==0) {?>
      <div class="container">
    <?php }?>
      <div class="inner"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooter'),$_smarty_tpl);?>
</div>
    <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooter'])&&$_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooter']==0) {?>
      </div>
    <?php }?>
  </div>


  <div class="footer-bottom">
    <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooterAfter'])&&$_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooterAfter']==0) {?>
      <div class="container">
    <?php }?>
      <div class="inner"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterAfter'),$_smarty_tpl);?>
</div>
    <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooterAfter'])&&$_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayFooterAfter']==0) {?>
      </div>
    <?php }?>
  </div>
<?php }} ?>
