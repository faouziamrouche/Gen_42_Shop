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
* {assign var='step' value='payment'}
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2017 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{capture name=path}{l s='Bitcoin payment' mod='blockchaininfobtc'}{/capture}

{extends file='checkout/checkout.tpl'}

{block name='content'}
<section id="content">
<div class="form" ng-app="blockchaininfobtc-invoice">
  <div class="col-md-12 col-xs-12 invoice" ng-controller="CheckoutController">
    <!-- heading row -->
    <div class="row">
      <h4> {l s='Order#' mod='blockchaininfobtc'} {$id_order}</h4>
      <span ng-show="{$status} == -1" class="invoice-heading-right" >//clock*1000 | date:'mm:ss' : 'UTC'//</span>
      <div class="progress" ng-hide="{$status} != -1">
        <progress class="progress progress-primary" max="100" value="//progress//">
        </progress>
      </div>
    </div>
    <!-- Amount row -->
    <div class="row">

      <div class="col-md-12 col-xs-12">
        <!-- Status -->
        <h4 ng-init="init({$status},'{$addr}',{$timestamp},'{$base_websocket_url}','{$redirect_link}')" ng-show="{$status} >= 0" for="invoice-amount" style="margin-top:15px;" >Status</h4>
        <div class="value ng-binding" style="margin-bottom:10px;margin-top:10px" >
          <h3 ng-show="{$status} == -1" >{l s='To pay, Please send exact amount of BTC to the given address' mod='blockchaininfobtc'}</h3>
        </div>
      </div>

      <div class="col-md-6 col-xs-6 invoice-amount"  style="border-right:#ccc 1px solid;">
        <!-- address-->
        <div class="row">
          <h4 class="col-md-12 col-xs-12" style="margin-bottom:15px;margin-top:15px;"for="btn-address">{l s='QR CODE(Send Address and Amount)' mod='blockchaininfobtc'}</h4>
        </div>

        <!-- QR Code -->
        <div class="row qr-code-box">
          <div class="col-md-12 col-xs-12 qr-code">
            <div class="qr-enclosure">
              <a target="_blank" href="bitcoin:{$addr}?amount={$bits|string_format:"%.8f"}">
                <qrcode data="bitcoin:{$addr}?amount={$bits|string_format:"%.8f"}" size="250">
                <canvas class="qrcode"></canvas>
                </qrcode></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xs-6 invoice-status" style="margin-top:15px;">
        <!-- Amount -->
        <h4 for="invoice-amount">{l s='Amount' mod='blockchaininfobtc'}</h4>
        <div class="value ng-binding">
          <label>{$bits|string_format:"%.8f"}
            <small>BTC</small></label> ⇌
          <label>{$value}
            <small>{$currency_iso_code}</small></label>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="input-group">
        <!-- Necessary to apply text transfrom as some styles will capitalize h4 leading to wrong address -->
        <span class="input-group-addon"><h4 style="text-transform:none">Bitcoin Send Address -> {$addr}</h4></span>
      </div>
    </div>
    <h3><a target="_blank" href="https://blockchain.info/" title="{l s='Blockchain Info' mod='blockchaininfobtc'}">
			<strong>{l s='Powered by Blockchain.info ' mod='blockchaininfobtc'}</strong>
	</a> 1BTC = {$bitcoin_rate} USD</h3>
  <button ng-click="postData(cancel_url)">
      <strong>{l s='Cancel this Order' mod='blockchaininfobtc'}</strong>
  </button>
  </div>
</div>
</section>
{/block}
