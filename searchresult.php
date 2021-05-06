<?php include('head.php') ?>
<?php include('header.php');?>


<div style="background-color: #778899;">
<div class="container mt-4 ml-auto" >
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
  <br>
      
      <div class="container">
      <p class="card-text border" style="text-align:center;"><strong>Product List</strong></p>
      <table class="table table-bordered table-success">
        <thead>
          <tr>
            <th>Product Name:</th>
            <th>Price:</th>
            <th>Discount:</th>
            <th>Total:</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Mobile</td>
            <td>10000 Rs</td>
            <td>10%</td>
            <td>9000 Rs</td>
          </tr>
          <tr>
            <td>Computer</td>
            <td>50000 Rs</td>
            <td>15%</td>
            <td>12750 Rs</td>
          </tr>
          <tr>
            <td>TV</td>
            <td>20000 Rs</td>
            <td>10%</td>
            <td>18000 Rs</td>
          </tr>
        </tbody>
      </table>
         <button class="btn btn-warning w-100"  style="">Add To Cart</button>
   </div>
  
  </div>
  </div>

  <?php include('productSlider.php') ?>
  