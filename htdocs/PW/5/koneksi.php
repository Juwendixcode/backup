<?php
	$namahost = "localhost";
	$username = "root";
	$password = "";	//password MySQLi anda
	$database = "praktikumweb"; //database anda
	$conn = mysqli_connect($namahost,$username,$password) or die("Failed");
	mysqli_select_db($conn,$database) or die("Failed to connect to MySQL: ");
?>
