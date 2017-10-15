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
*  @copyright 2007-2017 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

class BlockchaininfobtcValidationModuleFrontController extends ModuleFrontController
{
    /**
     * This class should be use by your Instant Payment
     * Notification system to validate the order remotely
     */

    public function setMedia()
    {
        parent::setMedia();
        $this->context->controller->addJS(_PS_MODULE_DIR_.$this->module->name.'/views/js/bootstrap.js');
        $this->context->controller->addJS(_PS_MODULE_DIR_.$this->module->name.'/views/js/angular.js');
        $this->context->controller->addJS(_PS_MODULE_DIR_.$this->module->name.'/views/js/vendors.min.js');
        $this->context->controller->addJS(_PS_MODULE_DIR_.$this->module->name.'/views/js/angular-qrcode.js');
        $this->context->controller->addJS(_PS_MODULE_DIR_.$this->module->name.'/views/js/app.js');
        $this->context->controller->addCSS(_PS_MODULE_DIR_.$this->module->name.'/views/css/style.css');
    }

    public function postProcess()
    {
        $cart = $this->context->cart;
        if ($cart->id_customer == 0 || $cart->id_address_delivery == 0 || $cart->id_address_invoice == 0 || !$this->module->active) {
               Tools::redirect('index.php?controller=order&step=1');
        }
         // Check that this payment option is still available in case the customer changed his address just before the end of the checkout process
        $authorized = false;
        foreach (Module::getPaymentModules() as $module) {
            if ($module['name'] == 'blockchaininfobtc') {
                    $authorized = true;
                    break;
            }
        }
        if (!$authorized) {
                die($this->module->l('This payment method is not available.', 'validation'));
        }
        $customer = new Customer($cart->id_customer);
        if (!Validate::isLoadedObject($customer)) {
                Tools::redirect('index.php?controller=order&step=1');
        }

        $currency = $this->context->currency;
        $total = (float)($cart->getOrderTotal(true, Cart::BOTH));
        $new_address = $this->module->getNewAddress();


        if (!isset($new_address)) {
            $result = '<h4>'.$this->module->l('Unable to generate bitcoin address.').'</h4>'.$this->module->l('Note for site webmaster: Your webhost is blocking outgoing HTTPS connections. Blockchain.info requires an outgoing HTTPS POST (port 443) to generate new address. Check with your webhosting provider to allow this. If problem still persists contact').' webmaster at blockchain.info';
            echo($result);
            die();
        }

        $current_time = time();
        $btcprice = $this->module->getBtcPrice($currency->id, $total);
        $btcrate = $this->module->getBtcRate($currency->id);

        if (!$btcprice) {
            Tools::redirect('index.php?controller=order&step=1');
        }

        $bits = (int)(1.0e8*$btcprice);

        $mailVars =  array(
            '{bitcoin_address}' => $new_address,
            '{bits}' => $btcprice,
            '{track_url}' => Tools::getHttpHost(true, true) . __PS_BASE_URI__.'index.php?controller=order-confirmation?id_cart='.(int)($cart->id).'&id_module='.(int)($this->module->id).'&id_order='.$this->module->currentOrder.'&key='.$customer->secure_key
        );


        $mes = "Bitcoin Address: " .$new_address;
        $this->module->validateOrder((int)($cart->id), Configuration::get('BLOCKCHAININFOBTC_ORDER_STATE_WAIT'), $total, $this->module->displayName, $mes, $mailVars, (int)($currency->id), false, $customer->secure_key);


        Db::getInstance()->Execute(
            "INSERT INTO "._DB_PREFIX_."blockchaininfobtc (id_order, timestamp, addr, txid, status,value, bits, bits_payed) VALUES
      ('".(int)$this->module->currentOrder."','".(int)$current_time."','".pSQL($new_address)."', '', -1,'".(float)$total."','".(int)$bits."', 0)"
        );

        $redirect_link = '/index.php?controller=order-confirmation?id_cart='.(int)($cart->id).'&id_module='.(int)($this->module->id).'&id_order='.$this->module->currentOrder.'&key='.$customer->secure_key;

        $this->context->smarty->assign(
            array(
            'id_order' => (int)($this->module->currentOrder),
            'status' => -1,
            'addr' => $new_address,
            'txid' => "",
            'bits' => (float)$btcprice,
            'value' => (float)$total,
            'base_url' => Configuration::get('BLOCKCHAININFOBTC_BASE_URL'),
            'cancel_url' => Configuration::get('BLOCKCHAININFOBTC_CALLBACK_URL'),
            'base_websocket_url' => Configuration::get('BLOCKCHAININFOBTC_WEBSOCKET_URL'),
            'timestamp' => $current_time,
            'currency_iso_code' => $currency->iso_code,
            'bitcoin_rate' => $btcrate,
            'bits_payed' => 0,
            'redirect_link' => $redirect_link
            )
        );

        $this->setTemplate('module:blockchaininfobtc/views/templates/front/payment_confirm.tpl');

    }
}
