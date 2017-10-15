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

require dirname(__FILE__).'/../../config/config.inc.php';
require dirname(__FILE__).'/../../header.php';

$secret = Tools::getValue('secret');
$txid = Tools::getValue('transaction_hash');
$satoshi = Tools::getValue('value');
$status = Tools::getValue('confirmations');
$addr = Tools::getValue('address');

//Match secret for callback
if ($secret == Configuration::get('BLOCKCHAININFOBTC_CALLBACK_SECRET')) {
    //Update status and txid for transaction
    $query="UPDATE "._DB_PREFIX_."blockchaininfobtc SET status='".(int)$status."',txid='".pSQL($txid)."',bits_payed=".(int)$satoshi." WHERE addr='".pSQL($addr)."'";
    $result = Db::getInstance()->execute($query);

    if ($status == 0 || $status == 3) {
        $order = Db::getInstance()->executeS("SELECT * FROM "._DB_PREFIX_."blockchaininfobtc WHERE `addr` = '".pSQL($addr)."' LIMIT 1");
        if ($order) {
            //Update order status
            $o = new Order($order[0]['id_order']);

            if ($status == 0) {
                $o->setCurrentState(Configuration::get('BLOCKCHAININFOBTC_ORDER_STATUS_0'));
            } elseif ($status == 3) {
                $o->setCurrentState(Configuration::get('BLOCKCHAININFOBTC_ORDER_STATUS_3'));
                if ($order[0]['bits'] != $order[0]['bits_payed']) {
                    $o->setCurrentState(Configuration::get('PS_OS_ERROR'));
                } else {
                    $o->setCurrentState(Configuration::get('PS_OS_PAYMENT'));
                }
            }
        }
    }
}
