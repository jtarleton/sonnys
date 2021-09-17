<?php 

// Autoload files using the Composer autoloader.
require __DIR__ . '/../vendor/autoload.php';

use Sonnys\Application\Widget;
use Sonnys\Application\Support\SupportBase;

use Sonnys\Application\Support\Widget as SupportWidget;

use Sonnys\Application\Exam;
use Sonnys\Application\ExamBuilder;
use Sonnys\Application\ExamBuilderInterface;

use Sonnys\Application\WidgetFactory;

use Sonnys\Application\EmployeeInterface;
use Sonnys\Application\Employee;

use Sonnys\Application\Horse;
use Sonnys\Application\Greeter;
use Sonnys\Application\InformalGreeter;
use Sonnys\Application\GreeterInterface;
use Sonnys\Application\GreeterTrait;
use Sonnys\Application\Pegasus;
use Sonnys\Application\PegasusInterface;

use Sonnys\Application\Pet;
use Sonnys\Application\Person;

use Sonnys\Application\Nameable;
use Sonnys\Application\NameInfo;


use Sonnys\Application\Customer;
use Sonnys\Application\Order;
use Sonnys\Application\OrderLoader;

use Sonnys\Application\RemoteControl;
use Sonnys\Application\RemoteControlUser;
use Sonnys\Application\CableBox;
use Sonnys\Application\CableBoxRemote;
use Sonnys\Application\Television;
use Sonnys\Application\TVRemote;
use Sonnys\Application\UniversalRemote; 




$widget = new Widget();
$supportWidget = new SupportWidget();

$widget = WidgetFactory::Create();
$supportWidget = WidgetFactory::Create('Support');



$widget = new Widget();
$supportWidget = new SupportWidget();
$horse = new Horse();
$greeter = new Greeter();
$informalGreeter = new InformalGreeter();
$pegasus = new Pegasus();
$pet = new Pet();
$person = new Person();

$classes = get_declared_classes();
echo '<pre>';
print_r($classes);
/*

echo "Greeting" . $greeter->getTarget() . '<br />';
echo $greeter->sayHello() .'<br />';
echo "Greeting " . $informalGreeter->getTarget() . '<br />';
echo $informalGreeter->sayHello() . '<br />';

*/

/*
$attributes = [
	'time' => time(), 
	'place' => 'Sonnys', 
	'timeLimit' => NULL
];

$emptyExam = new Exam();
$examBuilder = new ExamBuilder($emptyExam);

$fullyInitializedExam = $examBuilder->initAll($attributes);
$partiallyIntitializedExam = $examBuilder->setTime()->setPlace()->getExam();

*/
$universalRemote = new UniversalRemote();

$remoteControlUser = new RemoteControlUser(UniversalRemote);

$type = NULL;

switch ($type) {
	default:
	case 'Television':
		$remoteControl = new TVRemote();
		break;

	case 'CableBox':
		$remoteControl = new CableBoxRemote();
		break;

	case 'Universal':
		$remoteControl = new UniversalRemote();
		break;
}
$remoteControlUser->setRemoteControl($remoteControl)->pushButton();

