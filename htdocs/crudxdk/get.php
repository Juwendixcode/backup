<?php
ini_set('display_errors', '0');
include "koneksi.php";

$sql = "SELECT * FROM mhs";
$hasil = mysqli_query($mysqli, $sql);
$results = array();

foreach($hasil as $row){
     $results[] = array(
          'id'=> $row[id],
          'hp'=> $row[hp],
          'nama'=> $row[nama],
     );
}

$json = json_encode($results);
echo $json;
?>
