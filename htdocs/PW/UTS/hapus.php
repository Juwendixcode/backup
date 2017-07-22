<?php
include "koneksi.php";
$sql = "delete from gambar";
mysqli_query($con,$sql);
// Simpan di Folder Gambar

echo"<script>alert('Tabel Berhasil dihapus !');history.go(-1);</script>";

?>