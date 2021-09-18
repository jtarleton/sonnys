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
	<a href="#tab-7" class="nav-tab">Exam</a>	
</h2>
<hr />
<section id="tab-1" class="tab-content active">
  <p><?php $action->render('greeter'); ?></p>
</section>
<section id="tab-2" class="tab-content">
  <p><?php $action->render('pegasus'); ?>  </p>
</section>
<section id="tab-3" class="tab-content">
  <p>

  	<fieldset> <legend>Select a Remote Type</legend>
  	<form action="http://crystalbit.us/#tab-3" method="POST">

  		<div>
  		<select name="remote_type">
  			<option value="Television">Television</option>
  			<option value="CableBox">Cable Box</option>
  			<option value="Universal">Universal</option>
  		</select>
  		</div>

  		<div>
  			<input type="submit" value="Submit">
  			</input>
  		</div>
  	</form></fieldset>

  	<?php $action->render('universal_remote'); ?>   </p>
</section>

<section id="tab-4" class="tab-content">
  <p><?php $action->render('order_tracking'); ?>   </p>
</section>
<section id="tab-5" class="tab-content">
  <p><?php $action->render('naming'); ?>   </p>
</section>
<section id="tab-6" class="tab-content">
  <p><?php $action->render('widgets'); ?>   </p>
</section>
<section id="tab-7" class="tab-content">
  <p><?php $action->render('exam'); ?>   </p>
</section>
<?php
echo '<br />Done.'; 
require __DIR__ . '/templates/footer.php';