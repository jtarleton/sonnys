<?php 

namespace Sonnys\Application;

//
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
class Order {
	/**
	 * Check the CustomerID on the Order matches a given Customer 
	 */
	public function validateOwnership(Customer $customer) { 
		return OrderLoader::validateOwnership($this, $customer);
	}

}
class OrderLoader {
	/** 
	 * Given order and customer instances, checks the order belongs to the customer.
	 * @param object
	 * @param object
	 * @return bool
	.*/
	public static function validateOwnership(Order $order, Customer $customer) {
		$customerId = (int) $customer->getId();
		$orderCustomerId = (int) $order->getCustomerId();
		if (!empty($customerId) && !empty($orderCustomerId)) {
			 return $customerId === $orderCustomerId;
		}
		throw new Exception('Invalid customer or order');
	}



	public function loadById($order_id, Customer $customer) {
		$order_id
		new Order
		$this->validateOwnership($customer);
	}

	/** 
	 * Given order and customer instances, checks the order belongs to the customer.
	 * @param object
	 * @param object
	 * @return bool
	.*/
	public static function validateOwnership(Order $order, Customer $customer) {
		$customerId = (int) $customer->getId();
		$orderCustomerId = (int) $order->getCustomerId();
		if (!empty($customerId) && !empty($orderCustomerId)) {
			 return $customerId === $orderCustomerId;
		}
		throw new Exception('Invalid customer or order');
	}

	/**
	 * 
	 */
	public function Create() {
		use PDO;
		$dbh = new PDO();
		$sql = 'INSERT INTO order (id, 
			order_no, 
			created_date
			) 
			VALUES (:id, 
			:order_no, 
			:created_date
		)';
		$stmt = $dbh->prepare($sql);
		$stmt->bindValue('id', $id);
		$stmt->bindValue('order_no', $order_no, PDO::PARAM_INT);
		$stmt->bindValue('created_date', $created_date);
		$stmt->execute();
		return $stmt->rowCount();
	}
}

class OrderLoader {


}