
<nav class="navbar navbar-expand-sm bg-dark ml-auto">
  <ul class="navbar-nav">
    <li class="nav-item">
      <!-- <a class="nav-link text-white" href="#">Link 1</a> -->
      <img src="ec.png" class="img-rounded mt-2" alt="Cinque Terre" style="height:50px; weight:100%; width:100px;">
    </li>
     <li class="nav-item ">
    	<a id="demo" onclick="getLocation()" class="nav-link text-white ml-4" >Location </a>
    </li>
  </ul>
   <form class="form-inline ml-auto"  action="/action_page.php">
    <input class="form-control mr-sm-2" style="height:50px; width:550px;" type="text" placeholder="Search">
    <button class="btn btn-success" style="height:50px; width:100px;"  type="submit">Search</button>
  </form>
  <div class="ml-auto">
  <button class="btn btn-info"><i class="fa fa-cart-plus">Cart</i></button>
  </div>
</nav>
<div style="background-color: ;">
</div>
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

