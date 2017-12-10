<?php
$title = "Schedule";
include('includes/header.php'); ?>

<div class="container-fluid">
  <h3 class="customTitle" style="">Winter Term, 2018: LEDs</h3>
  <div class="col-lg-10">
  <div class="customBlock">
    <!-- week 1 card -->
    <div class="row">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Week 1</h4>
          <h6 class="card-subtitle mb-2 text-muted">
            Safety Training at the Maker Space I</h6>
          <p class="card-text">
          </p>
        </div>
      </div>
    </div>
    <!-- week 2 card -->
    <div class="row">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Week 2</h4>
          <h6 class="card-subtitle mb-2 text-muted">
            Safety Training at the Maker Space II </h6>
          <p class="card-text">
          </p>
        </div>
      </div>
    </div>
    <!-- week 3 card -->
    <div class="row">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Week 3</h4>
          <h6 class="card-subtitle mb-2 text-muted">
            Soldering basics </h6>
          <p class="card-text">
            Practice on Solderable Breadboards (soldering terminology, safety precautions, etc)
          </p>
        </div>
      </div>
    </div>
    <!-- week 4 card -->
    <div class="row">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Week 4</h4>
          <h6 class="card-subtitle mb-2 text-muted">
            Project 1</h6>
          <p class="card-text">
            2 LEDS and 2 resistors in a circuit with a battery pack </br>
            Project Link: <a target="_blank" href="https://learn.adafruit.com/lets-put-leds-in-things/basic-recipe">Adafruit</a> </br>
            Supplies Wishlist: <a target="_blank" href="http://a.co/5mMYCAR">Amazon</a>

        </div>
      </div>
    </div>
    <!-- week 5 card -->
    <div class="row">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Week 5</h4>
          <h6 class="card-subtitle mb-2 text-muted">
            A Speaker (Maybe from the physics department)</h6>
          <p class="card-text">
             Focused on electricity and circuits basics/terminology
          </p>
        </div>
      </div>
    </div>
    <!-- week 6 card -->
    <div class="row">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Week 6</h4>
          <h6 class="card-subtitle mb-2 text-muted">
            Begin Project 2: Microcontroller Basics and Begin Project 2 Planning and Soldering</h6>
          <p class="card-text">
            Single Addressable RGB LEDS soldered to a Arduino Trinket Microcontroller </br>
            <ul>
              <li>Advanced Version: Add a speaker component to the Trinket and make the LEDS sound-reactive</li>
              <li>Advanced Version II: Add a motion sensor to the Trinket and make the LEDS motion-reactive</li>
            </ul>
            Supplies Wishlist: <a target="_blank" href="http://a.co/5KYANfb">Amazon</a>
          </p>
        </div>
      </div>
    </div>
    <!-- week 7 card -->
    <div class="row">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Week 7</h4>
          <h6 class="card-subtitle mb-2 text-muted">
            Continue Project 2</h6>
          <p class="card-text">
            Finish Soldering, Begin Coding
          </p>
        </div>
      </div>
    </div>
    <!-- week 8 card -->
    <div class="row">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Week 8</h4>
          <h6 class="card-subtitle mb-2 text-muted">
            Finish Project 2 </h6>
          <p class="card-text">
          </p>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>

<!-- set active hav bar item -->
<script>
  $("#hi_schedule").addClass("active");
</script>

<?php include('includes/footer.php') ?>
