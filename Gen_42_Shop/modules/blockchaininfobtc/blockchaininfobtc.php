<?php
/**
* 2007-2017 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2011-2017 Ficus Online
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

use PrestaShop\PrestaShop\Core\Payment\PaymentOption;

if (!defined('_PS_VERSION_')) {
    exit;
}

class Blockchaininfobtc extends PaymentModule
{
    private $_html = '';
    private $_postErrors = array();

    public function __construct()
    {
        $this->name = 'blockchaininfobtc';
        $this->tab = 'payments_gateways';
        $this->version = '0.1.1';
        $this->author = 'Takanobu Fuse';
        $this->need_instance = 1;
        $this->controllers = array('validation');

        parent::__construct();

        $this->displayName = $this->l('Blockchain.info BTC Payment Module');
        $this->description = $this->l('Payment module for Blockchain.info BTC');
        $this->confirmUninstall = $this->l('Are you sure you want to uninstall this module?');

        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);

                //Include configuration from the local file.
        $BLOCKCHAININFOBTC_BASE_URL = 'https://api.blockchain.info';
        $BLOCKCHAININFOBTC_WEBSOCKET_URL = 'wss://ws.blockchain.info/inv';
        $BLOCKCHAININFOBTC_NEW_ADDRESS_URL = 'https://api.blockchain.info/v2/receive';
        $BLOCKCHAININFOBTC_PRICE_URL = 'https://blockchain.info/tobtc?currency=';
        $BLOCKCHAININFOBTC_RATE_URL = 'https://blockchain.info/ticker';

        Configuration::updateValue('BLOCKCHAININFOBTC_BASE_URL', $BLOCKCHAININFOBTC_BASE_URL);
        Configuration::updateValue('BLOCKCHAININFOBTC_PRICE_URL', $BLOCKCHAININFOBTC_PRICE_URL);
        Configuration::updateValue('BLOCKCHAININFOBTC_NEW_ADDRESS_URL', $BLOCKCHAININFOBTC_NEW_ADDRESS_URL);
        Configuration::updateValue('BLOCKCHAININFOBTC_WEBSOCKET_URL', $BLOCKCHAININFOBTC_WEBSOCKET_URL);
        Configuration::updateValue('BLOCKCHAININFOBTC_RATE_URL', $BLOCKCHAININFOBTC_RATE_URL);

        if (!Configuration::get('BLOCKCHAININFOBTC_API_KEY')) {
            $this->warning = $this->l('API Key is not provided to communicate with Blockchain.info');
        }

        if (!Configuration::get('BLOCKCHAININFOBTC_XPUB_ADDR')) {
            $this->warning = $this->l('xPub is not provided to communicate with Blockchain.info');
        }
    }

    /**
     * Don't forget to create update methods if needed:
     * http://doc.prestashop.com/display/PS16/Enabling+the+Auto-Update
     */
    public function install()
    {
        if (extension_loaded('curl') == false) {
            $this->_errors[] = $this->l('You have to enable the cURL extension on your server to install this module');
            return false;
        }

        if (!parent::install()
        || !$this->installOrder('BLOCKCHAININFOBTC_ORDER_STATE_WAIT', 'Awaiting Bitcoin Payment', 'bitcoin_waiting')
        || !$this->installOrder('BLOCKCHAININFOBTC_ORDER_STATUS_0', 'Waiting for 3 Confirmations', null)
        || !$this->installOrder('BLOCKCHAININFOBTC_ORDER_STATUS_3', 'Bitcoin Payment Confirmed', null)
        || !$this->installDB()
        || !$this->registerHook('paymentOptions')
        || !$this->registerHook('paymentReturn')
        || !$this->registerHook('displayInvoice')
        || !$this->registerHook('displayPDFInvoice')
        ) {
            return false;
        }
        $this->active = true;
        return true;
    }

    public function uninstall()
    {
        if (!parent::uninstall()
        || !$this->uninstallOrder('BLOCKCHAININFOBTC_ORDER_STATE_WAIT')
        || !$this->uninstallOrder('BLOCKCHAININFOBTC_ORDER_STATUS_0')
        || !$this->uninstallOrder('BLOCKCHAININFOBTC_ORDER_STATUS_3')
        || !$this->uninstallDB()
        ) {
            return false;
        }
        return true;
    }

    public function installOrder($key, $title, $template)
    {
        //Already existing from previous install(ignore)
        if (Configuration::get($key)>0) {
            return true;
        }
        $orderState = new OrderState();
        $orderState->name = array_fill(0, 10, $title);
        $orderState->color = '#add8e6';
        $orderState->send_email = isset($template);
        $orderState->template = array_fill(0, 10, $template);
        $orderState->hidden = false;
        $orderState->delivery = false;
        $orderState->logable = false;
        $orderState->invoice = false;

        if (!$orderState->add()) {
            return false;
        }

        Configuration::updateValue($key, (int) $orderState->id);
        return true;
    }

    public function uninstallOrder($key)
    {
        $orderState = new OrderState();
        $orderState->id = (int) Configuration::get($key);
        $orderState->delete();
        Configuration::deleteByName($key);

        return true;
    }

    public function installDB()
    {
        $sql = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'blockchaininfobtc` (
            `id_blockchaininfobtc` int(11) NOT NULL AUTO_INCREMENT,
            `id_order` INT UNSIGNED NOT NULL,
            `timestamp` INT(8) NOT NULL,
            `addr` varchar(255) NOT NULL,
            `txid` varchar(255) NOT NULL,
            `status` int(8) NOT NULL,
            `value` double(10,2) NOT NULL,
            `bits` int(8) NOT NULL,
            `bits_payed` int(8) NOT NULL,
            PRIMARY KEY  (`id_blockchaininfobtc`),
            UNIQUE KEY `order_table` (`addr`)
        ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';

        if (!Db::getInstance()->Execute($sql)) {
            die('create table error');
        }

        //Blockchain.info basic configuration
        Configuration::updateValue('BLOCKCHAININFOBTC_API_KEY', '');

        //Send address generated xpub on blockchain.info.
        Configuration::updateValue('BLOCKCHAININFOBTC_XPUB_ADDR', '');

        //Generate callback secret
        $secret = md5(uniqid(rand(), true));
        Configuration::updateValue('BLOCKCHAININFOBTC_CALLBACK_SECRET', $secret);
        Configuration::updateValue('BLOCKCHAININFOBTC_CALLBACK_URL', Tools::getHttpHost(true, true) . __PS_BASE_URI__ . 'modules/' . $this->name . '/callback.php?secret='.$secret);
        return true;
    }

    public function uninstallDB()
    {
        Db::getInstance()->Execute('DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'blockchaininfobtc`;');
        Configuration::deleteByName('BLOCKCHAININFOBTC_API_KEY');
        Configuration::deleteByName('BLOCKCHAININFOBTC_XPUB_ADDR');
        Configuration::deleteByName('BLOCKCHAININFOBTC_CALLBACK_SECRET');
        Configuration::deleteByName('BLOCKCHAININFOBTC_CALLBACK_URL');

        Configuration::deleteByName('BLOCKCHAININFOBTC_BASE_URL');
        Configuration::deleteByName('BLOCKCHAININFOBTC_PRICE_URL');
        Configuration::deleteByName('BLOCKCHAININFOBTC_NEW_ADDRESS_URL');
        Configuration::deleteByName('BLOCKCHAININFOBTC_WEBSOCKET_URL');
        return true;
    }

    public function getBtcPrice($id_currency, $total_price)
    {
        //Generate total price to BTC price
        $currency = new Currency((int) $id_currency);
        $options = array( 'http' => array( 'method'  => 'GET') );
        $context = stream_context_create($options);
        $totalprice = (float)$total_price;
        $btcprice = Tools::file_get_contents(Configuration::get('BLOCKCHAININFOBTC_PRICE_URL').$currency->iso_code .'&value='. $totalprice, false, $context);
        return $btcprice;
    }

    public function getBtcRate($id_currency)
    {
        //Extract BTC rate at currency code
        $currency = new Currency((int) $id_currency);
        $currencycode = $currency->iso_code;
        $options = array( 'http' => array( 'method'  => 'GET') );
        $context = stream_context_create($options);
        $btcratejson = Tools::file_get_contents(Configuration::get('BLOCKCHAININFOBTC_RATE_URL'), false, $context);
        $btcrate = Tools::jsonDecode($btcratejson);
        return $btcrate->USD->last;
    }

    public function getNewAddress()
    {
        $my_xpub = Configuration::get('BLOCKCHAININFOBTC_XPUB_ADDR');
        $my_api_key = Configuration::get('BLOCKCHAININFOBTC_API_KEY');
        $my_callback_url = urlencode(Configuration::get('BLOCKCHAININFOBTC_CALLBACK_URL'));
        $root_url = Configuration::get('BLOCKCHAININFOBTC_NEW_ADDRESS_URL');

        $options = array( 'http' => array( 'method'  => 'GET') );
        $context = stream_context_create($options);
        $contents = Tools::file_get_contents($root_url. '?xpub=' .$my_xpub. '&callback=' .$my_callback_url. '&key=' .$my_api_key. '&gap_limit=100', false, $context);
        $addressObj = Tools::jsonDecode($contents);
        return $addressObj->address;
    }

    public function checkCurrency($cart)
    {
        $currency_order = new Currency($cart->id_currency);
        $currencies_module = $this->getCurrency($cart->id_currency);
        if (is_array($currencies_module)) {
            foreach ($currencies_module as $currency_module) {
                if ($currency_order->id == $currency_module['id_currency']) {
                    return true;
                }
            }
        }
        return false;
    }

    /**
     * Load the configuration form
     */
    public function getContent()
    {
        /**
         * If values have been submitted in the form, process.
         */
        if (((bool)Tools::isSubmit('submitBlockchaininfobtcModule')) == true) {
            $this->postProcess();
        }

        if (Tools::getValue('updateApiKey')) {
            Configuration::updateValue('BLOCKCHAININFOBTC_API_KEY', Tools::getValue('apiKey'));
        } elseif (Tools::getValue('updateXpubAddr')) {
            Configuration::updateValue('BLOCKCHAININFOBTC_XPUB_ADDR', Tools::getValue('xpubAddr'));
        } elseif (Tools::getValue('updateCallback')) {
            //Generate new callback secret
            $secret = md5(uniqid(rand(), true));
            Configuration::updateValue('BLOCKCHAININFOBTC_CALLBACK_SECRET', $secret);
            Configuration::updateValue('BLOCKCHAININFOBTC_CALLBACK_URL', Tools::getHttpHost(true, true) . __PS_BASE_URI__ . 'modules/' . $this->name . '/callback.php?secret='.$secret);
        }

        $this->context->smarty->assign(
            array(
            'name' => $this->displayName.$this->id,
            'request_uri' => $_SERVER['REQUEST_URI'],
            'api_key' => Configuration::get('BLOCKCHAININFOBTC_API_KEY'),
            'xpub_addr' => Configuration::get('BLOCKCHAININFOBTC_XPUB_ADDR'),
            'callback_url' => Configuration::get('BLOCKCHAININFOBTC_CALLBACK_URL'),
            'token' => Tools::getAdminTokenLite("AdminOrders"),
            'this_path_ssl' => Tools::getHttpHost(true, true) . __PS_BASE_URI__ . 'modules/' . $this->name . '/')
        );


        return $this->display(__FILE__, 'views/templates/admin/configure.tpl');
    }

    /**
     * This method is used to render the payment button,
     * Take care if the button should be displayed or not.
     */
    public function hookPaymentOptions($params)
    {
        if (!$this->active) {
            return;
        }

        if (!$this->checkCurrency($params['cart'])) {
            return;
        }

        $payment_options = [
            $this->getBitcoinPaymentOption(),
        ];
        return $payment_options;
    }

    public function getBitcoinPaymentOption()
    {
        $bitcoinOption = new PaymentOption();
        $bitcoinOption->setCallToActionText($this->l('Payment by Bitcoin'))
                       ->setAction($this->context->link->getModuleLink($this->name, 'validation', array(), true))
                       ->setAdditionalInformation($this->context->smarty->fetch('module:blockchaininfobtc/views/templates/front/payment_infos.tpl'))
                       ->setLogo(Media::getMediaPath(_PS_MODULE_DIR_.$this->name.'/logo.png'));
        return $bitcoinOption;
    }

    /**
     * This hook is used to display the order confirmation page.
     */
    public function hookPaymentReturn($params)
    {
        if ($this->active == false) {
            return;
        }

        if ($params['order']->getCurrentOrderState()->id != Configuration::get('PS_OS_ERROR')) {
            $this->smarty->assign('status', 'ok');
        }

        $this->context->smarty->assign(
            array(
            'id_order' => $params['order']->id,
            'reference' => $params['order']->reference,
            'params' => $params,
            'total' => Tools::displayPrice($params['order']->getOrdersTotalPaid(), new Currency($params['order']->id_currency), false)
            )
        );
        return $this->display(__FILE__, 'confirmation.tpl');
    }

    public function hookDisplayInvoice($params)
    {
        $b_order = Db::getInstance()->ExecuteS('SELECT * FROM ' . _DB_PREFIX_ . 'blockchaininfobtc WHERE `id_order` = ' . (int)$params['id_order']. '  LIMIT 1');

        /*
        print_r($b_order);
        */

        if ($b_order) {
            $tx_status = (int)($b_order[0]['status']);

            if ($tx_status == -1) {
                $status = 'Payment Not Received.';
            } elseif ($tx_status == 0) {
                $status = 'Waiting for 3 Confirmations.';
            } else {
                $status = 'Payment Confirmed.';
            }
            $this->context->smarty->assign(
                array(
                'status' => $status,
                'addr' => $b_order[0]['addr'],
                'txid' => $b_order[0]['txid'],
                'bits' => $b_order[0]['bits'],
                'base_url' => Configuration::get('BLOCKCHAININFOBTC_BASE_URL'),
                'bits_payed' => $b_order[0]['bits_payed']
                )
            );

            return $this->display(__FILE__, 'views/templates/hook/invoice.tpl');
        }
    }

    //Add Bitcoin invoice to pdf invoice
    public function hookDisplayPDFInvoice($params)
    {
        if (!$this->active) {
            return;
        }

        $b_order = Db::getInstance()->ExecuteS('SELECT * FROM ' . _DB_PREFIX_ . 'blockchaininfobtc WHERE `id_order` = ' .(int)$params['object']->id_order. '  LIMIT 1');

        if ($b_order) {
            $this->context->smarty->assign(
                array(
                'status' => (int)($b_order[0]['status']),
                'addr' => $b_order[0]['addr'],
                'txid' => $b_order[0]['txid'],
                'base_url' => Configuration::get('BLOCKCHAININFOBTC_BASE_URL'),
                'bits_payed' => $b_order[0]['bits_payed']
                )
            );

            return $this->display(__FILE__, 'views/templates/hook/invoice_pdf.tpl');
        }
    }
}
