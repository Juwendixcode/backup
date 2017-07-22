<?php
	session_start();
	if (($_SESSION["cari"])=="sapi"){
		?> 
<html>
<head>
	<title>Percobaan</title>
</head>
<body>
	<img src="pict/sapi.jpg">
</body>
</html>
<?php 
	}
	else
		header("Location:uts3d.php")
?>