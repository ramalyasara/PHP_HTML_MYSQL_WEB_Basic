<?php
$conn=mysqli_connect("localhost","root","","user_details");

if (!$conn) {
	echo "mysql connection error";
}

else{
	echo "connection succsessful";
}





?>