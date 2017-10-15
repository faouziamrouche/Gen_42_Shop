{* 
* @Module Name: AP Page Builder
* @Website: apollotheme.com - prestashop template provider
* @author Apollotheme <apollotheme@gmail.com>
* @copyright  2007-2017 Apollotheme
* @description: ApPageBuilder is module help you can build content for your shop
*}
<!-- @file modules\appagebuilder\views\templates\hook\ApProductTag.tpl -->
<div {if isset($formAtts.form_id) && $formAtts.form_id} id="{$formAtts.form_id|escape:'html':'UTF-8' nofilter}"{/if}
    {if isset($formAtts.class)} class="block {$formAtts.class|escape:'html':'UTF-8'}"{/if}>
    {if isset($formAtts.title) && $formAtts.title}
        <h4 class="title_block">{$formAtts.title|escape:'html':'UTF-8' nofilter}</h4>
    {/if}
    {if isset($formAtts.sub_title) && $formAtts.sub_title}
        <div class="sub-title-widget">{$formAtts.sub_title nofilter}</div>
    {/if}
    
	<p class="block_content">
    {if isset($formAtts.tags) &&  $formAtts.tags}
        {foreach from=$formAtts.tags item=tag name=myLoop}
            <a href="{$leolink->getPageLink('search', true, NULL, "tag={$tag.name|urlencode}")|escape:'html'}" title="{l s='More about' mod='appagebuilder'} {$tag.name|escape:html:'UTF-8'}" class="{$tag.class} {if $smarty.foreach.myLoop.last}last_item{elseif $smarty.foreach.myLoop.first}first_item{else}item{/if}">{$tag.name|escape:html:'UTF-8'}</a>
        {/foreach}
    {else}
        {l s='No tags have been specified yet.' mod='appagebuilder'}
    {/if}
	</p>
</div>