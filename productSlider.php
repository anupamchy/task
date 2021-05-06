<div class="container cardcontainer">
    <div class="row">
        <div class="col-md-2">
            <div class="card" id="card" style="width:200px">
                <img class="card-img-top" src="ec.png" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p class="card-text">Some example text.</p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card" id="card" style="width:200px">
                <img class="card-img-top" src="ec.png" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p class="card-text">Some example text.</p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card" id="card" style="width:200px">
                <img class="card-img-top" src="ec.png" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p class="card-text">Some example text.</p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-2">
            <div class="card" id="card" style="width:200px">
                <img class="card-img-top" src="ec.png" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p class="card-text">Some example text.</p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
  <a id="Finalize" href="#" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i></a>
     
</div>
<style>
.cardcontainer{
  position:relative;
  height: 220px;
display:none
}
.card{
    position:absolute !important;
    width:200px;
    right:0px;
   
  
}
</style>
<script>
$(function(){
 $("#Finalize").click(function () {
  $(".cardcontainer").show();
  var left = $('#card').offset().left;
  
$("#card").css({left:left}).animate({"left":"0px"}, "slow");
 
  });
  });
 
</script>