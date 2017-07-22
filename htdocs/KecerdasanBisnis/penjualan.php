<?php
 
$user_name = "root";
$password = "";
$database = "asal";
$host_name = "localhost"; 
 
$con=mysqli_connect($host_name, $user_name, $password,$database);


$sql = "SELECT * FROM penjualan ORDER BY ID_Penjualan DESC LIMIT 1"; 

$cek=mysqli_query($con,$sql);
$tes = mysqli_fetch_array($cek);

echo $tes['ID_Penjualan'];
?>
