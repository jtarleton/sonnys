<!-- View stored in resources/views/greeting.php -->
<?php require_once(__DIR__ . '/../templates/header.php'); ?>
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
  <p><?php echo $tab->render('greeter'); ?></p>
</section>
<section id="tab-2" class="tab-content">
  <p><?php echo $tab->render('pegasus'); ?>  </p>
</section>
<section id="tab-3" class="tab-content">
  <p>

    <fieldset> <legend>Select a Remote Type</legend>
    <form action="<?php echo public_path(); ?>/remote-push" method="POST">

        <div>
        <select name="remote_type"><option value="">- Select a Remote Type -</option>
            <option value="Television" <?php echo ($remote_type === 'Television') ? 'selected' : '' ?>>Television</option>
            <option value="CableBox" <?php echo ($remote_type === 'CableBox') ? 'selected' : '' ?>>Cable Box</option>
            <option value="Universal" <?php echo ($remote_type === 'Universal') ? 'selected' : '' ?>>Universal</option>
        </select>
        </div>

        <div>
            <input type="submit" value="Submit">
            </input>
        </div>
    </form></fieldset>

    <?php echo $tab->render('universal_remote');

echo $remote_type;
     ?>   </p>
</section>

<section id="tab-4" class="tab-content">
  <p><?php echo $tab->render('order_tracking'); ?>   </p>
</section>
<section id="tab-5" class="tab-content">
  <p><?php echo $tab->render('naming'); ?>   </p>
</section>
<section id="tab-6" class="tab-content">
  <p><?php echo $tab->render('widgets'); ?>   </p>
</section>
<section id="tab-7" class="tab-content">
  <p><?php echo $tab->render('exam'); ?>   </p>
</section>






<?php require_once(__DIR__ . '/../templates/footer.php'); ?>