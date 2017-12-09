<?php
$title = "Index";
include('includes/header.php'); ?>

<div class="container-fluid">
  <div class="row-md">
  <div style="height:300px; background-color:#17b987"></div>
  <div id="carouselIndex" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="..." alt="One" />
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="..." alt="Two" />
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="..." alt="Three" />
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselIndex" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-prev" href="#carouselIndex" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span clas="sr-only">Next</span>
    </a>
  </div>
  </div>
</div>

<script>
  $(".carousel").carousel();
</script>

<?php include('includes/footer.php') ?>
