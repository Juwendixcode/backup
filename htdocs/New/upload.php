<?php
include "koneksi.php";
if (isset($_POST['save'])){
$fileName = $_FILES['gambar']['name'];
$sql = "insert into foto (username,url, caption,jam_posting,tanggal_posting) 
		values ('budi','$fileName','".$_POST['keterangan']."',curtime(),curdate())";
mysqli_query($con,$sql);
move_uploaded_file($_FILES['gambar']['tmp_name'], "gambar/".$_FILES['gambar']['name']);
echo"<script>alert('Gambar Berhasil diupload !');window.location.href='tes.php';</script>";
}
?>