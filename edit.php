


<html>
<head>
	<title>php repeat paper</title>
</head>
<body>
<form action="" method="post">
	First name <input type="text" name="firstname"><br><br>
	Last name <input type="text" name="lastname"><br><br>
	Country <input type="text" name="country"><br><br>
	User name <input type="text" name="username"><br><br>
	Password  <input type="password" name="password"><br><br>
	<input type="submit" name="update" value="update"><br><br>



</form>



</body>
</html>

<?php
$id=$_GET['id'];
if(isset($_POST['update'])){
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$cname=$_POST['country'];
$uname=$_POST['username'];
$pname=$_POST['password'];
$conn=mysqli_connect("localhost","root","","user_details");
$result="UPDATE user SET firstname = '$fname', lastname = '$lname', country = '$cname', username = '$uname', password = '$pname' WHERE id = '$id'";

if(mysqli_query($conn,$result)){
	header("location:admin.php");

}

	

}





?>