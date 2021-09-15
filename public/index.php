<?php 

// Autoload files using the Composer autoloader.
require __DIR__ . '/../vendor/autoload.php';

use Sonnys\Application\Widget;
use Sonnys\Application\Support\Widget as SupportWidget;

$widget = new Widget();
/*
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


echo "Greeting $greeter->getTarget()"
echo $greeter->sayHello()
echo "Greeting $informalGreeter->getTarget()"
echo $informalGreeter->sayHello();
*/