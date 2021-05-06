<?php include('head.php') ?>
<div style="background-color: #778899;">
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
<div class="coupon mt-4">
  <div class="container1">
      <div class="row">
        <div class="col-sm-3">
          <h3>Company Logo</h3>
        </div>
        <img src="https://images.unsplash.com/photo-1567581935884-3349723552ca?ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8bW9iaWxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80" alt="Avatar" style="width:100%; height:300px;">
        <div class="container1" style="background-color:white">
          <h2><b>20% OFF YOUR PURCHASE</b></h2> 
          <p>Lorem ipsum dolor sit amet, et nam pertinax gloriatur. Sea te minim soleat senserit, ex quo luptatum tacimates voluptatum, salutandi delicatissimi eam ea. In sed nullam laboramus appellantur, mei ei omnis dolorem mnesarchum.</p>
        </div>
        <div class="container1">
          <p>Use Promo Code: <span class="promo">BOH232</span></p>
          <p class="expire">Expires: May 20, 2021</p>
        </div>
        
      </div>
        <div class="card">
        <div class="row">
            <div class="col col-sm-6">
                <p>
                <button>Add to Cart</button>
                </p>
            </div>
         </div>
        </div>
  </div>
</div>
<br>


<style>
body {
  font-family: Arial;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width:100%;
  margin: auto;
  text-align: center;
  font-family: arial;
}
.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color:  #C70039;
  text-align: center;
  cursor: pointer;
  width: 210%;
  font-size: 18px;
}
.card button:hover {
  opacity: 0.7;
}

.coupon {
  border: 5px dotted #bbb;
  width: 80%;
  border-radius: 15px;
  margin: 0 auto;
  max-width: 600px;
}

.container1 {
  width:100%;
  padding: 2px 16px;
  background-color: #f1f1f1;
}

.promo {
  background: #ccc;
  padding: 3px;
}

.expire {
  color: red;
}
</style>

<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}
</script>