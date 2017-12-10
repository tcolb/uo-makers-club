<?php
$title = "About";
include('includes/header.php'); ?>

<div class="container-fluid" style="padding-left: 1.5rem">
  <!-- about -->
  <div class="customBlock">
    <h2 class="customTitle">Goals</h2>
    <p class="customText">
      Our goal is to strengthen our coding skills while expanding our knowledge about hobbyist electronics design and creation, computer hardware, and prototyping.
    </p>
  </div>
  <!-- general -->
  <div class="customBlock">
    <h4 class="customTitle">General Info</h4>
    <p class="customText">
      Club is open to students of any level </br>
      Meeting Location TBD </br>
      Meeting Time TBD </br>
    </p>
  </div>
  <!-- skill set -->
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

<!-- set active hav bar item -->
<script>
  $("#hi_about").addClass("active");
</script>

<?php include('includes/footer.php') ?>
