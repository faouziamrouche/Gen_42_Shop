<?php

/* __string_template__9461bdee52bfe64d2504ad34cef493d02165199bea6303d7a7f78f5522c4cff8 */
class __TwigTemplate_9be7a77e1974749bdf7fe8d2039d46ea319a79a0a97772920d0f34918f4176e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/gen42-finale/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/gen42-finale/img/app_icon.png\" />

<title>Gérer les modules installés • gen42-shop</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModules';
    var iso_user = 'fr';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '1.7.2.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\\\\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = 'e0d85286318a0a683640957373a292f9';
    var token_admin_orders = 'e7a5d7c91fd295abb583f3dc7caf5acd';
    var token_admin_customers = 'd90799f26cd50a3a6e13e493e36acc44';
    var token_admin_customer_threads = 'cd7d74dd2fb5c6764e5281bfc3218f84';
    var currentIndex = 'index.php?controller=AdminModules';
    var employee_token = '95c1954d517384543c7353943c8d578b';
    var choose_language_translate = 'Choisissez la langue';
    var default_language = '1';
    var admin_modules_link = '/gen42-finale/admin158xtsx7w/index.php/module/catalog/recommended?route=admin_module_catalog_post&_token=PkNLFhlMywcGLrZEb6HbT8nASq4nkIVPqSjp_MpilfQ';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var errorLogin = 'PrestaShop n\\\\\\'a pas pu se connecter à Addons. Veuillez vérifier vos identifiants et votre connexion Internet.';
    var search_product_msg = 'Rechercher un produit';
  </script>

      <link href=\"/gen42-finale/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/gen42-finale/admin158xtsx7w/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/gen42-finale/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/gen42-finale/modules/leoblog/css/admin/blogmenu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/gen42-finale/modules/appagebuilder/css/admin/style.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/gen42-finale/modules/ewayrapid/views/css/ewayrapid.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/gen42-finale/modules/amzpayments/views/css/admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/gen42-finale/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/gen42-finale/admin158xtsx7w/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/gen42-finale/modules/leofeature/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/gen42-finale\\/admin158xtsx7w\\/\";
var baseDir = \"\\/gen42-finale\\/\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"euro\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
var leofeature_module_dir = \"\\/gen42-finale\\/modules\\/leofeature\\/\";
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/gen42-finale/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/gen42-finale/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/gen42-finale/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/gen42-finale/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/gen42-finale/modules/appagebuilder/js/admin/setting.js\"></script>
<script type=\"text/javascript\" src=\"/gen42-finale/modules/amzpayments/views/js/admin.js\"></script>
<script type=\"text/javascript\" src=\"/gen42-finale/admin158xtsx7w/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/gen42-finale/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/gen42-finale/js/admin.js?v=1.7.2.2\"></script>
<script type=\"text/javascript\" src=\"/gen42-finale/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/gen42-finale/js/tools.js?v=1.7.2.2\"></script>
<script type=\"text/javascript\" src=\"/gen42-finale/admin158xtsx7w/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/gen42-finale/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/gen42-finale/admin158xtsx7w/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/gen42-finale/modules/leofeature/js/back.js\"></script>


  <script>
\t\t\t\tvar ids_ps_advice = new Array();
\t\t\t\tvar admin_gamification_ajax_url = 'http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminGamification&token=f64499a881684d5c6dc6822d5cecf1eb';
\t\t\t\tvar current_id_tab = 45;
\t\t\t</script>

";
        // line 91
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"adminmodules\">



<header>
  <nav class=\"main-header\">

    
    

    
    <i class=\"material-icons pull-left p-x-1 js-mobile-menu hidden-md-up\">menu</i>
    <a class=\"logo pull-left\" href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminDashboard&amp;token=269884a3caf719e9338777f9ad5cd9d9\"></a>

    <div class=\"component pull-left hidden-md-down\"><div class=\"ps-dropdown dropdown\">
  <span type=\"button\" id=\"quick-access\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    <span class=\"selected-item\">Accès rapide</span> 
    <i class=\"material-icons arrow-down pull-right\">keyboard_arrow_down</i>
  </span>
  <div class=\"ps-dropdown-menu dropdown-menu\" aria-labelledby=\"quick-access\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminOrders&amp;token=e7a5d7c91fd295abb583f3dc7caf5acd\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item active\"
         href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php/module/manage?token=ed56f50ace3e6a8a32f89e7db674cfa9\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=2672d769de8530fc09a8bf7c7975d305\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php/product/new?token=ed56f50ace3e6a8a32f89e7db674cfa9\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminCategories&amp;addcategory&amp;token=a045f4aaa47d737ab3c1ebd20e02b443\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <hr>
          <a
         class=\"dropdown-item js-quick-link\"
         data-method=\"remove\"
         data-quicklink-id=\"5\"
         data-rand=\"100\"
         data-icon=\"icon-AdminParentModulesSf\"
         data-url=\"index.php/module/manage\"
         data-post-link=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminQuickAccesses&token=5ee55bf86806cd9cc9944f23e0f3b1c4\"
         data-prompt-text=\"Veuillez nommer ce raccourci :\"
         data-link=\" - Liste\"
      >
        <i class=\"material-icons\">remove_circle_outline</i>
        Supprimer de l'Accès Rapide
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminQuickAccesses&token=5ee55bf86806cd9cc9944f23e0f3b1c4\">
      <i class=\"material-icons\">settings</i>
      Gérer les accès rapides
    </a>
  </div>
</div>
</div>
    <div class=\"component hidden-md-down\">

<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form\"
      method=\"post\"
      action=\"/gen42-finale/admin158xtsx7w/index.php?controller=AdminSearch&amp;token=d184dc22f3dd5f49978c9e57d88e1285\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input id=\"bo_query\" name=\"bo_query\" type=\"search\" class=\"form-control dropdown-form-search js-form-search\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" />
    <div class=\"input-group-addon\">
      <div class=\"dropdown\">
        <span class=\"dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
          Partout
        </span>
        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
          <ul class=\"items-list js-items-list\">
            <li class=\"search-all search-option active\">
              <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\">
              <i class=\"material-icons\">search</i> Partout</a>
            </li>
            <hr>
            <li class=\"search-book search-option\">
              <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, unité de gestion des stocks (SKU), référence...\" data-icon=\"icon-book\">
                <i class=\"material-icons\">library_books</i> Catalogue
              </a>
            </li>
            <li class=\"search-customers-name search-option\">
              <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, nom...\" data-icon=\"icon-group\">
                <i class=\"material-icons\">group</i> Clients par nom
              </a>
            </li>
            <li class=\"search-customers-addresses search-option\">
              <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\">
                <i class=\"material-icons\">desktop_windows</i>Clients par adresse IP</a>
            </li>
            <li class=\"search-orders search-option\">
              <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\">
                <i class=\"material-icons\">credit_card</i> Commandes
              </a>
            </li>
            <li class=\"search-invoices search-option\">
              <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\">
                <i class=\"material-icons\">book</i></i> Factures
              </a>
            </li>
            <li class=\"search-carts search-option\">
              <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\">
                <i class=\"material-icons\">shopping_cart</i> Paniers
              </a>
            </li>
            <li class=\"search-modules search-option\">
              <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\">
                <i class=\"material-icons\">view_module</i> Modules
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"input-group-addon search-bar\">
      <button type=\"submit\">RECHERCHE<i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
  });
</script>
</div>


    <div class=\"component pull-md-right -norightmargin hidden-md-down\"><div class=\"employee-dropdown dropdown\">
      <div class=\"img-circle person\" data-toggle=\"dropdown\">
      <i class=\"material-icons\">person</i>
    </div>
    <div class=\"dropdown-menu dropdown-menu-right p-a-1 m-r-2\">
    <div class=\"text-xs-center employee_avatar\">
      <img class=\"avatar img-circle\" src=\"http://profile.prestashop.com/ha6mohamed%40gmail.com.jpg\" /><br>
      <span>Mohamed Hamnache</span>
    </div>
    <hr>
    <a class=\"employee-link profile-link\" href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminEmployees&amp;token=95c1954d517384543c7353943c8d578b&amp;id_employee=1&amp;updateemployee\">
      <i class=\"material-icons\">settings_applications</i> Votre profil
    </a>
    <a class=\"employee-link m-t-1\" id=\"header_logout\" href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminLogin&amp;token=37eb1004c622fa32215c4d711d5e946e&amp;logout\">
      <i class=\"material-icons\">power_settings_new</i> Déconnexion
    </a>
  </div>
</div>
</div>
          <div class=\"component pull-xs-right\"><div id=\"notif\" class=\"notification-center dropdown\">
  <div class=\"notification js-notification dropdown-toggle\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Et pourquoi pas lancer des promotions de saison ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Avez-vous fait une campagne d'acquisition par e-mail récemment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              Pas de nouvelle, bonne nouvelle, n'est-ce pas ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"pull-xs-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
</div>
        <div class=\"component pull-md-right hidden-md-down\">  <div class=\"shop-list\">
    <a class=\"link\" href=\"http://localhost/gen42-finale/\" target= \"_blank\">gen42-shop</a>
  </div>
</div>
            

    

    
    
  </nav>
</header>

<nav class=\"nav-bar\">
  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\">
            <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminDashboard&amp;token=269884a3caf719e9338777f9ad5cd9d9\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"2\">
              <span class=\"title\">Vendre</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"3\">
                  <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminOrders&amp;token=e7a5d7c91fd295abb583f3dc7caf5acd\" class=\"link\">
                    <i class=\"material-icons\">shopping_basket</i>
                    <span>
                    Commandes
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminOrders&amp;token=e7a5d7c91fd295abb583f3dc7caf5acd\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminInvoices&amp;token=fa54f70997c97ec0e54050a1f4e254d2\" class=\"link\"> Factures
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminSlip&amp;token=2168b21586b264556b4d41b50a5cc6fb\" class=\"link\"> Avoirs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminDeliverySlip&amp;token=efde6be6fdb1e5de4bdc0a839a948426\" class=\"link\"> Bons de livraison
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminCarts&amp;token=780302973f7aa2a323704e72da2762dc\" class=\"link\"> Paniers
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"9\">
                  <a href=\"/gen42-finale/admin158xtsx7w/index.php/product/catalog?_token=PkNLFhlMywcGLrZEb6HbT8nASq4nkIVPqSjp_MpilfQ\" class=\"link\">
                    <i class=\"material-icons\">store</i>
                    <span>
                    Catalogue
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\">
                              <a href=\"/gen42-finale/admin158xtsx7w/index.php/product/catalog?_token=PkNLFhlMywcGLrZEb6HbT8nASq4nkIVPqSjp_MpilfQ\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminCategories&amp;token=a045f4aaa47d737ab3c1ebd20e02b443\" class=\"link\"> Catégories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminTracking&amp;token=b641194470d07c074a2db3d37db59ad6\" class=\"link\"> Suivi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminAttributesGroups&amp;token=8494519906222ed40aa6ad8f4681afb4\" class=\"link\"> Attributs &amp; caractéristiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminManufacturers&amp;token=39b83e494509450968b98df71dc6186b\" class=\"link\"> Marques et fournisseurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminAttachments&amp;token=84b1e04456bafff98c1570587296261a\" class=\"link\"> Fichiers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminCartRules&amp;token=2672d769de8530fc09a8bf7c7975d305\" class=\"link\"> Promotions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\">
                              <a href=\"/gen42-finale/admin158xtsx7w/index.php/stock/?_token=PkNLFhlMywcGLrZEb6HbT8nASq4nkIVPqSjp_MpilfQ\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"24\">
                  <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminDigitaleo&amp;token=f2581a26757a1493c0e8982574bb7d87\" class=\"link\">
                    <i class=\"material-icons\">account_circle</i>
                    <span>
                    Clients
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"147\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminDigitaleo&amp;token=f2581a26757a1493c0e8982574bb7d87\" class=\"link\"> Digitaleo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminCustomers&amp;token=d90799f26cd50a3a6e13e493e36acc44\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminAddresses&amp;token=14643b47710ce8a0881587eed71bf593\" class=\"link\"> Adresses
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"28\">
                  <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminCustomerThreads&amp;token=cd7d74dd2fb5c6764e5281bfc3218f84\" class=\"link\">
                    <i class=\"material-icons\">chat</i>
                    <span>
                    SAV
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminCustomerThreads&amp;token=cd7d74dd2fb5c6764e5281bfc3218f84\" class=\"link\"> SAV
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminOrderMessage&amp;token=43601a24afaef681d05ded8abb71b7bf\" class=\"link\"> Messages prédéfinis
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminReturn&amp;token=ae0ead6fa29368ae2fa41ef3ed18edde\" class=\"link\"> Retours produits
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"32\">
                  <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminStats&amp;token=83cea4531faa7edce5240ceab6af3764\" class=\"link\">
                    <i class=\"material-icons\">assessment</i>
                    <span>
                    Statistiques
                                        </span>

                  </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down -active\" data-submenu=\"42\">
              <span class=\"title\">Personnaliser</span>
          </li>

                          
                
                                
                <li class=\"link-levelone -active\" data-submenu=\"43\">
                  <a href=\"/gen42-finale/admin158xtsx7w/index.php/module/catalog?_token=PkNLFhlMywcGLrZEb6HbT8nASq4nkIVPqSjp_MpilfQ\" class=\"link\">
                    <i class=\"material-icons\">extension</i>
                    <span>
                    Modules
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\">
                              <a href=\"/gen42-finale/admin158xtsx7w/index.php/module/catalog?_token=PkNLFhlMywcGLrZEb6HbT8nASq4nkIVPqSjp_MpilfQ\" class=\"link\"> Modules et services
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"46\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminAddonsCatalog&amp;token=5ab6901eaf61d00bf7bbb344e2f3f3ac\" class=\"link\"> Catalogue de modules
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"137\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminLeoSlideshowMenuModule&amp;token=c13cc1b499ef44138a449403d8eefdf7\" class=\"link\"> Leo Slideshow Configuration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"144\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminLeoBootstrapMenuModule&amp;token=b8f9f826abd465c528c47d29563fa3dd\" class=\"link\"> Leo Megamenu Configuration
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"47\">
                  <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminThemes&amp;token=13f80d9c05406de5ed21b48c730a273b\" class=\"link\">
                    <i class=\"material-icons\">desktop_mac</i>
                    <span>
                    Apparence
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-47\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminThemes&amp;token=13f80d9c05406de5ed21b48c730a273b\" class=\"link\"> Thème et logo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminThemesCatalog&amp;token=d0d90337db14719f58094b2d8a02dbaa\" class=\"link\"> Catalogue de thèmes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminCmsContent&amp;token=df7d0a85ea652e6a1d1460f0ddeda350\" class=\"link\"> Pages vues
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminModulesPositions&amp;token=077861d752ff8e94349bc9b7f32d76a1\" class=\"link\"> Positions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"52\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminImages&amp;token=9f7393687d613adfe532f96c6e306375\" class=\"link\"> Images
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminLinkWidget&amp;token=19c6fc40c370995c007c957059314872\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"53\">
                  <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminCarriers&amp;token=60483fe4e484f14304392381788bdac1\" class=\"link\">
                    <i class=\"material-icons\">local_shipping</i>
                    <span>
                    Livraison
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminCarriers&amp;token=60483fe4e484f14304392381788bdac1\" class=\"link\"> Transporteurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminShipping&amp;token=eeb5a83bcb2c40ff4e83f0c5a95ed64d\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"56\">
                  <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminPayment&amp;token=f105f867ffed2116848a6aa44733305e\" class=\"link\">
                    <i class=\"material-icons\">payment</i>
                    <span>
                    Paiement
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminPayment&amp;token=f105f867ffed2116848a6aa44733305e\" class=\"link\"> Modes de paiement
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminPaymentPreferences&amp;token=ea2f38a0c5f8c19b332484e7943480f3\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"59\">
                  <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminLocalization&amp;token=545c5467aedea7e4b3cee46e59d384a9\" class=\"link\">
                    <i class=\"material-icons\">language</i>
                    <span>
                    International
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminLocalization&amp;token=545c5467aedea7e4b3cee46e59d384a9\" class=\"link\"> Localisation
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminCountries&amp;token=37d10c23bf050499aed05f5321ea684b\" class=\"link\"> Zones géographiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"69\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminTaxes&amp;token=b559ff7fa85c51406c6574ac91f57cde\" class=\"link\"> Taxes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminTranslations&amp;token=d3fcff211075c75c91ef752525fef98e\" class=\"link\"> Traductions
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"128\">
                  <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminLeoblogDashboard&amp;token=4259affb84f2f3b568227f2c27e304ac\" class=\"link\">
                    <i class=\"material-icons\">create</i>
                    <span>
                    Leo Blog Gestion
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-128\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"129\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminLeoblogDashboard&amp;token=4259affb84f2f3b568227f2c27e304ac\" class=\"link\"> Blog Dashboard
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminLeoblogCategories&amp;token=7af17fdf060d670d1e23381d272cf2e7\" class=\"link\"> Categories Management
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"131\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminLeoblogBlogs&amp;token=015d345e71ec875d28cffec2fa7a701f\" class=\"link\"> Blogs Management
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"132\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminLeoblogComments&amp;token=82d76a92d3244385c20d6418ba7abaa2\" class=\"link\"> Comment Management
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"133\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminLeoblogModule&amp;token=a3766804a48aa612bfdd361a40a6042c\" class=\"link\"> Leo Blog Configuration
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"138\">
                  <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminLeofeatureModule&amp;token=7e823cc7002a663a0a421b9bb61c65a0\" class=\"link\">
                    <i class=\"material-icons\">star</i>
                    <span>
                    Leo Management Feature
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-138\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"139\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminLeofeatureModule&amp;token=7e823cc7002a663a0a421b9bb61c65a0\" class=\"link\"> Leo Feature Configuration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"140\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminLeofeatureReviews&amp;token=c5566b1a68d9666ac07aa508182de078\" class=\"link\"> Product Review Management
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"73\">
              <span class=\"title\">Configurer</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"74\">
                  <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminPreferences&amp;token=fd1e5a166b2f96de1c101fb96696ca80\" class=\"link\">
                    <i class=\"material-icons\">settings</i>
                    <span>
                    Paramètres de la boutique
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-74\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"75\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminPreferences&amp;token=fd1e5a166b2f96de1c101fb96696ca80\" class=\"link\"> Paramètres généraux
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"78\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminOrderPreferences&amp;token=3d671eab4274a52d2b88919f2c58a378\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminPPreferences&amp;token=b31ea6da12d24d9e70e414d95ebbf57b\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminCustomerPreferences&amp;token=f8853a9d6983b44898cb2d2af41bee8b\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminContacts&amp;token=293567bf2786024769aea9cca2cae724\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminMeta&amp;token=3ed3be10bf260cd39c24514b80f78768\" class=\"link\"> Trafic et SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminSearchConf&amp;token=ee79068b4319edc0591ddc3aea58a8b7\" class=\"link\"> Rechercher
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"119\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminGamification&amp;token=f64499a881684d5c6dc6822d5cecf1eb\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"96\">
                  <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminInformation&amp;token=dfef21ce2bca5c1c6b9213f52a502010\" class=\"link\">
                    <i class=\"material-icons\">settings_applications</i>
                    <span>
                    Paramètres avancés
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-96\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminInformation&amp;token=dfef21ce2bca5c1c6b9213f52a502010\" class=\"link\"> Informations
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminPerformance&amp;token=19c167ea4af047817a2461c0a4a83b8c\" class=\"link\"> Performances
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminAdminPreferences&amp;token=7108aece538fa1f490182eb4c389c8e1\" class=\"link\"> Administration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminEmails&amp;token=e7425187f4dab1281fcde56edae053b6\" class=\"link\"> Email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminImport&amp;token=5f08d2ca9306bcbff44fdf9d632c68b4\" class=\"link\"> Importer
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminEmployees&amp;token=95c1954d517384543c7353943c8d578b\" class=\"link\"> Équipe
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminRequestSql&amp;token=434e7f48a606fa9e090c735db1d8e933\" class=\"link\"> Base de données
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminLogs&amp;token=191bb77b38db9dd9fb623fbc72d818c3\" class=\"link\"> Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"110\">
                              <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminWebservice&amp;token=3ef08e9af4197b90d334ce48e3ee72c0\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>

  <span class=\"menu-collapse hidden-md-down\">
    <i class=\"material-icons\">&#xE8EE;</i>
  </span>

  
</nav>


<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">

  
    <ol class=\"breadcrumb\">

              <li>
                      <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminParentModulesSf&amp;token=e69d5ada7e7488855836a5adac6533d7\">Modules</a>
                  </li>
      
      
    </ol>
  

  
    <h2 class=\"title\">
      Gérer les modules installés    </h2>
  

  
    <div class=\"toolbar-icons\">
                        
          <a
            class=\"m-b-2 m-r-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-add_module\"
            href=\"#\"            title=\"Installer un module\"            data-toggle=\"tooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">cloud_upload</i>
            <span class=\"title\">Installer un module</span>
          </a>
                                
          <a
            class=\"m-b-2 m-r-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-addons_connect\"
            href=\"#\"            title=\"Se connecter à la marketplace Addons\"            data-toggle=\"tooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">vpn_key</i>
            <span class=\"title\">Se connecter à la marketplace Addons</span>
          </a>
                          
                  <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\"
             title=\"Aide\"
             data-toggle=\"sidebar\"
             data-target=\"#right-sidebar\"
             data-url=\"/gen42-finale/admin158xtsx7w/index.php/common/sidebar/http%253A%252F%252Fhelp.prestashop.com%252Ffr%252Fdoc%252FAdminModules%253Fversion%253D1.7.2.2%2526country%253Dfr/Aide?_token=PkNLFhlMywcGLrZEb6HbT8nASq4nkIVPqSjp_MpilfQ\"
             id=\"product_form_open_help\"
          >
            <i class=\"material-icons\">help</i>
            <span class=\"title\">Aide</span>
          </a>
                  </div>
  
        <div class=\"page-head-tabs\">
                <a class=\"tab\"
   href=\"/gen42-finale/admin158xtsx7w/index.php/module/catalog?_token=PkNLFhlMywcGLrZEb6HbT8nASq4nkIVPqSjp_MpilfQ\">Sélection</a>

                <a class=\"tab current\"
   href=\"/gen42-finale/admin158xtsx7w/index.php/module/manage?_token=PkNLFhlMywcGLrZEb6HbT8nASq4nkIVPqSjp_MpilfQ\">Modules installés</a>

                <a class=\"tab\"
   href=\"/gen42-finale/admin158xtsx7w/index.php/module/notifications?_token=PkNLFhlMywcGLrZEb6HbT8nASq4nkIVPqSjp_MpilfQ\">Notifications  <div class=\"notification-container\">
    <span class=\"notification-counter\">3</span>
  </div>
  </a>

            </div>
    
</div>
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=ha6mohamed%40gmail.com&amp;firstname=Mohamed&amp;lastname=Hamnache&amp;website=http%3A%2F%2Flocalhost%2Fgen42-finale%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/gen42-finale/admin158xtsx7w/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=ha6mohamed%40gmail.com&amp;firstname=Mohamed&amp;lastname=Hamnache&amp;website=http%3A%2F%2Flocalhost%2Fgen42-finale%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    <div class=\"content-div \">

      

      

      

      
      
      
      

      <div class=\"row \">
        <div class=\"col-xs-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>




  ";
        // line 1264
        $this->displayBlock('content_header', $context, $blocks);
        // line 1265
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1266
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1267
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1268
        echo "
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"m-t-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"m-t-2\">
    En attendant que cette page soit adaptée au mobile, vous êtes invité à la consulter sur ordinateur.
  </p>
  <p class=\"m-t-2\">
    Merci.
  </p>
  <a href=\"http://localhost/gen42-finale/admin158xtsx7w/index.php?controller=AdminDashboard&amp;token=269884a3caf719e9338777f9ad5cd9d9\" class=\"btn btn-primary p-y-1 m-t-3\">
    <i class=\"material-icons\">arrow_back</i>
    Précédent
  </a>
</div>
<div class=\"mobile-layer\"></div>



  <div id=\"footer\" class=\"bootstrap hide\">
<!--
  <div class=\"col-sm-2 hidden-xs\">
    <a href=\"http://www.prestashop.com/\" class=\"_blank\">PrestaShop&trade;</a>
    -
    <span id=\"footer-load-time\"><i class=\"icon-time\" title=\"Temps de chargement : \"></i> 8.096s</span>
  </div>

  <div class=\"col-sm-2 hidden-xs\">
    <div class=\"social-networks\">
      <a class=\"link-social link-twitter _blank\" href=\"https://twitter.com/PrestaShop\" title=\"Twitter\">
        <i class=\"icon-twitter\"></i>
      </a>
      <a class=\"link-social link-facebook _blank\" href=\"https://www.facebook.com/prestashop\" title=\"Facebook\">
        <i class=\"icon-facebook\"></i>
      </a>
      <a class=\"link-social link-github _blank\" href=\"https://www.prestashop.com/github\" title=\"Github\">
        <i class=\"icon-github\"></i>
      </a>
      <a class=\"link-social link-google _blank\" href=\"https://plus.google.com/+prestashop/\" title=\"Google\">
        <i class=\"icon-google-plus\"></i>
      </a>
    </div>
  </div>
  <div class=\"col-sm-5\">
    <div class=\"footer-contact\">
      <a href=\"http://www.prestashop.com/en/contact_us?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-envelope\"></i>
        Contact
      </a>
      /&nbsp;
      <a href=\"http://forge.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-bug\"></i>
        Bug Tracker
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/forums/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-comments\"></i>
        Forum
      </a>
      /&nbsp;
      <a href=\"http://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-puzzle-piece\"></i>
        Addons
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/en/training-prestashop?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-book\"></i>
        Formation
      </a>
                    <p>Questions • Renseignements • Formations :
          <strong>+33 (0)1.40.18.30.04</strong>
        </p>
          </div>
  </div>

  <div class=\"col-sm-3\">
    
  </div>

  <div id=\"go-top\" class=\"hide\"><i class=\"icon-arrow-up\"></i></div>
  -->
</div>



  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=ha6mohamed%40gmail.com&amp;firstname=Mohamed&amp;lastname=Hamnache&amp;website=http%3A%2F%2Flocalhost%2Fgen42-finale%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/gen42-finale/admin158xtsx7w/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=ha6mohamed%40gmail.com&amp;firstname=Mohamed&amp;lastname=Hamnache&amp;website=http%3A%2F%2Flocalhost%2Fgen42-finale%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

  </div>

";
        // line 1436
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 91
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 1264
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1265
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1266
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1267
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1436
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "__string_template__9461bdee52bfe64d2504ad34cef493d02165199bea6303d7a7f78f5522c4cff8";
    }

    public function getDebugInfo()
    {
        return array (  1515 => 1436,  1510 => 1267,  1505 => 1266,  1500 => 1265,  1495 => 1264,  1486 => 91,  1478 => 1436,  1308 => 1268,  1305 => 1267,  1302 => 1266,  1299 => 1265,  1297 => 1264,  120 => 91,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__9461bdee52bfe64d2504ad34cef493d02165199bea6303d7a7f78f5522c4cff8", "");
    }
}
