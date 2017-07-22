<?php
include "koneksi.php";
error_reporting(0);
ini_set('display_errors', '0');
 
$id1 = $_GET['id1'];
$id2 = $_GET['id2'];
$nama   = $_POST['nama'];
$hp = $_POST['hp'];
 
 //echo "$id";
 if($id1 != ""){
 $sql = "SELECT * FROM mhs WHERE id = '$id1'";
 $hasil = mysqli_query($mysqli, $sql);
 $data = mysqli_fetch_assoc($hasil);
 $array = array('nama'=>$data['nama'],
                 'hp'=>$data['hp']);
     echo json_encode($array);
 }
 
 if($id2 != ""){
$sql = "UPDATE mhs SET nama = '$nama', hp = '$hp'  WHERE id = '$id2'";
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
 }  
?>
