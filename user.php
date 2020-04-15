<?php
session_start();

if (isset($_POST['logout'])) {
	session_unset($_SESSION['logout']);
	header("location:index.html");
}



?>