<?php
 
$user_name = "root";
$password = "";
$database = "asal";
$host_name = "localhost"; 
 
$con=mysqli_connect($host_name, $user_name, $password,$database);

if (isset($_POST['login'])){

$nama =$_POST['username'];
$pass =$_POST['password'];
$sql = "select Kasir_Username,Password from kasir where Kasir_Username='$nama' and Password='$pass' "; 
$cek=mysqli_query($con,$sql);
$tes = mysqli_fetch_array($cek);
session_start();
	if($tes['Kasir_Username']==$nama && $tes['Password']==$pass){	
	$_SESSION['username']= $nama;
	echo "<script>window.location.href = 'kasir.php';</script>";
	}
	else{	
	echo "<script>alert('Maaf username / password anda salah');history.go(-1);</script>";
	}
} 

if(empty($_SESSION['username'])){
	echo "<script>window.location.href = 'index.php';</script>";
}

?>
