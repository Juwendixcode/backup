<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>

<div class="background" style="background-image: url(img/background.jpg); background-size: cover; position: absolute; z-index: 1; height: 100%; width: 100%; top: 0px; -webkit-filter: opacity(70%) sepia(50%);">
</div>
<div class="login-form" style="margin-top:13%;margin-left: 37%; ">
<div class="logo">
	<img src="img/Iconweb/logo fix sementara.png" width="100" height="100">
</div>

<center><h2 style="margin:10px;">Login</h2></center>


<form method="POST">
	<center>
	<input class="text" type="text" value="Username" onfocus="value=''" name="username" ></input>
	</center>
	<center>
	<input class="text" type="password" value="Password" onfocus="value=''" name="password" ></input>
	</center>
	<center><input type="submit" value="Login" class="button-login" name="login" ></input></center>
</form>

<span><a href="index.php?register=1" style="text-decoration: none;"><p style="color: white;margin-left: 180px; margin-top:20px;">Daftar kuy!</p></a>
</span>

</div>

</body>
</html>
<?php
	if(isset($_POST['login'])){
		$controller = new controller();
		$controller -> login();
	}
?>
