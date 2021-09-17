<?php 

namespace Sonnys\Application;

/**
 * Behaviors Employee classes must implement
 */
interface EmployeeInterface {

	/**
	 * @param string
	 */
	public function setEmployeeId($id);
	
	/**
	 * 
	 */
	public function getEmployeeId();
}