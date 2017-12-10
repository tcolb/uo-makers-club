<?php
$title = "Contact";
include('includes/header.php'); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-4">
      <div class="customBlock" id="contactable">
        <h3 class="customTitle">Contacts</h3>
        <ul class="list-group customText">
          <li class="list-group-item">
            <div>
              <h6>Daniel Su</h6>
              <h6 class="text-muted">Outreach</h6>
              <a href="dsu@uoregon.edu">dsu@uoregon.edu</a>
            </div>
          </li>
          <li class="list-group-item">
            <div>
              <h6>Kaela Schaefer</h6>
              <h6 class="text-muted">Co-Chair</h6>
              <a href="kaelas@uoregon.edu">kaelas@uoregon.edu</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-md-4">
      <div class="customBlock" id="outreach">
        <h3 class="customTitle">Outreach</h3>
        <ul class="list-group customText">
          <li class="list-group-item">
            <div>
              <h6>Daniel Su</h6>
              <h6 class="text-muted">Community/Business</h6>
            </div>
          </li>
          <li class="list-group-item">
            <div>
              <h6>Andrew Gao</h6>
              <h6 class="text-muted">Robotics</h6>
            </div>
          </li>
          <li class="list-group-item">
            <div>
              <h6>Palmer Hodgen</h6>
              <h6 class="text-muted">Other Universities</h6>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-md-4">
      <div class="customBlock" id="funding">
        <h3 class="customTitle">Funding Team</h3>
        <ul class="list-group customText">
          <li class="list-group-item">
            <div>
              <h6>Kaela Schaefer</h6>
            </div>
          </li>
          <li class="list-group-item">
            <div>
              <h6>Jamie Zimmerman</h6>
            </div>
          </li>
          <li class="list-group-item">
            <div>
              <h6>Palmer Hodgen</h6>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<script>
  $("#hi_contact").addClass("active");
</script>

<?php include('includes/footer.php') ?>
