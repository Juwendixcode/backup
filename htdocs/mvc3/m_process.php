<?php
	include "koneksiMVC.php";

	$e = $_POST['e'];
	echo $e;
	if (empty($e)){
		mysqli_query($mysqli, "INSERT INTO proker 
		 			 VALUES ('$_POST[nomorProgram]', 
					 '$_POST[namaProgram]', 
					 '$_POST[suratKeterangan]')");
	}else {
		mysqli_query($mysqli, "UPDATE proker SET namaProgram = '$_POST[namaProgram]', 
					 suratKeterangan = '$_POST[suratKeterangan]'
					 WHERE nomorProgram = '$_POST[nomorProgram]'");
	}

	header("location:index.php");
?>