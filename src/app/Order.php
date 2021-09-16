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
}
class OrderLoader {

	public function loadById($order_id, Customer $customer) {
		$order_id
		$this->validateOwnership($customer);
	}

	public function validateOwnership(Customer $customer) {
		return $customer->hasOrder();
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