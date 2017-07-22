<?php
include "koneksi.php";
if (isset($_POST['save'])){
session_start();
$fileName = $_FILES['gambar']['name'];
$sql = "insert into foto (username,url, caption,jam_posting,tanggal_posting) 
		values ('".$_SESSION['username']."','$fileName','".$_POST['status']."',curtime(),curdate())";
$cek = mysqli_query($con,$sql);
move_uploaded_file($_FILES['gambar']['tmp_name'], "gambar/".$_FILES['gambar']['name']);
echo"<script>alert('Gambar Berhasil diupload !');window.location.href='index.php';</script>";

if(!$cek){
	trigger_error('Invalid query: ' . mysqli_error($con));
}

}
?>