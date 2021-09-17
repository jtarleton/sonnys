<?php

namespace Sonnys\Application;

use \Sonnys\Application\OrderLoader;
use \Sonnys\Application\Customer;

/**
 * 
 */
class Action { //extends ApiController {

	public function render() {
		$orderId = $this->_getQueryParameter('order_id');
		
		// return an instance of Customer
		$loggedUser = $this->_getLoggedUser();
		$orderLoader = new OrderLoader();
		// return an instance of Order
		$orderObject = $orderLoader->load($orderId)->validateOwnership($loggedUser);


	}

	private function _getQueryParameter() {
		return (!empty($_GET['orderid']) 
				? strip_tags($_GET['orderid']) 
				: 1;
	}

	private function _getLoggedUser() {
		return new Customer('Rasmus','Lerdorf', 1);

	}
}