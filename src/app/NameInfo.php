<?php 

namespace Sonnys\Application;

/** 
 * Re-usable methods for name information
 */
trait NameInfo {
	/**
	 * @property string
	 */
	private $firstName, $middleName, $lastName;
	
	/**
	 * @return string
	 */
	public function getFirstName() {
		return $this->firstName;
	}

	/**
	 * @return string
	 */
	public function getMiddleName() {
		return $this->middleName;
	}
	
	/**
	 * @return String
	 */
	public function getLastName() {
		return $this->lastName;
	}

	/**
	 * @return array
	 */
	public function getFullName() {
		return [
			'first_name'=>$this->firstName,
			'middle_name'=>$this->middleName,
			'last_name' => $this->lastName
		];
	}

	/**
	 * @param String
	 */	
	public function setFirstName(string $firstName) {
		$this->firstName = $firstName;
		return $this;
	}

	/**
	 * @param String
	 */	
	public function setMiddleName(?string $middleName = '') {
		$this->middleName = $middleName;
		return $this;
	}

	/**
	 * @param String
	 */
	public function setLastName(?string $lastName = '') {
		$this->lastName = $lastName;
		return $this;
	}
}


