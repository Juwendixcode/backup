<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form role="form" action="<?php echo site_url('authtentification/sign_up')?>" method="post">
		
		<input type="text" name="username" placeholder="username" required><br>
		<input type="text" name="password" placeholder="password" required><br>
		<input type="text" name="email" placeholder="email" required><br>
   
                           <select class="form-control" name="kecamatan" required>
                                     <?php echo $kecamatan;?>
                                </select><br>		
		<input type="text" name="no_telp" placeholder="no_telp" required><br>		
		<input type="submit" value="Go"><br>
	</form>
</body>
</html>
	