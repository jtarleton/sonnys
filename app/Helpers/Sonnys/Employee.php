<?php 

namespace App\Helpers\Sonnys;

use App\Helpers\Sonnys\Person;
use App\Helpers\Sonnys\EmployeeInterface;
use App\Helpers\Sonnys\NameInfo;

/** 
 * An Employee is a special kind of Person who must have a first name, last name, and employee id.  
 * Employee may also have a middle name. 
 */
class Employee extends Person  { //
	
	use NameInfo;

	/**
	 * @property 
	 */
	private $employeeId;

	/**
	 * Constructor
	 */
	public function __construct() {
		parent::__construct();
	}	

	/**
	 * @param string
	 */
	public function setEmployeeId(string $employeeId) {
		$this->employeeId = $employeeId;
		return $this;
	}
	public function getEmployeeId() {
		return $this->employeeId;
	}
}