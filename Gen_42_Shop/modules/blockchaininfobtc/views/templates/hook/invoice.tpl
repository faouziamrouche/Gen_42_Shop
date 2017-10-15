{*
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
*}

<div class="panel kpi-container">
<fieldset>

<legend>{l s='Bitcoin Transaction Details' mod='blockchaininfobtc'}</legend>

<div id="info">
<table>
<tr><td>{l s='Bitcoin Address' mod='blockchaininfobtc'}</td> <td> : {$addr|escape:'htmlall':'UTF-8'}</td></tr>
<tr><td>{l s='Status' mod='blockchaininfobtc'}</td> <td> : {$status|escape:'htmlall':'UTF-8'}</td></tr>
<tr><td>{l s='Cart Value' mod='blockchaininfobtc'}</td> <td> : {math equation='x/y' x=$bits y=100000000} BTC</td></tr>
{if $txid != ''}
<tr><td>{l s='Amount Paid' mod='blockchaininfobtc'}</td> <td> : {math equation='x/y' x=$bits_payed y=100000000} BTC</td></tr>
<tr><td>{l s='Transaction Link' mod='blockchaininfobtc'}</td> <td> : <a href="{$base_url|escape:'htmlall':'UTF-8'}/api/tx?txid={$txid|escape:'htmlall':'UTF-8'}&addr={$addr|escape:'htmlall':'UTF-8'}"> {$txid|escape:'htmlall':'UTF-8'} <a></td></tr>
{if $bits != $bits_payed}
<tr><td>{l s='Payment Error' mod='blockchaininfobtc'}</td><td style='color:red'> : {l s='Amount paid not matching cart value' mod='blockchaininfobtc'}</td></tr>
{/if}
{/if}
</table>
</div>

</fieldset>
</div>
