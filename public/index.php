<?php 

// Autoload files using the Composer autoloader.
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/bootstrap.php';
require __DIR__ . '/templates/header.php';

$classes = get_declared_classes();
?>
<h2 class="nav-tab-wrapper">
	<a href="#tab-1" class="nav-tab nav-tab-active">Greeter</a>
	<a href="#tab-2" class="nav-tab">Pegasus</a>
	<a href="#tab-3" class="nav-tab">Universal Remote</a>
	<a href="#tab-4" class="nav-tab">Order Tracking</a>
	<a href="#tab-5" class="nav-tab">Naming</a>
	<a href="#tab-6" class="nav-tab">Widgets</a>
</h2>
<hr />
<section id="tab-1" class="tab-content active">
  <p><?php $action->render(); ?></p>
</section>
<section id="tab-2" class="tab-content">
  <p>Pegasus.</p>
</section>
<section id="tab-3" class="tab-content">
  <p>Universal Remote.</p>
</section>

<section id="tab-4" class="tab-content">
  <p>Order Tracking.</p>
</section>
<section id="tab-5" class="tab-content">
  <p>Naming.</p>
</section>
<section id="tab-6" class="tab-content">
  <p>Widgets.</p>
</section>
<?php
echo '<br />Done.'; 
require __DIR__ . '/templates/footer.php';