<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script> 
</head>
<body>

<div class="row">
	
<div class="col-md-12"></div>

</div>

<div class="row">
	 <div class="col-md-4"></div>	 	 
	 <div class="col-md-3 bg-primary" style="margin-top: 17%;padding:20px;">
		<form action="php/admin.php" method="post">
			<div class="form-group" style="width: 80%; margin-left: 30px">
				<br>
				<label for="username">Username</label>
				<input type="text" id="username" name="username" class="form-control" id="exampleInputName2" placeholder="Username">		
				<br>
				<label for="password">Password</label>
				<input type="password" id="password" name="password" class="form-control" id="exampleInputName2" placeholder="Password">	
				<br>
				<button type="submit" class="btn btn-danger" id="loginbtn" name="login">Login</button>
				<p class="modar"></p>
			</div>
		</form>
	</div>
</div>

</body>
</html>

