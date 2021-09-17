<?php

namespace Sonnys\Application;

use \Sonnys\Application\Exam;
use \Sonnys\Application\ExamBuilderInterface;

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
		$order = new Order($order_id, $customer);
		$valid = $order->validateOwnership($customer);
		return ($valid) ? $order : FALSE;
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