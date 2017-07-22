<?php
	session_start();
	if (($_SESSION["cari"])=="semut"){
		?> 
<html>
<head>
	<title>Percobaan</title>
</head>
<body>
	<img src="pict/semut.jpg">
</body>
</html>
<?php 
	}
	else
		echo "Maaf Gambar Tidak Ada"
?>