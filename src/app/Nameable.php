<?php 

namespace Sonnys\Application;

interface Nameable {
	/**
	 * @param string
	 */	
	public function setFirstName(string $firstName);

	public function getLastName();
}