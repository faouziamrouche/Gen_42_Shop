/**
 * 2011-2016 Blockonomics
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@blockonomics.co so we can send you a copy immediately.
 *
 * @author    Blockonomics Admin <admin@blockonomics.co>
 * @copyright 2011-2016 Blockonomics
 * @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 * International Registered Trademark & Property of Blockonomics
 */

app = angular.module("blockchaininfobtc-invoice", ["monospaced.qrcode"]);

app.config(function ($interpolateProvider) {

    $interpolateProvider.startSymbol('//');
    $interpolateProvider.endSymbol('//');
})

app.controller("CheckoutController", function($window, $scope, $location, $interval, $rootScope, $http) {
    var totalProgress = 100;
    var totalTime = 10*60; //10m
    $scope.progress = totalProgress;
    $scope.clock = totalTime;

    $scope.tick = function() {
        $scope.clock = $scope.clock-1;
        $scope.progress = Math.floor($scope.clock*totalProgress/totalTime);

        if($scope.progress == 0){
            //Refresh invoice page
            $window.location.reload();
        }
    };

    $scope.init = function(invoice_status, invoice_addr, invoice_timestamp, base_websocket_url, final_url){

      if(invoice_status == -1){
        $scope.tick_interval  = $interval($scope.tick, 1000);
        var ws = new WebSocket(base_websocket_url);
        ws.onopen = function() {
			var data = { "op" : "addr_sub", "addr" : "invoice_addr" };
            var message = JSON.stringify(data);
            ws.send(message);
        }
        ws.onmessage = function (evt) {
            $window.location = final_url;
        }
      }
    };

    $scope.postDate = function(cancel_url) {
      var order_cancel = $.param({status: "cancel"});
      $http({
          method: 'POST',
          url: cancel_url,
          data: order_cancel,
          headers: {'Content-Type': 'application/x-www-form-urlencoded'}
      })
 }
});
