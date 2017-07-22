<html>


<head>
<meta http-equiv="refresh" content="10; url=uts.php">
<style type="text/css">
	body{
		background-color: cyan;
	}
</style>
</head>
<body>
<?php 
session_start();
	if ($_SESSION["cari"]=="kelinci"){
		echo "<img src='quiz/kelinci.jpg' width='500 px' height='500 px'>";		
		echo "<script>alert('Kelinci!');</script>";
	}
	else if ($_SESSION["cari"]=="kucing"){
		echo "<img src='quiz/kucing.jpg' width='500 px' height='500 px'>";		
		echo "<script>alert('Kucing!');</script>";
	}
	else if ($_SESSION["cari"]=="sapi"){
		echo "<img src='quiz/sapi.jpg' width='500 px' height='500 px'>";		
		echo "<script>alert('Sapi!');</script>";
	}
	else if ($_SESSION["cari"]=="semut"){
		echo "<img src='quiz/semut.jpg' width='500 px' height='500 px'>";			
		echo "<script>alert('Semut!');</script>";
	}
	else{
		echo"<script>alert('Gambar Tidak ada !');history.go(-1);</script>";
	}


?>

</body>

</html>