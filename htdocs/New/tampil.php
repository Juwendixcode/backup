<?php
include "koneksi.php";
$sql = "select * FROM gambar where keterangan='".$_POST['search']."'";
$tampil = mysqli_query($con,$sql);
$data = mysqli_fetch_array($tampil);
if($data){

echo "<img src='gambar/".$data['gambar']."' style='background-size:50% 50%;'/>";
echo "</br>";
echo $data['keterangan'];	
echo "</br>";
echo "<a href='index.php'>Kembali</a>";
}else{
echo"<script>alert('Gambar Tidak ada !');history.go(-1);</script>";
}
?>  