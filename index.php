<?php
$title = "About";
$header = "indexheader";
include('./includes/base.php'); ?>

<div class="container-fluid">

  <div class="row">
    <div id="logo">
      <div id="logoText">makers club</div>
      <img id="logoGear" class="img-fluid" src="./static/images/gear.png"></img>
    </div>
  </div>

  <div class="row" style="z-index: 5;">
    <div class="col-1"></div>
    <div class="col-md-10">

      <div class="row">
        <div class="customBlock">
          <p class="customText">
            Welcome to the Makers Club at the University of Oregon. Our goal is to strengthen our coding skills while expanding our knowledge about hobbyist electronics design and creation, computer hardware, and prototyping.
          </p>
        </div>
      </div>

      <div class="row">
        <!-- general -->
        <div class="col-4">
          <div class="customBlock">
            <h4 class="customTitle">Location</h4>
            <p class="customText">
              Club is open to students of any level </br>
              Meeting Location TBD </br>
              Meeting Time TBD </br>
            </p>
          </div>
        </div>

        <!-- skill set -->
        <div class="col-4">
          <div class="customBlock">
            <h4 class="customTitle">Desired Skill Set</h4>
            <ul class="customText" style="padding-left: 2.5rem">
              <li>Basic Electrical Engineering</li>
              <li>Hardware Knowledge</li>
              <li>Soldering</li>
              <li>Circuits and Diagramming</li>
              <li>Microcontroller Knowledge</li>
              <li>Make Stuff!</li>
            </ul>
          </div>
        </div>

      </div>

    </div>
    <div class="col-1"></div>
  </div>

</div>

<!-- set active hav bar item -->
<script>
  $("#hi_about").addClass("active");
</script>

<?php include('./includes/footer.php') ?>
