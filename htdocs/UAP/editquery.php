<?php

include 'koneksi.php';

if(isset($_POST['EDIT'])){
	
	$query = "update bahan 
	set NAMA_BAHAN='".$_POST['namabahan']."',
	JENIS_BAHAN='".$_POST['jenisbahan']."',
	JUMLAH_BAHAN='".$_POST['jumlahbahan']."'
	WHERE ID_BAHAN = '".$_POST['idbahan']."' ";
	
	$tes = mysqli_query($con, $query);
	
	if($tes){
		
		header('Location:index.php');
	}	
	
}



?>