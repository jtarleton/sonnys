<?php 

namespace Sonnys\Application;

use Sonnys\Application\Person;
use Sonnys\Application\EmployeeInterface;

/** 
 * An Employee is a special kind of Person who must have a first name, last name, and employee id.  
 * Employee may also have a middle name. 
 */
class Employee extends Person implements EmployeeInterface {
	
	use NameInfo;

	public function __construct() {
		parent::__construct();
	}	
}