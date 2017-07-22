<?php
	include "koneksi.php";
	if(isset($_POST['submit'])){
		session_start();			
		$komen = $_POST['text'];
		$username = $_SESSION['username'];
		$url = $_GET['edit'];
		$id = $_GET['edits'];
		
		$sql = "insert into comments (username,text,url,id_foto)values('$username','$komen','$url','$id')";
		$cek = mysqli_query($con, $sql);
		
		if(!$cek){
		trigger_error('Invalid query: ' . mysqli_error($con));
		}
		elseif (isset($_GET['hal'])){
			echo"<script>alert('Gambar Berhasil di Komen !');window.location.href='".$_GET['hal']."';</script>";
		}
		else{
		 echo"<script>alert('Gambar Berhasil di Komen !');window.location.href='home2.php';</script>";
		}
		
	}
?>