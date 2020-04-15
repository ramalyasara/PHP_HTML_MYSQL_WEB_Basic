<?php
$conn=mysqli_connect("localhost","root","","user_details");
$result="SELECT * FROM user ";
$res=mysqli_query($conn,$result);





?>





<html>
<head>
	<title>php repeat paper</title>
</head>
<body>
<table border="1">
	<tr>
		<th>ID</th>
		<th>first name</th>
		<th>last name</th>
		<th>country</th>
		<th>user name</th>
		<th>password</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>

<?php

if (mysqli_num_rows($res)>0) {

$no=1;
while ($row = mysqli_fetch_assoc($res)) {
$id=$row['id'];

	echo "<tr>
			<td>{$row['id']}</td>
			<td>{$row['firstname']}</td>
			<td>{$row['lastname']}</td>
			<td>{$row['country']}</td>
			<td>{$row['username']}</td>
			<td>{$row['password']}</td>
			<td><a href='edit.php?id=$id'>Edit</a></td>
			<td><a href='delete.php?id=$id'>Delete</a></td>

			<tr>";
			$no++;

}





}
?>
</table>



</body>
</html>