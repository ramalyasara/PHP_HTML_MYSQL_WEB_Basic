<?php

$conn=mysqli_connect("localhost","root","","user_details");
$id=$_GET['id'];
$quer="DELETE FROM user WHERE id = '$id'";



if (mysqli_query($conn,$quer)) {
	header("location:admin.php");
	
}
?>