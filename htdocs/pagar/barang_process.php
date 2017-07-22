<?php
	include "data/koneksi.php";

	$e = $_POST['e'];
	echo $e;
	if ($e==0){
		mysqli_query($mysqli, "INSERT INTO barang 
		 			 VALUES ('$_POST[id]', 
					 '$_POST[barang]', 
					 '$_POST[id_jenis_barang]',
					 '$_POST[harga]')");
	}else {
		mysqli_query($mysqli, "UPDATE barang SET 
					 barang = '$_POST[barang]', 
					 id_jenis_barang = '$_POST[id_jenis_barang]',
					 harga = '$_POST[harga]'
					 WHERE id = '$_POST[id]'");
	}

	header("location:index.php");
?>