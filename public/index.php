<?php 

// Autoload files using the Composer autoloader.
require __DIR__.'/../vendor/autoload.php';

use HelloWorld\HelloWorld;

$entry = new HelloWorld();
echo($entry->printHelloWorld());