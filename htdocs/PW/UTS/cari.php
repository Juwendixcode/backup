<?php
 	session_start();
 	if(isset($_POST["teks"])){
 		  $_SESSION["cari"]=$_POST["teks"];	 		
	header("Location:hasil.php");
	}else{
		header("Location:uts.php");
	}


	



 
?>