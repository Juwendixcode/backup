<?php
	session_start();
	$_SESSION["cari"] = $_POST["cari"];
	header("location:uts3a.php");
?>