<?php
 
include "koneksi.php";


if (isset($_POST['register'])){


$userid	  = $_POST['id_user'];
$username = $_POST['username'];
$email    = $_POST['email'];
$password = md5($_POST['password']);
echo $ttl;


$sql = "Select userid,username from user where userid='$userid' and username='$username'";
$cek = mysqli_query($con,$sql);
$data = mysqli_fetch_array($cek);
if($data['username']== $username){
	echo "<script>alert('User sudah terdaftar');</script>";
	echo "<script>window.location.href='register.php';</script>";
}else{
$sql2= "insert into user (userid,username,password,email,tanggal_daftar) values ('$userid','$username','$password','$email',curdate())";
	$fileName = $_FILES['gambar']['name'];
	if(mysqli_query($con,$sql2)){
		$sql3 = "insert into profil (username,email,photo) values ('$username','$email','$fileName')";
		if(mysqli_query($con,$sql3)){
		move_uploaded_file($_FILES['gambar']['tmp_name'], "gambar/".$_FILES['gambar']['name']);
		echo "<script>window.location.href = 'login.php';</script>";
		}
	}else{
		echo "gagal";
		echo mysqli_query($con,$sql2);
		echo "<script>alert('Data Tidak Berhasil Diinput');window.location.href='register.php';</script>";
	}
}

}
 
 
?>
