<?php
$title = "Contact";
$header = "header";
include('./includes/base.php'); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-2"></div>
    <div class="col-md-8">
      <!-- contactable sources -->
      <div class="row">
        <div class="col-12">
        <div class="customBlock" id="contactable">
          <h3 class="customTitle">Contacts</h3>
          <ul class="list-group">
            <li class="list-group-item">
              <h6>Daniel Su</h6>
              <h6 class="text-muted">Outreach</h6>
              <a href="mailto:dsu@uoregon.edu">dsu@uoregon.edu</a>
            </li>
            <li class="list-group-item">
              <h6>Kaela Schaefer</h6>
              <h6 class="text-muted">Co-Chair</h6>
              <a href="mailto:kaelas@uoregon.edu">kaelas@uoregon.edu</a>
            </li>
            <li class="list-group-item">
              <h6>Michal Young</h6>
              <h6 class="text-muted">Supporting Faculty Member</h6>
              <a href="mailto:michal@cs.uoregon.edu">michal@cs.uoregon.edu</a>

            </li>
            <li class="list-group-item">
              <!-- logo from https://simpleicons.org/ -->
              <a target="_blank" href="https://www.facebook.com/groups/871519893028368/" style="max-height:30px">Facebook Group</a>
            </li>
          </ul>
        </div>
        </div>
      </div>
      <!-- outreach team -->
      <div class="row">
        <div class="col-lg-6">
          <div class="customBlock" id="outreach">
            <h3 class="customTitle">Outreach</h3>
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
        <!-- funding team -->
        <div class="col-lg-6">
          <div class="customBlock" id="funding">
            <h3 class="customTitle">Funding Team</h3>
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
    <div class="col-2"></div>
  </div>
</div>

<!-- set active hav bar item -->
<script>
  $("#hi_contact").addClass("active");
</script>

<?php include('./includes/footer.php') ?>
