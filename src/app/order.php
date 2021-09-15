<?php 

namespace Sonnys\Application;

//
class Order {

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