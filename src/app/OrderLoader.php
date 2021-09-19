<?php

namespace Sonnys\Application;

use \Sonnys\Application\Exam;
use \Sonnys\Application\ExamBuilderInterface;
use \Sonnys\Application\Order;
use \Sonnys\Application\Customer;

use \PDO;
/**
 * Loads Order objects with values from the database.
 */
class OrderLoader {
	/** 
	 * Given order and customer instances, checks the order belongs to the customer.
	 * @param string
	 * @param object
	 * @return bool
	.*/
	public function load($order_id, Customer $customer) {
		$customer_id = $customer->getId();
		$order = new Order($order_id, $customer_id);
		//$valid = 1; // $order->validateOwnership($order, $customer);
		return $order; //($valid) ? $order : FALSE;
	}

	/** 
	 * Given order and customer instances, checks the order belongs to the customer.
	 * @see Action Render
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