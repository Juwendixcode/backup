<?php
ini_set('display_errors', '0');
include "koneksi.php";

$sql = "SELECT * FROM place";
$hasil = mysqli_query($mysqli, $sql);
$results = array();

foreach($hasil as $row){
     $results[] = array(
          'id_place'=> $row[id_place],
          'nama_tempat'=> $row[Nama],
          'kontak'=> $row[Kontak],
          'foto'=> $row[Foto],
          'Operasional'=> $row[Operasional],
          'Pelayanan'=> $row[Pelayanan],
          'Harga'=> $row[Harga],
          'Alamat'=> $row[Alamat],
          'Website'=> $row[Website],
          'Deskripsi'=> $row[Deskripsi],
          'latitude'=> $row[lat],
          'longtitude'=> $row[lang],
          'foto'=> $row[Foto],
          'kategori'=> $row[kategori]
     );
}

$json = json_encode($results);
echo $json;
?>
