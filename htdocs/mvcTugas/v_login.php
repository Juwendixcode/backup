<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="main.css">

</head>
<body>

<form method="post" action="">
	<h3>Login</h3>
	<label>Username :</label>
	<input type="text" name="username" value="username" onfocus="value=''" ></input><br><br>
	<label>Password :</label>
	<input type="password" name="password" value="password" onfocus="value=''"></input><br>
	<br>
	<input type="submit" name="login" value="Login"></input>
</form>

</body>
</html>
<?php
	if(isset($_POST['login'])){
		$main = new c_programKerja();
		$main -> login();
	}
?>

