<?php

$uname=$_POST['username'];
$pname=$_POST['password'];

if (isset($_POST['login'])) {
	$conn=mysqli_connect("localhost","root","","user_details");
	$result="SELECT * FROM user WHERE username = '$uname' AND password = '$pname'";

	$fres=mysqli_query($conn,$result);
	$fres1=mysqli_query($conn,$result1);

	if (mysqli_num_rows($fres)>0) {
		
		header("location:user.html");
	}

elseif ($uname=="admin" && $pname=="admin123") {
	header("location:admin.html");
}


	else{
		echo "Wrong username or password please check and try again";
		header("location:index.html");
	}

}

?>

