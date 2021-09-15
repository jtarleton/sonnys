<?php 

namespace Sonnys\Application;

//
trait NameInfo {
	private $firstName, $middleName, $lastName;
	public function getName() {
		return [
			'first_name'=>$this->firstName,
			'middle_name'=>$this->middleName,
			'last_name' => $this->lastName
		];
	}
}

interface HasFirst {
	public setFirstName($firstName);
}

interface HasFirstLast {
	public function setFirstName($firstName) {}
	public function setLastName($lastName) {}
}