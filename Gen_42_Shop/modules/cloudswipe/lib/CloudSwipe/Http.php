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

class CloudSwipeHttp
{
    public $curl;

    public function __construct()
    {
        $this->curl = curl_init();
    }

    public function post($resource)
    {
        $options = $this->options("POST", $resource);
        return $this->request("POST", CloudSwipeUrl::create($resource), $options);
    }

    public function patch($resource)
    {
        $options = $this->options("PATCH", $resource);
        return $this->request("PATCH", CloudSwipeUrl::update($resource), $options);
    }

    public function get($resource)
    {
        $options = $this->options("GET", $resource);
        if ($resource->hasId())
            return $this->request("GET", CloudSwipeUrl::getOne($resource), $options);
        else
            return $this->request("GET", CloudSwipeUrl::getAll($resource), $options);
    }

    public function request($method, $url, $options=[])
    {
        curl_setopt_array($this->curl, $options);
        curl_setopt($this->curl, CURLOPT_URL, $url);

        $response = curl_exec($this->curl);
        $info = curl_getinfo($this->curl);

        if (!$response) {
            die(curl_error($this->curl));
        }

        curl_close($this->curl);

        return substr($response, $info["header_size"]);
    }

    public function options($method, $resource)
    {
        $options = array(
            CURLOPT_VERBOSE => 1,
            CURLOPT_HEADER => 1,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_USERAGENT => "CloudSwipe PrestaShop",
            CURLOPT_USERPWD => CloudSwipeSecretKey::get() . ":"
        );

        $headers = array(
            "Accept: application/vnd.api+json"
        );

        if (in_array($method, ["POST", "PATCH"])) {
            $headers[] = "Content-Type: application/vnd.api+json";
            $options[CURLOPT_CUSTOMREQUEST] = $method;
            $options[CURLOPT_POST] = 1;
            $options[CURLOPT_POSTFIELDS] = $resource->toJson();
        }

        $options[CURLOPT_HTTPHEADER] = $headers;

        return $options;
    }
}
