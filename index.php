<?php
$title = "Index";
$header = "index/header";
$disp_meeting = "meeting1";
include('./includes/base.php'); ?>

<div class="container-fluid">


  <!--

    core block

  -->


  <!-- logo stuff -->
  <div class="row" style="overflow: hidden;">
    <div id="logo">
      <div id="logoText">makers club</div>
      <img id="logoGear" class="img-fluid" src="./static/images/gear.png"></img>
    </div>
  </div>

  <!-- core stuff -->
  <div class="row">
    <div class="col-1"></div>
    <div class="col-md-10">

      <!-- about -->
      <div class="customBlock" style="padding-top: 3em" id="about">
        <p class="customText">
          Welcome to the Makers Club at the University of Oregon. Our goal is to strengthen our coding skills while expanding our knowledge about hobbyist electronics design and creation, computer hardware, and prototyping.
        </p>
      </div>
    </div>
    <div class="col-1"></div>
  </div>



  <!--

    info block

  -->

  <?php include('./includes/index/info.php'); ?>


  <!--

    sponsor block

  -->


  <?php // include('./includes/index/sponsors.php'); ?> 


  <!--

    contact block

  -->

  <?php include('./includes/index/contact.php'); ?>

</div>

<?php include('./includes/footer.php'); ?>
