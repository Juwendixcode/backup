<?php
	include "koneksi.php";
		
		session_start();
		$username = $_SESSION['username'];	
		$user = $_POST['hidden-name'];
		
		$query =  "select * from user where username ='$username'";
		$cek = mysqli_query($con, $query);
		$fetch = mysqli_fetch_array($cek);
		$id_user = $fetch['id_user'];
	
		$query2 =  "insert into friend values('$id_user','$user')";
		$cek2 = mysqli_query($con, $query2);
		$fetch2 = mysqli_fetch_array($cek2);

		if(!$cek2){
		trigger_error('Invalid query: ' . mysqli_error($con));
		}else{
			echo"<script>alert('Teman Berhasil Ditambahkan !');window.location.href='friend.php';</script>";
		}

?>