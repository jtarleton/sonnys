<?php

namespace Sonnys\Application;

use \Sonnys\Application\OrderLoader;

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
}