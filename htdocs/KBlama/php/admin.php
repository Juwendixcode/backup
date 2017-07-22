<?php
include "koneksi.php";
error_reporting(0);
ini_set('display_errors', '0');

/*
$usr     = $_POST['username'];
$pwd    = $_POST['password'];


$sql = "Select * from user where username='$usr' and password='$pwd'";
$hasil = mysqli_query($mysqli, $sql);
$data = mysqli_fetch_array($hasil);
    if($data['username']!=""){
        //echo "sukses";
        $response_array['status'] = 'sukses';
    }
    else{
        //echo "gagal";
         $response_array['status'] = 'gagal';
    }
header('Content-type: application/json');
echo json_encode($response_array);*/


if(isset($_POST['login'])){

$usr     = $_POST['username'];
$pwd    = $_POST['password'];

$sql = "Select * from user where username='$usr' and password='$pwd'";
$hasil = mysqli_query($mysqli, $sql);
$data = mysqli_fetch_array($hasil);
    if($data['username']=$usr){
        //echo "sukses";
        echo "<script>window.location.href = '../input.html';</script>";
    }
    else{
        echo "Maaf username / password anda salah ";
        header('Refresh: 3; URL=../index.php');
    }


}

?>
