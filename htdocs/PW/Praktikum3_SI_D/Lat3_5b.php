<?php 	
    session_start();
	$_SESSION["nama"] = $_POST["nama"];
	$_SESSION["pass"] = $_POST["pass"];
	header("location:Lat3_4a.php"); 
?>