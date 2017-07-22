<?php //$controller = new controller(); ?>
<html>
<head>

<link rel="stylesheet" type="text/css" href="css/main.css"/>

<style type="text/css">
	
.regis-form{
	width: 400px;
	background-color: white;
	position:absolute;
	z-index:2;
	box-sizing: border-box;
	padding-left:20px;
	margin-left:35%;
	margin-top:8%;
}

.regis-form td{
	padding:5px;
	
}

.regis-form form{
	margin-top:10px;
}

.regis-form input[type="text"],input[type="password"]{
	padding:10px;
	width:200px;
	}
	.regis-form input[type="submit"]{
	background-color:#401A0D;
	border: 2px;
	color:white;
	height:30px;
	width:80px;
	}



</style>

</head>

<body>
<div class="background" style="background-image: url(img/background.jpg); background-size: cover; position: absolute; z-index: 1; height: 100%; width: 100%; top: 0px; -webkit-filter: opacity(70%) sepia(50%);">
</div>

<div class="regis-form">
	<center><h3>Register</h3></center>
	<form method="POST" action="<?php $this->register(); ?>" enctype="multipart/form-data">	
		<table>		
		<tr>
			<td>
			<label for="User">Username </label>
			</td>
			<td>
			<input class="input" type="text" name="username"></input>
			</td>
		</tr>
		<tr>
			<td>
			<label for="Password" name="password">Password </label>
			</td>
			<td>
			<input class="input" type="password" name="password" required></input>
			</td>
		</tr>	
		<tr>
			<td>
			<label for="Email" name="email">Email </label>
			</td>
			<td>
			<input class="input" type="text" name="email" required></input>	
			</td>
		</tr>
		<tr>
			<td>
				
			</td>
		</tr>
		<tr>
		<td><div></div></td>
		<td>
		<input class="input" type="submit" value="Register" name="register" style="float:right; margin-right: 0px;">
		</td>
		</tr>
		</table>
	</form>
</div>
<div class="preview"></div>

</body>

</html>
