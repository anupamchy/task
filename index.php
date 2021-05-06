<?php include('head.php'); ?>
<?php include('header.php'); ?>
<br><br>
<?php include('nav.php'); ?>
<br>
<!-- ========================slider start============================ -->
    <div class="container-fluid">
      <div id="carouselExample1" class="carousel slide z-depth-1-half h-50 d-inline-block bg-info" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" style="height: 300px;" src="https://mdbootstrap.com/img/Photos/Slides/img%20(45).jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" style="height: 300px;" src="https://mdbootstrap.com/img/Photos/Slides/img%20(46).jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" style="height: 300px;" src="https://mdbootstrap.com/img/Photos/Slides/img%20(47).jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExample1" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>
  </div>
<!-- ==========================slider end============================ -->
<!-- [product slider start] -->
<?php include('productSlider.php'); ?>
<!-- [product slider end] -->
<?php include('newindex.php'); ?>

</body>
</html>
