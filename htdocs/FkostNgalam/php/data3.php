<?php
ini_set('display_errors', '0');
include "koneksi.php";

$harga = $_GET['harga'];

$sql = "SELECT * FROM kost where harga < '$harga'";
$hasil = mysqli_query($mysqli, $sql);
$results = array();

foreach($hasil as $row){
     $results[] = array(
          'id'=> $row[id_kost],
          'namakost'=> $row[nama],
          'pemilik'=> $row[pemilik],
          'notelp'=> $row[notelp],
          'alamat'=> $row[alamat],
          'harga'=> $row[harga],
          'kamar'=> $row[kamar],
          'fasilitas'=> $row[fasilitas],
          'gambar'=> $row[gambar],
          'langtitude'=> $row[langt],
          'longtitude'=> $row[longt],
     );
}

$json = json_encode($results);
echo $json;
?>