<?php
ini_set('display_errors', '0');
include "koneksi.php";

$harga1 = $_GET['harga1'];
$harga2 = $_GET['harga2'];

$sql = "SELECT * FROM kost where harga between $harga1 and $harga2";
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
          'langtitude'=> $row[langt],
          'longtitude'=> $row[longt],
          'gambar'=> $row[gambar],
     );
}

$json = json_encode($results);
echo $json;
?>
