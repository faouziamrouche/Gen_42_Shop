<?php
/**
* The MIT License (MIT)
*
* Copyright (c) 2017 CloudSwipe
*
* Permission is hereby granted, free of charge, to any person obtaining a copy
* of this software and associated documentation files (the "Software"), to deal
* in the Software without restriction, including without limitation the rights
* to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
* copies of the Software, and to permit persons to whom the Software is
* furnished to do so, subject to the following conditions:
*
* The above copyright notice and this permission notice shall be included in all
* copies or substantial portions of the Software.
*
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
* IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
* FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
* AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
* LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
* OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
* SOFTWARE.
*
* @author    Joey Beninghove
* @copyright 2017 CloudSwipe
* @license   https://opensource.org/licenses/MIT MIT
*/

class CloudSwipeReceiptModuleFrontController extends ModuleFrontController
{
    public function postProcess()
    {
        if (!Tools::getValue("invoice_id")) {
            PrestaShopLogger::addLog(
                "Missing invoice id",
                3,
                null,
                null,
                null,
                true
            );
            die("Missing invoice id");
        }

        try {
            $invoice =
                CloudSwipeInvoice::find(Tools::getValue("invoice_id"));

            $this->validateInvoice($invoice);

            $this->module->validateOrder(
                (int)$this->context->cart->id,
                (int)Configuration::get("PS_OS_PAYMENT"),
                $invoice->attributes["total"] / 100,
                "Credit Card",
                $this->buildOrderMessage($invoice),
                array(),
                null,
                false,
                $this->context->customer->secure_key
            );

            $order_id = Order::getOrderByCartId($this->context->cart->id);
            if ($order_id) {
                $invoice->update(array(
                    "metadata" => array(
                        "cart_id" => $this->context->cart->id,
                        "order_id" => (int)$order_id
                    )
                ));
            }

            Tools::redirect(
                $this->context->link->getPagelink(
                    "order-confirmation.php",
                    null,
                    null,
                    array(
                        "id_cart" => (int)$this->context->cart->id,
                        "id_module" => (int)$this->module->id,
                        "id_order" => (int)$this->module->currentOrder,
                        "key" => $this->context->customer->secure_key
                    )
                )
            );
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            if ($e->hasResponse()) {
                PrestaShopLogger::addLog(
                    $e->getMessage(),
                    3,
                    $e->getResponse()->getStatusCode(),
                    null,
                    null,
                    true
                );
                if ($e->getResponse()->getStatusCode() == 404) {
                    $invoiceId = Tools::getValue("invoice_id");
                    die("Invoice {$invoiceId} not found");
                }
            } else {
                PrestaShopLogger::addLog(
                    $e->getMessage(),
                    3,
                    null,
                    null,
                    null,
                    true
                );
            }

            die($e->getMessage());
        }
    }

    private function buildOrderMessage($invoice)
    {
        $message_parts = array();

        if ($invoice->payment) {
            $message_parts[]= "Authorization ID: " . $invoice->payment->attributes["authorization"];
            $message_parts[]= "AVS Response: " . $invoice->payment->attributes["avs_result_code"];
            $message_parts[]= "CVV Response: " . $invoice->payment->attributes["cvv_result_code"];

            if ($invoice->payment->creditCard) {
                $message_parts[]= "Credit Card: " . $invoice->payment->creditCard->attributes["number"];
            }
        }

        return implode("\n", $message_parts);
    }

    private function validateInvoice($invoice)
    {
        if ($invoice->attributes["metadata"]["cart_id"] != $this->context->cart->id) {
            die("The current shopping cart does not match this order.");
        }

        if (!$invoice->attributes["paid"]) {
            die("This order has not yet had a successful payment made for it.");
        }

        if ($invoice->attributes["metadata"]["order_id"]) {
            die("A PrestaShop order has already been created for this invoice.");
        }
    }
}
