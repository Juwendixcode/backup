<?php
include 'koneksi.php';
	if(isset($_POST['tambah'])){
		
		$query= "insert into bahan values('".$_POST['idbahan']."','".$_POST['namabahan']."','".$_POST['jenisbahan']."','".$_POST['jumlahbahan']."') ";		
		$cek=mysqli_query($con, $query);
		
		if(!$cek){
		trigger_error('Invalid query: ' . mysqli_error($con));
		}
		else{
		header('location:index.php');
		}
	}



?>