<?php 

// Autoload files using the Composer autoloader.
require __DIR__ . '/../vendor/autoload.php';

use Sonnys\Application\Widget;
use Sonnys\Application\Support\Widget as SupportWidget;



use Sonnys\Application\Widget;
use Sonnys\Application\WidgetFactory;
use Sonnys\Application\Support\Widget as SupportWidget;
use Sonnys\Appliction\Horse;
use Sonnys\Application\Greeter;
use Sonnys\Application\InformalGreeter;
use Sonnys\Application\Pegasus;
use Sonnys\Application\Pet;
use Sonnys\Application\Person;
use Sonnys\Application\Order;

$widget = new Widget();
$supportWidget = new SupportWidget();

$widget = WidgetFactory::Create();
$supportWidget = WidgetFactory::Create('Support');


$widget = new Widget();
$supportWidget = new Widget();
$horse = new Horse();
$greeter = new Greeter();
$informalGreeter = new InformalGreeter();
$pegasus = new Pegasus();
$pet = new Pet();
$person = new Person();


echo "Greeting" . $greeter->getTarget() . '<br />';
echo $greeter->sayHello() .'<br />';
echo "Greeting " . $informalGreeter->getTarget() . '<br />';
echo $informalGreeter->sayHello() . '<br />';
