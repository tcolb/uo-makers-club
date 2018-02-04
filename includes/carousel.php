<div id="<?php echo $disp_meeting ?>Carousel" class="carousel slide" data-ride="carousel" >
  <div class="carousel-inner">

  <?php
    $class_active = true;
    $dirname = "./static/images/meetings/" . $disp_meeting . "/";
    $imgs = glob($dirname . "*.JPG");
    foreach($imgs as $img) {
    ?>
    <div class="carousel-item <?php if($class_active == true) { echo 'active' ; $class_active = false; } ?>">
      <img class="d-block w-100" src="<?php echo $img; ?>">
    </div>
  <?php } ?>

  </div>
<a class="carousel-control-prev" href="#<?php echo $disp_meeting ?>Carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
<a class="carousel-control-next" href="#<?php echo $disp_meeting ?>Carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<!-- doesn't work yet
<div class="modal fade modal-fullscreen force-fullscreen" id="#<?php echo $carousel_name ?>Modal" tabindex="-1" role="dialog" aria-labelledby="<?php echo $carousel_name ?>Modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body…</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
-->
