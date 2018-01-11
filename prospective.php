<?php
$title = "Prospective";
$header = "header";
include('./includes/base.php'); ?>

<div class="container-fluid" style="">
  <div class="row">
    <div class="col-1"></div>
    <div class="col-md-10">
      <div class="customBlock">
        <h3 class="customTitle" style="padding-top: 60px">future projects</h3>
        <ul class="list-group">
          <li class="list-group-item">
            <p><b>DIY FM Radio</b></p>
            <a target="_blank" href="https://www.instructables.com/id/Build-your-own-Crude-FM-Radio">Crude</a> </br>
            <a target="_blank" href="https://www.instructables.com/id/Make-Your-Own-FM-Radio/">Advanced</a>
          </li>
          <li class="list-group-item">
            <a target="_blank" href="https://learn.adafruit.com/trinket-temperature-humidity-lcd-display/the-lcd-display">Temperature and Humidity LCD Display</a>
          </li>
          <li class="list-group-item">
            <a target="_blank" href="https://learn.adafruit.com/chilled-drinkibot">Drink Chiller</a>
          </li>
          <li class="list-group-item">
            <a target="_blank" href="https://learn.adafruit.com/neomatrix-8x8-word-clock">Word Clock</a>
          </li>
          <li class="list-group-item">
            <a target="_blank" href="https://learn.adafruit.com/pro-trinket-rotary-encoder">Rotary Encoder</a>
          </li>
          <li class="list-group-item">
            <a target="_blank" href="https://learn.adafruit.com/trinket-bluetooth-alarm-system">Bluetooth Alarm System</a>
          </li>
          <li class="list-group-item">
            <a target="_blank" href="https://learn.adafruit.com/trinket-powered-rover">3D Printed Autonomous Rover</a>
          </li>
          <li class="list-group-item">
            <a target="_blank" href="https://learn.adafruit.com/secret-knock-activated-drawer-lock">Secret Knock</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-1"></div>
  </div>
</div>

<script>
  $("#hi_prosp").addClass("active");
</script>

<?php include('./includes/footer.php') ?>
