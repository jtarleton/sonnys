<?php 

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

