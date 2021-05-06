<?php include('head.php') ?>
<nav class="navbar navbar-expand-sm bg-dark ml-auto">
  <ul class="navbar-nav">
    <li class="nav-item">
      <!-- <a class="nav-link text-white" href="#">Link 1</a> -->
      <img src="ec.png" class="img-rounded mt-2 ml-4" alt="Cinque Terre" style="height:50px; weight:100%; width:100px;">
    </li>
     <li class="nav-item ">
    	<a id="demo" onclick="getLocation()" class="nav-link text-white ml-4" >Location </a>
    </li>
  </ul>
</nav>
<div style="background-color: #778899; height:700px;">
<br><br>
<div class="container-fluid">
<form>
      <p class="card-text border" style="text-align:center;"><strong>Placed Order</strong></p>
      <table class="table table-bordered table-success" >
        <thead>
          <tr>
            <th>Product Name:</th>
            <th>Price:</th>
            <th>Discount:</th>
            <th>Total:</th>
            <th>Add To Cart:</th>
            <th>Order:</th>
          </tr>
        </thead>
        <tbody>
          <tr>
          <form action="db.php" method="Post">
            <td><input type="text" name="name"></td>
            <td><input type="text" name="price"></td>
            <td><button class="btn btn-warning w-100" name="submit">Add To Cart</button></td>
            <td><button class="btn btn-success w-100">Buy Now</button></td>
          </form>
            <td>10%</td>
            <td>9000 Rs</td>
           
          </tr>
          <tr>
            <td>Computer</td>
            <td>50000 Rs</td>
            <td>15%</td>
            <td>12750 Rs</td>
            <td><button class="btn btn-warning w-100" >Add To cart</button></td>
            <td><button class="btn btn-success w-100">Buy Now</button></td>
          </tr>
          <tr>
            <td>TV</td>
            <td>20000 Rs</td>
            <td>10%</td>
            <td>18000 Rs</td>
            <td><button class="btn btn-warning w-100" >Add To Cart</button></td>
            <td><button class="btn btn-success w-100" >Buy Now</button></td>
          </tr>
        </tbody>
      </table>
         <button class="btn btn-info w-100"  style="">Continue Shopping</button>
   </div>
