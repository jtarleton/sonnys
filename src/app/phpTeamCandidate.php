Son<?php 

abstract class SupportBase {}
class Widget extends SupportBase {}
class nWidget {}
interface LineInfo {}

$attributes = [];

$exam = new Exam();
$exam->setAttributes($attributes);

$exam->score = ;

echo $exam->time . PHP_EOL;
echo $exam->place . PHP_EOL;
echo $exam->timeLimit . PHP_EOL;
echo $exam->candidate . PHP_EOL;

abstract class Greeter {
	public function getTarget() {

	}

	abstract function sayHello() {

	}
}

class InformalGreeter {}

echo "Greeting $greeter->getTarget()"
echo $greeter->sayHello()
echo "Greeting $informalGreeter->getTarget()"
echo $informalGreeter->sayHello();

class Pet implements HasFirst {
	use NameInfo;
	public function __construct() {
		
	}
}
class Person implements FirstLastName{
	use NameInfo;
	private $middleName;
	public function __construct() {

	}
}
class Employee extends Person implements FirstLastName{
	use NameInfo;
	public function __construct() {
		
	}	

}

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
interface EmployeeIdentifiable {
	public function setEmployeeId($id);
}
interface HasFirst {
	public setFirstName($firstName);
}
interface HasFirstLast {
	public function setFirstName($firstName) {}
	public function setLastName($lastName) {}
}

interface PetName {

}