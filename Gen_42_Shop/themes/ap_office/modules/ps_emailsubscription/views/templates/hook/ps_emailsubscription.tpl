{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}

<div class="block_newsletter block float-lg-left">
  <h4 class="title_block">{l s='Sign up for email update on product offers and discounts' d='Shop.Theme.Global'}</h4>
  <div class="block_content">
    <div class="msg-block">
        {if $conditions}
          <p class="hidden-xl-down">{$conditions}</p>
        {/if}
        {if $msg}
          <p class="alert {if $nw_error}alert-danger{else}alert-success{/if}">
            {$msg}
          </p>
        {/if}
    </div>

    <form action="{$urls.pages.index}#footer" method="post">
        <div class="form-group">          
          <!-- <div class="input-wrapper"> -->
            <input name="email" type="text" value="{$value}" placeholder="{l s='Your email address' d='Shop.Forms.Labels'}">
          <!-- </div> -->
          <button class="btn btn-outline" name="submitNewsletter" type="submit" value="{l s='sign up' d='Shop.Theme.Actions'}">
            <i class="material-icons">&#xE8E4;</i>
            <span>{l s='sign up' d='Shop.Theme.Actions'}</span>
          </button>
          <input type="hidden" name="action" value="0">
          <div class="clearfix"></div>
        </div>
    </form>
  </div>
</div>
