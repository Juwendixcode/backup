<?php
 
$user_name = "root";
$password = "";
$database = "praktikum";
$host_name = "localhost"; 
 
$con=mysqli_connect($host_name, $user_name, $password,$database);

if (isset($_POST['login'])){

$nama =$_POST['username'];
$pass =md5($_POST['password']);
$sql = "select username,password from user where username='$nama' and password='$pass' "; 
$cek=mysqli_query($con,$sql);
$tes = mysqli_fetch_array($cek);
session_start();
	if($tes['username']=='admin'){	
	$_SESSION['username']= $nama;
	echo "<script>alert('Selamat datang $nama');window.location.href = 'admin.php';</script>";
	}
	else if($tes['username']==$nama && $tes['password']==$pass){
	$_SESSION['username']= $nama;
	echo "<script>window.location.href = 'index.php';</script>";
	}
	else{	
	echo "<script>alert('Maaf username / password anda salah');history.go(-1);</script>";
	}
} 
if (isset($_POST['register'])){
	header("location:Register.php");
	
	} 
?>
