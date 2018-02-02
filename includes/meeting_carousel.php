<div id="carouselMeeting" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">


  <?php
    $class_active = true;
    $dirname = "./static/images/meetings/" . $disp_meeting . "/";
    $imgs = glob($dirname . "*.JPG");
    foreach($imgs as $img) {
    ?>
      <div class="carousel-item <?php if($class_active == true) { echo 'active' ; $class_active = false; } ?>">
        <img class="d-block w-100" src="<? echo $img; ?>">
      </div>
  <?php } ?>


  </div>
  <a class="carousel-control-prev" href="#carouselMeeting" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselMeeting" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
