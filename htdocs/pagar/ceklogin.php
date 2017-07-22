<?php
	include ("data/koneksi.php");
	$username= $_POST['username'];
	$password=$_POST['password'];
	$hasil = '';
	// $mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
	// 	if (mysqli_connect_errno()) {
	// 		printf("Connect failed: %s\n", mysqli_connect_error());
	// 		exit();
	// 	}
	$query2 = "SELECT * FROM user WHERE username='$username' and password='$password'";
	// $query = "SELECT * FROM admin WHERE username='$username' and password='$password'";
	$result = $mysqli->query($query2) or die($mysqli->error.__LINE__);
		if($result->num_rows > 0) {
			echo "<script type='text/javascript'> window.location.replace('logged.php'); </script>";
		} else {
			echo "<script type='text/javascript'> alert('Username / Password tidak sesuai.'); 
			window.location.replace('login.php'); </script>";
		}
		// if($hasil = 'SUKSES') {
		// 	echo "<script type='text/javascript'> window.location.replace('dashboard.php'); </script>";
		// } else {
		// 	echo "<script type='text/javascript'> alert('Username / Password tidak sesuai.'); 
		// 	window.location.replace('login-admin.php'); </script>";
		// }
?>