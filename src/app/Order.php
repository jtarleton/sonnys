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
		$pdo = Database::PDOCreate();
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

	/**
	 * 
	 * @param int
	 * @param int
	 * @return array
	 */
	public static function getAll($offset=0,$limit=10) {
		$pdo = Database::PDOCreate();

		$stmt=$pdo->prepare("SELECT o.number, o.date, sub1.sum 
			FROM `orders` o 
			INNER JOIN (
			    SELECT oi.order_id, SUM(oi.amount) as sum 
			    FROM order_items oi 
			    GROUP BY oi.order_id
			) sub1
			ON o.id = sub1.order_id
			ORDER BY o.date DESC
			LIMIT :offset,:lim");

		$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
		$stmt->bindValue(':lim', $limit, PDO::PARAM_INT);
		$stmt->execute();

		$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $rows;
	}
}