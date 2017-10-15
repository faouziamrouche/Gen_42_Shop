{*
*
*  @author     eWAY www.eway.com.au
*  @copyright  2015, Web Active Corporation Pty Ltd
*  @license    http://opensource.org/licenses/MIT MIT
*}
<div class="panel">
<!--<div class="eway-wrapper bootstrap"> -->
	<div class="row eway-header-tr">
		<img src="{$module_dir|escape:'htmlall':'UTF-8'}views/img/eway_logo.png" alt="eWAY" boder="0" />
	</div>
	<p class="eway-intro">
		Payments made easy!
	</p>

	<div class="eway-content">
		<p><b>{l s='This module allows you to accept payments by eWAY.' mod='ewayrapid'}</b></p>
		<p>{l s='Sign up to eWAY to accept payments quickly and easily' mod='ewayrapid'}!</p>
		<ul>
			<li><a href='https://my.eway.io/prestashop' target='_blank'>{l s='Sign Up With eWAY' mod='ewayrapid'}</a></li>
		</ul>
	</div>

	{if isset($eWAY_save_success)}
	<div class="conf confirm alert alert-success">
		{l s='Settings updated' mod='ewayrapid'}
	</div>
	{/if}
	{if isset($eWAY_save_fail)}
	<div class="alert error alert-danger">
		<ul>
		{foreach from=$eWAY_errors item=err}
		<li>{$err|escape:'htmlall':'UTF-8'}</li>
		{/foreach}
		</ul>
	</div>
	{/if}
</div>
