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

$sql= "CREATE TABLE IF NOT EXISTS '"._DB_PREFIX_."blockchaininfobtc'(
    `id_blockchaininfobtc` int(11) NOT NULL AUTO_INCREMENT,
    `id_order` INT UNSIGNED NOT NULL,
    `timestamp` INT(8) NOT NULL,
    `addr` varchar(255) NOT NULL,
    `txid` varchar(255) NOT NULL,
    `status` int(8) NOT NULL,
    `value` double(10,2) NOT NULL,
    `bits` double(10,8) NOT NULL,
    `bits_payed` double(10,8) NOT NULL,
    PRIMARY KEY  (`id_blockchaininfobtc`),
    UNIQUE KEY `order_table` (`addr`)
    ) ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci";

foreach ($sql as $query) {
    if (Db::getInstance()->execute($query) == false) {
        return false;
    }
}
