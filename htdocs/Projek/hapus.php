<?php
include "koneksi.php";
if (isset($_GET['edit'])) {  
$hapus = $_GET['edit'];
$sql2 = "select url from foto where id_foto='$hapus'";
$cek = mysqli_query($con,$sql2);
$row=mysqli_fetch_array($cek);
unlink("gambar/".$row['url']);
$sql = "delete from foto where id_foto='$hapus'";
mysqli_query($con,$sql);
echo"<script>alert('gambar Berhasil dihapus !');</script>";
echo "<script>window.location.href = 'index.php';</script>";
}
?>