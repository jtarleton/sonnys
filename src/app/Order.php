<?php 

namespace Sonnys\Application;
use Sonnys\Application\Database;
/**
 * Order
 */
class Order {
	protected $_id;
	protected $_customerId;

	protected $_items = [];

	protected $_totalAmount;

	public function __construct(int $id, int $customerId) {
		$this->_id = $id;
		$this->_customerId = $customerId;
		$pdo = new \stdClass; //Database::PDOCreate();
		echo get_class($pdo);
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