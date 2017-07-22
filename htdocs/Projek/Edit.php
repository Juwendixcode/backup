<html>
<head>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/admin.css">

<style>
	.edit-form{
		background-color:white;
		width:auto;
		width:350px;
		margin-left:35%;
		box-sizing: border-box;
		margin-top:10px;
		border-radius:5px;
		padding-top:5px;
	}
	
	
	.edit-form td{
		padding:10px;
		border:0px;
	}
	
	.edit-form input[type="text"]{
		padding:10px;
		width:200px;
	}
	.edit-form input[type="submit"]{
	background-color:#008CC9;
	border: 2px;
	color:white;
	height:30px;
	width:80px;
	float:right;
	}
	
</style>
</head>
<body>
<nav class="navbar">
<div class="judul">My Website</div>
	<ul style="margin-left:40%;">
		<li><a href="admin.php">Home</a></li>
		<li><a href="report.php">Report</a></li>
		
		<?php 
		if(empty($_SESSION['username'])){
			echo "<a href='login.php'><li class='login'>Login</li></a>";
			
		}else{
			echo "<a href='sessiondestroy.php'><li class='login'>Logout</li></a>";
		}
		?>
	</ul>
	
</nav>


<div id="judul" style="margin-left:45%;font-size:30px;"> Edit</div>

<?php
	include "koneksi.php";
	$id_user = $_GET['id'];
	$query   = "select * from user where id_user= '$id_user' ";
	$proses  = mysqli_query($con, $query);
	$data    = mysqli_fetch_array($proses);
?>
<div class="edit-form">
	<form method="POST" action="session2.php?id=<?php echo $data['id_user'];?>">
			<table>
			<tr>
				<td>			
				<label for="User">Username </label>
				</td>
				<td>			
				<input type="text" name="username" value="<?php echo $data['username'];?>"></input>
				</td>
			</tr>
			<tr>
					<td>	
					<label for="Password" name="password" >Password </label>
					</td>
					<td>
					<input type="text"  name="password" value="<?php echo $data['password'];?>"></input>
					</td>
			</tr>
			<tr>
					<td>
					<label for="Email" name="Email" >Email </label>
					</td>
					<td>
					<input type="text" name="email" value="<?php echo $data['email'];?>"></input>
					</td>
			</tr>
			<tr>
					<td>
					
					</td>
					<td>
					<input style="float:right;" type="submit" value="Save" name="save" >
					</td>
			</tr>
			</table>
	</form>		
</div>

</body>
</html>