<?php
 
include "koneksi.php";

if (isset($_POST['save'])){
session_start();
$username = $_POST["username"];
$password = $_POST["password"];
$email 	  = $_POST["email"];
$id       = $_GET['id'];

$user = $_POST['username'];
$pass = $_POST['password'];


$sql ="update user  set username='$user' , password ='$pass',email='$email' where id_user='$id' ";
$konek = mysqli_query($con,$sql);

if(!$konek){
	trigger_error('Invalid query: ' . mysqli_error($con));
}

if($konek){
	session_unset();
	session_destroy();
	echo "<script>alert('Data $user terupdate');window.location.href = 'admin.php';</script>";
}else{
	echo "<script>alert('Data $user error');history.go(-1);</script>";
}


} 
?>
