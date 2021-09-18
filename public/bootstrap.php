<?php 

use \Sonnys\Application\OrderLoader;
use \Sonnys\Application\Customer;


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



use Sonnys\Application\Order;

use Sonnys\Application\RemoteControl;
use Sonnys\Application\RemoteControlUser;
use Sonnys\Application\CableBox;
use Sonnys\Application\CableBoxRemote;
use Sonnys\Application\Television;
use Sonnys\Application\TVRemote;
use Sonnys\Application\UniversalRemote; 


$orderLoader = new OrderLoader();
// return an instance of Order
$orderObject = $orderLoader->load($orderId, new Customer('Andi','Gutmans','1'))->validateOwnership($loggedUser);


$widget = new Widget();
$supportWidget = new SupportWidget();

$widget = WidgetFactory::Create();
$supportWidget = WidgetFactory::Create('Support');



$widget = new Widget();
$supportWidget = new SupportWidget();
$horse = new Horse();
$greeter = new Greeter();
$informalGreeter = new InformalGreeter();
$pegasus = new Pegasus(new Bird(), new Horse());
$pet = new Pet();
$person = new Person();









