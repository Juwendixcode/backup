<?php
	session_start();
	if (($_SESSION["cari"])=="kucing"){
		?> 
<html>
<head>
	<title>Percobaan</title>
</head>
<body>
	<img src="pict/kucing.jpg">
</body>
</html>
<?php 
	}
	else
		header("Location:uts3c.php")
?>