<?php
	include "koneksi.php";
	if(isset($_POST['report'])){
		session_start();
		$username = $_SESSION['username'];	
		$id = $_POST['hidden-id'];
		$pesan = $_POST['pesan'];
		$subject = $_POST['subject'];
		
		$query =  "select * from user where username ='$username'";
		$cek = mysqli_query($con, $query);
		$fetch = mysqli_fetch_array($cek);
		$email = $fetch['email'];
		
		$query1 =  "select * from foto where id_foto ='$id'";
		$cek1 = mysqli_query($con, $query1);
		$fetch1 = mysqli_fetch_array($cek1);
		$fotouser = $fetch1['username'];
		
		
		$query2 =  "insert into pesan (id_foto,username,email,pengirim,subject,pesan,tanggal_pesan) values('$id','$fotouser','$email','$username','$subject','$pesan',curdate())";
		
		
		$cek2 = mysqli_query($con, $query2);
		
		if(!$cek2){
		trigger_error('Invalid query: ' . mysqli_error($con));
		}else{
			echo"<script>alert('Report Berhasil Dikirim !');window.location.href='home2.php';</script>";
		}
		
	}











?>