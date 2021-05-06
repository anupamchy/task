<?php include('head.php'); ?>
<?php include('header.php'); ?>
<br>
<div style="background-color: #778899;">

<?php include('checkoutForm.php'); ?>

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