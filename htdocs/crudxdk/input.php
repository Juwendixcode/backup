<?php
include "koneksi.php";
error_reporting(0);
ini_set('display_errors', '0');
 
$id     = $_POST['id'];
$nim    = $_POST['hp'];
$nama   = $_POST['nama'];
 
$sql = "INSERT INTO mhs SET id = '$id', hp = '$nim', nama = '$nama'";
$hasil = mysqli_query($mysqli, $sql);  
    if($hasil){
        //echo "sukses";
        $response_array['status'] = 'sukses';
    }
    else{
        //echo "gagal";
         $response_array['status'] = 'gagal';
    }
header('Content-type: application/json');
echo json_encode($response_array);
?>
