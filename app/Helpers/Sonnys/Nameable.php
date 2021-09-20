<?php 

namespace App\Helpers\Sonnys;

interface Nameable {
	/**
	 * @param string
	 */	
	public function setFirstName(string $firstName);

	public function getLastName();
}