<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "misc/basicHead.php"; ?>
</head>
<body>

<!--top bar-->
<div class="container">
	<div class="row">
		<?php 
			session_start();
			if(isset($_SESSION['admin']))
				include "topbar/admin.php";
			else
				include "topbar/guest.php";
		?>
	</div>
	<?php include "misc/spacer.php"; ?>

<!--contents-->
	<div class="row">
		<div class="twelve columns">
			<!--generate 5 paragraph dummy text-->
			<?php
				if(isset($_SESSION['admin']))
					include "controll/admin-tabs.php";
				else
					include "data/guest-barang.php"; 
			?>
		</div>
	</div>	

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
