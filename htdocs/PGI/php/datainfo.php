<?php
ini_set('display_errors', '0');
include "koneksi.php";

$data = $_GET['x'];

$sql = "SELECT * FROM kost where id_kost = '$data'";
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
     );
}

$json = json_encode($results);
echo $json;
?>