<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/formrefund.css">
<style>	
	
</style>

</head>
<body style="background-color:#1BA0E2;">

<div class="big-box">
	<div class="sidebar">
		<div class="logo">
			Traveloka
		</div>
		<a href="index.php?profil=1">
		<div class="menu">
			HOTEL
		</div>
		</a>
		<a>
		<div class="menu">
			PESAWAT
		</div>
		</a>
		<a href="index.php?pemesanan=1">
		<div class="menu cek">
			PEMESANAN
		</div>
		</a>
	<a class="logout" href="index.php?logout=1"?>Logout</a>		
	</div>
	<div class="main">				
				<span>Form Refund</span>
				
				<div class="form">
			<form method="post" action="<?php $this->refund();  ?>">
				
				<table class="cuy">					
					<tr>						
						<td><input type="text" name="email" class="formrefund" placeholder="Email"/></td>
					</tr>
					<tr>						
						<td><input type="text" name="normorekening" class="formrefund" placeholder="Nomor Rekening"/></td>
					</tr>
					<tr>						
						<td><input type="text" name="namabank" class="formrefund" placeholder="Nama Bank"/></td>
					</tr>					
					<tr>						
						<td><input type="text" name="alasanrefund" class="formrefund" placeholder="Alasan Refund"/></td>
					</tr>
					<tr>
						<td><input type="submit" name="refund" value="Save" class="save" /></td>
					</tr>
				</table>
								
			</form>
						
		</div>				
	</div>	
</div>

</body>
</html>
