<?php
$title = "Index";
$header = "index_header";
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
      <div class="row" id="about">
        <div class="customBlock" style="padding-top: 3em">
          <p class="customText">
            Welcome to the Makers Club at the University of Oregon. Our goal is to strengthen our coding skills while expanding our knowledge about hobbyist electronics design and creation, computer hardware, and prototyping.
          </p>
        </div>
      </div>


      <!--

        info block

      -->


      <!-- information -->
      <div class="row">

        <!-- skill set -->
        <div class="col-md-4 customBlock">
          <h4 class="customTitle"><b>Desired Skill Set</b></h4>
          <ul class="customText" style="">
            <li>Basic Electrical Engineering</li>
            <li>Hardware Knowledge</li>
            <li>Soldering</li>
            <li>Circuits and Diagramming</li>
            <li>Microcontroller Knowledge</li>
            <li>Make Stuff!</li>
          </ul>
        </div>

        <!-- general -->
        <div class="col-md-4">
          <div class="customBlock">
            <h4 class="customTitle"><b>Want to join?</b></h4>
            <ul class="customText" style="">
              <li>Club is open to students of any level</li>
              <li>Join our <a target="_blank" href="https://www.facebook.com/groups/871519893028368/">Facebook group</a> and or <a target="_blank" href="https://makerclubuo.slack.com/">Slack channel</a> for updates</li>
              <li style="color: #9c2222">
                <b><i>Note: you must attend a safety training at the <a target="_blank" href="https://library.uoregon.edu/scilib/psc-dearmond-makerspace" style="text-decoration: underline; color: #500000">makers space</a> before attending meetings</b></i>
              </li>
            </ul>
          </div>
        </div>

        <!-- location -->
        <div class="col-md-4 customBlock">
          <h4 class="customTitle"><b>Location and Time</b></h4>
          <ul class="customText" style="">
            <li>The Maker Space in the UO Science Library</li>
            <li>Meeting are on Thursdays from 5:30PM to 7:00PM</li>
          </ul>
        </div>
      </div>


      <!--

        sponsor block

      -->


      <!-- UNCOMMENT WHEN SPONSORS ARE DETERMINED
      <div class="row" id="sponsors" style="padding-top: 3.5em;">
        <div class="col-12 customBlock">
          <h3 class="customTitle">- Thank you to our sponsors -</h3>
        </div>
      </div>

      <div class="row customBlock">
        <div class="col-3 customTitle">
          <img src="./static/images/shapes.svg" style="height: 10em; width: 10em;"></img>
          <h6 class="customTitle">Sponsor 1</h6>
        </div>
        <div class="col-3 customTitle">
          <img src="./static/images/shapes.svg" style="height: 10em; width: 10em;"></img>
          <h6 class="customTitle">Sponsor 2</h6>
        </div>
        <div class="col-3 customTitle">
          <img src="./static/images/shapes.svg" style="height: 10em; width: 10em;"></img>
          <h6 class="customTitle">Sponsor 3</h6>
        </div>
        <div class="col-3 customTitle">
          <img src="./static/images/shapes.svg" style="height: 10em; width: 10em;"></img>
          <h6 class="customTitle">Sponsor 4</h6>
        </div>
      </div>
      -->

      <!--

        contact block

      -->


      <!-- contact title -->
      <div class="row" id="contact" style="padding-top: 1em;">
        <div class="col-12 customBlock">
          <h2 class="customTitle"><b>Contact us</b></h2>
        </div>
      </div>

      <!-- links -->
      <!-- <div class="row">
        <div class="col-3"></div>

          <div class="col-3">
            <a target="_blank" href="https://www.facebook.com/groups/871519893028368/">
              <img src="static/images/facebook.svg" class="img-fluid" style="max-height:50px; min-height:20px"/>
            </a>
            <h5 class="customTitle">Facebook Group</h5>
          </div>
          <div class="col-3">
            <a target="_blank" href="https://makerclubuo.slack.com/">
              <img src="static/images/slack.svg" class="img-fluid" style="max-height:50px; min-height:20px"/>
            </a>
            <h5 class="customTitle">Slack Channel</h5>
          </div>

        <div class="col-3"></div>
      </div> -->

      <!-- contactable  -->
      <div class="row">
        <div class="col-1"></div>
        <div class="col-lg-10">

          <div class="row">
            <div class="col-12">
              <div class="card-deck">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Daniel Su</h4>
                    <h5 class="card-title text-muted">Outreach</h5>
                    <hr/>
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
                    <hr/>
                    <a href="mailto:michal@cs.uoregon.edu">michal@cs.uoregon.edu</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <div class="customBlock" id="outreach">
                <h4 class="customTitle">Outreach</h4>
                <ul class="list-group">
                  <li class="list-group-item">
                    <h6>Daniel Su</h6>
                    <h6 class="text-muted singleContact">Community/Business</h6>
                  </li>
                  <li class="list-group-item">
                    <h6>Andrew Gao</h6>
                    <h6 class="text-muted singleContact">Robotics</h6>
                  </li>
                  <li class="list-group-item">
                    <h6>Palmer Hogen</h6>
                    <h6 class="text-muted singleContact">Other Universities</h6>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="customBlock" id="funding">
                <h4 class="customTitle">Funding Team</h4>
                <ul class="list-group">
                  <li class="list-group-item">
                    <h6 class="singleContact">Kaela Schaefer</h6>
                  </li>
                  <li class="list-group-item">
                    <h6 class="singleContact">Jamie Zimmerman</h6>
                  </li>
                  <li class="list-group-item">
                    <h6 class="singleContact">Palmer Hogen</h6>
                  </li>
                </ul>
              </div>
            </div>
          </div>

        </div>
        <div class="col-1"></div>
      </div>


    </div>
    <div class="col-1"></div>
  </div>

</div>

<?php include('./includes/footer.php') ?>
