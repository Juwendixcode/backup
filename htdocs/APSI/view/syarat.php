<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/syarat.css">
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
			<div class="syarat"> Syarat dan Ketentuan</div>
		
		<table class="k">
			
		 <tr>		
			<td>1.</td>
			<td> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.
			</td>
		</tr>
		<tr>		
			<td>2.</td>
			<td> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostr
			</td>
		</tr>
		<tr>		
			<td>3.</td>
			<td> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</td>
		</tr>
		
		
		</table>
		<center>
		<form style="margin-top:50px;" method="post" action="<?php $this->pindah();?>">
			<input type="checkbox" value="None" required="required"/>
			Menyetujui syarat dan ketentuan
			<br /><br />
			<input class="setuju" type="submit" name="setuju" />
			<input type="hidden" name="id" value="<?php echo $tiket[''];?>" />
		</form>
		</center>
	</div>	

</div>

</body>
</html>
