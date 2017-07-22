<?php
	include "koneksi.php";
		
		session_start();
		$username = $_SESSION['username'];	
		$user = $_GET['user'];
		
		$query   =  "select * from user where username ='$username'";
		$cek     = mysqli_query($con, $query);
		$fetch   = mysqli_fetch_array($cek);
		$id_user = $fetch['id_user'];
		
		
		$query3 = "select * from friend where username = '$user' and id_user='$id_user'	";
		$cek3   = mysqli_query($con, $query3);
		$fetch2 = mysqli_fetch_array($cek3);
		
		$query4   =  "select * from user where username ='$user'";
		$cek4     = mysqli_query($con, $query4);
		$fetch4   = mysqli_fetch_array($cek4);
		$id_userr = $fetch4['id_user'];
						
		if(!empty($fetch2['username'])){
		echo"<script>alert('Teman Sudah Ditambahkan !');window.location.href='friend.php';</script>";
		}else{
			
		$query2 =  "insert into friend values('$id_user','$user')";
		$query5 =  "insert into friend values('$id_userr','$username')";
		$cek2 = mysqli_query($con, $query2);
		$cek10 = mysqli_query($con, $query5);
			
			if(!$cek2&&!$cek10){
			trigger_error('Invalid query: ' . mysqli_error($con));
			}
			elseif (isset($_GET['hal'])){
			echo"<script>alert('Gambar Berhasil di Komen !');window.location.href='".$_GET['hal']."';</script>";
			}
			else{
				echo"<script>alert('Teman Berhasil Ditambahkan !');window.location.href='friend.php';</script>";
			}
		}
?>