<?php
include "koneksi.php";
error_reporting(0);
ini_set('display_errors', '0');

$nama     = $_POST['namakost'];
$pemilik  = $_POST['pemilik'];
$nohp     = $_POST['nohp'];
$alamat   = $_POST['alamat'];
$harga    = $_POST['harga'];
$kamar    = $_POST['kamar'];
$fasilitas= $_POST['fasilitas'];
$lang     = $_POST['lang'];
$long     = $_POST['long'];

if ($nama!=""){
$sql = "INSERT INTO kost VALUES (NULL, '$nama', '$pemilik', '$nohp', '$alamat', '$harga', '$kamar', '$fasilitas', '$lang', '$long')";
$hasil = mysqli_query($mysqli, $sql);
    if($hasil){
        //echo "sukses";
        $response_array['status'] = 'sukses';
    }
    else{
        //echo "gagal";
         $response_array['status'] = 'gagal';
    }
}else{
         $response_array['status'] = 'kosong';
}

header('Content-type: application/json');
echo json_encode($response_array);
?>
