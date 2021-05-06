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
      <p class="card-text border" style="text-align:center;"><strong>Thank You For Shopping</strong></p>
      <table class="table table-bordered table-success" >
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
         <button class="btn btn-warning w-100"  style="">Continue Shopping</button>
   </div>
