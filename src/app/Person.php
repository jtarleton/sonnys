<?php 

namespace Sonnys\Application;

class Person implements FirstLastName{
	use NameInfo;
	private $middleName;
	public function __construct() {

	}
}