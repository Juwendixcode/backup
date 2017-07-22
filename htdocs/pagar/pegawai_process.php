<?php
	include "data/koneksi.php";

	$e = $_POST['e'];
	echo $e;
	if ($e==0){
		mysqli_query($mysqli, "INSERT INTO pegawai 
		 			 VALUES ('$_POST[id]', 
					 '$_POST[nama_pegawai]', 
					 '$_POST[id_jabatan]')");
	}else {
		mysqli_query($mysqli, "UPDATE pegawai SET id_jabatan = '$_POST[id_jabatan]', 
					 nama_pegawai = '$_POST[nama_pegawai]'
					 WHERE id = '$_POST[id]'");
	}

	header("location:index.php");
?>