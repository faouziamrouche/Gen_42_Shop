<?php
/**
 * 2007-2017 Leotheme
 *
 * NOTICE OF LICENSE
 *
 * Leo feature for prestashop 1.7: ajax cart, review, compare, wishlist at product list 
 *
 * DISCLAIMER
 *
 *  @Module Name: Leo Feature
 *  @author    leotheme <leotheme@gmail.com>
 *  @copyright 2007-2017 Leotheme
 *  @license   http://leotheme.com - prestashop template provider
 */

require_once(dirname(__FILE__).'/../../config/config.inc.php');
require_once(dirname(__FILE__).'/../../init.php');

include_once(dirname(__FILE__).'/leofeature.php');
include_once(dirname(__FILE__).'/classes/LeofeatureProduct.php');

$module = new Leofeature();

if(Tools::getValue('action') == 'render-modal')
{
	$result = $module->renderModal();
	
	die($result);
};

if(Tools::getValue('action') == 'get-attribute-data')
{
	$result = array();
	$context = Context::getContext();
	$id_product = Tools::getValue('id_product');
	$id_product_attribute = Tools::getValue('id_product_attribute');
	
	$attribute_data = new LeofeatureProduct();
	$result = $attribute_data->getTemplateVarProduct2($id_product, $id_product_attribute);
	// echo '<pre>';
	// print_r($result);
	// echo '<pre>';
	// die();
	die(Tools::jsonEncode([
		'product_cover' => $result['cover'],
		'price_attribute'   => $module->renderPriceAttribute($result),
		'product_url' => $context->link->getProductLink(
			$id_product,
			null,
			null,
			null,
			$context->language->id,
			null,
			$id_product_attribute,
			false,
			false,
			true
		),
	]));
};

if(Tools::getValue('action') == 'get-new-review')
{
	// $result = array();
	if (Configuration::get('LEOFEATURE_PRODUCT_REVIEWS_MODERATE')) {
		$reviews = ProductReview::getByValidate(0, false);
	}
	else
	{
		$reviews = array();
	}
	
	die(Tools::jsonEncode([
		'number_review' => count($reviews)
	]));
}

