<?php
$id = $_GET['id'];
//echo $id;
include "data/koneksi.php";
mysqli_query($mysqli, "UPDATE customer SET keterangan = 'lunas' WHERE id = '$id' ");
					 
header("location:index.php");
?>