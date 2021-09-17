<?php 

namespace Sonnys\Application;

/**
 * Order
 */
class Order {
	protected $_id;
	protected $_customerId;

	protected $_items = [];

	protected $_totalAmount;

	protected function __construct(int $id, int $customerId) {
		$this->id = $id;
		$this->_customerId = $customerId;
	}



	// GET and SET methods here
	// ...




	public function getOrderId() : int {
		return $this->_id;
	}
	public function getCustomerId() : int {
		return $this->_customerId;
	}

	/**
	 * Check the CustomerID on the Order matches a given Customer 
	 */
	public function validateOwnership(Customer $customer) { 
		return OrderLoader::validateOwnership($this, $customer);
	}

}