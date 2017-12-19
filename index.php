<?php
$title = "About";
$header = "index_header";
include('./includes/base.php'); ?>

<div class="container-fluid">

  <!-- logo stuff -->
  <div class="row">
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
      <div class="row" id="about">
        <div class="customBlock" style="padding-top: 4rem">
          <p class="customText">
            Welcome to the Makers Club at the University of Oregon. Our goal is to strengthen our coding skills while expanding our knowledge about hobbyist electronics design and creation, computer hardware, and prototyping.
          </p>
        </div>
      </div>

      <!-- information -->
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
        <div class="col-4 customBlock">
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
        <!-- tbd -->
        <div class="col-4 customBlock">
          <h4 class="customTitle">Location</h4>
          <ul class="customText" style="padding-left: 2.5rem">
            <li>To be determined</li>
            <li>Meeting time, to be determined</li>
          </ul>
        </div>
      </div>

      <!-- sponsor title -->
      <div class="row" id="sponsors" style="padding-top: 3.5rem;">
        <div class="col-12 customBlock">
          <h3 class="customTitle">- Thank you to our sponsors -</h3>
        </div>
      </div>

      <!-- sponsors -->
      <div class="row customBlock">
        <div class="col-3 customTitle">
          SPONSOR
        </div>
        <div class="col-3 customTitle">
          SPONSOR
        </div>
        <div class="col-3 customTitle">
          SPONSOR
        </div>
        <div class="col-3 customTitle">
          SPONSOR
        </div>
      </div>

      <div class="row" id="contact" style="padding-top: 3.5rem;">
        <div class="col-12 customBlock">
          <h3 class="customTitle">- Contact us -</h3>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="card-deck">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Daniel Su</h4>
                <h5 class="card-title text-muted">Outreach</h5>
                <a href="mailto:dsu@uoregon.edu">dsu@uoregon.edu</a>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Kaela Schaefer</h4>
                <h5 class="card-title text-muted">Co-Chair</h5>
                <hr/>
                <a href="mailto:kaelas@uoregon.edu">kaelas@uoregon.edu</a>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Michal Young</h4>
                <h5 class="card-title text-muted">Supporting Faculty Member</h5>
                <a href="mailto:michal@cs.uoregon.edu">michal@cs.uoregon.edu</a>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
    <div class="col-1"></div>
  </div>

</div>

<?php include('./includes/footer.php') ?>
