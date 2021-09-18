<?php 

// Autoload files using the Composer autoloader.
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/bootstrap.php';
require __DIR__ . '/templates/header.php';

$classes = get_declared_classes();
$action = new Action();
$action->render();

echo '<br />Done.'; 
require __DIR__ . './templates/footer.php';