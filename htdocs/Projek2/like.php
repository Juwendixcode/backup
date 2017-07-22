<?php
include "koneksi.php";

$id_foto = $_GET['edit'];
$username = $_GET['edits'];

$sql = "insert into likes(id_foto,id_user,username,tanggal_like,jam_like)values
		('$id_foto','5','$username',curdate(),curtime())";
$cek = mysqli_query($con,$sql);



if(!$cek){
	trigger_error('Invalid query: ' . mysqli_error($con));
}else{
	echo"<script>alert('Gambar Berhasil di Like !');window.location.href='home2.php';</script>";
}


?>