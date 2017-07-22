<?php
	session_start();
	// if (empty($_SESSION["cari"]))
	// 	echo "Isi form terlebih dahulu";
	// else {



		if (strtolower(($_SESSION["cari"]))=="kelinci"){
	?> 
			<img src="pict/kelinci.jpg">
	<?php 
		}
		else if (strtolower(($_SESSION["cari"]))=="kucing") {
	?>
			<img src="pict/kucing.jpg">	
	<?php
		}
		else if (strtolower(($_SESSION["cari"]))=="sapi") {
	?>
			<img src="pict/sapi.jpg">
	<?php
		}
		else if (strtolower(($_SESSION["cari"]))=="semut") {
	?>
			<img src="pict/semut.jpg">
	<?php
		}
		else
			echo "Gambar Tidak Ada"
	?>	
<?php 
// }
 ?>