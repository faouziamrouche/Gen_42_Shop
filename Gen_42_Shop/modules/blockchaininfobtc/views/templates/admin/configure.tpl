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

<h2>{$name|escape:'htmlall':'UTF-8'}</h2>
<form action="{$request_uri|escape:'htmlall':'UTF-8'}" method="post">
<div class="clear"></div>
<br>
<!--Call back url -->
<h3>{l s='HTTP CallBack URL ' mod='blockchaininfobtc'}:</h3>
<input readonly name="callBackUrl" type="text" value="{$callback_url|escape:'htmlall':'UTF-8'}">
<br>
<div class="clear"></div>
<br>
<button name="updateCallback" value="Update" type="submit">{l s='Update Callback With New Secret' mod='blockchaininfobtc'}</button>
<div class="clear"></div>
<br>
</form>

<form action="{$request_uri|escape:'htmlall':'UTF-8'}" method="post">
<div class="clear"></div>
<br>

<!-- API Key configuration -->
<h3>{l s='API key ' mod='blockchaininfobtc'}:</h3>
<h4>{l s='Request from ' mod='blockchaininfobtc'} <a href="https://api.blockchain.info/customer/signup">Request API on Blockchain.info</a> &gt; Settings </h4>
<input name="apiKey" type="text" value="{$api_key|escape:'htmlall':'UTF-8'}">
<br>
<div class="clear"></div>
<br>

<button name="updateApiKey" value="Save" type="submit">{l s='Save' mod='blockchaininfobtc'}</button>
<div class="clear"></div>
<br>
</form>

<form action="{$request_uri|escape:'htmlall':'UTF-8'}" method="post">
<div class="clear"></div>
<br>

<!-- xPub configuration -->
<h3>{l s='XPUB key ' mod='blockchaininfobtc'}:</h3>
<h4>{l s='Request from ' mod='blockchaininfobtc'} <a href="https://api.blockchain.info/customer/signup">Request xPub on Blockchain.info</a> &gt; Settings </h4>
<input name="xpubAddr" type="text" value="{$xpub_addr|escape:'htmlall':'UTF-8'}">
<br>
<div class="clear"></div>
<br>

<button name="updateXpubAddr" value="Save" type="submit">{l s='Save' mod='blockchaininfobtc'}</button>
<div class="clear"></div>
<br>
</form>
