<?php 

namespace App\Helpers\Sonnys;

interface PersonInterface {
	/**
	 * @param string
	 */
	public function setFirstName(string $firstName);

	/**
	 * @param string
	 */
	public function setLastName(?string $lastName = '');

	public function getFirstName();

	public function getLastName();
}

