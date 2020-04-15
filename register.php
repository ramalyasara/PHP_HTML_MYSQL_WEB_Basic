<?php
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$cname=$_POST['country'];
$uname=$_POST['username'];
$pname=$_POST['password'];

if (isset($_POST['register'])) {
	$conn=mysqli_connect("localhost","root","","user_details");
	$result="INSERT INTO user (firstname,lastname,country,username,password) VALUES ('$fname','$lname','$cname','$uname','$pname')";

	if (mysqli_query($conn,$result)) {
		echo "Succsessfully registered";
	}

}

?>

<html>
<head>
	<title>php repeat paper</title>
</head>
<body>
	<br><br>
Logging here <a href="index.html">Log In</a>
</body>
</html>