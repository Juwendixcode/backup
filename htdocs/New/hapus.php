<?php
include "koneksi.php";
if (isset($_GET['edit'])) {  
$hapus = $_GET['edit'];
$sql = "delete from foto where id_foto='$hapus'";
mysqli_query($con,$sql);
echo"<script>alert('gambar Berhasil dihapus !');</script>";
echo "<script>window.location.href = 'index.php';</script>";
}
?>