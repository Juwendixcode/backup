<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">

	body{
		font-family: Helvetica;
	}

	input[type="text"],input[type="password"]{
		border-radius: 2px;
		border: 2px #E4E4E4 solid;
		padding: 10px;

	}

	input[type="submit"]{
		background-color:#3498db;
		border-radius: 5px;
		border:0px; 
		width: 60px;
		height: 30px;
		color: white;
	}

	h3{
		color: #3498db;
	}
	</style>

</head>
<body>

<form method="post" action="lat5_4.php">
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