<!DOCTYPE html>
<html>
<?php
require_once './shared/header.php';
?>
    <style>
        .carousel-indicators [data-bs-target] {
            background-color: red;
        }
        
        .d-block{
            width: 50% !important;
        }
    </style>
    <div class="row container">
        <div class="col-md-12" style="vertical-align: middle">
    <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel" data-interval="5000">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active" >
      <img src="img/LA.jpg" alt="Los Angeles" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="img/Chicago.jpeg" alt="Chicago" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="img/NY.jpg" alt="New York" class="d-block w-100">
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
</div>
</div>
<?php
require_once './shared/footer.php';
?>
</html>
 