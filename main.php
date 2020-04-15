<!DOCTYPE html>
<html lang="en">
<head>
  <title>OneCRM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<?php

if(isset($_POST['allstatus'])){

include('connection.php');
	
$id = $_POST['orderid'];

$query1="SELECT country FROM user WHERE username = '$id'";

$res=mysqli_query($conn,$result);
if (mysqli_num_rows($res)>0) {
while ($row = mysqli_fetch_assoc($res)) {
	
}
?>


<div class="container" style="width:450px;margin-top:50px;">
<table border="1">
  <h1><b>Sim Change</b></h1>
  <form action="" method="post">
  <div class="form-group">
    <label for="fname">Order Id:</label>
    <input type="text" class="form-control" name="orderid">
  </div>
  <div class="form-group">
    <label for="fname">Order Status:</label>
    <input type="text" class="form-control" name="orderstatus">
  </div>
    <div class="form-group">
    <label for="fname">Failed Reason:</label>
    <input type="text" class="form-control" name="failedreason">
  </div>
    <div class="form-group">
    <label for="fname">Sim Number:</label>
    <input type="text" class="form-control" name="simnumber">
  </div>
    <div class="form-group">
    <label for="fname">IMSI:</label>
    <input type="text" class="form-control" name="imsi">
  </div>
    
  <button type="submit" class="btn btn-default" name="presim">PrePaid Sim</button>
  <button type="submit" class="btn btn-default" name="postsim">PostPaid Sim</button>
  <button type="submit" class="btn btn-default" name="newsim">New Sim</button>
  <button type="submit" class="btn btn-default" name="allstatus">All Status</button>
  <br><br>
  <button type="submit" class="btn btn-default" name="newimsi">New IMSI</button>
  <button type="submit" class="btn btn-default" name="pendinglte">Pending LTE</button>
  <button type="submit" class="btn btn-default" name="freedom">FreedOM</button>
  <button type="submit" class="btn btn-default" name="process">Process</button>  
  <br><br><br>
</form>
</table>
</div>

</body>
</html>