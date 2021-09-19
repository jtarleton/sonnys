<?php 

namespace Sonnys\Application;

/**
 * 
 */
class Customer {

	protected $_id, $_firstName, $_lastName, $_createdDate;

	public function __construct($firstName, $lastName, $id) {
		$this->_firstName = $firstName;
		$this->_lastName = $lastName;
		$this->_id = (int)$id;
		$this->_createdDate = new \DateTimeImmutable('now');

	}

	// GET and SET methods here...

	public function getId() : int {
		return $this->_id;
	}
}